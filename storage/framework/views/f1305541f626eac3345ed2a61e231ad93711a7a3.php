<?php $__env->startSection('content'); ?>
	Thsi is yeild content
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>