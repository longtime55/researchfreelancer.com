<?php
/**
 * Class CitationController
 *
 * @Citation Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App\Http\Controllers;

use App\Citation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Session;
use View;
use App\Helper;

/**
 * Class Citation Controller
 *
 */
class CitationController extends Controller
{
    /**
     * Defining scope of variable
     *
     * @access public
     * @var    array $citation
     */
    protected $citation;

    /**
     * Create a new controller instance.
     *
     * @param mixed $citation get citation model
     *
     * @return void
     */
    public function __construct(Citation $citation)
    {
        $this->citation = $citation;
    }

    /**
     * Display a listing of the resource.
     *
     * @param mixed $request Request Attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!empty($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $cits = $this->citation::where('title', 'like', '%' . $keyword . '%')->paginate(7)->setPath('');
            $pagination = $cits->appends(
                array(
                    'keyword' => Input::get('keyword')
                )
            );
        } else {
            $cits = $this->citation->paginate(10);
        }
        if (file_exists(resource_path('views/extend/back-end/admin/citations/index.blade.php'))) {
            return View::make('extend.back-end.admin.citations.index', compact('cits'));
        } else {
            return View::make(
                'back-end.admin.citations.index', compact('cits')
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
    public function store(Request $request)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'citation_title'    => 'required|unique:citations,title',
            ]
        );
        $this->citation->saveCitations($request);
        Session::flash('message', trans('lang.save_citation'));
        return Redirect::back();
    }

    /**
     * Edit Citations.
     *
     * @param int $id integer
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!empty($id)) {
            $cits = $this->citation::find($id);
            if (!empty($cits)) {
                if (file_exists(resource_path('views/extend/back-end/admin/citations/edit.blade.php'))) {
                    return View::make('extend.back-end.admin.citations.edit', compact('cits'));
                } else {
                    return View::make(
                        'back-end.admin.citations.edit', compact('id', 'cits')
                    );
                }
                return Redirect::to('admin/citations');
            }
        }
    }

    /**
     * Update Citations.
     *
     * @param string $request string
     * @param int    $id      integer
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $server_verification = Helper::worketicIsDemoSite();
        if (!empty($server_verification)) {
            Session::flash('error', $server_verification);
            return Redirect::back();
        }
        $this->validate(
            $request, [
                'citation_title' => 'required|unique:citations,title',
            ]
        );
        $this->citation->updateCitations($request, $id);
        Session::flash('message', trans('lang.cit_updated'));
        return Redirect::to('admin/citations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $server = Helper::worketicIsDemoSiteAjax();
        if (!empty($server)) {
            $json['type'] = 'error';
            $json['message'] = $server->getData()->message;
            return $json;
        }
        $json = array();
        $id = $request['id'];
        if (!empty($id)) {
            $this->citation::where('id', $id)->delete();
            $json['type'] = 'success';
            $json['message'] = trans('lang.cit_deleted');
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
    public function uploadTempImage(Request $request)
    {
        $path = Helper::PublicPath() . '/uploads/citations/temp/';
        if (!empty($request['uploaded_image'])) {
            return Helper::uploadTempImage($path, $request['uploaded_image']);
        }
    }

    /**
     * All Citations Lisiting.
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function citationsList(Request $request)
    {
        $breadcrumbs_settings = \App\SiteManagement::getMetaValue('show_breadcrumb');
        $show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
        $citations = $this->citation->paginate(10);
        if (!empty($citations)) {
            if (file_exists(resource_path('views/extend/front-end/citations/index.blade.php'))) {
                return View::make('extend.front-end.citations.index', compact('citations', 'show_breadcrumbs'));
            } else {
                return View::make(
                    'front-end.citations.index',
                    compact(
                        'citations',
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
    public function deleteSelected(Request $request)
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
            $this->citation::where("id", $id)->delete();
        }
        if (!empty($checked)) {
            $json['type'] = 'success';
            $json['message'] = trans('lang.cit_deleted');
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }
}
