<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts/inner-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 my-2">
                    <div class=" mb-4">
                        <h3> HarvestYield Farm</h3>
                    </div>
                    <h5>Production of Vegetable Crops</h5>
                    <p>
                        Through our 10Ha Farmland focused on vegetable crop production i,e Tomato, Cucumber, Sweetcorn,
                        Special
                        Watermelon and Pepper, we provide farm management and consultancy services and partner with other
                        reputable
                        companies to offer soil analysis, fertilizer and manure analysis and other laboratory services which
                        are
                        necessary for successful growing.

                    </p>

                    <?php if (isset($component)) { $__componentOriginal74f224b12f2f691aac8b657be9b7301b428b2ba7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PageComponent::class, ['description' => 'We have fresh Agricultural Products for you, Check them out','link' => 'Our Products','linktext' => 'Products']); ?>
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
                </div>
                <div class="col-lg-5 col-md-6 my-2">
                    <img class="img-thumbnail" loading="lazy" src="<?php echo e(url('/images/icons/harvestyield-logo.jpg')); ?>"
                        alt="" title="Harvestyield" width="400" height="400">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\services\Harvestyield Farm.blade.php ENDPATH**/ ?>