<?php $__env->startComponent('mail::message'); ?>
<h2> <?php echo e($ContactData['subject']); ?> </h2>
<p> Hi, I'm <?php echo e($ContactData['name']); ?></p>

<p> <?php echo e($ContactData['message']); ?> </p>


Thanks,<br>
<?php echo e(config('app.name')); ?>


<?php $__env->startComponent('mail::button', ['url' => 'mailto:'.$ContactData['email']]); ?>
Reply
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('mail::button', ['url' => 'tel:'.$ContactData['phone']]); ?>
Call
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\emails\contactmail.blade.php ENDPATH**/ ?>