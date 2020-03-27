{!! Form::open(['url' => '', 'class' =>'wt-formtheme wt-userform wt-stripe-form', 'id' =>'rave-form', '@submit.prevent'=>'submitRaveSettings'])!!}
    <div class="wt-location wt-tabsinfo">
        <div class="wt-tabscontenttitle la-switch-option">
            <h2>{{{ trans('lang.rave_settings') }}}</h2>
            <switch_button v-model="enable_test">{{{ trans('lang.enable_test') }}}</switch_button>
            <input type="hidden" :value="enable_test" name="enable_test">
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    {!! Form::text('rave_title', e($rave_title), ['class' => 'form-control', 'placeholder' => trans('lang.rave_title')]) !!}
                </div>
            </div>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    {!! Form::text('rave_key', e($rave_key), ['class' => 'form-control', 'placeholder' => trans('lang.rave_key')]) !!}
                </div>
            </div>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    {!! Form::text('rave_secret', e($rave_secret), ['class' => 'form-control', 'placeholder' => trans('lang.rave_secret')]) !!}
                </div>
            </div>
        </div>
        <div class="wt-settingscontent">
            <div class="wt-formtheme wt-userform">
                <div class="form-group">
                    {!! Form::text('rave_secret_hash', e($rave_secret_hash), ['class' => 'form-control', 'placeholder' => trans('lang.rave_secret_hash')]) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="wt-updatall la-updateall-holder">
        <i class="ti-announcement"></i>
        <span>{{{ trans('lang.save_changes_note') }}}</span>
        {!! Form::submit(trans('lang.btn_save'),['class' => 'wt-btn']) !!}
    </div>
{!! Form::close() !!}