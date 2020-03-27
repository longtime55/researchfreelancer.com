<div class="wt-tabscontenttitle">
    <h2>{{{ trans('lang.citations') }}}</h2>
</div>
<div class="wt-divtheme wt-userform wt-userformvtwo">
    <div class="form-group">
        <span class="wt-select">
            {!! Form::select('citations[]', $citations, $user->citations, array('class' => 'chosen-select', 'multiple', 'data-placeholder' => trans('lang.select_citation'))) !!}
        </span>
    </div>
</div>