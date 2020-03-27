<?php

/**
 * Class Job.
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
use Storage;
use DB;
use Auth;
use App\Proposal;
use App\Location;
use App\Language;
use App\Profile;
use App\FreelancerLevel;

/**
 * Class Job
 *
 */
class Job extends Model
{
    /**
     * Get all of the categories for the job.
     *
     * @return relation
     */
    public function categories()
    {
        return $this->morphToMany('App\Category', 'catable');
    }
    
    /**
     * Get all of the citations for the job.
     *
     * @return relation
     */
    public function citations()
    {
        return $this->morphToMany('App\Citation', 'citable');
    }
    
    /**
     * Get all of the freelancer levels for the job.
     *
     * @return relation
     */
    public function flevels()
    {
        return $this->morphToMany('App\FreelancerLevel', 'flevable');
    }
    
    /**
     * Get all of the research levels for the job.
     *
     * @return relation
     */
    public function rlevels()
    {
        return $this->morphToMany('App\ResearchLevel', 'rlevable');
    }

    /**
     * Get all of the languages for the user.
     *
     * @return relation
     */
    public function languages()
    {
        return $this->morphToMany('App\Language', 'langable');
    }

    /**
     * The skills that belong to the job.
     *
     * @return relation
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill');
    }

    /**
     * Get the location that owns the job.
     *
     * @return relation
     */
    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    /**
     * Get the employer that owns the job.
     *
     * @return relation
     */
    public function employer()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Get the proposals associated with job.
     *
     * @return relation
     */
    public function proposals()
    {
        return $this->hasMany('App\Proposal');
    }

