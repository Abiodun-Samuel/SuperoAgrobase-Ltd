<?php $__env->startComponent('mail::message'); ?>

<h2>Hello, <?php echo e($hyacademy->name); ?></h2>

<p>Congratulations!</p>

<p>You’ve successfully completed registration for HarvestYield Academy Training. This is the right step towards your career advancement and we are really excited to have you on board. The commencement date will be communicated to you via this channel very soon.</p>

<p>Download your admission letter <a href="<?php echo e(url('/images/HYAcademy/' . $hyacademy->name . '.pdf')); ?>" download> here. </a> <br>
If you have any questions about the training, please feel free to <a href="www.superoagrobase.com/contact_us">contact us.</a></p>



Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\emails\hyacademy.blade.php ENDPATH**/ ?>