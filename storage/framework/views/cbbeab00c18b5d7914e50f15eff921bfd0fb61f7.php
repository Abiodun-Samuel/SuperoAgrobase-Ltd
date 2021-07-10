<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.inner-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <section id="latestupdate-page">
        <div class="container">

            

            <div class="row my-3">
                <div data-aos="fade-up" class="col-lg-8 d-flex flex-wrap">
                    <?php if($latestUpdates->count()): ?>
                        <?php $__currentLoopData = $latestUpdates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestUpdate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 my-3">
                                <div class="card">
                                    <img class="img-fluid bg-secondary mb-2" loading="lazy"
                                        src="<?php echo e(url('/images/latestupdates/' . $latestUpdate->image_path)); ?>"
                                        alt="<?php echo e($latestUpdate->title); ?>" width="300" height="300"
                                        title="<?php echo e($latestUpdate->title); ?>">

                                    <div class="card-body">
                                        <h4> <?php echo e(Str::upper($latestUpdate->title)); ?></h4>
                                        <span>By <?php echo e($latestUpdate->user->name); ?>, </span> <span> Uploaded
                                            <?php echo e($latestUpdate->updated_at->diffForHumans()); ?></span>

                                        <p> <?php echo e(Str::words($latestUpdate->description, 10, ' ...')); ?> </p>

                                        <div>
                                            <a class="mybtn btn-a"
                                                href="<?php echo e(route('latestupdate.show', $latestUpdate->slug)); ?>">
                                                Read More
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>

                
                <div class="col-lg-4 my-3 text-center">
                    <div data-aos="fade-up" data-aos-delay="100" class="card prevupdate p-2 mb-3 bg-white shadow-sm">
                        <h4>Previous Posts</h4>
                        <hr>
                        <?php $__currentLoopData = $prevUpdates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prevUpdate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('latestupdate.show', $prevUpdate->slug)); ?>">
                                <?php echo e(Str::upper($prevUpdate->title)); ?></a>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="150" class="card prevupdate p-2 my-3 bg-white shadow-sm">
                        <h4>Advertisement</h4>
                        <hr>
                        <p>Place your advert here at an afford price</p>
                        <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
                    </div>
                </div>

            </div>

            <?php echo e($latestUpdates->links()); ?>

        </div>
    </section>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views\admin\latestupdate\index.blade.php ENDPATH**/ ?>