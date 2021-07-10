<?php $__env->startSection('content'); ?>
    <div id="inner-page">
        <div class="container">
            <h2> <a href="<?php echo e(url('/')); ?>"> Home</a> | <a href="<?php echo e(route('latestupdate.index')); ?>">Latest Updates</a>
                | <?php echo e($title = $latestUpdate->title); ?> </h2>
        </div>
    </div>

    <section id="latestupdate-page-show">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" class="col-lg-7 col-md-7 my-2">
                    <h3> <?php echo e($latestUpdate->title); ?> </h3>
                    <div> <span>By <?php echo e($latestUpdate->user->name); ?>, </span> <span> Uploaded
                            <?php echo e($latestUpdate->updated_at->diffForHumans()); ?></span></div>
                    <!-- ShareThis BEGIN -->
                    <div style="height: 30px" class="sharethis-inline-share-buttons my-3"></div><!-- ShareThis END -->
                    <p class="mt-3"> <?php echo e($latestUpdate->description); ?> </p>
                    <img class="img-fluid bg-secondary" loading="lazy"
                        src="<?php echo e(url('/images/latestupdates/' . $latestUpdate->image_path)); ?>"
                        alt="<?php echo e($latestUpdate->title); ?>" width="300" height="300" title="<?php echo e($latestUpdate->title); ?>">
                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-5 col-md-5 my-2">
                    <div class="card text-center rounded-0 border-0">
                        <div class="card-top">
                            <h3>More Updates</h3>
                            <hr>
                        </div>

                        <div class="card-body">
                            <?php $__currentLoopData = $moreUpdates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moreUpdate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p>
                                    <a href="<?php echo e(route('latestupdate.show', $moreUpdate->slug)); ?>">
                                        <?php echo e(Str::upper($moreUpdate->title)); ?></a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\admin\latestupdate\show.blade.php ENDPATH**/ ?>