@extends(file_exists(resource_path('views/extend/front-end/master.blade.php')) ? 
'extend.front-end.master':
 'front-end.master', ['body_class' => 'wt-innerbgcolor'] )
@section('content')
    @php 
        $breadcrumbs = Breadcrumbs::generate('createProposal', $job->slug);
        if (!empty($job->currency)) {
            $symbol = Helper::currencyList($job->currency);
        }
        $description = strip_tags(stripslashes($job->description));
    @endphp
    <div class="wt-haslayout wt-innerbannerholder">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                    <div class="wt-innerbannercontent">
                        <div class="wt-title"><h2>{{ trans('lang.job_proposal') }}</h2></div>
                        @if (!empty($show_breadcrumbs) && $show_breadcrumbs === 'true')
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
        <div class="wt-haslayout wt-main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 push-lg-2" id="jobs">
                        <div class="preloader-section" v-if="loading" v-cloak>
                            <div class="preloader-holder">
                                <div class="loader"></div>
                            </div>
                        </div>
                        <div class="wt-jobalertsholder la-jobalerts-holder">
                            <ul class="wt-jobalerts">
                                @if ($submitted_proposals_count > 0)
                                    <li class="alert alert-danger alert-dismissible fade show">
                                        <span>{{{ trans('lang.proposal_already_submitted') }}}</span>
                                        <a href="javascript:void(0)" class="wt-alertbtn danger close" data-dismiss="alert" aria-label="Close">Got It</a>
                                        <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($job->status != 'posted')
                                    <li class="alert alert-danger alert-dismissible fade show">
                                        <span>{{{ trans('lang.hired_freelancer_note') }}}</span>
                                        <a href="javascript:void(0)" class="wt-alertbtn danger close" data-dismiss="alert" aria-label="Close">Got It</a>
                                        <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                @endif
                                @if (!empty($check_skill_req))
                                    <li class="alert alert-primary alert-dismissible fade show">
                                        <span><em>{{trans('lang.info')}}: </em> {{{ trans('lang.skill_req_freelancer_note') }}}</span>
                                        <a href="javascript:void(0)" class="wt-alertbtn primary close" data-dismiss="alert" aria-label="Close">Got It</a>
                                        <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>
                                    </li>
                                @endif
                                <!--@if ($remaining_proposals <= $submitted_proposals)-->
                                <!--    <li class="alert alert-warning alert-dismissible fade show">-->
                                <!--        <span><em>{{trans('lang.info')}}: </em>  You’ve consumed all you points to apply new job,</span>-->
                                <!--        <a href="javascript:void(0)" class="wt-alertbtn primary close" data-dismiss="alert" aria-label="Close">Got It</a>-->
                                <!--        <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></a>-->
                                <!--    </li>-->
                                <!--@endif-->

                            </ul>
                        </div>
                        <div class="wt-proposalholder">
                            @if (!empty($job->is_featured) && $job->is_featured === 'true')
                                <span class="wt-featuredtag"><img src="{{{ asset('images/featured.png') }}}" alt="{{{ trans('lang.is_featured') }}}" data-tipso="Plus Member" class="template-content tipso_style"></span>
                            @endif
                            <div class="wt-proposalhead">
                                @if (!empty($job->title))
                                    <h2>{{{ $job->title }}}</h2>
                                @endif
                                <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                    @if (!empty($job->price))
                                        <li>
                                            <span>
                                                <i class="wt-viewjobdollar">{{ $symbol['symbol'] }}</i> {{{ $job->price }}}
                                            </span>
                                        </li>
                                    @endif
                                    @if (!empty($job->location->title))
                                        <li><span><img src="{{{asset(Helper::getLocationFlag($job->location->flag))}}}" alt="{{ trans('lang.img') }}"> {{{ $job->location->title }}}</span></li>
                                    @endif
                                    @if (!empty($job->project_type))
                                        @php $project_type  = Helper::getProjectTypeList($job->project_type); @endphp
                                        <li><span class="wt-clicksavefolder"><i class="far fa-folder wt-viewjobfolder"></i> {{ trans('lang.type') }} {{{ $project_type }}}</span></li>
                                    @endif
                                    @if (!empty($job->duration))
                                        <li><span class="wt-dashboradclock"><i class="far fa-clock wt-viewjobclock"></i> {{ trans('lang.duration') }} {{{ Helper::getJobDurationList($job->duration) }}}</span></li>
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
                        </div>
                        <div class="wt-proposalamount-holder">
                            <div class="wt-title">
                                <h2>{{{ trans('lang.proposal_details') }}}</h2>
                            </div>
                            {!! Form::open(['url' => url('proposal/submit-proposal'), 'class' =>'wt-haslayout', 'id' => 'send-propsal', 'enctype' => 'multipart/form-data',  '@submit.prevent'=>'submitJobProposal('.$job->id.', '.Auth::user()->id.')']) !!}
                                <div class="wt-proposalamount accordion">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <div class="wt-normal wt-black mb-2">{{{ trans('lang.proposal_amount') }}}<span style="line-height: initial; right: initial; padding-left: 5px">( <i style="color: #2ecc71">{{ $symbol['symbol'] }}</i> )</span></div>
                                            <span class="wt-jobcurrency"><i>{{ $job->currency }}</i></span>
                                            {!! Form::input('number', 'amount', intval($job->price/2), ['class' => 'form-control', 'style' => 'padding-right: 40px;', 'min' => 1, 'placeholder' => trans('lang.ph_proposal_amount'), 'id' => 'total_amount', 'v-model'=>'proposal.amount', 'v-on:keyup' => "calculate_amount('$commision')" ])!!}
                                        </div>
                                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                            <div class="wt-normal wt-black mb-2">{{{ trans('lang.completion_time') }}}</div>
                                            <div class="wt-select">
                                                {!! Form::select('completion_time', $job_completion_time, e($job_completion_time['weekly']), array('class' => 'form-control', 'v-model'=>'proposal.completion_time', 'placeholder' => trans('lang.ph_job_completion_time') )) !!}
                                            </div>
                                        </div>
                                        <div class="col wt-rightarea">
                                            <div class="wt-servicefee">
                                                <a href="javascript:void(0);" class="wt-btn collapsed" id="headingOne" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="padding: 0 30px">
                                                    Fee View
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<em>{{{ trans('lang.amount_note') }}}</em>-->
                                    <ul class="wt-totalamount collapse show" id="collapseOne" aria-labelledby="headingOne">
                                        <li v-cloak>
                                            <h3>( <i>{{ $symbol['symbol'] }}</i> ) <em>- @{{this.proposal.deduction}}</em></h3>
                                            <span><strong>“ {{{ trans('lang.research_freelancer') }}} ”</strong> {{{ trans('lang.service_fee') }}}
                                                <i class="fa fa-exclamation-circle template-content tipso_style" data-tipso="Plus Member"></i>
                                            </span>
                                        </li>
                                        <li v-cloak>
                                            <h3>( <i>{{ $symbol['symbol'] }}</i> ) <em>@{{this.proposal.total}}</em></h3>
                                            <span>
                                                {{{ trans('lang.receiving_amount') }}} <strong>“ {{{ trans('lang.receiving_amount') }}} ”</strong>
                                                {{{ trans('lang.fee_deduction') }}}
                                                <i class="fa fa-exclamation-circle template-content tipso_style" data-tipso="Plus Member"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wt-formtheme wt-formproposal">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="wt-normal wt-black mb-2">{{{ trans('lang.write_your_prop') }}}</div>
                                            {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => '', 'placeholder' =>  trans('lang.ph_cover_letter') , 'v-model'=>'proposal.description']) !!}
                                        </div>
                                    </fieldset>
                                </div>
                                <!--<div class="wt-formtheme wt-formproposal" id="addmilestones">
                                    <div class="wt-title">
                                        <h5>{{{ trans('lang.suggest_milestone') }}}</h5>
                                        <div class="wt-black">{{{ trans('lang.milestone_note') }}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mt-2">
                                            {!! Form::input('text', 'desc[]', trans('lang.project_milestone'), ['class' => 'form-control', 'maxlength' => '100'])!!}
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-2 mt-2">
                                            {!! Form::input('number', 'ms_amount[]', intval($job->price/2), ['class' => 'form-control', 'min' => 1, 'id' => 'inputval', 'required'])!!}
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-2 wt-rightarea mt-2">
                                            <a href="#" class="wt-msgbtn wt-btn" id="addfield" style="text-transform: none; padding: 0 20px;">
                                                {{{ trans('lang.btn_add_new') }}}
                                            </a>
                                        </div>
                                    </div>
                                    <div id="milestone">
                                    </div>
                                    <div class="wt-red mt-4" id="errorMessage"></div>
                                </div>-->
                                <div class="wt-formtheme wt-formproposal">
                                    <div class="wt-attachments wt-attachmentsvtwo wt-attachmentsholder lara-proposal-attachment">
                                        <div class="lara-attachment-files">
                                            <div class="wt-title">
                                                <h3>{{{ trans('lang.upload_file') }}}</h3>
                                            </div>
                                            <job_attachments :temp_url="'{{url('proposal/upload-temp-image')}}'"></job_attachments>
                                            <div class="form-group input-preview">
                                                <ul class="wt-attachfile dropzone-previews">
    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-btnarea">
                                        {!! Form::submit(trans('lang.btn_send'), ['class' => 'wt-btn']) !!}
                                    </div>
                                </div>
                            {!! form::close(); !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://researchfreelancer.com/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // var wrapper = $("#milestone"); //Milestone Fields wrapper
            // var addmilestones = $("#addmilestones"); //Milestone Fields
            // var add_button = $("#addfield"); //Add button ID
            // var proposal = $("#total_amount"); //Proposal Field
            // var total = document.getElementById("total_amount").value; //Proposal amount
            // var div = $("#errorMessage");
            // var x = 1; //initlal text box count
            // document.getElementById("inputval").max = total;
            // $(proposal).on('input', function(e){  
            //     total = e.target.value; //Proposal Amount
            //     document.getElementById("inputval").max = total;
            // });
            // $(addmilestones).on('click', function(e){  
            //     e.preventDefault();
            //     $("input[name='ms_amount[]']").on('input', function(e){  
            //         e.preventDefault();
            //         var m_amount = 0;
            //         $("input[name='ms_amount[]']").each(function(i, val){
            //             m_amount += Number($(this).val());
            //             if (Number(m_amount) > Number(total) || $(this).val() == 0 || $(this).val() == '') {
            //                 div.text("Total suggested milestone amount must not exceed the bid amount. Please ensure it is between 1 and " + total);
            //                 document.getElementById("errorMessage").style.display = "block";
            //             } else {
            //                 document.getElementById("errorMessage").style.display = "none";
            //             }
            //         });
            //     });
            // });
            // $(add_button).click(function(e){ //on add input button click
            //     e.preventDefault();
            //     ++x;
            //     $(wrapper).append('<div class="row" id="added"><div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-2"><input type="text" name="desc[]" maxlength="100" class="form-control" placeholder="{{trans('lang.desc_your_milestone')}}" required></div><div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 mt-2"><input type="number" name="ms_amount[]" min=1 max="'+ total +'" class="form-control" value=0 required></div><div class="col wt-btnarea mt-2"><a href="javascript:void(0);" id="removefield" class="wt-btn" style="padding: 0 30px">{{{ trans('lang.btn_remove') }}}</a></div></div>');
            //     $(wrapper).on('click', '#removefield', function(e){  
            //         e.preventDefault();
            //         $(this).closest('#added').remove();
            //     }); 
            // });
        });
    </script>
@endsection

