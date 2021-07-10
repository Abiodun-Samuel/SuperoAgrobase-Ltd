<?php $__env->startSection('content'); ?>
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="mb-4 text-sm text-gray-600">
                        <?php echo e(__('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')); ?>

                    </div>

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><?php echo e($error); ?></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <?php if(session('status')): ?>
                        <div class="alert alert-danger">
                            <p><?php echo e(session('status')); ?></p>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo csrf_field(); ?>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email"><?php echo e(__('E-Mail*')); ?></label>
                            <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required
                                autocomplete="email">
                        </div>

                        <div class="my-3">
                            <button class="mybtn">
                                <?php echo e(__('Email Password Reset Link')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\auth\forgot-password.blade.php ENDPATH**/ ?>