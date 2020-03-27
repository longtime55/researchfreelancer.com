<div class="wt-tabscontenttitle">
    <h2>{{ trans('lang.job_cats') }}</h2>
</div>
<div class="wt-divtheme wt-userform wt-userformvtwo">
    <div class="form-group">
        <span class="wt-select">
            {!! Form::select('categories[]', $categories, $user->categories, array('class' => 'chosen-select', 'multiple', 'data-placeholder' => trans('lang.select_job_cats'))) !!}
        </span>
    </div>
</div>
