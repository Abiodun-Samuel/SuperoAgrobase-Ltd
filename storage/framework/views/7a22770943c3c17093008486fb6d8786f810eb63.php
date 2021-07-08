<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts/inner-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="service-page">
        <div class="container">
            <div class="mb-3">
                <h3 class="mb-4"> Agro-Input</h3>
                <h5> Products Claim(s), Research & Promotion</h5>
            </div>

            <p>
                The rate at which small-scale farmers and commercial farmers lose their farm produce to the negative impacts
                of adulterated and low quality input is enormous. We stand out and authenticate manufacturer claims on
                agro-input products approved by SON and NAFDAC with quality research on our 3ha research facility and
                promote to a network of over 10,000 farmers in our database (as at December 2020).
            </p>

            <p>
                We identify problems in production, search for product(s) to solve the problem, conduct trial(s) to affirm
                manufacturer claims about such product, promote the product brand(s) to users (farmers) and make such
                product available through our Agro-input dealers’ network nationwide
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
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views/services/Agro-Input.blade.php ENDPATH**/ ?>