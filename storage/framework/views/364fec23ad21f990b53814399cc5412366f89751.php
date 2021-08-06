<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.inner-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="user">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-3">
                    <div class="user-box">
                        <h3><?php echo e(Str::upper($user->name)); ?></h3>
                        <p> Has posted <?php echo e($posts->count()); ?> <?php echo e(Str::plural('post', $posts->count())); ?> and
                            received <?php echo e($user->receivedLikes->count()); ?>

                            <?php echo e(Str::plural('like', $user->receivedLikes->count())); ?>. </p>

                        <?php if($posts->count()): ?>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="comment-box mt-3">
                                    <img loading="lazy" class="img-fluid" src="<?php echo e($post->user->avatar ?? url('/images/icons/user.png')); ?>" alt=""
                                        width="16" height="16">
                                    <a class="text-info"
                                        href="<?php echo e(route('user.post', $post->user)); ?>"><?php echo e($post->user->name); ?></a>
                                    <span class=""><?php echo e($post->created_at->diffForHumans()); ?></span>
                                    <p><?php echo e($post->body); ?></p>

                                    
                                    <div class="like">
                                        <?php if(auth()->guard()->check()): ?>
                                            <?php if(!$post->likedBy(auth()->user())): ?>
                                                <form action="<?php echo e(route('post.like', $post)); ?>" method="post"
                                                    class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit">Like</button>
                                                    <span> <?php echo e($post->likes->count()); ?>

                                                        <?php echo e(Str::plural('Like', $post->likes->count())); ?></span>
                                                </form>
                                            <?php else: ?>
                                                <form action="<?php echo e(route('post.like', $post)); ?>" method="post"
                                                    class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit">Unlike</button>
                                                    <span> <?php echo e($post->likes->count()); ?>

                                                        <?php echo e(Str::plural('Like', $post->likes->count())); ?></span>
                                                </form>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($posts->links()); ?>

                        <?php else: ?>
                            <div class="comment-box mt-4">
                                <p> <?php echo e($user->name); ?> does not have any posts.</p>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\users.blade.php ENDPATH**/ ?>