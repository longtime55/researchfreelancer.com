@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="wt-dashboardbox">
            <div class="wt-dashboardboxcontent wt-canceljobholder">
                <div class="wt-freelancerholder">
                    <div class="wt-tabscontenttitle">
                        <h2>{{ trans('lang.cancelled_jobs') }}</h2>
                    </div>
                    @if(!empty($cancelled_jobs) && $cancelled_jobs->count() > 0 )
                        <div class="wt-managejobcontent wt-verticalscrollbar mCustomScrollbar _mCS_1">
                            @foreach ($cancelled_jobs as $job_id)
                                @php
                                    $job = \App\Job::where('id', $job_id->job_id)->first();
                                    $duration  =  \App\Helper::getJobDurationList($job->duration);
                                    $user_name = $job->employer->first_name.' '.$job->employer->last_name;
                                    $verified_user = \App\User::select('user_verified')->where('id', $job->employer->id)->pluck('user_verified')->first();
                                    $project_type  = Helper::getProjectTypeList($job->project_type);
                                    $symbol = Helper::currencyList($job->currency);
                                    $description = strip_tags(stripslashes($job->description));
                                    $accepted_proposal = \App\Job::find($job->id)->proposals()->where('status', 'hired')->first();
                                @endphp
                                <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                    @if (!empty($job->is_featured) && $job->is_featured === 'true')
                                        <span class="wt-featuredtag"><img src="{{{ asset('images/featured.png') }}}" alt="{{ trans('lang.is_featured') }}" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                    @endif
                                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-6 wt-userlistingcontent">
                                        <div class="wt-contenthead">
                                            @if (!empty($user_name) || !empty($job->title) )
                                                <div class="wt-title">
                                                    @if (!empty($user_name))
                                                    <a href="{{{ url('profile/'.$job->employer->slug) }}}">@if($verified_user === 1)<i class="fa fa-check-circle"></i>@endif&nbsp;{{{ $user_name }}}</a>
                                                    @endif
                                                    @if (!empty($job->title))
                                                        <h2>{{{ $job->title }}}</h2>
                                                    @endif
                                                </div>
                                            @endif
                                            @if (!empty($job->price) ||
                                                !empty($location['title'])  ||
                                                !empty($job->project_type) ||
                                                !empty($job->duration)
                                                )
                                                <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                                    @if (!empty($job->price))
                                                        <li><span class="wt-dashboraddoller"><i>{{ $symbol['symbol'] }}</i> {{{ $job->price }}} {{ $job->currency }}</span></li>
                                                    @endif
                                                    @if (!empty($job->location->title))
                                                        <li><span><img src="{{{asset(App\Helper::getLocationFlag($job->location->flag))}}}" alt="{{{ trans('lang.locations') }}}"> {{{ $job->location->title }}}</span></li>
                                                    @endif
                                                    @if (!empty($job->project_type))
                                                        <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> {{ trans('lang.type') }} {{{ $project_type }}}</a></li>
                                                    @endif
                                                    @if (!empty($job->duration))
                                                        <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> {{ trans('lang.duration') }} {{{ $duration }}}</span></li>
                                                    @endif
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="wt-rightarea">
                                            <div class="wt-btnarea">
                                                <a href="{{{ url('freelancer/job/'.$job->slug) }}}" class="wt-btn">{{ trans('lang.view_detail') }}</a>
                                                <a href="{{{ url('freelancer/dispute/'.$job->slug) }}}" class="wt-btn">{{ trans('lang.raise_dispute') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xm-12 col-sm-12 col-md-12 col-lg-6 wt-userlistingcontent mt-5">
                                        <div class="wt-description">
                                            <h4>{{{trans('lang.milestone')}}}</h4>
                                        </div>
                                        <table class="wt-tablecategories">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>{{{ trans('lang.description') }}}</th>
                                                    <th>{{{ trans('lang.amount') }}}</th>
                                                    <th>{{{ trans('lang.date') }}}</th>
                                                    <th>{{{ trans('lang.status') }}}</th>
                                                    <!--<th>{{{ trans('lang.action') }}}</th>-->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php 
                                                    $milestones = \App\Milestone::where('proposal_id', $accepted_proposal->id)->orderBy('id', 'asc')->get();
                                                    $n = 0;
                                                @endphp
                                                @if (!empty($milestones)) 
                                                    @foreach ($milestones as $milestone)
                                                        @php $n++; @endphp
                                                        <tr>
                                                            <td>{{ $n }}</td>
                                                            <td>{{ $milestone->description }}</td>
                                                            <td>{{ $symbol['symbol'] }} {{ $milestone->amount }}</td>
                                                            <td>{{ $milestone->updated_at->format('Y-m-d') }}</td>
                                                            <td>{{ $milestone->status }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        @if (file_exists(resource_path('views/extend/errors/no-record.blade.php'))) 
                            @include('extend.errors.no-record')
                        @else 
                            @include('errors.no-record')
                        @endif
                    @endif
                </div>
            </div>
            @if ( method_exists($cancelled_jobs,'links') )
                {{ $cancelled_jobs->links('pagination.custom') }}
            @endif
        </div>
    </div>
@endsection
