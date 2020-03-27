<?php
/**
 * Class ResearchLevel
 *
 * @ResearchLevel Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use File;
use Storage;

/**
 * Class ResearchLevel
 *
 */
class ResearchLevel extends Model
{
    /**
     * Fillables for the database
     *
     * @access protected
     *
     * @var array $fillable
     */
    protected $fillable = array(
        'title', 'slug', 'abstract'
    );

    /**
     * Protected Date
     *
     * @access protected
     * @var    array $dates
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get all of the users that are assigned this research level.
     *
     * @return relation
     */
    public function freelancers()
    {
        return $this->morphedByMany('App\User', 'rlevable');
    }
    
    /**
     * Get all of the jobs that are assigned this research level.
     *
     * @return relation
     */
    public function jobs()
    {
        return $this->morphedByMany('App\Job', 'rlevable');
    }

    /**
     * Get all of the services that are assigned this research level.
     *
     * @return relation
     */
    public function services()
    {
        return $this->morphedByMany('App\Service', 'rlevable');
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
            if (!ResearchLevel::all()->where('slug', $temp)->isEmpty()) {
                $i = 1;
                $new_slug = $temp . '-' . $i;
                while (!ResearchLevel::all()->where('slug', $new_slug)->isEmpty()) {
                    $i++;
                    $new_slug = $temp . '-' . $i;
                }
                $temp = $new_slug;
            }
            $this->attributes['slug'] = $temp;
        }
    }

    /**
     * Saving Research Levels
     *
     * @param string $request get req attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function saveLevels($request)
    {
        if (!empty($request)) {
            $this->title = filter_var($request['title'], FILTER_SANITIZE_STRING);
            $this->slug = filter_var($request['title'], FILTER_SANITIZE_STRING);
            $this->abstract = filter_var($request['abstract'], FILTER_SANITIZE_STRING);
            $old_path = Helper::PublicPath() . '/uploads/researchlevels/temp';
            if (!empty($request['uploaded_image'])) {
                $filename = $request['uploaded_image'];
                if (file_exists($old_path . '/' . $request['uploaded_image'])) {
                    $new_path = Helper::PublicPath().'/uploads/researchlevels/';
                    if (!file_exists($new_path)) {
                        File::makeDirectory($new_path, 0755, true, true);
                    }
                    $filename = time() . '-' . $request['uploaded_image'];
                    rename($old_path . '/' . $request['uploaded_image'], $new_path . '/' . $filename);
                    rename($old_path . '/small-' . $request['uploaded_image'], $new_path . '/small-' . $filename);
                    rename($old_path . '/medium-' . $request['uploaded_image'], $new_path . '/medium-' . $filename);
                }
                $this->image = filter_var($filename, FILTER_SANITIZE_STRING);
            } else {
                $this->image = null;
            }
            $this->save();
            $json['type'] = 'success';
            $json['message'] = trans('lang.res_lev_created');
            return $json;
        }
    }

    /**
     * Updating Research Levels
     *
     * @param string $request get request attributes
     * @param int    $id      get department id for updation
     *
     * @return \Illuminate\Http\Response
     */
    public function updateLevels($request, $id)
    {
        if (!empty($request)) {
            $levels = self::find($id);
            if ($levels->title != $request['title']) {
                $levels->slug  =  filter_var($request['title'], FILTER_SANITIZE_STRING);
            }
            $levels->title = filter_var($request['title'], FILTER_SANITIZE_STRING);
            $levels->abstract = filter_var($request['abstract'], FILTER_SANITIZE_STRING);
            $old_path = Helper::PublicPath() . '/uploads/levels/temp';
            if (!empty($request['uploaded_image'])) {
                $filename = $request['uploaded_image'];
                if (file_exists($old_path . '/' . $request['uploaded_image'])) {
                    $new_path = Helper::PublicPath().'/uploads/levels/';
                    if (!file_exists($new_path)) {
                        File::makeDirectory($new_path, 0755, true, true);
                    }
                    $filename = time() . '-' . $request['uploaded_image'];
                    rename($old_path . '/' . $request['uploaded_image'], $new_path . '/' . $filename);
                    rename($old_path . '/small-' . $request['uploaded_image'], $new_path . '/small-' . $filename);
                    rename($old_path . '/medium-' . $request['uploaded_image'], $new_path . '/medium-' . $filename);
                }
                $levels->image = filter_var($filename, FILTER_SANITIZE_STRING);
            } else {
                $levels->image = null;
            }
            return $levels->save();
        }
    }
}
