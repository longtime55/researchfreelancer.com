<?php $__env->startPush('stylesheets'); ?>
    <link href="<?php echo e(asset('css/prettyPhoto-min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php 
    $app_description =  env('APP_DESCRIPTION'); 
    $currency   = App\SiteManagement::getMetaValue('commision');
    $symbol = !empty($currency) && !empty($currency[0]['currency']) ? Helper::currencyList($currency[0]['currency']) : array();
?>
<?php $__env->startSection('title'); ?><?php echo e(config('app.name')); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('description', "$app_description"); ?>
<?php $__env->startSection('content'); ?>
    <?php
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
    ?>
    <div id="home" class="la-home-page">
        <?php if(Session::has('error')): ?>
            <div class="flash_msg">
                <flash_messages :message_class="'danger'" :time ='5' :message="'<?php echo e(Session::get('error')); ?>'" v-cloak></flash_messages>
            </div>
            <?php session()->forget('error'); ?>
        <?php endif; ?>
        <div class="wt-haslayout wt-bannerholder" style="background-image:url(<?php echo e(asset(Helper::getHomeBanner('image'))); ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="wt-bannerimages">
                            <figure class="wt-bannermanimg" data-tilt>
                                <img src="<?php echo e(asset(Helper::getHomeBanner('inner_image'))); ?>" alt="<?php echo e(trans('lang.img')); ?>">
                            </figure>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="wt-bannercontent">
                            <div class="wt-bannerhead">
                                <div class="wt-customtitle">
                                    <span><?php echo e(Helper::getHomeBanner('title')); ?></span>
                                    <?php echo e(Helper::getHomeBanner('subtitle')); ?>

                                </div>
                            </div>
                            <div class="wt-btnarea pt-4 pb-4">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2"></div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                            <a href="<?php echo e(url(route('employerDashboard'))); ?>" class="form-control wt-btn" style="padding: 0 40px; border: none; text-transform: capitalize; font: 700 16px/50px 'Poppins', Arial, Helvetica, sans-serif;"><?php echo e(trans('lang.hire_writer')); ?></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                            <a href="<?php echo e(url(route('freelancerDashboard'))); ?>" class="form-control wt-writebtn"><?php echo e(trans('lang.be_writer')); ?></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <search-form
                            :widget_type="'home'"
                            :placeholder="'<?php echo e(trans('lang.looking_for')); ?>'"
                            :freelancer_placeholder="'<?php echo e(trans('lang.search_filter_list.freelancer')); ?>'"
                            :employer_placeholder="'<?php echo e(trans('lang.search_filter_list.employers')); ?>'"
                            :job_placeholder="'<?php echo e(trans('lang.search_filter_list.jobs')); ?>'"
                            :service_placeholder="'<?php echo e(trans('lang.search_filter_list.services')); ?>'"
                            :no_record_message="'<?php echo e(trans('lang.no_record')); ?>'"
                            >
                            </search-form>
                            <div class="wt-videoholder pb-5">
                                <div class="wt-videoshow">
                                    <a data-rel="prettyPhoto[video]" href="<?php echo e(Helper::getHomeBanner('video_url')); ?>"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="wt-videocontent">
                                    <span><?php echo e(Helper::getHomeBanner('video_title')); ?><em><?php echo e(Helper::getHomeBanner('video_description')); ?></em></span>
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
                                <h4 class="pt-3 wt-blue"><?php echo e(date("Y")); ?></h4>
                                <div class="wt-cattitle">
                                    <p class="wt-counttitle wt-white"><?php echo e(trans('lang.members_total_count')); ?></p>
                                </div>
                                <div class="wt-categoryslidup wt-bgwhite">
                                    <h4 class="pt-3"><strong><?php echo e($memebers_count); ?></strong></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-6 float-left">
                            <div class="wt-categorycontent" style="background: #fb590d">
                                <h4 class="pt-3 wt-blue"><?php echo e(date("Y")); ?></h4>
                                <div class="wt-cattitle">
                                    <p class="wt-counttitle wt-white"><?php echo e(trans('lang.projects_total_count')); ?></p>
                                </div>
                                <div class="wt-categoryslidup wt-bgwhite">
                                    <h4 class="pt-3"><strong><?php echo e($projects_count); ?></strong></h4>
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
                                                            <?php echo e(Helper::getHomeBanner('description')); ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                        <div class="wt-textcenter">
                                                            <figure class="wt-icon-img"><img src="<?php echo e(asset('uploads\settings\icon\idea.png')); ?>" alt="<?php echo e(trans('lang.img')); ?>" /></figure>
                                                        </div>
                                                        <div class="wt-normal wt-textcenter pt-4">
                                                            <span class="wt-black">Find talented writers and editors</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                        <div class="wt-textcenter">
                                                            <figure class="wt-icon-img"><img src="<?php echo e(asset('uploads\settings\icon\web-programming.png')); ?>" alt="<?php echo e(trans('lang.img')); ?>" /></figure>
                                                        </div>
                                                        <div class="wt-normal wt-textcenter pt-4">
                                                            <span class="wt-black">Hire the best researchers</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                        <div class="wt-textcenter">
                                                            <figure class="wt-icon-img"><img src="<?php echo e(asset('uploads\settings\icon\shield.png')); ?>" alt="<?php echo e(trans('lang.img')); ?>" /></figure>
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
                                <h3 class="wt-themecolor"><?php echo e(Helper::getHomeSection('detail_sec_title')); ?></h3>
                                <em class="wt-black"><?php echo e(Helper::getHomeSection('detail_sec_subtitle')); ?></em>
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
                                        <a href="<?php echo e(url('employer/post-job')); ?>" class="wt-btn" style="padding: 0 40px; border: none; text-transform: capitalize; font: 700 16px/50px 'Poppins', Arial, Helvetica, sans-serif;"><?php echo e(trans('lang.post_job')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wt-haslayout" style="background-image:url(<?php echo e(asset(Helper::getHomeSection('background_image'))); ?>)">
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
                                                            <a href="<?php echo e(url(route('employerPostJob'))); ?>" class="wt-btn" style="padding: 0 40px; border: none; text-transform: capitalize; font: 700 16px/50px 'Poppins', Arial, Helvetica, sans-serif;"><?php echo e(trans('lang.browse_jobs')); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                                <div class="wt-mobileimg">
                                                    <figure>
                                                        <img src="<?php echo e(asset('uploads\settings\home\best-writing-courses-the-writers-college.png')); ?>" alt="<?php echo e(trans('lang.img')); ?>">
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
                                        <figure><img src="<?php echo e(asset('uploads\settings\home\5-ways-to-keep-your-data-safe-and-secure.png')); ?>" alt="img description" width="350" height="386" /></figure>
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
                                                    <a href="<?php echo e(url(route('freelancerDashboard'))); ?>" class="wt-btn" style="padding: 0 40px; border: none; text-transform: capitalize; font: 700 16px/50px 'Poppins', Arial, Helvetica, sans-serif;"><?php echo e(trans('lang.become_writer')); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                    <div class="wt-howtoworkimg">
                                        <figure><img src="<?php echo e(asset('uploads\settings\home\manage_carrer.png')); ?>" alt="<?php echo e(trans('lang.img')); ?>" alt="img description" width="415" height="386" /></figure>
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
        <?php if(Helper::getServiceSection('show_services_section') === 'true'): ?>
            <section class="wt-haslayout wt-main-section wt-bglight">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 push-lg-2">
                            <div class="wt-sectionhead wt-textcenter wt-topservices-title">
                                <div class="wt-sectiontitle">
                                    <h2><?php echo e(Helper::getServiceSection('title')); ?></h2>
                                    <span><?php echo e(Helper::getServiceSection('subtitle')); ?></span>
                                </div>
                                <div class="wt-description">
                                    <?php echo htmlspecialchars_decode(stripslashes(Helper::getServiceSection('description'))); ?>
                                </div>
                            </div>
                        </div>
                        <div class="wt-freelancers-holder wt-freelancers-home row">
                            <?php if(!empty($services) && $services->count() > 0): ?>
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                        $service_reviews = $service->seller->count() > 0 ? Helper::getServiceReviews($service->seller[0]->id, $service->id) : ''; 
                                        $service_rating  = !empty($service_reviews) && $service_reviews->sum('avg_rating') != 0 ? round($service_reviews->sum('avg_rating') / $service_reviews->count()) : 0;
                                        $attachments = Helper::getUnserializeData($service->attachments);
                                        $no_attachments = empty($attachments) ? 'la-service-info' : '';
                                        $enable_slider = !empty($attachments) ? 'wt-servicesslider' : '';
                                        $total_orders = Helper::getServiceCount($service->id, 'hired');
                                    ?>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 float-left">
                                        <div class="wt-freelancers-info <?php echo e($no_attachments); ?>">
                                            <?php if($service->seller->count() > 0): ?>
                                                <?php if(!empty($attachments)): ?>
                                                    <?php $enable_slider = count($attachments) > 1 ? 'wt-freelancerslider owl-carousel' : ''; ?>
                                                    <div class="wt-freelancers <?php echo e($enable_slider); ?>">
                                                        <?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <figure class="item">
                                                                <a href="<?php echo e(url('profile/'.$service->seller[0]->slug)); ?>"><img src="<?php echo e(asset(Helper::getImageWithSize('uploads/services/'.$service->seller[0]->id, $attachment, 'medium'))); ?>" alt="img description" class="item"></a>
                                                            </figure>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if($service->is_featured == 'true'): ?>
                                                <span class="wt-featuredtagvtwo"><?php echo e(trans('lang.featured')); ?></span>
                                            <?php endif; ?>
                                            <div class="wt-freelancers-details">
                                                <?php if($service->seller->count() > 0): ?>
                                                    <figure class="wt-freelancers-img">
                                                        <img src="<?php echo e(asset(Helper::getProfileImage($service->seller[0]->id))); ?>" alt="img description">
                                                    </figure>
                                                <?php endif; ?>
                                                <div class="wt-freelancers-content">
                                                    <div class="dc-title">
                                                        <?php if($service->seller->count() > 0): ?>
                                                            <a href="<?php echo e(url('profile/'.$service->seller[0]->slug)); ?>"><i class="fa fa-check-circle"></i> <?php echo e(Helper::getUserName($service->seller[0]->id)); ?></a>
                                                        <?php endif; ?>
                                                        <a href="<?php echo e(url('service/'.$service->slug)); ?>"><h3><?php echo e($service->title); ?></h3></a>
                                                        <span><strong><?php echo e((!empty($symbol['symbol'])) ? $symbol['symbol'] : '$'); ?><?php echo e($service->price); ?></strong> <?php echo e(trans('lang.starting_from')); ?></span>
                                                    </div>
                                                </div>
                                                <div class="wt-freelancers-rating">
                                                    <ul>
                                                        <li><span><i class="fa fa-star"></i><?php echo e($service_rating); ?>/<i>5</i> (<?php echo e(!empty($service_reviews) ? $service_reviews->count() : ''); ?>)</span></li>
                                                        <li>
                                                            <?php if($total_orders > 0): ?>
                                                                <i class="fa fa-spinner fa-spin"></i>
                                                            <?php endif; ?>
                                                            <?php echo e($total_orders); ?> <?php echo e(trans('lang.in_queue')); ?>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- <?php if(Helper::getHomeSection('show_section') == 'true'): ?>
            <section class="wt-haslayout wt-main-section wt-paddingnull wt-bannerholdervtwo" style="background-image:url(<?php echo e(asset(Helper::getHomeSection('background_image'))); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="wt-companydetails">
                                <div class="wt-companycontent">
                                    <div class="wt-companyinfotitle">
                                        <h2><?php echo e(Helper::getHomeSection('left_title')); ?></h2>
                                    </div>
                                    <div class="wt-description">
                                        <p><?php echo e(Helper::getHomeSection('left_description')); ?></p>
                                    </div>
                                    <div class="wt-btnarea">
                                        <a href="<?php echo e(Helper::getHomeSection('left_url')); ?>" class="wt-btn"><?php echo e(trans('lang.join_now')); ?></a>
                                    </div>
                                </div>
                                <div class="wt-companycontent">
                                    <div class="wt-companyinfotitle">
                                        <h2><?php echo e(Helper::getHomeSection('right_title')); ?></h2>
                                    </div>
                                    <div class="wt-description">
                                        <p><?php echo e(Helper::getHomeSection('right_description')); ?></p>
                                    </div>
                                    <div class="wt-btnarea">
                                        <a href="<?php echo e(Helper::getHomeSection('right_url')); ?>" class="wt-btn"><?php echo e(trans('lang.join_now')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> -->
        <!-- <?php if(Helper::getHomeSection('show_app_section') == 'true'): ?>
            <section class="wt-haslayout wt-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
                            <figure class="wt-mobileimg">
                                <img src="<?php echo e(asset(Helper::getAppSection('image'))); ?>" alt="<?php echo e(trans('lang.img')); ?>">
                            </figure>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
                            <div class="wt-experienceholder">
                                <div class="wt-sectionhead">
                                    <div class="wt-sectiontitle">
                                        <h2><?php echo e(Helper::getAppSection('title')); ?></h2>
                                        <span><?php echo e(Helper::getAppSection('subtitle')); ?></span>
                                    </div>
                                    <div class="wt-description">
                                        <?php echo htmlspecialchars_decode(stripslashes(Helper::getAppSection('description'))); ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?> -->
        <?php if($skills->count() > 0
            || $categories->count() > 0
            || $locations->count() > 0
            || $languages->count() > 0): ?>
            <section class="wt-haslayaout wt-main-section wt-footeraboutus">
                <div class="container">
                    <div class="row">
                        <?php if(Helper::getAccessType() != 'services'): ?>
                            <?php if($skills->count() > 0): ?>
                                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                    <div class="wt-widgetskills">
                                        <div class="wt-fwidgettitle">
                                            <h3><?php echo e(trans('lang.by_skills')); ?></h3>
                                        </div>
                                        <?php if(!empty($skills)): ?>
                                            <ul class="wt-fwidgetcontent">
                                                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a href="<?php echo e(url('search-results?type=project&skills%5B%5D='.$skill->slug)); ?>"><?php echo e($skill->title); ?></a></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if($categories->count() > 0): ?>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="wt-footercol wt-widgetcategories">
                                    <div class="wt-fwidgettitle">
                                        <h3><?php echo e(trans('lang.by_cats')); ?></h3>
                                    </div>
                                    <?php if(!empty($categories)): ?>
                                        <ul class="wt-fwidgetcontent">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="<?php echo e(url('search-results?type='.$type.'&category%5B%5D='.$category->slug)); ?>"><?php echo e($category->title); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($locations->count() > 0): ?>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="wt-widgetbylocation">
                                    <div class="wt-fwidgettitle">
                                        <h3><?php echo e(trans('lang.by_locs')); ?></h3>
                                    </div>
                                    <?php if(!empty($locations)): ?>
                                        <ul class="wt-fwidgetcontent">
                                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="<?php echo e(url('search-results?type='.$type.'&locations%5B%5D='.$location->slug)); ?>"><?php echo e($location->title); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($languages->count() > 0): ?>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="wt-widgetbylocation">
                                    <div class="wt-fwidgettitle">
                                        <h3><?php echo e(trans('lang.by_lang')); ?></h3>
                                    </div>
                                    <?php if(!empty($languages)): ?>
                                        <ul class="wt-fwidgetcontent">
                                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><a href="<?php echo e(url('search-results?type='.$type.'&languages%5B%5D='.$language->slug)); ?>"><?php echo e($language->title); ?></a></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/tilt.jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/prettyPhoto-min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 'extend.front-end.master' : 'front-end.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>