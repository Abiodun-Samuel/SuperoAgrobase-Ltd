<?php $__env->startSection('content'); ?>
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-5">
                    <div class="mb-4 text-sm text-gray-600">
                        <?php echo e(__('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.')); ?>

                    </div>

                    <?php if(session('status') == 'verification-link-sent'): ?>
                        <div class="alert alert-danger">
                           <p class="p-1"> <?php echo e(__('A new verification link has been sent to the email address you provided during registration.')); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="mt-4 ">
                        <form method="POST" action="<?php echo e(route('verification.send')); ?>">
                            <?php echo csrf_field(); ?>

                            <div>
                                <button class="mybtn">
                                    <?php echo e(__('Resend Verification Email')); ?>

                                </button>
                            </div>
                        </form>

                        
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\auth\verify-email.blade.php ENDPATH**/ ?>