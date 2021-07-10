<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts/inner-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="service-page">
        <div class="container">

            <div class="row">

                <div class="col-lg-7 col-md-6 my-2">
                    <div class="mb-2">
                        <h3 class="mb-4">AgriCourt Ventures</h3>
                        <h5>Sales of Agro-Input Products</h5>
                    </div>
                    <p>
                        Through in-depth research and development, we’ve focused on serving the needs of farmers through
                        provision
                        of quality inputs(AgriCourt Ventures) such as high quality seeds, granular and water soluble
                        fertilizers,
                        irrigation systems, Growing Media (Cocopeat, Peat moss, Worm compost), seedling trays, mulch film,
                        grow
                        bags, modern and locally adapted green houses and net houses, green house covers, shade nets, insect
                        nets,
                        high quality crop protection products and several other agricultural inputs.
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
                    <img class="img-thumbnail" loading="lazy" src="<?php echo e(url('/images/icons/agricourt-logo.jpg')); ?>" alt=""
                        title="AgriCourt Ventures" width="400" height="400">
                </div>

            </div>


        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\services\Agricourt Ventures.blade.php ENDPATH**/ ?>