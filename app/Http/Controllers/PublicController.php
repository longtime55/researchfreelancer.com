<?php

/**
 * Class PublicController
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\User;
use App\Language;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerificationMailable;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Auth;
use DB;
use App\Helper;
use App\Profile;
use App\Category;
use App\Location;
use App\Skill;
use App\ResearchLevel;
use App\FreelancerLevel;
use App\Citation;
use Session;
use Storage;
use App\Report;
use App\Job;
use App\Proposal;
use App\EmailTemplate;
use App\Mail\FreelancerEmailMailable;
use App\Mail\EmployerEmailMailable;
use App\Mail\AdminEmailMailable;
use App\SiteManagement;
use App\Review;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Payout;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\Debug\ExceptionHandler as SymfonyExceptionHandler;
use App\Service;
use App\DeliveryTime;
use App\ResponseTime;

/**
 * Class PublicController
 *
 */
class PublicController extends Controller
{
    /**
     * Defining scope of the variable
     *
     * @access protected
     * @var    array $payout_settings
     * @var    array $currency
     */
    protected $payout_settings;
    
    protected $currency;
    /**
     * Create a new controller instance.
     *
     * @param instance $proposal instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->payout_settings = SiteManagement::getMetaValue('commision');
        if (!empty($this->payout_settings[0]['currency'])) {
            $this->currency = $this->payout_settings[0]['currency'];
        } else {
            $this->currency = 'NGN';
        }
    }

    /**
     * User Login Function
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function loginUser(Request $request)
    {
        $json = array();
        if (Session::has('user_id')) {
            $id = Session::get('user_id');
            $user = User::find($id);
            Auth::login($user);
            $json['type'] = 'success';
            $json['role'] = $user->getRoleNames()->first();
            session()->forget('user_id');
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    /**
     * Step1 Registeration Validation
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function registerStep1Validation(Request $request)
    {
        $this->validate(
            $request,
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
            ]
        );
    }

    /**
     * Step2 Registeration Validation
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function registerStep2Validation(Request $request)
    {
        $this->validate(
            $request,
            [
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required',
                'termsconditions' => 'required',
            ]
        );
    }

    /**
     * Set slug before saving in DB
     *
     * @param \Illuminate\Http\Request $request request attributes
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyUserCode(Request $request)
    {
        $json = array();
        if (Session::has('user_id')) {
            $id = Session::get('user_id');
            $email = Session::get('email');
            $password = Session::get('password');
            $user = User::find($id);
            if (!empty($request['code'])) {
                if ($request['code'] === $user->verification_code) {
                    $user->user_verified = 1;
                    $user->verification_code = null;
                    $user->save();
                    $json['type'] = 'success';
                    //send mail
                    if (!empty(config('mail.username')) && !empty(config('mail.password'))) {
                        $email_params = array();
                        if ($user->getUserRoleType($user->id)->name === 'employer') {
                            $template = DB::table('email_types')->select('id')->where('email_type', 'employer_email_new_user')->get()->first();
                            if (!empty($template->id)) {
                                $template_data = EmailTemplate::getEmailTemplateByID($template->id);
                                $email_params['name'] = Helper::getUserName($id);
                                $email_params['email'] = $email;
                                $email_params['password'] = $password;
                                Mail::to($email)
                                    ->send(
                                        new EmployerEmailMailable(
                                            'employer_email_new_user',
                                            $template_data,
                                            $email_params
                                        )
                                    );
                            }
                        } else {
                            $template = DB::table('email_types')->select('id')->where('email_type', 'freelancer_email_new_user')->get()->first();
                            if (!empty($template->id)) {
                                $template_data = EmailTemplate::getEmailTemplateByID($template->id);
                                $email_params['name'] = Helper::getUserName($id);
                                $email_params['email'] = $email;
                                $email_params['password'] = $password;
                                Mail::to($email)
                                    ->send(
                                        new FreelancerEmailMailable(
                                            'freelancer_email_new_user',
                                            $template_data,
                                            $email_params
                                        )
                                    );
                            }
                        }
                        $admin_template = DB::table('email_types')->select('id')->where('email_type', 'admin_email_registration')->get()->first();
                        if (!empty($template->id)) {
                            $template_data = EmailTemplate::getEmailTemplateByID($admin_template->id);
                            $email_params['name'] = Helper::getUserName($id);
                            $email_params['email'] = $email;
                            $email_params['link'] = url('profile/' . $user->slug);
                            Mail::to(config('mail.username'))
                                ->send(
                                    new AdminEmailMailable(
                                        'admin_email_registration',
                                        $template_data,
                                        $email_params
                                    )
                                );
                        }
                    }
                    session()->forget('password');
                    session()->forget('email');
                    return $json;
                } else {
                    $json['type'] = 'error';
                    $json['message'] = trans('lang.invalid_verify_code');
                    return $json;
                }
            } else {
                $json['type'] = 'error';
                $json['message'] = trans('lang.verify_code');
                return $json;
            }
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.session_expire');
            return $json;
        }
    }

    /**
     * Download file.
     *
     * @param type    $type     file type
     * @param string  $filename file typname
     * @param integer $id       id
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    function getFile($type, $filename, $id)
    {
        if (!empty($type) && !empty($filename) && !empty($id)) {
            if (Storage::disk('local')->exists('uploads/' . $type . '/' . $id . '/' . $filename)) {
                return Storage::download('uploads/' . $type . '/' . $id . '/' . $filename);
            } else {
                Session::flash('error', trans('lang.file_not_found'));
                return Redirect::back();
            }
        } else {
            abort(404);
        }
    }

    /**
     * Show user profile.
     *
     * @param string $slug slug
     *
     * @return \Illuminate\Http\Response
     */
    public function showUserProfile($slug)
    {
        $user = User::select('id')->where('slug', $slug)->first();
        if (!empty($user)) {
            $user = User::find($user->id);
            if ($user->is_disabled == 'true') {
                abort(404);
            }
            $skills = $user->skills()->get();
            $job = Job::where('user_id', $user->id)->get();
            $profile = Profile::all()->where('user_id', $user->id)->first();
            if (!empty($profile->transaction_currency)) {
                $this->currency = $profile->transaction_currency;
            }
            $reasons = Helper::getReportReasons();
            $avatar = !empty($profile->avater) ? '/uploads/users/' . $profile->user_id . '/' . $profile->avater : '/images/user.jpg';
            $banner = !empty($profile->banner) ? '/uploads/users/' . $profile->user_id . '/' . $profile->banner : Helper::getUserProfileBanner($user->id);
            $auth_user = Auth::user() ? true : false;
            $user_name = Helper::getUserName($profile->user_id);
            $current_date = Carbon::now()->format('M d, Y');
            $tagline = !empty($profile) ? $profile->tagline : '';
            $desc = !empty($profile) ? $profile->description : '';
            if ($user->getRoleNames()->first() === 'freelancer') {
                $services = array();
                if (Schema::hasTable('services') && Schema::hasTable('service_user')) {
                    $services = $user->services;
                }
                $reviews = Review::where('receiver_id', $user->id)->get();
                $awards = !empty($profile->awards) ? unserialize($profile->awards) : array();
                $projects = !empty($profile->projects) ? unserialize($profile->projects) : array();
                $experiences = !empty($profile->experience) ? unserialize($profile->experience) : array();
                $education = !empty($profile->education) ? unserialize($profile->education) : array();
                $freelancer_rating  = !empty($user->profile->ratings) ? Helper::getUnserializeData($user->profile->ratings) : 0;
                $rating = !empty($freelancer_rating) ? $freelancer_rating[0] : 0;
                $joining_date = !empty($profile->created_at) ? Carbon::parse($profile->created_at)->format('M d, Y') : '';
                $jobs = Job::select('title', 'id')->get()->pluck('title', 'id');
                $save_freelancer = !empty(auth()->user()->profile->saved_freelancer) ? unserialize(auth()->user()->profile->saved_freelancer) : array();
                $badge = Helper::getUserBadge($user->id);
                $feature_class = !empty($badge) ? 'wt-featured' : '';
                $badge_color = !empty($badge) ? $badge->color : '';
                $badge_img  = !empty($badge) ? $badge->image : '';
                $wallets = Payout::where('user_id', $user->id)->select('amount', 'currency')->pluck('amount', 'currency')->first();
                $employer_projects = Auth::user() ? Helper::getEmployerJobs(Auth::user()->id) : array();
                $symbol  = Helper::currencyList($this->currency);
                $settings = !empty(SiteManagement::getMetaValue('settings')) ? SiteManagement::getMetaValue('settings') : array();
                $display_chat = !empty($settings[0]['chat_display']) ? $settings[0]['chat_display'] : false;
                $enable_package = !empty($this->payout_settings) && !empty($this->payout_settings[0]['enable_packages']) ? $this->payout_settings[0]['enable_packages'] : 'true';
                if (file_exists(resource_path('views/extend/front-end/users/freelancer-show.blade.php'))) {
                    return View(
                        'extend.front-end.users.freelancer-show',
                        compact(
                            'services',
                            'profile',
                            'wallets',
                            'skills',
                            'user',
                            'job',
                            'reasons',
                            'reviews',
                            'avatar',
                            'banner',
                            'user_name',
                            'jobs',
                            'rating',
                            'education',
                            'experiences',
                            'projects',
                            'awards',
                            'joining_date',
                            'save_freelancer',
                            'auth_user',
                            'badge',
                            'feature_class',
                            'badge_color',
                            'badge_img',
                            'employer_projects',
                            'current_date',
                            'symbol',
                            'tagline',
                            'desc',
                            'display_chat',
                            'enable_package'
                        )
                    );
                } else {
                    return View(
                        'front-end.users.freelancer-show',
                        compact(
                            'services',
                            'profile',
                            'wallets',
                            'skills',
                            'user',
                            'job',
                            'reasons',
                            'reviews',
                            'avatar',
                            'banner',
                            'user_name',
                            'jobs',
                            'rating',
                            'education',
                            'experiences',
                            'projects',
                            'awards',
                            'joining_date',
                            'save_freelancer',
                            'auth_user',
                            'badge',
                            'feature_class',
                            'badge_color',
                            'badge_img',
                            'employer_projects',
                            'current_date',
                            'symbol',
                            'tagline',
                            'desc',
                            'display_chat',
                            'enable_package'
                        )
                    );
                }
            } elseif ($user->getRoleNames()->first() === 'employer') {
                $jobs = Job::where('user_id', $profile->user_id)->latest()->paginate(7);
                $followers = DB::table('followers')->where('following', $profile->user_id)->get();
                $save_employer = !empty(auth()->user()->profile->saved_employers) ? unserialize(auth()->user()->profile->saved_employers) : array();
                $save_jobs = !empty(auth()->user()->profile->saved_jobs) ? unserialize(auth()->user()->profile->saved_jobs) : array();
                $symbol = Helper::currencyList($this->currency);
                $breadcrumbs_settings = SiteManagement::getMetaValue('show_breadcrumb');
                $show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
                if (file_exists(resource_path('views/extend/front-end/users/employer-show.blade.php'))) {
                    return View(
                        'extend.front-end.users.employer-show',
                        compact(
                            'profile',
                            'skills',
                            'user',
                            'job',
                            'reasons',
                            'avatar',
                            'banner',
                            'user_name',
                            'jobs',
                            'followers',
                            'save_employer',
                            'save_jobs',
                            'auth_user',
                            'current_date',
                            'symbol',
                            'tagline',
                            'desc',
                            'show_breadcrumbs'
                        )
                    );
                } else {
                    return View(
                        'front-end.users.employer-show',
                        compact(
                            'profile',
                            'skills',
                            'user',
                            'job',
                            'reasons',
                            'avatar',
                            'banner',
                            'user_name',
                            'jobs',
                            'followers',
                            'save_employer',
                            'save_jobs',
                            'auth_user',
                            'current_date',
                            'symbol',
                            'tagline',
                            'desc',
                            'show_breadcrumbs'
                        )
                    );
                }
            }
        } else {
            abort(404);
        }
    }

