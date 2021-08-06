<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.inner-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section id="blog">
        <div class="container">

            

            <div class="row my-3">
                <?php if($blogs->count()): ?>
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div data-aos="fade-up" class="col-lg-4 col-md-6 col-sm-6 my-5">
                            <div class="card">
                                <img class="img-fluid bg-secondary mb-2" loading="lazy"
                                    src="<?php echo e(url('/images/blogs/' . $blog->image_path)); ?>" alt="<?php echo e($blog->title); ?>"
                                    width="300" height="300" title="<?php echo e($blog->title); ?>">

                                <div class="card-body">
                                    <h4> <?php echo e(Str::upper($blog->title)); ?></h4>
                                    <span>By <?php echo e($blog->user->name); ?>, </span> <span> Uploaded
                                        <?php echo e($blog->updated_at->diffForHumans()); ?></span>

                                    <p> <?php echo e(Str::words($blog->description, 10, ' ...')); ?> </p>

                                    <div>
                                        <a class="mybtn btn-more py-2 px-3" href="<?php echo e(route('blog.show', $blog->slug)); ?>">
                                            Read More
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

            <?php echo e($blogs->links()); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\admin\blog\index.blade.php ENDPATH**/ ?>