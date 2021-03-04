<div class="wt-dashboardtabs">
    <ul class="wt-tabstitle nav navbar-nav">
        <li class="nav-item">
            <a class="<?php echo e(\Request::route()->getName()==='employerPayoutsSettings'? 'active': ''); ?>" href="<?php echo e(route('employerPayoutsSettings')); ?>"><?php echo e(trans('lang.payout_settings')); ?></a>
        </li>
        <li class="nav-item">
            <a class="<?php echo e(\Request::route()->getName()==='getEmployerPayouts'? 'active': ''); ?>" href="<?php echo e(route('getEmployerPayouts')); ?>"><?php echo e(trans('lang.payouts')); ?></a>
        </li>
    </ul>
</div>