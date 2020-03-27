@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <div class="wt-dbsectionspace wt-haslayout la-ps-freelancer">
        <div class="freelancer-profile" id="user_profile">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="wt-dashboardbox wt-dashboardtabsholder">
                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/tabs.blade.php'))) 
                            @include('extend.back-end.freelancer.profile-settings.tabs')
                        @else 
                            @include('back-end.freelancer.profile-settings.tabs')
                        @endif
                        <div class="wt-tabscontent tab-content">
                            @if (Session::has('message'))
                                <div class="flash_msg">
                                    <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
                                </div>
                            @endif
                            @if ($errors->any())
                                <ul class="wt-jobalerts">
                                    @foreach ($errors->all() as $error)
                                        <div class="flash_msg">
                                            <flash_messages :message_class="'danger'" :time ='10' :message="'{{{ $error }}}'" v-cloak></flash_messages>
                                        </div>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="wt-personalskillshold tab-pane active fade show">
                                {!! Form::open(['url' => url('freelancer/store-payment-settings'), 'class' =>'wt-userform', 'id' => 'payment_settings', '@submit.prevent'=>'submitPaymentSettings']) !!}
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        <div class="wt-tabscontenttitle">
                                            <h2>{{{ trans('lang.trans_currency') }}}</h2>
                                        </div>
                                        <div class="wwt-divtheme wt-userform wt-userformvtwo">
                                            <fieldset>
                                                <div class="form-group">
                                                    <span class="wt-select">
                                                        {!! Form::select('transaction_currency', $currency, e($trans_currency), array('class'=>'','placeholder'=>trans('lang.ph_select_transaction_currency'))) !!}
                                                    </span>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div> 
                                    <div class="wt-yourdetails wt-tabsinfo">
                                       <div class="wt-tabscontenttitle">
                                            <h2>{{{ trans('lang.hourly_rate') }}}</h2>
                                        </div>
                                        <div class="wwt-divtheme wt-userform wt-userformvtwo">
                                            <fieldset>
                                                <div class="form-group">
                                                    {!! Form::number( 'hourly_rate', e($hourly_rate), ['class' =>'form-control', 'placeholder' => trans('lang.ph_service_hourly_rate')] ) !!}
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <!--<div class="wt-yourdetails wt-tabsinfo">-->
                                    <!--    <div class="wt-tabscontenttitle">-->
                                    <!--        <h2>{{{ trans('lang.withdraw_details') }}}</h2>-->
                                    <!--    </div>-->
                                    <!--    <div class="wwt-divtheme wt-userform wt-userformvtwo">-->
                                    <!--        <fieldset>-->
                                    <!--            <div class="form-group">-->
                                    <!--                {!! Form::text( 'withdraw_details', e($withd_details), ['class' =>'form-control', 'placeholder' => trans('lang.ph_withd_details')] ) !!}-->
                                    <!--            </div>-->
                                    <!--        </fieldset>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="wt-updatall">
                                        <i class="ti-announcement"></i>
                                        <span>{{{ trans('lang.save_changes_note') }}}</span>
                                        {!! Form::submit(trans('lang.btn_save_update'), ['class' => 'wt-btn', 'id'=>'submit-payment-settings']) !!}
                                    </div>
                                {!! form::close(); !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