    /**
     * Get filtered list.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFilterlist()
    {
        $json = array();
        $filters = Helper::getSearchFilterList();
        if (!empty($filters)) {
            $json['type'] = 'success';
            $json['result'] = $filters;
            return $json;
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    /**
     * Get searchable data.
     *
     * @param mixed $request request->attributes
     *
     * @return \Illuminate\Http\Response
     */
    public function getSearchableData(Request $request)
    {
        $json = array();
        if (!empty($request['type'])) {
            $searchables = Helper::getSearchableList($request['type']);
            if (!empty($searchables)) {
                $json['type'] = 'success';
                $json['searchables'] = $searchables;
                return $json;
            } else {
                $json['type'] = 'error';
                $json['message'] = trans('lang.something_wrong');
                return $json;
            }
        } else {
            $json['type'] = 'error';
            $json['message'] = trans('lang.something_wrong');
            return $json;
        }
    }

    /**
     * Get search result.
     *
     * @param string $search_type search type
     *
     * @access public
     *
     * @return \Illuminate\Http\Response
     */
    public function getSearchResult($search_type = "")
    {
        $categories = array();
        $locations = array();
        $languages = array();
        $categories = Category::leftJoin('catables', 'categories.id', '=', 'catables.category_id')
                        ->select('categories.*', \DB::raw("count(catables.catable_type) as job_count"))
                        ->where('catables.catable_type', 'like', '%Job%')
                        ->groupBy('id')
                        ->orderBy('job_count', 'DESC')
                        ->get();
        $locations = Location::all()->sortBy('title');
        $languages = Language::all()->sortBy('title');
        $skills = Skill::all()->sortBy('title');
        $citations = Citation::all()->sortBy('title');
        $rlevels = ResearchLevel::all()->sortBy('title');
        $flevels = FreelancerLevel::all()->sortBy('title');
        $symbol = Helper::currencyList($this->currency);
        $freelancer_skills = Helper::getFreelancerLevelList();
        $project_lengths = Helper::getJobDurationList();
        $keyword = !empty($_GET['s']) ? $_GET['s'] : '';
        $type = !empty($_GET['type']) ? $_GET['type'] : $search_type;
        // if ($type == 'job') {
        //     if (Helper::getAccessType() == 'both' || Helper::getAccessType() == 'services') {
        //         abort(404);
        //     }
        // }
        // if ($type == 'service') {
        //     if (Helper::getAccessType() == 'both' || Helper::getAccessType() == 'jobs') {
        //         abort(404);
        //     }
        // }
        $search_categories = !empty($_GET['categories']) ? $_GET['categories'] : array();
        $search_locations = !empty($_GET['locations']) ? $_GET['locations'] : array();
        $search_skills = !empty($_GET['skills']) ? $_GET['skills'] : array();
        $search_citations = !empty($_GET['citations']) ? $_GET['citations'] : array();
        $search_levels = !empty($_GET['rlevels']) ? $_GET['rlevels'] : array();
        $search_project_lengths = !empty($_GET['project_lengths']) ? $_GET['project_lengths'] : array();
        $search_languages = !empty($_GET['languages']) ? $_GET['languages'] : array();
        $search_employees = !empty($_GET['employees']) ? $_GET['employees'] : array();
        $search_hourly_rates = !empty($_GET['hourly_rate']) ? $_GET['hourly_rate'] : array();
        $search_freelancer_types = !empty($_GET['freelancer_type']) ? $_GET['freelancer_type'] : array();
        $search_english_levels = !empty($_GET['english_level']) ? $_GET['english_level'] : array();
        $search_delivery_time = !empty($_GET['delivery_time']) ? $_GET['delivery_time'] : array();
        $search_response_time = !empty($_GET['response_time']) ? $_GET['response_time'] : array();
        $current_date = Carbon::now()->toDateTimeString();
        $inner_page = SiteManagement::getMetaValue('inner_page_data');
        $enable_package = !empty($this->payout_settings) && !empty($this->payout_settings[0]['enable_packages']) ? $this->payout_settings[0]['enable_packages'] : 'true';
        $breadcrumbs_settings = SiteManagement::getMetaValue('show_breadcrumb');
        $show_breadcrumbs = !empty($breadcrumbs_settings) ? $breadcrumbs_settings : 'true';
        if (!empty($_GET['type'])) {
            if ($type == 'employer' || $type == 'freelancer') {
                $search =  User::getSearchResult(
                    $type,
                    $keyword,
                    $search_locations,
                    $search_employees,
                    $search_skills,
                    $search_citations,
                    $search_levels,
                    $search_hourly_rates,
                    $search_freelancer_types,
                    $search_english_levels,
                    $search_languages
                );
                $users = count($search['users']) > 0 ? $search['users'] : '';
                $save_freelancer = !empty(auth()->user()->profile->saved_freelancer) ?
                    unserialize(auth()->user()->profile->saved_freelancer) : array();
                $save_employer = !empty(auth()->user()->profile->saved_employers) ?
                    unserialize(auth()->user()->profile->saved_employers) : array();
                if ($type === 'employer') {
                    $emp_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['emp_list_meta_title']) ? $inner_page[0]['emp_list_meta_title'] : trans('lang.emp_listing');
                    $emp_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['emp_list_meta_desc']) ? $inner_page[0]['emp_list_meta_desc'] : trans('lang.emp_meta_desc');
                    $show_emp_banner = !empty($inner_page) && !empty($inner_page[0]['show_emp_banner']) ? $inner_page[0]['show_emp_banner'] : 'true';
                    $e_inner_banner = !empty($inner_page) && !empty($inner_page[0]['e_inner_banner']) ? $inner_page[0]['e_inner_banner'] : null;
                    if (file_exists(resource_path('views/extend/front-end/employers/index.blade.php'))) {
                        return view(
                            'extend.front-end.employers.index',
                            compact(
                                'users',
                                'locations',
                                'languages',
                                'freelancer_skills',
                                'project_lengths',
                                'keyword',
                                'type',
                                'save_employer',
                                'current_date',
                                'emp_list_meta_title',
                                'emp_list_meta_desc',
                                'show_emp_banner',
                                'e_inner_banner',
                                'enable_package',
                                'show_breadcrumbs'
                            )
                        );
                    } else {
                        return view(
                            'front-end.employers.index',
                            compact(
                                'users',
                                'locations',
                                'languages',
                                'freelancer_skills',
                                'project_lengths',
                                'keyword',
                                'type',
                                'save_employer',
                                'current_date',
                                'emp_list_meta_title',
                                'emp_list_meta_desc',
                                'show_emp_banner',
                                'e_inner_banner',
                                'enable_package',
                                'show_breadcrumbs'
                            )
                        );
                    }
                } elseif ($type === 'freelancer') {
                    $f_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['f_list_meta_title']) ? $inner_page[0]['f_list_meta_title'] : trans('lang.freelancer_listing');
                    $f_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['f_list_meta_desc']) ? $inner_page[0]['f_list_meta_desc'] : trans('lang.freelancer_meta_desc');
                    $show_f_banner = !empty($inner_page) && !empty($inner_page[0]['show_f_banner']) ? $inner_page[0]['show_f_banner'] : 'true';
                    $f_inner_banner = !empty($inner_page) && !empty($inner_page[0]['f_inner_banner']) ? $inner_page[0]['f_inner_banner'] : null;
                    if (file_exists(resource_path('views/extend/front-end/freelancers/index.blade.php'))) {
                        return view(
                            'extend.front-end.freelancers.index',
                            compact(
                                'type',
                                'users',
                                'categories',
                                'locations',
                                'languages',
                                'skills',
                                'flevels',
                                'project_lengths',
                                'keyword',
                                'save_freelancer',
                                'symbol',
                                'current_date',
                                'f_list_meta_title',
                                'f_list_meta_desc',
                                'show_f_banner',
                                'f_inner_banner',
                                'enable_package',
                                'show_breadcrumbs'
                            )
                        );
                    } else {
                        return view(
                            'front-end.freelancers.index',
                            compact(
                                'type',
                                'users',
                                'categories',
                                'locations',
                                'languages',
                                'skills',
                                'flevels',
                                'project_lengths',
                                'keyword',
                                'save_freelancer',
                                'symbol',
                                'current_date',
                                'f_list_meta_title',
                                'f_list_meta_desc',
                                'show_f_banner',
                                'f_inner_banner',
                                'enable_package',
                                'show_breadcrumbs'
                            )
                        );
                    }
                } else {
                    abort(404);
                }
            } elseif ($type == 'service') {
                $service_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['service_list_meta_title']) ? $inner_page[0]['service_list_meta_title'] : trans('lang.service_listing');
                $service_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['service_list_meta_desc']) ? $inner_page[0]['service_list_meta_desc'] : trans('lang.service_meta_desc');
                $show_service_banner = !empty($inner_page) && !empty($inner_page[0]['show_service_banner']) ? $inner_page[0]['show_service_banner'] : 'true';
                $service_inner_banner = !empty($inner_page) && !empty($inner_page[0]['service_inner_banner']) ? $inner_page[0]['service_inner_banner'] : null;
                // $services= Service::all();
                $delivery_time = DeliveryTime::all();
                $response_time = ResponseTime::all();
                $services_total_records = Service::count();
                $results = Service::getSearchResult(
                    $keyword,
                    $search_categories,
                    $search_locations,
                    $search_languages,
                    $search_delivery_time,
                    $search_response_time
                );
                $services = $results['services'];
                if (file_exists(resource_path('views/extend/front-end/services/index.blade.php'))) {
                    return view(
                        'extend.front-end.services.index',
                        compact(
                            'services_total_records',
                            'type',
                            'services',
                            'symbol',
                            'keyword',
                            'categories',
                            'locations',
                            'languages',
                            'delivery_time',
                            'response_time',
                            'service_list_meta_title',
                            'service_list_meta_desc',
                            'show_service_banner',
                            'service_inner_banner',
                            'show_breadcrumbs'
                        )
                    );
                } else {
                    return view(
                        'front-end.services.index',
                        compact(
                            'services_total_records',
                            'type',
                            'services',
                            'symbol',
                            'keyword',
                            'categories',
                            'locations',
                            'languages',
                            'delivery_time',
                            'response_time',
                            'service_list_meta_title',
                            'service_list_meta_desc',
                            'show_service_banner',
                            'service_inner_banner',
                            'show_breadcrumbs'
                        )
                    );
                }
            } else {
                $job_list_meta_title = !empty($inner_page) && !empty($inner_page[0]['job_list_meta_title']) ? $inner_page[0]['job_list_meta_title'] : trans('lang.job_listing');
                $job_list_meta_desc = !empty($inner_page) && !empty($inner_page[0]['job_list_meta_desc']) ? $inner_page[0]['job_list_meta_desc'] : trans('lang.job_meta_desc');
                $show_job_banner = !empty($inner_page) && !empty($inner_page[0]['show_job_banner']) ? $inner_page[0]['show_job_banner'] : 'true';
                $job_inner_banner = !empty($inner_page) && !empty($inner_page[0]['job_inner_banner']) ? $inner_page[0]['job_inner_banner'] : null;
                $results = Job::getSearchResult(
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
                );
                $jobs = $results['jobs'];
                if (!empty($jobs)) {
                    if (file_exists(resource_path('views/extend/front-end/jobs/index.blade.php'))) {
                        return view(
                            'extend.front-end.jobs.index',
                            compact(
                                'jobs',
                                'categories',
                                'locations',
                                'languages',
                                'freelancer_skills',
                                'project_lengths',
                                'keyword',
                                'skills',
                                'citations',
                                'rlevels',
                                'type',
                                'current_date',
                                'symbol',
                                'job_list_meta_title',
                                'job_list_meta_desc',
                                'show_job_banner',
                                'job_inner_banner',
                                'show_breadcrumbs'
                            )
                        );
                    } else {
                        return view(
                            'front-end.jobs.index',
                            compact(
                                'jobs',
                                'categories',
                                'locations',
                                'languages',
                                'freelancer_skills',
                                'project_lengths',
                                'keyword',
                                'skills',
                                'citations',
                                'rlevels',
                                'type',
                                'current_date',
                                'symbol',
                                'job_list_meta_title',
                                'job_list_meta_desc',
                                'show_job_banner',
                                'job_inner_banner',
                                'show_breadcrumbs'
                            )
                        );
                    }
                }
            }
        } else {
            abort(404);
        }
    }

    /**
     * Get Pass Reset Form
     *
     * @param mixed $verification_code verification_code
     *
     * @access public
     *
     * @return View
     */
    public function resetPasswordView($verification_code)
    {
        if (!empty($verification_code)) {
            session()->put(['verification_code' => $verification_code]);
            if (file_exists(resource_path('views/extend/front-end/reset-password.blade.php'))) {
                return View('extend.front-end.reset-password');
            } else {
                return View('front-end.reset-password');
            }
        } else {
            abort(404);
        }
    }

    /**
     * Reset user password.
     *
     * @param mixed $request req->attr
     *
     * @access public
     *
     * @return View
     */
    public function resetUserPassword(Request $request)
    {
        if (Session::has('verification_code')) {
            $verification_code = Session::get('verification_code');
            if (!empty($request)) {
                $this->validate(
                    $request,
                    [
                        'new_password' => 'required',
                        'confirm_password' => 'required',
                    ]
                );
                $user_id = User::select('verification_code', 'id')
                    ->where('verification_code', $verification_code)
                    ->pluck('id')->first();
                $user = User::find($user_id);
                if ($request->new_password === $request->confirm_password) {
                    if ($verification_code === $user->verification_code) {
                        $user->password = Hash::make($request->confirm_password);
                        $user->verification_code = null;
                        $user->save();
                        Auth::logout();
                        session()->forget('verification_code');
                        return Redirect::to('/');
                    } else {
                        Session::flash('error', trans('lang.invalid_verify_code'));
                        return Redirect::back();
                    }
                } else {
                    Session::flash('error', trans('lang.pass_mismatched'));
                    return Redirect::back();
                }
            } else {
                Session::flash('error', trans('lang.something_wrong'));
                return Redirect::back();
            }
        } else {
            Session::flash('error', trans('lang.invalid_verify_code'));
            return Redirect::back();
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return View
     */
    public function checkProposalAuth()
    {
        $json = array();
        if (Auth::user() && Auth::user()->getRoleNames()->first() === 'freelancer') {
            $json['auth'] = true;
            return $json;
        } else {
            $json['auth'] = false;
            $json['message'] = trans('lang.not_authorize');
            return $json;
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return View
     */
    public function checkServiceAuth()
    {
        $json = array();
        if (Auth::user() && Auth::user()->getRoleNames()->first() === 'employer') {
            $json['auth'] = true;
            return $json;
        } else {
            $json['auth'] = false;
            $json['message'] = trans('lang.not_authorize');
            return $json;
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return unserialize array
     */
    public function getFreelancerExperience(Request $request)
    {
        $json = array();
        $id = $request['id'];
        $freelancer = User::find($id);
        if (!empty($freelancer)) {
            $json['type'] = 'success';
            $json['experience'] = unserialize($freelancer->profile->experience);
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return View
     */
    public function getFreelancerEducation(Request $request)
    {
        $json = array();
        $id = $request['id'];
        $freelancer = User::find($id);
        if (!empty($freelancer)) {
            $json['type'] = 'success';
            $json['education'] = unserialize($freelancer->profile->education);
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }

    /**
     * Check user authorization.
     *
     * @access public
     *
     * @return View
     */
    public function getFreelancerService(Request $request)
    {
        $json = array();
        $id = $request['id'];
        $freelancer = User::find($id);
        if (!empty($freelancer)) {
            $json['type'] = 'success';
            $json['user'] = $freelancer;
            $json['services'] = Helper::getUnserializeData($freelancer->services);
            return $json;
        } else {
            $json['type'] = 'error';
            return $json;
        }
    }
}