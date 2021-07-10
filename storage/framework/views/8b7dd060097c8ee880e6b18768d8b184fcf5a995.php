<?php $__env->startSection('content'); ?>
    <div id="inner-page">
        <div class="container">
            <h2> <a href="<?php echo e(url('/')); ?>"> Home</a> | <a href="<?php echo e(route('blog.index')); ?>"> Blog </a>
                |<?php echo e($title = $blog->title); ?> </h2>
        </div>
    </div>
    <section id="blog-page-show">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" class="col-lg-7 col-md-7 my-2">
                    <h3> <?php echo e($blog->title); ?></h3>
                    <div> <span>By <?php echo e($blog->user->name); ?>, </span> <span> Uploaded
                            <?php echo e($blog->updated_at->diffForHumans()); ?></span></div>
                    <div style="height: 30px" class="sharethis-inline-share-buttons my-3"></div>
                    <p class="mt-3"> <?php echo e($blog->description); ?> </p>
                    <img class="img-fluid bg-secondary my-3" loading="lazy"
                        src="<?php echo e(url('/storage/images/blogs/' . $blog->image_path)); ?>" alt="<?php echo e($blog->title); ?>" width="300"
                        height="300" title="<?php echo e($blog->title); ?>">
                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-5 col-md-5 my-2">
                    <div class="card text-center rounded-0 border-0">
                        <div class="card-top">
                            <h3>More Blogs</h3>
                            <hr>
                        </div>

                        <div class="card-body">
                            <?php $__currentLoopData = $moreBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moreBlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p>
                                    <a href="<?php echo e(route('blog.show', $moreBlog->slug)); ?>">
                                        <?php echo e(Str::upper($moreBlog->title)); ?></a>
                                    </a>
                                </p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=60b73fbacdfdc30011c6f7ac&product=inline-share-buttons">
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\admin\blog\show.blade.php ENDPATH**/ ?>