<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts/inner-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="product">
        <div class="container text-center">
            <img loading="lazy" class="img-fluid bg-secondary" src="<?php echo e(url('/images/under-construction.jpg')); ?>"
                alt="page is under construction" height="400" width="400">
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginal74f224b12f2f691aac8b657be9b7301b428b2ba7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageComponent::class, ['description' => 'Do you want to make enquiry about any of our products or you want to place an order? Please feel free to contact us,  we\'ll get back to you promptly. Cheers!','link' => 'contact_us','linktext' => 'Contact Us']); ?>
<?php $component->withName('page-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal74f224b12f2f691aac8b657be9b7301b428b2ba7)): ?>
<?php $component = $__componentOriginal74f224b12f2f691aac8b657be9b7301b428b2ba7; ?>
<?php unset($__componentOriginal74f224b12f2f691aac8b657be9b7301b428b2ba7); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\shop.blade.php ENDPATH**/ ?>