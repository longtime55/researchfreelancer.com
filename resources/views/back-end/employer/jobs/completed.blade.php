@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
<div class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="wt-dashboardbox">
                <div class="wt-dashboardboxtitle">
                    <h2>{{ trans('lang.completed_jobs') }}</h2>
                </div>
                <div class="wt-dashboardboxcontent wt-jobdetailsholder la-projectc-completed">
                    <div class="wt-freelancerholder">
                        @if(!empty($completed_jobs) && $completed_jobs->count() > 0)
                            <div class="wt-managejobcontent wt-verticalscrollbar mCustomScrollbar _mCS_1">
                                @foreach ($completed_jobs as $job)
                                    @php
                                        $accepted_proposal = \App\Job::find($job->id)->proposals()->where('status', 'completed')->first();
                                        $profile = \App\User::find($accepted_proposal->freelancer_id)->profile;
                                        $user_image = !empty($profile) ? $profile->avater : '';
                                        $verified_user = \App\User::select('user_verified')->where('id', $job->employer->id)->pluck('user_verified')->first();
                                        $project_type  = Helper::getProjectTypeList($job->project_type);
                                        $symbol = Helper::currencyList($job->currency);
                                        $description = strip_tags(stripslashes($job->description));
                                    @endphp
                                    <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                        @if (!empty($job->is_featured) && $job->is_featured === 'true')
                                            <span class="wt-featuredtag"><img src="{{{ asset('images/featured.png') }}}" alt="{{ trans('lang.is_featured') }}" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                        @endif
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 wt-userlistingcontent">
                                            <div class="wt-contenthead">
                                                <div class="wt-title">
                                                    <a href="{{{ url('profile/'.$job->employer->slug) }}}">
                                                        @if ($verified_user === 1)
                                                            <i class="fa fa-check-circle"></i>
                                                        @endif
                                                        &nbsp;{{{ Helper::getUserName($job->employer->id) }}}
                                                    </a>
                                                    @if (!empty($job->title))
                                                        <h2>{{{ $job->title }}}</h2>
                                                    @endif
                                                </div>
                                                <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                                    @if (!empty($job->price))
                                                        <li><span class="wt-dashboraddoller"><i>{{ $symbol['symbol'] }}</i> {{{ $job->price }}}</span></li>
                                                    @endif
                                                    @if (!empty($job->location->title))
                                                        <li><span><img src="{{{asset(Helper::getLocationFlag($job->location->flag))}}}" alt="{{{ trans('lang.locations') }}}"> {{{ $job->location->title }}}</span></li>
                                                    @endif
                                                    @if (!empty($job->project_type))
                                                        <li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> {{{ trans('lang.type') }}} {{{ $project_type }}}</a></li>
                                                    @endif
                                                    @if (!empty($job->duration))
                                                        <li><span class="wt-dashboradclock"><i class="far fa-clock"></i> {{ trans('lang.duration') }} {{{ Helper::getJobDurationList($job->duration)}}}</span></li>
                                                    @endif
                                                </ul>
                                                @if (!empty($description))
                                                    <div class="wt-description mt-3">
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
                                            <div class="wt-rightarea">
                                                <div class="wt-btnarea">
                                                    <span> {{ trans('lang.project_completed') }}</span>
                                                    <a href="{{{ url('proposal/'.$job->slug.'/'.$job->status) }}}" class="wt-btn">{{ trans('lang.view_detail') }}</a>
                                                </div>
                                                <div class="wt-hireduserstatus">
                                                    <h4>{{ trans('lang.hired') }}</h4><span>{{{ Helper::getUserName($accepted_proposal->freelancer_id) }}}</span>
                                                    <ul class="wt-hireduserimgs">
                                                        <li><figure><img src="{{{ asset(Helper::getProjectImage($user_image, $accepted_proposal->freelancer_id)) }}}" alt="{{{ trans('lang.freelancer') }}}"></figure></li>
                                                    </ul>
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
                                                        <th>{{{ trans('lang.action') }}}</th>
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
                                                                @if ($milestone->status == 'Waiting')
                                                                    <td>Disputed</td>
                                                                @elseif ($milestone->status == 'Released' || $milestone->status == 'Rejected')
                                                                    <td><a href="{{{ url('employer/'.$job->slug.'/'.$milestone->id.'/dispute') }}}">Dispute</a></td>
                                                                @elseif ($milestone->status == 'In Progress')
                                                                    <td>
                                                                        <!-- Default dropright button -->
                                                                        <div class="form-group btn-group dropright">
                                                                            <button type="button" class="wt-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="line-height: 30px; padding: 0 15px 0 15px">
                                                                                {{{ trans('lang.btn_edit') }}}
                                                                            </button>
                                                                            <div class="dropdown-menu">
                                                                                <!-- Dropdown menu links -->
                                                                                <a class="dropdown-item" href="{{{ url('employer/milestone/'.$milestone->id.'/release') }}}">Release</a>
                                                                                <a class="dropdown-item" href="{{{ url('employer/milestone/'.$milestone->id.'/cancel') }}}">Cancel</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                @elseif ($milestone->status == 'Suggested')
                                                                    <td>No Pending</td>
                                                                @endif
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                            <div class="form-group form-group-label text-center mt-3">
                                                <label>
                                                    <span id="{{$accepted_proposal->id}}" class="wt-btn wt-white updateMilestone" style="line-height: 40px; padding: 0 15px 0 15px">{{{ trans('lang.update_milestone') }}}</span>
                                                </label>
                                            </div>
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
                @if ( method_exists($completed_jobs,'links') )
                    {{ $completed_jobs->links('pagination.custom') }}
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
