@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <section class="wt-haslayout wt-dbsectionspace">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 push-lg-2 col-xl-8 push-xl-2" id="milestones">
                <div class="preloader-section" v-if="loading" v-cloak>
                    <div class="preloader-holder">
                        <div class="loader"></div>
                    </div>
                </div>
            	<div class="wt-dashboardbox">
            	    {!! Form::open(['url' => url('employer/proposal/change-milestone/'.$proposal->id), 'id' => 'split-proposalMilestone', '@submit.prevent' => 'updateProposal('.$proposal->id.')']) !!}
    	            	<div class="sj-checkoutjournal">
    	                    <div class="sj-title">
    	                        <h4>{{{trans('lang.milestone')}}}</h4>
    	                    </div>
    	                    <table class="wt-tablecategories">
                                <thead>
                                    <tr>
                                        <!--<th><input name="status[]" class="form-control" type="checkbox" /></th>-->
                                        <th style="width: 5%">No</th>
                                        <th style="width: 30%">{{{ trans('lang.description') }}}</th>
                                        <th style="width: 12%">{{{ trans('lang.amount') }}}</th>
                                        <th style="width: 18%">{{{ trans('lang.date') }}}</th>
                                        <th style="width: 20%">{{{ trans('lang.status') }}}</th>
                                        <th style="width: 15%">{{{ trans('lang.action') }}}</th>
                                    </tr>
                                </thead>
                                <tbody id="addmilestone">
                                    @php 
                                        $milestones = \App\Milestone::where('proposal_id', $proposal->id)->orderBy('id', 'asc')->get();
                                        $n = 0;
                                    @endphp
                                    @if (!empty($milestones)) 
                                        @foreach ($milestones as $milestone)
                                            @php $n++; @endphp
                                            <tr class="added">
                                                <!--<td><input name="status[]" class="form-control" type="checkbox" /></td>-->
                                                <td>{{ $n }}</td>
                                                @if ($milestone->hired == 1)
                                                    <td><input name="desc[]" class="form-control" value="{{ $milestone->description }}" style="padding: 10px 10px" type="text" disabled /></td>
                                                    <td><input name="ms_amount[]" class="form-control" value="{{ $milestone->amount }}" style="padding: 10px 10px" type="number" disabled /></td>
                                                @else
                                                    <td><input name="desc[]" class="form-control" value="{{ $milestone->description }}" style="padding: 10px 10px" type="text" readonly="readonly" /></td>
                                                    <td><input name="ms_amount[]" class="form-control" value="{{ $milestone->amount }}" style="padding: 10px 10px" type="number" readonly="readonly" /></td>
                                                @endif
                                                <td><input class="form-control" value="{{ $milestone->updated_at->format('Y-m-d') }}" style="padding: 10px 10px" type="text" disabled /></td>
                                                <td><input class="form-control" value="{{ $milestone->status }}" style="padding: 10px 10px" type="text" disabled /></td>
                                                @if ($milestone->hired == 1)
                                                    <td><input class="form-control" value="{{ trans('lang.disabled') }}" style="padding: 10px 10px" type="text" disabled /></td>
                                                @else
                                                    <td><span class="form-control wt-btn removeOrigin wt-white" style="padding: 0 10px;">{{ trans('lang.btn_remove') }}</span></td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
    	                </div>
        	            <div class="wt-updatall form-group form-group-label">
    	                    <i class="ti-announcement"></i> 
    	                    @if (count($milestones) > 0)
    	                        <span>{{{ trans('lang.change_milestone_note') }}}</span> 
    	                    @else
    	                        <span>{{{ trans('lang.split_milestone_note') }}}</span> 
    	                    @endif
    	                    {!! Form::submit(trans('lang.btn_save_update'), ['class' => 'wt-btn ml-4']) !!}
    	                    <label class="ml-4">
    	                        <span id="addButton" class="wt-btn wt-white" style="line-height: 50px;">{{{ trans('lang.btn_add').' '.trans('lang.milestone') }}}</span>
    	                    </label>
    	                </div>
    	                {!! Form::hidden('id', $job->id, []) !!}
    	                {!! Form::hidden('freelancer_id', $proposal->freelancer_id, []) !!}
	                {!! form::close(); !!}
	            </div>
	        </div>
	    </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 push-lg-2 col-xl-8 push-xl-2 pt-4" id="packages">
                <div class="preloader-section" v-if="loading" v-cloak>
                    <div class="preloader-holder">
                        <div class="loader"></div>
                    </div>
                </div>
                <div class="wt-dashboardbox">
                @if (Session::has('message'))
                    <div class="flash_msg">
                        <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
                    </div>
                    @php session()->forget('message') @endphp;
                @elseif (Session::has('error'))
                    <div class="flash_msg">
                        <flash_messages :message_class="'danger'" :time ='5' :message="'{{{ str_replace("'s", " ",Session::get('error')) }}}'" v-cloak></flash_messages>
                    </div>
                    @php session()->forget('error') @endphp;
                @endif
                <div class="sj-checkoutjournal">
                    <div class="sj-title">
                        <h3>{{{trans('lang.checkout')}}}</h3>
                    </div>
                    @php
                        session()->put(['product_id' => e($proposal->id)]);
                        session()->put(['product_title' => e($job->title)]);
                        session()->put(['product_price' => e($proposal->amount + $fee)]);
                        session()->put(['type' => 'project']);
                        if(!empty($job->currency)) {
                            $symbol = Helper::currencyList($job->currency);
                        }
                    @endphp
                    <table class="sj-checkouttable">
                        <thead>
                            <tr>
                                <th style="color: #2eca7f">{{trans('lang.item_title')}}</th>
                                <th style="color: #2eca7f">{{trans('lang.details')}}</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="sj-producttitle">
                                            <div class="sj-checkpaydetails">
                                                @if (!empty($job->title))
                                                    <h4>{{{$job->title}}}</h4>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $symbol['symbol'] }}{{{$proposal->amount}}} </td>
                                </tr>
                                <tr>
                                    <td>{{ trans('lang.service_fee') }} (3%)</td>
                                    <td>{{ $symbol['symbol'] }}{{{ $fee }}}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('lang.freelancer') }}</td>
                                    <td>{{{ $freelancer_name }}}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('lang.total') }}</td>
                                    <td>{{ $symbol['symbol'] }}{{{$proposal->amount + $fee}}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @if (!empty($payment_gateway))
                        <div class="sj-checkpaymentmethod">
                            <div class="sj-title">
                                <h3>{{ trans('lang.select_pay_method') }}</h3>
                            </div>
                            <ul class="sj-paymentmethod">
                                @foreach ($payment_gateway as $gateway)
                                    <li>
                                        @if ($gateway == "rave")
                                            <a href="javascript:void(0);" v-on:click.prevent="getRaveForm">
                                                <i class="fa fa-credit-card"></i>
                                                <span>
                                                    @if (count($milestones) > 1)
                                                        <em>Pay {{ $symbol['symbol'] }}{{$proposal->amount + $fee}} by milestone via</em>
                                                    @else
                                                        <em>Pay {{ $symbol['symbol'] }}{{$proposal->amount + $fee}} via</em>
                                                    @endif
                                                    <img src="{{asset('images/pay-rave.png')}}">
                                                </span>
                                            </a>
                                        <!--@elseif ($gateway == "paypal")
                                            <a href="{{{url('paypal/ec-checkout')}}}">
                                                <i class="fa fa-paypal"></i>
                                                <span><em>{{ trans('lang.pay_amount_via') }}</em><img src="{{asset('images/payment-methods.png')}}"></span>
                                            </a>-->
                                        @elseif ($gateway == "stripe")
                                            <a href="javascript:void(0);" v-on:click.prevent="getStriprForm">
                                                <i class="fab fa-stripe-s"></i>
                                                <span><em>{{ trans('lang.pay_amount_via') }}</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                                            </a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <b-modal ref="myModalRef" hide-footer title="Stripe Payment" class="la-pay-stripe">
                    <div class="d-block text-center">
                        <form class="wt-formtheme wt-form-paycard" method="POST" id="stripe-payment-form" role="form" action="" @submit.prevent='submitStripeFrom'>
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group wt-inputwithicon {{ $errors->has('card_no') ? ' has-error' : '' }}">
                                    <label>{{ trans('lang.card_no') }}</label>
                                    <img src="{{asset('images/pay-icon.png')}}">
                                    <input id="card_no" type="text" class="form-control" name="card_no" value="{{ old('card_no') }}" autofocus>
                                    @if ($errors->has('card_no'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('card_no') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('ccExpiryMonth') ? ' has-error' : '' }}">
                                    <label>{{ trans('lang.expiry_month') }}</label>
                                    <input id="ccExpiryMonth" type="number" class="form-control" name="ccExpiryMonth" value="{{ old('ccExpiryMonth') }}" min="1" max="12" autofocus>
                                    @if ($errors->has('ccExpiryMonth'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ccExpiryMonth') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('ccExpiryYear') ? ' has-error' : '' }}">
                                    <label>{{ trans('lang.expiry_year') }}</label>
                                    <input id="ccExpiryYear" type="text" class="form-control" name="ccExpiryYear" value="{{ old('ccExpiryYear') }}" autofocus>
                                    @if ($errors->has('ccExpiryYear'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ccExpiryYear') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group wt-inputwithicon {{ $errors->has('cvvNumber') ? ' has-error' : '' }}">
                                    <label>{{ trans('lang.cvc_no') }}</label>
                                    <img src="{{asset('images/pay-img.png')}}">
                                    <input id="cvvNumber" type="text" class="form-control" name="cvvNumber" value="{{ old('cvvNumber') }}" autofocus>
                                    @if ($errors->has('cvvNumber'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cvvNumber') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group wt-btnarea">
                                    <input type="submit" name="button" class="wt-btn" value="Pay {{ $symbol['symbol'] }}{{$proposal->amount}}">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </b-modal>
                <b-modal ref="myRaveModalRef" hide-footer title="Rave Payment" class="la-pay-rave">
                    <div class="d-block text-center">
                        <!--<form class="wt-formtheme wt-form-paycard" method="POST" role="form" action="{{ route('paywithrave') }}">-->
                         <!--<form class="wt-formtheme wt-form-paycard" method="POST" id="rave-payment-form" role="form" action="" @submit.prevent='submitRaveFrom'> -->
                         <form class="wt-formtheme wt-form-paycard" method="POST" id="rave-payment-form" role="form" action="{{ route('paywithrave') }}"> 
                            {{ csrf_field() }}
                            <fieldset>
                                @php 
                                    $milestone = \App\Milestone::where('proposal_id', $proposal->id)->where('status', 'Suggested')->orderBy('id', 'asc')->first();
                                    if (!empty($milestone->id)) {
                                        session()->put(['milestone_id' => e($milestone->id)]);
                                    }
                                @endphp
                                @if (!empty($milestone))
                                    <div class="form-group form-group-half pr-2">
                                        <label>{{ trans('lang.milestone_desc') }}</label>
                                        {!! Form::text( 'desc', e($milestone->description), ['class' =>'form-control', 'disabled'] ) !!}
                                    </div>
                                    <div class="form-group form-group-half pl-2">
                                        <label>{{ trans('lang.proposal_amount') }}</label>
                                        {!! Form::text( 'amount', e($milestone->amount + round($fee/count($milestones), 2)), ['class' =>'form-control', 'readonly' => 'readonly'] ) !!}
                                    </div>
                                @else
                                    <div class="form-group form-group-half pr-2">
                                        <label>{{ trans('lang.milestone_desc') }}</label>
                                        {!! Form::text( 'desc', e(trans('lang.project_milestone')), ['class' =>'form-control', 'disabled'] ) !!}
                                    </div>
                                    <div class="form-group form-group-half pl-2">
                                        <label>{{ trans('lang.proposal_amount') }}</label>
                                        {!! Form::text( 'amount', e($proposal->amount + $fee), ['class' =>'form-control', 'readonly' => 'readonly'] ) !!}
                                    </div>
                                @endif
                                {!! Form::hidden( 'phonenumber', e($phonenumber) ) !!}
                                {!! Form::hidden( 'currency', e($currency) ) !!}
                                {!! Form::hidden( 'country', e($country) ) !!}
                                {!! Form::hidden( 'email', e($rave_email) ) !!}
                                {!! Form::hidden( 'firstname', e($firstname) ) !!}
                                {!! Form::hidden( 'lastname', e($lastname) ) !!}
                                {!! Form::hidden( 'description', e('Flutterwave Jersey') ) !!}
                                <div class="form-group wt-btnarea">
                                    <input type="submit" name="button" class="wt-btn" value="Pay Now">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </b-modal>
            </div>
        </div>
    </section>
    <script src="http://researchfreelancer.com/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var wrapper = $("#addmilestone"); ///Milestone Fields wrapper
            // var editbutton = $("#editButton"); //Edit Milestone
            var addbutton = $("#addButton"); //Add Milestone Field
            $(addbutton).on('click', function(e){  
                e.preventDefault();
                $("input[readonly='readonly']").each(function(i, val) {
                    this.removeAttribute('readonly');
                });
                // $(".removeOrigin").each(function(i, val){  
                //     e.preventDefault();
                //     this.removeAttribute('readonly');
                // });
                // this.innerHTML = '{{{ trans('lang.btn_add').' '.trans('lang.milestone') }}}';
                
                var x = $('.added').length;
                ++x;
                console.log("dfdsfsdf");
                $(wrapper).append('<tr class="added"><td>' + x + '</td><td><input name="desc[]" class="form-control" type="text" style="padding: 0 10px" /></td><td><input name="ms_amount[]" class="form-control" type="number" style="padding: 0 10px" /></td><td><input class="form-control" value="{{ date('Y-m-d') }}" type="text" style="padding: 0 10px" disabled /></td><td><input class="form-control" value="{{ trans('lang.none') }}" type="text" style="padding: 0 10px" disabled /></td><td><span class="form-control wt-btn removefield" style="padding: 0px 10px;">{{ trans('lang.btn_remove') }}</span></td></tr>');
                $(wrapper).on('click', '.removefield', function(e){  
                    e.preventDefault();
                    $(this).closest('.added').remove();
                }); 
            });
            $(".removeOrigin").each(function(i, val){  
                $(this).on('click', function(e){
                    e.preventDefault();
                    this.closest('.added').remove();
                });
            });
        });
    </script>
@endsection
