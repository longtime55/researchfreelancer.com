<div class="wt-tabscontenttitle">
    <h2>{{{ trans('lang.citations') }}}</h2>
</div>
<div class="wt-divtheme wt-userform wt-userformvtwo">
    <fieldset>
        <div class="form-group">
            <span class="wt-select">
                {!! Form::select('citation_id', $citations, $citation_id ,array('class' => '', 'placeholder' => trans('lang.select_citation'))) !!}
            </span>
        </div>
    </fieldset>
</div>