    /**
     * Get all of the job's reports.
     *
     * @return relation
     */
    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }

    /**
     * Uppload Attcahments.
     *
     * @param mixed $uploadedFile uploaded file
     *
     * @return relation
     */
    public function uploadTempattachments($uploadedFile, $path)
    {
        $filename = $uploadedFile->getClientOriginalName();
        if (!file_exists($path)) {
            File::makeDirectory($path, 0755, true, true);
        }
        Storage::disk('local')->putFileAs(
            $path,
            $uploadedFile,
            $filename
        );
        return 'success';
    }

    /**
     * Set slug before saving in DB
     *
     * @param string $value value
     *
     * @access public
     *
     * @return string
     */
    public function setSlugAttribute($value)
    {
        if (!empty($value)) {
            $temp = str_slug($value, '-');
            if (!Job::all()->where('slug', $temp)->isEmpty()) {
                $i = 1;
                $new_slug = $temp . '-' . $i;
                while (!Job::all()->where('slug', $new_slug)->isEmpty()) {
                    $i++;
                    $new_slug = $temp . '-' . $i;
                }
                $temp = $new_slug;
            }
            $this->attributes['slug'] = $temp;
        }
    }

    /**
     * Store Jobs.
     *
     * @param mixed $request request->attr
     *
     * @return relation
     */
    public function storeJobs($request)
    {
        $json = array();
        if (!empty($request)) {
            $random_number = Helper::generateRandomCode(8);
            $code = strtoupper($random_number);
            $profile = Profile::find(Auth::user()->id);
            $profile->transaction_currency = filter_var($request['currency'], FILTER_SANITIZE_STRING);
            $location = $request['location'];
            $this->location()->associate($location);
            $this->employer()->associate(Auth::user()->id);
            $this->title = filter_var($request['title'], FILTER_SANITIZE_STRING);
            $this->slug = filter_var($request['title'], FILTER_SANITIZE_STRING);
            $this->currency = filter_var($request['currency'], FILTER_SANITIZE_STRING);
            $this->price = filter_var($request['project_cost'], FILTER_SANITIZE_STRING);
            // $this->project_level = filter_var($request['project_level'], FILTER_SANITIZE_STRING);
            $this->description = filter_var($request['description'], FILTER_SANITIZE_STRING);
            $this->english_level = 'fluent';
            $this->duration = filter_var($request['job_duration'], FILTER_SANITIZE_STRING);
            $this->freelancer_type = filter_var($request['freelancer_type'], FILTER_SANITIZE_STRING);
            $this->is_featured = filter_var($request['is_featured'], FILTER_SANITIZE_STRING);
            $this->show_attachments = filter_var($request['show_attachments'], FILTER_SANITIZE_STRING);
            $this->address = filter_var($request['address'], FILTER_SANITIZE_STRING);
            // $this->longitude = filter_var($request['longitude'], FILTER_SANITIZE_STRING);
            // $this->latitude = filter_var($request['latitude'], FILTER_SANITIZE_STRING);
            $this->longitude = '';
            $this->latitude = '';
            $old_path = 'uploads\jobs\temp';
            $job_attachments = array();
            if (!empty($request['attachments'])) {
                $attachments = $request['attachments'];
                foreach ($attachments as $key => $attachment) {
                    if (Storage::disk('local')->exists($old_path . '/' . $attachment)) {
                        $new_path = 'uploads/jobs/' . $user_id;
                        if (!file_exists($new_path)) {
                            File::makeDirectory($new_path, 0755, true, true);
                        }
                        $filename = time() . '-' . $attachment;
                        Storage::move($old_path . '/' . $attachment, $new_path . '/' . $filename);
                        $job_attachments[] = $filename;
                    }
                }
                $this->attachments = serialize($job_attachments);
            }
            $this->code = $code;
            $this->save();
            $profile->save();
            $job_id = $this->id;
            $skill = $request['research_field'];
            $this->skills()->detach();
            $this->skills()->attach($skill);
            $job = Job::find($job_id);
            $languages = $request['languages'];
            $job->languages()->sync($languages);
            $categories = $request['research_category'];
            $job->categories()->sync($categories);
            $citations = $request['citation'];
            $job->citations()->sync($citations);
            $research_levels = $request['project_level'];
            $job->rlevels()->sync($research_levels);
            $user = User::find(Auth::user()->id);
            $json['type'] = 'success';
        } else {
            $json['type'] = 'error';
            
        }
        return $json;
    }

    /**
     * Update Jobs.
     *
     * @param mixed   $request request
     * @param integer $id      ID
     *
     * @return $request, ID
     */
    public function updateJobs($request, $id)
    {
        $json = array();
        if (!empty($request)) {
            $job = self::find($id);
            $profile = Profile::find(Auth::user()->id);
            $profile->transaction_currency = filter_var($request['currency'], FILTER_SANITIZE_STRING);
            $random_number = Helper::generateRandomCode(8);
            $user_id = $job->user_id;
            $location = $request['location'];
            $job->location()->associate($location);
            $job->employer()->associate($user_id);
            if ($job->title != $request['title']) {
                $job->slug = filter_var($request['title'], FILTER_SANITIZE_STRING);
            }
            $job->title = filter_var($request['title'], FILTER_SANITIZE_STRING);
            $job->currency = filter_var($request['currency'], FILTER_SANITIZE_STRING);
            $job->price = filter_var($request['project_cost'], FILTER_SANITIZE_STRING);
            // $job->project_level = filter_var($request['project_level'], FILTER_SANITIZE_STRING);
            $job->description = filter_var($request['description'], FILTER_SANITIZE_STRING);
            $job->english_level = 'fluent';
            $job->duration = filter_var($request['job_duration'], FILTER_SANITIZE_STRING);
            $job->freelancer_type = filter_var($request['freelancer_type'], FILTER_SANITIZE_STRING);
            $job->is_featured = filter_var($request['is_featured'], FILTER_SANITIZE_STRING);
            $job->show_attachments = filter_var($request['show_attachments'], FILTER_SANITIZE_STRING);
            $job->address = filter_var($request['address'], FILTER_SANITIZE_STRING);
            // $job->longitude = filter_var($request['longitude'], FILTER_SANITIZE_STRING);
            // $job->latitude = filter_var($request['latitude'], FILTER_SANITIZE_STRING);
            $this->longitude = '';
            $this->latitude = '';
            $old_path = 'uploads\jobs\temp';
            $job_attachments = array();
            if (!empty($request['attachments'])) {
                $attachments = $request['attachments'];
                foreach ($attachments as $key => $attachment) {
                    $filename = $attachment;
                    if (Storage::disk('local')->exists($old_path . '/' . $attachment)) {
                        $new_path = 'uploads/jobs/' . $user_id;
                        if (!file_exists($new_path)) {
                            File::makeDirectory($new_path, 0755, true, true);
                        }
                        $filename = time() . '-' . $attachment;
                        Storage::move($old_path . '/' . $attachment, $new_path . '/' . $filename);
                    }
                    $job_attachments[] = $filename;
                }
                $job->attachments = serialize($job_attachments);
            } else {
                $job->attachments = null;
            }
            if (empty($job->code)) {
                $code = strtoupper($random_number);
                $job->code = $code;
            }
            $job->save();
            $profile->save();
            $job_id = $job->id;
            $skill = $request['research_field'];
            $categories = $request['research_category'];
            $job->skills()->detach();
            $job->skills()->attach($skill);
            $job = Job::find($job_id);
            $languages = $request['languages'];
            $job->languages()->sync($languages);
            $categories = $request['research_category'];
            $job->categories()->sync($categories);
            $citations = $request['citation'];
            $job->citations()->sync($citations);
            $research_levels = $request['project_level'];
            $job->rlevels()->sync($research_levels);
            $json['type'] = 'success';
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Get all of the categories for the project.
     *
     * @param string $keyword                keyword
     * @param string $search_categories      search_categories
     * @param string $search_locations       search_locations
     * @param string $search_skills          search_skills
     * @param string $search_project_lengths search_project_lengths
     * @param string $search_languages       search_languages
     *
     * @return relation
     */
    public static function getSearchResult(
        $type,
        $keyword,
        // $search_prices,
        $search_categories,
        $search_skills,
        $search_levels,
        $search_citations,
        $search_freelancer_types,
        $search_project_lengths,
        $search_languages,
        $search_locations
    ) {
        $json = array();
        $jobs = Job::select('*');
        $job_id = array();
        $filters = array();
        $filters['type'] = $type;
        if (!empty($keyword)) {
            $filters['s'] = $keyword;
            $jobs->where('title', 'like', '%' . $keyword . '%');
        };
        if (!empty($search_categories)) {
            $filters['categories'] = $search_categories;
            foreach ($search_categories as $key => $search_category) {
                $categor_obj = Category::where('slug', $search_category)->first();
                $category = Category::find($categor_obj->id);
                if (!empty($category->jobs)) {
                    $category_jobs = $category->jobs->pluck('id')->toArray();
                    foreach ($category_jobs as $id) {
                        $job_id[] = $id;
                    }
                }
            }
            $jobs->whereIn('id', $job_id);
        }
        if (!empty($search_skills)) {
            $filters['skills'] = $search_skills;
            foreach ($search_skills as $key => $search_skill) {
                $skill_obj = Skill::where('slug', $search_skill)->first();
                $skill = Skill::find($skill_obj->id);
                if (!empty($skill->jobs)) {
                    $skill_jobs = $skill->jobs->pluck('id')->toArray();
                    foreach ($skill_jobs as $id) {
                        $job_id[] = $id;
                    }
                }
            }
            $jobs->whereIn('id', $job_id);
        }
        if (!empty($search_levels)) {
            $filters['rlevels'] = $search_levels;
            foreach ($search_levels as $key => $search_level) {
                $level_obj = ResearchLevel::where('slug', $search_level)->first();
                $level = ResearchLevel::find($level_obj->id);
                if (!empty($level->jobs)) {
                    $level_jobs = $level->jobs->pluck('id')->toArray();
                    foreach ($level_jobs as $id) {
                        $job_id[] = $id;
                    }
                }
            }
            $jobs->whereIn('id', $job_id);
        }
        if (!empty($search_citations)) {
            $filters['citations'] = $search_citations;
            foreach ($search_citations as $key => $search_citation) {
                $citation_obj = Citation::where('slug', $search_citation)->first();
                $citation = Citation::find($citation_obj->id);
                if (!empty($citation->jobs)) {
                    $citation_jobs = $citation->jobs->pluck('id')->toArray();
                    foreach ($citation_jobs as $id) {
                        $job_id[] = $id;
                    }
                }
            }
            $jobs->whereIn('id', $job_id);
        }
        if (!empty($search_freelancer_types)) {
            $filters['freelancer_type'] = $search_freelancer_types;
            foreach ($search_freelancer_types as $key => $freelancer_type) {
                $flevel_obj = FreelancerLevel::where('slug', $freelancer_type)->first();
                $flevel = FreelancerLevel::find($level_obj->id);
                if (!empty($flevel->jobs)) {
                    $flevel_jobs = $flevel->jobs->pluck('id')->toArray();
                    foreach ($flevel_jobs as $id) {
                        $job_id[] = $id;
                    }
                }
            }
            $jobs->whereIn('id', $job_id);
        }
        if (!empty($search_project_lengths)) {
            $filters['project_lengths'] = $search_project_lengths;
            $jobs->whereIn('duration', $search_project_lengths);
        }
        if (!empty($search_languages)) {
            $filters['languages'] = $search_languages;
            $languages = Language::whereIn('slug', $search_languages)->get();
            foreach ($languages as $key => $language) {
                if (!empty($language->jobs[$key]->id)) {
                    $job_id[] = $language->jobs[$key]->id;
                }
            }
            $jobs->whereIn('id', $job_id);
        }
        if (!empty($search_locations)) {
            $filters['locations'] = $search_locations;
            $locations = Location::select('id')->whereIn('slug', $search_locations)->get()->pluck('id')->toArray();
            $jobs->whereIn('location_id', $locations);
        }
        $jobs = $jobs->orderByRaw("updated_at DESC")->paginate(7)->setPath('');
        // $jobs = $jobs->orderByRaw("is_featured DESC, updated_at DESC")->paginate(7)->setPath('');
        foreach ($filters as $key => $filter ) {
            $pagination = $jobs->appends(
                array(
                    $key => $filter
                )
            );
        }
        $json['jobs'] = $jobs;
        return $json;
    }

    /**
     * Delete recoed from storage
     *
     * @param int $id id
     *
     * @return relation
     */
    public static function deleteRecord($id)
    {
        $job = self::find($id);
        if (!empty($job->proposals)) {
            foreach ($job->proposals as $key => $proposal) {
                $proposal = Proposal::find($proposal->id);
                $proposal->delete();
            }
        }
        $job->skills()->detach();
        $job->languages()->detach();
        $job->categories()->detach();
        return $job->delete();
    }

    /**
     * Posted Total Project Count
     *
     * @return \Illuminate\Http\Response
     */
    public static function totalProjectCount()
    {
        $total_count = Job::where('status', 'posted')->count()? Job::where('status', 'posted')->count() : 0;
        return $total_count;
    }

}
