<?php $__env->startSection('content'); ?>
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 my-5">
                    <div class="mb-4 text-sm text-gray-600">
                        <?php echo e(__('This is a secure area of the application. Please confirm your password before continuing.')); ?>

                    </div>

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.confirm')); ?>">
                        <?php echo csrf_field(); ?>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password"> <?php echo e(__('Password*')); ?> </label>
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>

                        <div class="my-2">
                            <button class="mybtn">
                                <?php echo e(__('Confirm')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\auth\confirm-password.blade.php ENDPATH**/ ?>