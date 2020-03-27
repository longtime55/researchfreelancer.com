<?php
/**
 * Class LevelController
 *
 * @Level Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */
 
namespace App\Http\Controllers;

use App\FreelancerLevel;
use App\ResearchLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Session;
use View;
use App\Helper;

/**
 * Class LevelController
 *
 */

class LevelController extends Controller
{
    /**
     * Defining scope of variable
     *
     * @access public
     * @var    array $freelancerlevel
     * @var    array $researchlevel
     */
    protected $freelancerlevel;
    protected $researchlevel;

    /**
     * Create a new controller instance.
     *
     * @param mixed $freelancerlevel get freelancerlevel model
     * @param mixed $researchlevel get researchlevel model
     *
     * @return void
     */
    public function __construct(FreelancerLevel $freelancerlevel, ResearchLevel $researchlevel)
    {
        $this->freelancerlevel = $freelancerlevel;
        $this->researchlevel = $researchlevel;
    }

    /**
     * Display a listing of the resource.
     *
     * @param mixed $request Request Attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $which)
    {
        if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            if ($which == 'research') {
                $levels = $this->researchlevel::where('title', 'like', '%' . $keyword . '%')->paginate(7)->setPath('');
            } elseif ($which == 'freelancer') {
                $levels = $this->freelancerlevel::where('title', 'like', '%' . $keyword . '%')->paginate(7)->setPath('');
            }
            $pagination = $levels->appends(
                array(
                    'keyword' => Input::get('keyword')
                )
            );
        } else {
            if ($which == 'research') {
                $levels = $this->researchlevel->paginate(10);
            } elseif ($which == 'freelancer') {
                $levels = $this->freelancerlevel->paginate(10);
            }
        }
        if (file_exists(resource_path('views/extend/back-end/admin/levels/index.blade.php'))) {
            return View::make('extend.back-end.admin.levels.index', compact('levels', 'which'));
        } else {
            return View::make(
                'back-end.admin.levels.index', compact('levels', 'which')
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param string $request string
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $which)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'title'    => 'required|unique:'.$which.'_levels,title',
            ]
        );
        if ($which == 'research') {
        	$this->researchlevel->saveLevels($request);
        } elseif ($which == 'freelancer') {
        	$this->freelancerlevel->saveLevels($request);
        }
        Session::flash('message', trans('lang.save_level'));
        return Redirect::back();
    }

    /**
     * Edit ResearchLevels and FreelancerLevels.
     *
     * @param int $id integer
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($which, $id)
    {
        if (!empty($id) && (!empty($which))) {
            if ($which == 'research') {
                $level = $this->researchlevel::find($id);
            } elseif ($which == 'freelancer') {
                $level = $this->freelancerlevel::find($id);
            }
            if (!empty($level)) {
                if (file_exists(resource_path('views/extend/back-end/admin/levels/edit.blade.php'))) {
                    return View::make('extend.back-end.admin.levels.edit', compact('level', 'which'));
                } else {
                    return View::make(
                        'back-end.admin.levels.edit', compact('level', 'which')
                    );
                }
                return Redirect::to('admin/levels/'.$which);
            }
        }
    }

    /**
     * Update ResearchLevels and FreelancerLevels.
     *
     * @param string $request string
     * @param int    $id      integer
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $which, $id)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'title' => 'required|unique:'.$which.'_levels,title',
            ]
        );
        if ($which == 'research') {
        	$this->researchlevel->updateLevels($request, $id);
        } elseif ($which == 'freelancer') {
        	$this->freelancerlevel->updateLevels($request, $id);
        }
        Session::flash('message', trans('lang.lev_updated'));
        return Redirect::to('admin/levels/'.$which);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $which)
    {
        $server = Helper::worketicIsDemoSiteAjax();
        if (!empty($server)) {
            $json['type'] = 'error';
            $json['message'] = $server->getData()->message;
            return $json;
        }
        $json = array();
        $id = $request['id'];
        if (!empty($id) && (!empty($which))) {
            if ($which == 'research') {
            	$this->researchlevel::where('id', $id)->delete();
                $json['type'] = 'success';
                $json['message'] = trans('lang.lev_deleted');
            } elseif ($which == 'freelancer') {
            	$this->freelancerlevel::where('id', $id)->delete();
                $json['type'] = 'success';
                $json['message'] = trans('lang.lev_deleted');
            }
            return $json;
        }
    }

    /**
     * Upload Image to temporary folder.
     *
     * @param mixed $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadTempImage(Request $request, $which)
    {
        if ($which == 'research') {
        	$path = Helper::PublicPath() . '/uploads/researchlevels/temp/';
        } elseif ($which == 'freelancer') {
        	$path = Helper::PublicPath() . '/uploads/freelancerlevels/temp/';
        }
        if (!empty($request['uploaded_image'])) {
            return Helper::uploadTempImage($path, $request['uploaded_image']);
        }
    }

    /**
     * All ResearchLevels and FreelancerLevels Lisiting.
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function levelsList(Request $request, $which)
    {
        $breadcrumbs_settings = \App\SiteManagement::getMetaValue('show_breadcrumb');
        $show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
        if ($which == 'research') {
        	$levels = $this->researchlevel->paginate(10);
        } elseif ($which == 'freelancer') {
        	$levels = $this->freelancerlevel->paginate(10);
        }
        if (!empty($levels)) {
            if (file_exists(resource_path('views/extend/front-end/levels/index.blade.php'))) {
                return View::make('extend.front-end.levels.index', compact('levels', 'which', 'show_breadcrumbs'));
            } else {
                return View::make(
                    'front-end.levels.index',
                    compact(
                        'levels',
                        'which',
                        'show_breadcrumbs'
                    )
                );
            }
        } else {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteSelected(Request $request, $which)
    {
        $server = Helper::worketicIsDemoSiteAjax();
        if (!empty($server)) {
            $json['type'] = 'error';
            $json['message'] = $server->getData()->message;
            return $json;
        }
        $json = array();
        $checked = $request['ids'];
        foreach ($checked as $id) {
            if ($which == 'research') {
                $this->researchlevel::where("id", $id)->delete();
            } elseif ($which == 'freelancer') {
                $this->freelancerlevel::where("id", $id)->delete();
            }
        }
        if (!empty($checked)) {
            $json['type'] = 'success';
            $json['message'] = trans('lang.lev_deleted');
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }
}

