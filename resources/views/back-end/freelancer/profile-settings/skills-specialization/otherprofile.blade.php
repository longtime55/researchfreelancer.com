<div class="wt-yourdetails wt-tabsinfo">
	<div class="wt-tabscontenttitle">
	    <h2>{{{ trans('lang.research_experience') }}}</h2>
	</div>
	<div class="wt-divtheme wt-userform wt-userformvtw">
	    <fieldset>
	        <div class="form-group">
	        	<span class="wt-select">
	                {!! Form::select('years_exp', $years, $years_exp ,array('class' => '', 'placeholder' => trans('lang.select_year'))) !!}
	            </span>
	        </div>
	    </fieldset>
	</div>
</div>
<div class="wt-yourdetails wt-tabsinfo">
	<div class="wt-tabscontenttitle">
    <h2>{{{ trans('lang.box_write') }}}</h2>
	</div>
	<div class="wt-divtheme wt-userform wt-userformvtw">
	    <fieldset>
	        <div class="form-group">
	        	{!! Form::textarea( 'market_profile', e($market_profile), ['class' =>'form-control', 'placeholder' => trans('lang.ph_write_profile')] ) !!}
	        </div>
	    </fieldset>
	</div>
</div>

@push('scripts')
    <script type="text/javascript">
    	$(function() {
		    $('#year_only').datepicker({
		        changeYear: true,
		        showButtonPanel: true,
		        dateFormat: 'yy',
		        onClose: function(dateText, inst) { 
		            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
		            $(this).datepicker('setDate', new Date(year, 5));
		        }
		    });
		   $("#year_only").focus(function () {
		        $(".ui-datepicker-month").hide();
		        $(".ui-datepicker-calendar").hide();
		    });
		    
		});
	</script>
@endpush
	