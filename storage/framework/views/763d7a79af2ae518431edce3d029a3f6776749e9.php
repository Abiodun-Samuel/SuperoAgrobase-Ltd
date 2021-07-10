<?php $__env->startComponent('mail::message'); ?>

<h3> Hello, I'm <?php echo e(auth()->user()->hyacademy->name); ?></h3>

<p> <?php echo e($student_message); ?></p>

<p><a href="mailto:<?php echo e(auth()->user()->email); ?>">Reply</a></p>
<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\emails\studentsmessage.blade.php ENDPATH**/ ?>