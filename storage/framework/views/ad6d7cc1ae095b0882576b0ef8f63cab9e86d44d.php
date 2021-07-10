<?php $__env->startSection('content'); ?>
    <section class="auth">
        <div class="container">
            <div class="header">
                <h3>Login</h3>
            </div>
            <div class="row justify-content-center mt-4">

                <div class="col-lg-4 my-3">
                    <img class="img-fluid" src="<?php echo e(url('/images/vegetables.jpg')); ?>" alt="vegetables" height="350"
                        width="350" title="vegetables">
                </div>

                <div class="col-lg-4 my-3 pt-3">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

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

                        <?php if(session('error_message')): ?>
                            <div class="alert alert-danger">
                                <p><?php echo e(session('error_message')); ?></p>
                            </div>
                        <?php endif; ?>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email"><?php echo e(__('E-Mail*')); ?></label>
                            <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" 
                                autocomplete="email">
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password"> <?php echo e(__('Password*')); ?> </label>
                            <input id="password" class="block mt-1 w-full" type="password" name="password"
                                autocomplete="new-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="remember_me"><?php echo e(__('Remember me')); ?></label>
                                <input class="form-check-input mx-2" type="checkbox" id="remember_me" name="remember">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Login with:</label>
                            <a href="<?php echo e(route('login.google')); ?>"><img class="img-fluid"
                                    src="<?php echo e(url('/images/icons/google.png')); ?>" alt="google"></a>
                            <a href="<?php echo e(route('login.facebook')); ?>"><img class="img-fluid mx-2"
                                    src="<?php echo e(url('/images/icons/facebook.png')); ?>" alt=""></a>
                        </div>

                        <div class="form-group">
                            <?php if(Route::has('password.request')): ?>
                                <small>
                                    <a class="text-danger" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot your password?')); ?>

                                    </a>
                                </small>
                            <?php endif; ?>
                            <br>
                            <small> Guest? <a href="<?php echo e(route('register')); ?>">Register</a> </small>
                        </div>
                        <button class="mybtn" onclick="this.classList.toggle('button--loading')">
                            <?php echo e(__('Log in')); ?>

                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        // loader for button
        const btn = document.querySelector(".button");
        btn.classList.add("button--loading");
        btn.classList.remove("button--loading");
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\auth\login.blade.php ENDPATH**/ ?>