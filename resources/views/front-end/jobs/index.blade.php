@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 
'extend.front-end.master':
 'front-end.master', ['body_class' => 'wt-innerbgcolor'] )
@section('title'){{ $job_list_meta_title }} @stop
@section('description', $job_list_meta_desc)
@section('content')
    @if ($show_job_banner == 'true')
        @php $breadcrumbs = Breadcrumbs::generate('searchResults'); @endphp
        <div class="wt-haslayout wt-innerbannerholder" style="background-image:url({{{ asset(Helper::getBannerImage('uploads/settings/general/'.$job_inner_banner)) }}})">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                        <div class="wt-innerbannercontent">
                            <div class="wt-title">
                                <h2>{{ trans('lang.jobs') }}</h2>
                            </div>
                            @if (!empty($show_breadcrumbs) && $show_breadcrumbs === 'true')
                                @if (count($breadcrumbs))
                                    <ol class="wt-breadcrumb">
                                        @foreach ($breadcrumbs as $breadcrumb)
                                            @if ($breadcrumb->url && !$loop->last)
                                                <li><a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a></li>
                                            @else
                                                <li class="active">{{{ $breadcrumb->title }}}</li>
                                            @endif
                                        @endforeach
                                    </ol>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="wt-haslayout wt-main-section" id="jobs">
        @if (Session::has('payment_message'))
            @php $response = Session::get('payment_message') @endphp
            <div class="flash_msg">
                <flash_messages :message_class="'{{{$response['code']}}}'" :time ='5' :message="'{{{ $response['message'] }}}'" v-cloak></flash_messages>
            </div>
        @endif
        <div class="wt-haslayout">
            <div class="container">
                <div class="row">
                    <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                            @if (file_exists(resource_path('views/extend/front-end/jobs/filters.blade.php'))) 
                                @include('extend.front-end.jobs.filters')
                            @else 
                                @include('front-end.jobs.filters')
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                            <div class="wt-userlistingholder wt-haslayout">
                                @if (!empty($jobs))
                                    <div class="wt-userlistingtitle">
                                        <span>{{ $jobs->firstItem() }} - {{ $jobs->firstItem() + $jobs->count() - 1 }} of {{$jobs->total()}} results @if (!empty($keyword)) for <em>"{{{$keyword}}}"</em> @endif</span>
                                    </div>
                                @endif
                                @if (!empty($jobs) && $jobs->count() > 0)
                                    @foreach ($jobs as $job)
                                        @php
                                            $job = \App\Job::find($job->id);
                                            $description = strip_tags(stripslashes($job->description));
                                            $featured_class = $job->is_featured == 'true' ? 'wt-featured' : '';
                                            $user = Auth::user() ? \App\User::find(Auth::user()->id) : '';
                                            $project_type  = Helper::getProjectTypeList($job->project_type);
                                            $symbol = Helper::currencyList($job->currency) ? Helper::currencyList($job->currency) : $symbol;
                                        @endphp
                                        <div class="wt-userlistinghold wt-userlistingholdvtwo {{$featured_class}}">
                                            @if ($job->is_featured == 'true')
                                                <span class="wt-featuredtag"><img src="images/featured.png" alt="{{{ trans('ph.is_featured') }}}" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                            @endif
                                            <div class="wt-userlistingcontent">
                                                <div class="wt-contenthead">
                                                    <div class="wt-title">
                                                        <a href="{{ url('profile/'.$job->employer->slug) }}"><i class="fa fa-check-circle"></i> {{{ Helper::getUserName($job->employer->id) }}}</a>
                                                        <h2><a href="{{ url('project/'.$job->slug) }}">{{{$job->title}}}</a></h2>
                                                    </div>
                                                    @if (!empty($description))
                                                        <div class="wt-description">
                                                            <p>{{ str_limit($description, 300) }}</p>
                                                        </div>
                                                    @endif
                                                    @if ((!empty($job->categories) && $job->categories->count() > 0) || (!empty($job->skills) && $job->skills->count() > 0) || (!empty($job->rlevels) && $job->rlevels->count() > 0) || (!empty($job->citations) && $job->citations->count() > 0))
                                                        <div class="wt-tag wt-widgettag">
                                                            @foreach ($job->categories as $category)
                                                                <a href="{{{url('search-results?type=project&categories%5B%5D='.$category->slug)}}}">{{{ $category->title }}}</a>
                                                            @endforeach
                                                            @foreach ($job->skills as $skill)
                                                                <a href="{{{url('search-results?type=project&skills%5B%5D='.$skill->slug)}}}">{{{ $skill->title }}}</a>
                                                            @endforeach
                                                            @foreach ($job->rlevels as $rlevel)
                                                                <a href="{{{url('search-results?type=project&rlevels%5B%5D='.$rlevel->slug)}}}">{{{ $rlevel->title }}}</a>
                                                            @endforeach
                                                            @foreach ($job->citations as $citation)
                                                                <a href="{{{url('search-results?type=project&citations%5B%5D='.$citation->slug)}}}">{{{ $citation->title }}}</a>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="wt-viewjobholder">
                                                    <ul>
                                                        @if (!empty($job->price))
                                                            <li><span><i class="wt-budget">{{ $symbol['symbol'] }}</i>{{{ $job->price }}}</span></li>
                                                        @endif
                                                        @if (!empty($job->location->title))
                                                            <li><span><img src="{{{asset(Helper::getLocationFlag($job->location->flag))}}}" alt="{{{ trans('lang.location') }}}"> {{{ $job->location->title }}}</span></li>
                                                        @endif
                                                        <li><span><i class="far fa-folder wt-viewjobfolder"></i>{{{ trans('lang.type') }}} {{{$project_type}}}</span></li>
                                                        <li><span><i class="far fa-clock wt-viewjobclock"></i>{{{ Helper::getJobDurationList($job->duration)}}}</span></li>
                                                        <li><span><i class="fa fa-tag wt-viewjobtag"></i>{{{ trans('lang.job_id') }}} {{{$job->code}}}</span></li>
                                                        @if (!empty($user->profile->saved_jobs) && in_array($job->id, unserialize($user->profile->saved_jobs)))
                                                            <li style=pointer-events:none;><a href="javascript:void(0);" class="wt-clicklike wt-clicksave"><i class="fa fa-heart"></i> {{trans("lang.saved")}}</a></li>
                                                        @else
                                                            <li>
                                                                <a href="javascrip:void(0);" class="wt-clicklike" id="job-{{$job->id}}" @click.prevent="add_wishlist('job-{{$job->id}}', {{$job->id}}, 'saved_jobs', '{{trans("lang.saved")}}')" v-cloak>
                                                                    <i class="fa fa-heart"></i>
                                                                    <span class="save_text">{{ trans('lang.click_to_save') }}</span>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        <li class="wt-btnarea"><a href="{{{url('project/'.$job->slug)}}}" class="wt-btn">{{{ trans('lang.view_job') }}}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @if ( method_exists($jobs,'links') )
                                        {{ $jobs->onEachSide(1)->links('pagination.custom') }}
                                    @endif
                                @else
                                    @if (file_exists(resource_path('views/extend/errors/no-record.blade.php'))) 
                                        @include('extend.errors.no-record')
                                    @else 
                                        @include('errors.no-record')
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection