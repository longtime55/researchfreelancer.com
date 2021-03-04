<?php $__env->startPush('stylesheets'); ?>
    <link href="<?php echo e(asset('css/chosen.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/dashboard.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/dbresponsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/emojionearea.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/basictable.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/intltelInput/intlTelInput.css')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    <?php if(file_exists(resource_path('views/extend/includes/header.blade.php'))): ?>
        <?php echo $__env->make('extend.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?> 
        <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>

	<main id="wt-main" class="wt-main wt-haslayout">
        <?php if(Auth::user()): ?>
            <?php if(file_exists(resource_path('views/extend/back-end/includes/dashboard-menu.blade.php'))): ?>
                <?php echo $__env->make('extend.back-end.includes.dashboard-menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php else: ?> 
                <?php echo $__env->make('back-end.includes.dashboard-menu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
		<?php endif; ?>
		<?php echo $__env->yieldContent('content'); ?>
    </main>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/chosen.jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.basictable.min.js')); ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script>
        jQuery('.chosen-select').chosen();
        jQuery('.wt-tablecategories').basictable({
            breakpoint: 767,
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>