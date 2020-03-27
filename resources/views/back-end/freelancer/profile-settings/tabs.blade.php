<div class="wt-dashboardtabs">
    <ul class="wt-tabstitle nav navbar-nav">
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='personalDetail'? 'active': '' }}}" href="{{{ route('personalDetail') }}}">{{{ trans('lang.personal_detail') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='skillsSpecialization'? 'active': '' }}}" href="{{{ route('skillsSpecialization') }}}">{{{ trans('lang.skills_specialization') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='experienceEducation'? 'active': '' }}}" href="{{{ route('experienceEducation') }}}">{{{ trans('lang.education_cert_experience') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='paymentSettings'? 'active': '' }}}" href="{{{ route('paymentSettings') }}}">{{{ trans('lang.payment_settings') }}}</a>
        </li>
        <li class="nav-item">
            <a class="{{{ \Request::route()->getName()==='projectAwards'? 'active': '' }}}" href="{{{ route('projectAwards') }}}">{{{ trans('lang.project_awards') }}}</a>
        </li>
    </ul>
</div>
