<?php $__env->startSection('content'); ?>
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <label class="my-3 text-danger" for="">Please enter a new password</label>

                    <form method="POST" action="<?php echo e(route('password.update')); ?>">
                        <?php echo csrf_field(); ?>

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email"><?php echo e(__('E-Mail*')); ?></label>
                            <input id="email" type="email" name="email" value="<?php echo e($request->email); ?>" required
                                autocomplete="email">
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password"> <?php echo e(__('Password*')); ?> </label>
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation"> <?php echo e(__('Confirm Password*')); ?> </label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required />
                        </div>

                        <div class="my-4">
                            <button class="mybtn">
                                <?php echo e(__('Reset Password')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\auth\reset-password.blade.php ENDPATH**/ ?>