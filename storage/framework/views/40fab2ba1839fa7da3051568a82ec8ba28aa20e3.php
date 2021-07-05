<?php $__env->startSection('content'); ?>
    <section id="blog">
        <div class="container ">
            
            <div class="row d-flex justify-content-center my-5">
                <div data-aos="fade-up" class="col-lg-6 bg-light my-2">
                    <div class="header">
                        <h3>Post Blog</h3>
                    </div>
                    <div class="latest p-3">
                        <?php if($errors->any()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger">
                                    <p><?php echo e($message); ?></p>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <form class="form mt-4" action="<?php echo e(route('blog.store')); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Blog Title</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Blog Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Picture</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <small><em>(Pictures size must not be greater than 2mb)</em></small>
                            <small><em>(All fields are required)</em></small>

                            <div class="form-group mt-2">
                                <button class="mybtn w-100" type="submit">POST BLOG</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel Projects\superoinc\resources\views/admin/blog/create.blade.php ENDPATH**/ ?>