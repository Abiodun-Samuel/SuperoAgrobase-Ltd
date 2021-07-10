<?php $__env->startSection('content'); ?>
    <section>
        <div class="container">
            <div class="row my-3 d-flex justify-content-center">
                <div class="col-lg-5 p-3">
                    <img loading="lazy" class="img-fluid p-1" src="<?php echo e(url('images/thanks.jpg')); ?>" alt="Thank You">
                    <p class="text-primary my-2"> <b><?php echo e($user); ?>, </b></p>
                    <p> <b><?php echo e($message_sent); ?></b></p>
                    <p>Go to <a class="mybtn btn-primary" href="<?php echo e(url('/')); ?>">Homepage</a></p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\thank.blade.php ENDPATH**/ ?>