<?php $__env->startSection('content'); ?>

    <section id="latestupdate">
        <div class="container">

            
            <div class="row d-flex justify-content-center my-5">
                <div data-aos="fade-up" class="col-lg-6 bg-light my-2">
                    <div class="header">
                        <h3>Edit Post</h3>
                    </div>

                    <div class="latest p-3">

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p><?php echo e($message); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <form class="mt-4" action="<?php echo e(route('latestupdate.update', $latestUpdate->slug)); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Update Title</label>
                                <input type="text" name="title" value="<?php echo e($latestUpdate->title); ?>" class="form-control"
                                    id="exampleFormControlInput1">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Update Description</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"> <?php echo e($latestUpdate->description); ?> </textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Picture</label>
                                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <small><em>(Pictures size must not be greater than 2mb)</em></small>
                            <small><em>(All fields are required)</em></small>

                            <div class="form-group mt-2">
                                <button class="mybtn w-100" type="submit">EDIT</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\admin\latestupdate\edit.blade.php ENDPATH**/ ?>