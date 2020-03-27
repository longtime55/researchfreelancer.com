<?php
/**
 * Class Citation
 *
 * @Citation Worketic
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
 * Class Citation
 *
 */
class Citation extends Model
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
     * Get all of the users that are assigned this citation.
     *
     * @return relation
     */
    public function freelancers()
    {
        return $this->morphedByMany('App\User', 'citable');
    }
    
    /**
     * Get all of the jobs that are assigned this citation.
     *
     * @return relation
     */
    public function jobs()
    {
        return $this->morphedByMany('App\Job', 'citable');
    }

    /**
     * Get all of the services that are assigned this citation.
     *
     * @return relation
     */
    public function services()
    {
        return $this->morphedByMany('App\Service', 'citable');
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
            if (!Citation::all()->where('slug', $temp)->isEmpty()) {
                $i = 1;
                $new_slug = $temp . '-' . $i;
                while (!Citation::all()->where('slug', $new_slug)->isEmpty()) {
                    $i++;
                    $new_slug = $temp . '-' . $i;
                }
                $temp = $new_slug;
            }
            $this->attributes['slug'] = $temp;
        }
    }

    /**
     * Saving Citations
     *
     * @param string $request get req attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function saveCitations($request)
    {
        if (!empty($request)) {
            $this->title = filter_var($request['citation_title'], FILTER_SANITIZE_STRING);
            $this->slug = filter_var($request['citation_title'], FILTER_SANITIZE_STRING);
            $this->abstract = filter_var($request['citation_abstract'], FILTER_SANITIZE_STRING);
            $old_path = Helper::PublicPath() . '/uploads/citations/temp';
            if (!empty($request['uploaded_image'])) {
                $filename = $request['uploaded_image'];
                if (file_exists($old_path . '/' . $request['uploaded_image'])) {
                    $new_path = Helper::PublicPath().'/uploads/citations/';
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
            $json['message'] = trans('lang.cit_created');
            return $json;
        }
    }

    /**
     * Updating Citations
     *
     * @param string $request get request attributes
     * @param int    $id      get department id for updation
     *
     * @return \Illuminate\Http\Response
     */
    public function updateCitations($request, $id)
    {
        if (!empty($request)) {
            $cits = self::find($id);
            if ($cits->title != $request['citation_title']) {
                $cits->slug  =  filter_var($request['citation_title'], FILTER_SANITIZE_STRING);
            }
            $cits->title = filter_var($request['citation_title'], FILTER_SANITIZE_STRING);
            $cits->abstract = filter_var($request['citation_abstract'], FILTER_SANITIZE_STRING);
            $old_path = Helper::PublicPath() . '/uploads/citations/temp';
            if (!empty($request['uploaded_image'])) {
                $filename = $request['uploaded_image'];
                if (file_exists($old_path . '/' . $request['uploaded_image'])) {
                    $new_path = Helper::PublicPath().'/uploads/citations/';
                    if (!file_exists($new_path)) {
                        File::makeDirectory($new_path, 0755, true, true);
                    }
                    $filename = time() . '-' . $request['uploaded_image'];
                    rename($old_path . '/' . $request['uploaded_image'], $new_path . '/' . $filename);
                    rename($old_path . '/small-' . $request['uploaded_image'], $new_path . '/small-' . $filename);
                    rename($old_path . '/medium-' . $request['uploaded_image'], $new_path . '/medium-' . $filename);
                }
                $cits->image = filter_var($filename, FILTER_SANITIZE_STRING);
            } else {
                $cits->image = null;
            }
            return $cits->save();
        }
    }
}
