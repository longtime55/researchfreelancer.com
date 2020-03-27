<div class="wt-tabscontenttitle">
    <h2>{{{ trans('lang.your_details') }}}</h2>
</div>
<div class="lara-detail-form">
    <fieldset>
        <div class="form-group form-group-half">
            {!! Form::text( 'first_name', e(Auth::user()->first_name), ['class' =>'form-control', 'placeholder' => trans('lang.ph_first_name')] ) !!}
        </div>
        <div class="form-group form-group-half">
            {!! Form::text( 'last_name', e(Auth::user()->last_name), ['class' =>'form-control', 'placeholder' => trans('lang.ph_last_name')] ) !!}
        </div>
        <div class="form-group form-group-half">
            <span class="wt-select">
                {!! Form::select( 'gender', ['male' => 'Male', 'female' => 'Female'], e($gender), ['placeholder' => trans('lang.ph_select_gender')] ) !!}
            </span>
        </div>
        <div class="form-group form-group-half">
            <span class="wt-select">
                {!! Form::select('transaction_currency', $currency, e($trans_currency), array('class'=>'form-control','placeholder'=>trans('lang.ph_select_transaction_currency'))) !!}
            </span>
        </div>
        <div class="form-group form-group-half">
            {!! Form::tel( 'phone_number', e(Auth::user()->phone_number), ['id' =>'em_pn', 'class' =>'form-control'] ) !!}
            {!! Form::hidden( 'dialcode', '', ['id' =>'em_dialcode'] ) !!}
        </div>
        <div class="form-group form-group-half">
            <h3 id="valid-msg" class="wt-mobilevalid">✓ Valid</h3>
            <h3 id="error-msg" class="wt-mobileinvalid"></h3>
        </div>
        <!--<div class="form-group">-->
        <!--    {!! Form::text( 'withd_details', e($withd_details), ['class' =>'form-control', 'placeholder' => trans('lang.ph_withd_details')] ) !!}-->
        <!--</div>-->
        <div class="form-group">
            {!! Form::text( 'tagline', e($tagline), ['class' =>'form-control', 'placeholder' => trans('lang.ph_add_tagline')] ) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea( 'description', e($description), ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc')] ) !!}
        </div>
    </fieldset>
</div>
@push('scripts')
    <script src="{{ asset('js/intltelInput/intlTelInput.js') }}"></script>
    <script>
        mobileFunction();
        function mobileFunction() {
            var input = document.querySelector("#em_pn"),
            dialcode = document.querySelector("#em_dialcode"),
            submit = document.querySelector("#submit-profile"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");

            // here, the index maps to the error code returned from getValidationError - see readme
            var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

            // initialise plugin
            var iti = window.intlTelInput(input, {
                utilsScript: "{{ asset('js/intltelInput/utils.js?1562189064761') }}"
            });
            
            dialcode.value = iti.getSelectedCountryData().dialCode;

            var reset = function() {
                input.classList.remove("error");
                errorMsg.innerHTML = "";
                validMsg.innerHTML = "";
                errorMsg.classList.add("invisible");
                validMsg.classList.add("invisible");
                dialcode.value = iti.getSelectedCountryData().dialCode;
            };

            var change_code = function() {
                iti = window.intlTelInput(input, {
                    utilsScript: "{{ asset('js/intltelInput/utils.js?1562189064761') }}"
                });
                dialcode.value = iti.getSelectedCountryData().dialCode;
            };

            // on blur: validate
            input.addEventListener('blur', function() {
                reset();
                if (input.value.trim()) {
                    if (iti.isValidNumber()) {
                        validMsg.classList.remove("invisible");
                        validMsg.innerHTML = "✓ Valid";
                    }   else {
                        input.classList.add("error");
                        var errorCode = iti.getValidationError();
                        errorMsg.innerHTML = errorMap[errorCode];
                        errorMsg.classList.remove("invisible");
                    }
              }
            });

            // on keyup / change flag: reset
            input.addEventListener('change', reset);
            input.addEventListener('keyup', reset);
            submit.addEventListener('submit', change_code);
        }
    </script>
@endpush
