@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 'extend.front-end.master' : 'front-end.master')
@push('stylesheets')
    <link href="{{ asset('css/prettyPhoto-min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
@endpush
@php 
    $app_description =  env('APP_DESCRIPTION'); 
    $currency   = App\SiteManagement::getMetaValue('commision');
    $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
@endphp
@section('title'){{ config('app.name') }} @stop
@section('description', "$app_description")
@section('content')
    @php
        $categories = App\Category::latest()->get()->take(8);
        $skills = App\Skill::latest()->get()->take(8);
        $locations = App\Location::latest()->get()->take(8);
        $languages = App\Language::latest()->get()->take(8);
        $type = Helper::getAccessType() == 'services' ? 'service' : 'job';
        if (Schema::hasTable('services') && Schema::hasTable('service_user')) {
            $services = App\Service::latest()->paginate(6);
        }
        $memebers_count = App\User::totalUserCount();
        $projects_count = App\Job::totalProjectCount();
    @endphp
    <div id="home" class="la-home-page">
        @if (Session::has('error'))
            <div class="flash_msg">
                <flash_messages :message_class="'danger'" :time ='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
            </div>
            @php session()->forget('error'); @endphp
        @endif
        <div class="wt-haslayout wt-bannerholder" style="background-image:url({{{ asset(Helper::getHomeBanner('image')) }}})">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="wt-bannerimages">
                            <figure class="wt-bannermanimg" data-tilt>
                                <img src="{{{ asset(Helper::getHomeBanner('inner_image')) }}}" alt="{{{ trans('lang.img') }}}">
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="wt-bannercontent">
                            <div class="wt-bannerhead">
                                <div class="wt-customtitle">
                                    <span>{{{ Helper::getHomeBanner('title') }}}</span>
                                    {{{ Helper::getHomeBanner('subtitle') }}}
                                </div>
                            </div>
                            <div class="wt-btnarea pt-4 pb-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2"></div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                            <a href="{{{ url(route('employerDashboard')) }}}" class="form-control wt-btn" style="padding: 0 40px; border: none; text-transform: capitalize; font: 700 16px/50px 'Poppins', Arial, Helvetica, sans-serif;">{{{ trans('lang.hire_writer') }}}</a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                            <a href="{{{ url(route('freelancerDashboard')) }}}" class="form-control wt-writebtn">{{{ trans('lang.be_writer') }}}</a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <search-form
                            :widget_type="'home'"
                            :placeholder="'{{ trans('lang.looking_for') }}'"
                            :freelancer_placeholder="'{{ trans('lang.search_filter_list.freelancer') }}'"
                            :employer_placeholder="'{{ trans('lang.search_filter_list.employers') }}'"
                            :job_placeholder="'{{ trans('lang.search_filter_list.jobs') }}'"
                            :service_placeholder="'{{ trans('lang.search_filter_list.services') }}'"
                            :no_record_message="'{{ trans('lang.no_record') }}'"
                            >
                            </search-form>
                            <div class="wt-videoholder pb-5">
                                <div class="wt-videoshow">
                                    <a data-rel="prettyPhoto[video]" href="{{{ Helper::getHomeBanner('video_url') }}}"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="wt-videocontent">
                                    <span>{{{  Helper::getHomeBanner('video_title') }}}<em>{{{ Helper::getHomeBanner('video_description') }}}</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <section class="wt-haslayout wt-main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    
                    <div class="wt-categoryexpl">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 float-left">
                            <div class="wt-categorycontent" style="background: #fb590d">
                                <h4 class="pt-3 wt-blue">{{{ date("Y") }}}</h4>
                                <div class="wt-cattitle">
                                    <p class="wt-counttitle wt-white">{{{ trans('lang.members_total_count') }}}</p>
                                </div>
                                <div class="wt-categoryslidup wt-bgwhite">
                                    <h4 class="pt-3"><strong>{{{ $memebers_count }}}</strong></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 float-left">
                            <div class="wt-categorycontent" style="background: #fb590d">
                                <h4 class="pt-3 wt-blue">{{{ date("Y") }}}</h4>
                                <div class="wt-cattitle">
                                    <p class="wt-counttitle wt-white">{{{ trans('lang.projects_total_count') }}}</p>
                                </div>
                                <div class="wt-categoryslidup wt-bgwhite">
                                    <h4 class="pt-3"><strong>{{{ $projects_count }}}</strong></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="wt-haslayout" style="background: linear-gradient(180deg, rgb(247, 243, 243), rgb(221, 234, 247)) !important;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                        <div class="wt-howitwork-hold wt-haslayout">
                            <div class="tab-content wt-haslayout">
                                <div class="wt-contentarticle tab-pane active fade show">
                                    <div class="row">
                                        <div class="wt-starthiringhold wt-innerspace wt-haslayout">
                                            <div class="wt-sectionhead wt-textcenter">
                                                <div class="wt-sectiontitle pl-5 pr-5">
                                                    <div class="wt-desc">
                                                        <!-- <div class="wt-themecolor"> -->
                                                       <div class="wt-btn" style="padding: 0 20px; border: none; text-transform: capitalize; font: 50 16px/35px 'Poppins', Arial, Helvetica, sans-serif;">
                                                            {{{ Helper::getHomeBanner('description') }}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                        <div class="wt-textcenter">
                                                            <figure class="wt-icon-img"><img src="{{{ asset('uploads\settings\icon\idea.png') }}}" alt="{{{ trans('lang.img') }}}" /></figure>
                                                        </div>
                                                        <div class="wt-normal wt-textcenter pt-4">
                                                            <span class="wt-black">Find talented writers and editors</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                        <div class="wt-textcenter">
                                                            <figure class="wt-icon-img"><img src="{{{ asset('uploads\settings\icon\web-programming.png') }}}" alt="{{{ trans('lang.img') }}}" /></figure>
                                                        </div>
                                                        <div class="wt-normal wt-textcenter pt-4">
                                                            <span class="wt-black">Hire the best researchers</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                        <div class="wt-textcenter">
                                                            <figure class="wt-icon-img"><img src="{{{ asset('uploads\settings\icon\shield.png') }}}" alt="{{{ trans('lang.img') }}}" /></figure>
                                                        </div>
                                                        <div class="wt-normal wt-textcenter pt-4">
                                                            <span class="wt-black">Browse our highest-rated writers & editors</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wt-haslayout wt-main-section wt-bgwhite">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                        <div class="wt-sectionhead wt-textcenter">
                            <div class="wt-sectiontitle">
                                <h3 class="wt-themecolor">{{{ Helper::getHomeSection('detail_sec_title') }}}</h3>
                                <em class="wt-black">{{{ Helper::getHomeSection('detail_sec_subtitle') }}}</em>
                            </div>
                        </div>
                    </div>
                    <div class="wt-categoryexpl">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 float-left pb-4">
                            <div class="wt-categorycontent">
                                <div class="wt-sectionhead">
                                    <div class="wt-topic wt-themecolor">
                                        <p>Hire a Research Writer</p>
                                    </div>
                                </div>
                                <div class="wt-description">
                                    <p class="wt-black">Tell us what you need done and get free quotes from skilled writers within minutes, view profiles, ratings and portfolios and chat with them.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 float-left pb-4">
                            <div class="wt-categorycontent">
                                <div class="wt-sectionhead">
                                    <div class="wt-topic wt-themecolor">
                                        <p>Be in Control, Keep in Contact</p>
                                    </div>
                                </div>
                                <div class="wt-sectionbody" style="text-align: left;">
                                    <ul class="wt-themecolor">
                                        <li style="list-style: circle; line-height: 22px;">
                                            <span class="wt-black">Track progress, monitor hours, communicate, share, and do much more. Always know what's going on with your project, what is getting done, and what still need done.</span>
                                        </li>
                                        <li style="list-style: circle; line-height: 22px;">
                                            <span class="wt-black">Stay in touch with your writer whenever you have questions, updates, or have something to share.</span>
                                        </li>
                                        <li style="list-style: circle; line-height: 22px;">
                                            <span class="wt-black">Control the completion of projects, and payments. Only release your payment when benchmarks are met, or when a project is completed to your satisfaction.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 float-left pb-4">
                            <div class="wt-categorycontent">
                                <div class="wt-sectionhead">
                                    <div class="wt-topic wt-themecolor">
                                        <p>Safe and Secure.</p>
                                    </div>
                                </div>
                                <div class="wt-description">
                                    <div class="wt-title">
                                        <p class="wt-black">ResearchFreelancer is a community that values your trust and safety as our number one priority:</p>
                                    </div>
                                    <div class="wt-sectionbody" style="text-align: left;">
                                        <ul class="wt-themecolor">
                                            <li style="list-style: square; line-height: 28px;">
                                                <span class="wt-black">State-of-the-art security for your funds. All transactions are secured with SSL encryption.</span>
                                            </li>
                                            <li style="list-style: square; line-height: 28px;">
                                                <span class="wt-black">Make only Milestone Payments to writers to make sure you get value for your hard earned money.</span>
                                            </li>
                                            <li style="list-style: square; line-height: 28px;">
                                                <span class="wt-black">Our representatives are available 24/7 to assist you with any issues.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 float-left pb-4">
                            <div class="wt-categorycontent">
                                <div class="wt-sectionhead">
                                    <div class="wt-topic wt-themecolor">
                                        <p>Need work done?</p>
                                    </div>
                                    <div class="wt-sectionbody" style="text-align: left;">
                                        <ul class="wt-themecolor">
                                            <li style="list-style: circle; line-height: 25px;">
                                                <span class="wt-black">It's easy. Simply post a research job and receive competitive bids from freelancers within minutes.</span>
                                            </li>
                                            <li style="list-style: circle; line-height: 25px;">
                                                <span class="wt-black">Whatever your research  needs are, there will be a writer to get it done: from research thesis, research project, data analysis, seminar, term paper, assignment, business plan, feasibility report and a whole lot more.</span>
                                            </li>
                                            <li style="list-style: circle; line-height: 25px;">
                                                <span class="wt-black">With secure payments and thousands of reviewed professional writers to choose from, researchfreelancer.com is the simplest and safest way to get research work done online.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group pt-4">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <a href="{{url('employer/post-job')}}" class="wt-btn" style="padding: 0 40px; border: none; text-transform: capitalize; font: 700 16px/50px 'Poppins', Arial, Helvetica, sans-serif;">{{{ trans('lang.post_job') }}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wt-haslayout" style="background-image:url({{{ asset(Helper::getHomeSection('background_image')) }}})">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                        <div class="wt-howitwork-hold wt-haslayout">
                            <div class="tab-content wt-haslayout">
                                <div class="wt-contentarticle tab-pane active fade show">
                                    <div class="row">
                                        <div class="wt-starthiringhold wt-innerspace wt-haslayout">
                                            <div class="wt-about-rf" style="">
                                                <div class="wt-sectionhead wt-textcenter">
                                                    <div class="wt-title">
                                                        <h3 class="wt-themecolor">What's great about ResearchFreelancer?</h3>
                                                    </div>
                                                </div>
                                                <div class="wt-sectionbody">
                                                    <ul class="wt-desc wt-themecolor">
                                                        <li style="list-style: outside;"><span class="wt-normal wt-white">You only have to pay for work when it has been completed and you're 100% satisfied.</span></li> 
                                                        <li style="list-style: outside;"><span class="wt-normal wt-white">You'll receive free bids from our talented writers within seconds.</span></li> 
                                                        <li style="list-style: outside;"><span class="wt-normal wt-white">We're always here to help. Our support consists of real people who are available 24/7.</span></li>
                                                        <li style="list-style: outside;"><span class="wt-normal wt-white">You can live chat with your writers to get constant updates on the progress of your work.</span></li>
                                                        <li style="list-style: outside;"><span class="wt-normal wt-white">Find professionals you can trust by browsing their samples of previous work and reading their profile reviews.</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wt-haslayout wt-bgwhite">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                        <div class="wt-howitwork-hold wt-haslayout">
                            <div class="tab-content wt-haslayout">
                                <div class="wt-contentarticle tab-pane active fade show">
                                    <div class="row">
                                        <div class="wt-starthiringhold wt-innerspace wt-haslayout">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-right">
                                                <div class="wt-starthiringcontent">
                                                    <div class="wt-sectionhead">
                                                        <div class="wt-sectiontitle">
                                                            <p>What kind of work can I do?</p>
                                                        </div>
                                                    </div>
                                                    <div class="wt-sectionbody">
                                                        <ul class="wt-normal wt-themecolor">
                                                            <li style="list-style: circle;">
                                                                <span class="wt-black">You can find just about any research job you can imagine.</span>
                                                            </li>
                                                            <li style="list-style: circle;">
                                                                <span class="wt-black">We have jobs ranging from thesis, research project, data analysis, seminar, term paper, assignment, business plan, feasibility report and all lots of research work.</span>
                                                            </li>
                                                            <li style="list-style: circle;">
                                                                <span class="wt-black">You can find a variety of jobs that suit you on researchfreelancer.com.</span>
                                                            </li>
                                                            <li style="list-style: circle;">
                                                                <span class="wt-black">Just complete your profile and let us know your skill sets so we can match you to the right jobs.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="form-group pt-4">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"></div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                            <a href="{{{ url(route('employerPostJob')) }}}" class="wt-btn" style="padding: 0 40px; border: none; text-transform: capitalize; font: 700 16px/50px 'Poppins', Arial, Helvetica, sans-serif;">{{{ trans('lang.browse_jobs') }}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                                <div class="wt-mobileimg">
                                                    <figure>
                                                        <img src="{{{ asset('uploads\settings\home\best-writing-courses-the-writers-college.png') }}}" alt="{{{ trans('lang.img') }}}">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wt-haslayout wt-bglight">
            <div class="container">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                  <div class="wt-howitwork-hold wt-haslayout">
                    <div class="tab-content wt-haslayout">
                      <div class="wt-contentarticle tab-pane active fade show">
                        <div class="row">
                            <div class="wt-starthiringhold wt-innerspace wt-haslayout">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                    <div class="wt-starthiringcontent">
                                        <div class="wt-sectionhead">
                                            <div class="wt-sectiontitle">
                                                <p>Safe and Secure.</p>
                                            </div>
                                            <div class="wt-description">
                                                <p class="wt-black">ResearchFreelancer is a community that values your trust and safety as our number one priority:</p>
                                            </div>
                                        </div>
                                        <div class="wt-sectionbody">
                                            <ul class="wt-themecolor">
                                                <li style="list-style: square;">
                                                    <span class="wt-black">State-of-the-art security for your funds. All transactions are secured with SSL encryption.</span>
                                                </li>
                                                <li style="list-style: square;">
                                                    <span class="wt-black">Make only Milestone Payments to writers to make sure you get value for your hard earned money.</span>
                                                </li>
                                                <li style="list-style: square;">
                                                    <span class="wt-black">Our representatives are available 24/7 to assist you with any issues.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-right">
                                    <div class="wt-secure-img">
                                        <figure><img src="{{ asset('uploads\settings\home\5-ways-to-keep-your-data-safe-and-secure.png') }}" alt="img description" width="350" height="386" /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <section class="wt-haslayout wt-bgwhite">
            <div class="container">
              <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                  <div class="wt-howitwork-hold wt-haslayout">
                    <div class="tab-content wt-haslayout">
                      <div class="wt-contentarticle tab-pane active fade show">
                        <div class="row">
                            <div class="wt-starthiringhold wt-innerspace wt-haslayout">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-right">
                                    <div class="wt-starthiringcontent">
                                        <div class="wt-sectionhead">
                                            <div class="wt-sectiontitle">
                                                <p>Manage Your Career.</p>
                                            </div>
                                              <div class="wt-description">
                                                    <p class="wt-black">ResearchFreelancer is a community that values your trust and safety as our number one priority:</p>
                                              </div>
                                        </div>
                                        <div class="wt-sectionbody">
                                            <ul class="wt-themecolor">
                                                <li style="list-style: square;">
                                                    <span class="wt-black">Stay up to date on the researchfreelancer.com and keep in touch with your clients.</span>
                                                </li>
                                                <li style="list-style: square;">
                                                    <span class="wt-black">Collaborate with your clients on the go and get alerted on the latest jobs with our mobile app and desktop platform.</span>
                                                </li>
                                                <li style="list-style: square;">
                                                    <span class="wt-black">Our job alerts system will keep you updated once new projects that fit your skills and expertise become available. Bid away!</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <div class="row pt-4">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"></div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                    <a href="{{{ url(route('freelancerDashboard')) }}}" class="wt-btn" style="padding: 0 40px; border: none; text-transform: capitalize; font: 700 16px/50px 'Poppins', Arial, Helvetica, sans-serif;">{{{ trans('lang.become_writer') }}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                    <div class="wt-howtoworkimg">
                                        <figure><img src="{{{ asset('uploads\settings\home\manage_carrer.png') }}}" alt="{{{ trans('lang.img') }}}" alt="img description" width="415" height="386" /></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!--Top Services Start-->
        @if (Helper::getServiceSection('show_services_section') === 'true')
            <section class="wt-haslayout wt-main-section wt-bglight">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 push-lg-2">
                            <div class="wt-sectionhead wt-textcenter wt-topservices-title">
                                <div class="wt-sectiontitle">
                                    <h2>{{ Helper::getServiceSection('title') }}</h2>
                                    <span>{{ Helper::getServiceSection('subtitle') }}</span>
                                </div>
                                <div class="wt-description">
                                    @php echo htmlspecialchars_decode(stripslashes(Helper::getServiceSection('description'))); @endphp
                                </div>
                            </div>
                        </div>
                        <div class="wt-freelancers-holder wt-freelancers-home row">
                            @if (!empty($services) && $services->count() > 0)
                                @foreach ($services as $service)
                                    @php 
                                        $service_reviews = $service->seller->count() > 0 ? Helper::getServiceReviews($service->seller[0]->id, $service->id) : ''; 
                                        $service_rating  = !empty($service_reviews) && $service_reviews->sum('avg_rating') != 0 ? round($service_reviews->sum('avg_rating') / $service_reviews->count()) : 0;
                                        $attachments = Helper::getUnserializeData($service->attachments);
                                        $no_attachments = empty($attachments) ? 'la-service-info' : '';
                                        $enable_slider = !empty($attachments) ? 'wt-servicesslider' : '';
                                        $total_orders = Helper::getServiceCount($service->id, 'hired');
                                    @endphp
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 float-left">
                                        <div class="wt-freelancers-info {{$no_attachments}}">
                                            @if($service->seller->count() > 0)
                                                @if (!empty($attachments))
                                                    @php $enable_slider = count($attachments) > 1 ? 'wt-freelancerslider owl-carousel' : ''; @endphp
                                                    <div class="wt-freelancers {{{$enable_slider}}}">
                                                        @foreach ($attachments as $attachment)
                                                            <figure class="item">
                                                                <a href="{{{ url('profile/'.$service->seller[0]->slug) }}}"><img src="{{{asset(Helper::getImageWithSize('uploads/services/'.$service->seller[0]->id, $attachment, 'medium'))}}}" alt="img description" class="item"></a>
                                                            </figure>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            @endif
                                            @if ($service->is_featured == 'true')
                                                <span class="wt-featuredtagvtwo">{{ trans('lang.featured') }}</span>
                                            @endif
                                            <div class="wt-freelancers-details">
                                                @if ($service->seller->count() > 0)
                                                    <figure class="wt-freelancers-img">
                                                        <img src="{{ asset(Helper::getProfileImage($service->seller[0]->id)) }}" alt="img description">
                                                    </figure>
                                                @endif
                                                <div class="wt-freelancers-content">
                                                    <div class="dc-title">
                                                        @if ($service->seller->count() > 0)
                                                            <a href="{{{ url('profile/'.$service->seller[0]->slug) }}}"><i class="fa fa-check-circle"></i> {{{Helper::getUserName($service->seller[0]->id)}}}</a>
                                                        @endif
                                                        <a href="{{{url('service/'.$service->slug)}}}"><h3>{{{$service->title}}}</h3></a>
                                                        <span><strong>{{ (!empty($symbol['symbol'])) ? $symbol['symbol'] : '$' }}{{{$service->price}}}</strong> {{trans('lang.starting_from')}}</span>
                                                    </div>
                                                </div>
                                                <div class="wt-freelancers-rating">
                                                    <ul>
                                                        <li><span><i class="fa fa-star"></i>{{{ $service_rating }}}/<i>5</i> ({{{!empty($service_reviews) ? $service_reviews->count() : ''}}})</span></li>
                                                        <li>
                                                            @if ($total_orders > 0)
                                                                <i class="fa fa-spinner fa-spin"></i>
                                                            @endif
                                                            {{{$total_orders}}} {{ trans('lang.in_queue') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!-- @if (Helper::getHomeSection('show_section') == 'true')
            <section class="wt-haslayout wt-main-section wt-paddingnull wt-bannerholdervtwo" style="background-image:url({{{ asset(Helper::getHomeSection('background_image')) }}})">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="wt-companydetails">
                                <div class="wt-companycontent">
                                    <div class="wt-companyinfotitle">
                                        <h2>{{{ Helper::getHomeSection('left_title') }}}</h2>
                                    </div>
                                    <div class="wt-description">
                                        <p>{{{  Helper::getHomeSection('left_description')  }}}</p>
                                    </div>
                                    <div class="wt-btnarea">
                                        <a href="{{{ Helper::getHomeSection('left_url') }}}" class="wt-btn">{{ trans('lang.join_now') }}</a>
                                    </div>
                                </div>
                                <div class="wt-companycontent">
                                    <div class="wt-companyinfotitle">
                                        <h2>{{{ Helper::getHomeSection('right_title') }}}</h2>
                                    </div>
                                    <div class="wt-description">
                                        <p>{{{ Helper::getHomeSection('right_description') }}}</p>
                                    </div>
                                    <div class="wt-btnarea">
                                        <a href="{{{ Helper::getHomeSection('right_url') }}}" class="wt-btn">{{ trans('lang.join_now') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif -->
        <!-- @if (Helper::getHomeSection('show_app_section') == 'true')
            <section class="wt-haslayout wt-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
                            <figure class="wt-mobileimg">
                                <img src="{{{ asset(Helper::getAppSection('image')) }}}" alt="{{{ trans('lang.img') }}}">
                            </figure>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
                            <div class="wt-experienceholder">
                                <div class="wt-sectionhead">
                                    <div class="wt-sectiontitle">
                                        <h2>{{{ Helper::getAppSection('title') }}}</h2>
                                        <span>{{{ Helper::getAppSection('subtitle')  }}}</span>
                                    </div>
                                    <div class="wt-description">
                                        @php echo htmlspecialchars_decode(stripslashes(Helper::getAppSection('description'))); @endphp
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif -->
        @if ($skills->count() > 0
            || $categories->count() > 0
            || $locations->count() > 0
            || $languages->count() > 0)
            <section class="wt-haslayaout wt-main-section wt-footeraboutus">
                <div class="container">
                    <div class="row">
                        @if (Helper::getAccessType() != 'services')
                            @if ($skills->count() > 0)
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                    <div class="wt-widgetskills">
                                        <div class="wt-fwidgettitle">
                                            <h3>{{ trans('lang.by_skills') }}</h3>
                                        </div>
                                        @if (!empty($skills))
                                            <ul class="wt-fwidgetcontent">
                                                @foreach ($skills as $skill)
                                                    <li><a href="{{{url('search-results?type=project&skills%5B%5D='.$skill->slug)}}}">{{{ $skill->title }}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endif
                        @if ($categories->count() > 0)
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="wt-footercol wt-widgetcategories">
                                    <div class="wt-fwidgettitle">
                                        <h3>{{ trans('lang.by_cats') }}</h3>
                                    </div>
                                    @if (!empty($categories))
                                        <ul class="wt-fwidgetcontent">
                                            @foreach ($categories as $category)
                                                <li><a href="{{{url('search-results?type='.$type.'&category%5B%5D='.$category->slug)}}}">{{{ $category->title }}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        @endif
                        @if ($locations->count() > 0)
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="wt-widgetbylocation">
                                    <div class="wt-fwidgettitle">
                                        <h3>{{ trans('lang.by_locs') }}</h3>
                                    </div>
                                    @if (!empty($locations))
                                        <ul class="wt-fwidgetcontent">
                                            @foreach ($locations as $location)
                                                <li><a href="{{{url('search-results?type='.$type.'&locations%5B%5D='.$location->slug)}}}">{{{ $location->title }}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        @endif
                        @if ($languages->count() > 0)
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="wt-widgetbylocation">
                                    <div class="wt-fwidgettitle">
                                        <h3>{{ trans('lang.by_lang') }}</h3>
                                    </div>
                                    @if (!empty($languages))
                                        <ul class="wt-fwidgetcontent">
                                            @foreach ($languages as $language)
                                                <li><a href="{{{url('search-results?type='.$type.'&languages%5B%5D='.$language->slug)}}}">{{{ $language->title }}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('js/prettyPhoto-min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        jQuery("a[data-rel]").each(function () {
		jQuery(this).attr("rel", jQuery(this).data("rel"));
	});
	jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
		animation_speed: 'normal',
		theme: 'dark_square',
		slideshow: 3000,
		default_width: 800,
        default_height: 500,
        allowfullscreen: true,
		autoplay_slideshow: false,
		social_tools: false,
		iframe_markup: "<iframe src='{path}' width='{width}' height='{height}' frameborder='no' allowfullscreen='true'></iframe>",
		deeplinking: false
    });
    var _wt_freelancerslider = jQuery('.wt-freelancerslider')
        _wt_freelancerslider.owlCarousel({
            items: 1,
            loop:true,
            nav:true,
            margin: 0,
            autoplay:false,
            navClass: ['wt-prev', 'wt-next'],
            navContainerClass: 'wt-search-slider-nav',
            navText: ['<span class="lnr lnr-chevron-left"></span>', '<span class="lnr lnr-chevron-right"></span>'],
        });
    </script>
@endpush
