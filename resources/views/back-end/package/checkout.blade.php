@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <section class="wt-haslayout wt-dbsectionspace">
        <div class="row">
            <div class=" col-sm-12 col-md-8 push-md-2 col-lg-8 push-lg-2" id="packages">
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
                        <flash_messages :message_class="'danger'" :time ='5' :message="'{{{ str_replace("'s", " ", Session::get('error')) }}}'" v-cloak></flash_messages>
                    </div>
                    @php session()->forget('error'); @endphp
                @endif
                    <div class="sj-checkoutjournal">
                        <div class="sj-title">
                            <h3>{{{trans('lang.checkout')}}}</h3>
                        </div>
                        @php
                            $options = unserialize($package->options);
                            $banner = $options['banner_option'] = 1 ? 'ti-check' : 'ti-na';
                            $chat = $options['private_chat'] = 1 ? 'ti-check' : 'ti-na';
                            session()->put(['product_id' => e($package->id)]);
                            session()->put(['product_title' => e($package->title)]);
                            session()->put(['product_price' => e($package->cost)]);
                            session()->put(['type' => 'package']);
                        @endphp
                        <table class="sj-checkouttable">
                            <thead>
                                <tr>
                                    <th>{{ trans('lang.item_title') }}</th>
                                    <th>{{trans('lang.details')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="sj-producttitle">
                                            <div class="sj-checkpaydetails">
                                                <h4>{{{$package->title}}}</h4>
                                                <span>{{{$package->subtitle}}}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}{{{$package->cost}}}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('lang.duration') }}</td>
                                    <td>{{{Helper::getPackageDurationList($options['duration'])}}}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('lang.total') }}</td>
                                    <td>{{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}{{{$package->cost}}}</td>
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
                            @foreach ($payment_gateway as $gatway)
                                <li>
                                    @if ($gatway == "paypal")
                                        <a href="{{{url('paypal/ec-checkout')}}}">
                                            <i class="fa fa-paypal"></i>
                                            <span><em>{{ trans('lang.pay_amount_via') }}</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                                        </a>
                                    @elseif ($gatway == "rave")
                                        <a href="javascrip:void(0);" v-on:click.prevent="getRaveForm">
                                            <i class="fa fa-credit-card"></i>
                                            <span><em>{{ trans('lang.pay_amount_via') }}</em> {{ Helper::getPaymentMethodList($gatway)['title']}} {{ trans('lang.pay_gateway') }}</span>
                                        </a>
                                    @elseif ($gatway == "stripe")
                                        <a href="javascrip:void(0);" v-on:click.prevent="getStripeForm">
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
                <b-modal ref="myModalRef" hide-footer title="Stripe Payment" class="la-pay-stripe" :no-close-on-backdrop="true">
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
                                    <input id="cvvNumber" type="number" class="form-control" name="cvvNumber" value="{{ old('cvvNumber') }}" autofocus>
                                    @if ($errors->has('cvvNumber'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cvvNumber') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group wt-btnarea">
                                    <input type="submit" name="button" class="wt-btn" value="Pay {{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}{{$package->cost}}">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </b-modal>
                <b-modal ref="myRaveModalRef" hide-footer title="Rave Payment" class="la-pay-stripe" :no-close-on-backdrop="true">
                    <div class="d-block text-center">
                        <form class="wt-formtheme wt-form-paycard" method="POST" role="form" action="{{ route('paywithrave') }}">
                        <!-- <form class="wt-formtheme wt-form-paycard" method="POST" id="rave-payment-form" role="form" action="" @submit.prevent='submitRaveFrom'> -->
                            {{ csrf_field() }}
                            <fieldset>

                                <div class="form-group">
                                    <label>{{ trans('lang.email_address') }}</label>
                                    {!! Form::email( 'email', e($payout['rave_email']), ['class' =>'form-control', 'autofocus'] ) !!}
                                </div>
                                <div class="form-group">
                                    <label>{{ trans('lang.ph_first_name') }}</label>
                                    {!! Form::text( 'firstname', e($firstname), ['class' =>'form-control', 'autofocus'] ) !!}
                                </div>
                                <div class="form-group">
                                    <label>{{ trans('lang.ph_last_name') }}</label>
                                    {!! Form::text( 'lastname', e($lastname), ['class' =>'form-control', 'autofocus'] ) !!}
                                </div>
                                {!! Form::hidden( 'phonenumber', e('08071585713'), ['class' =>''] ) !!}
                                <!-- {!! Form::hidden( 'phonenumber', e($phonenumber), ['class' =>''] ) !!} -->
                                {!! Form::hidden( 'country', e('NG'), ['class' =>''] ) !!}
                                <!-- {!! Form::hidden( 'country', e($country), ['class' =>''] ) !!} -->
                                {!! Form::hidden( 'currency', e($currency), ['class' =>''] ) !!}
                                {!! Form::hidden( 'amount', e($package->cost), ['class' =>''] ) !!}
                                {!! Form::hidden( 'description', e('Flutterwave Jersey'), ['class' =>''] ) !!}
                                <div class="form-group wt-btnarea">
                                    <input type="submit" name="button" class="wt-btn" value="Pay {{ !empty($symbol['symbol']) ? $symbol['symbol'] : '$' }}{{$package->cost}}">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </b-modal>
            </div>
        </div>
    </section>
@endsection
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
