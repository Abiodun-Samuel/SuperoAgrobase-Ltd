<!DOCTYPE html>
<html lang="en">

<head>

    <title> Admin Panel </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta
        content="Supero Agrobase Limited is an indigenous company in Nigeria with deep understanding of the needs and challenges of Nigerian farmers. We deal with  Agro - Input products, claims, research and Promotion, Sales of Agro input Products (AgriCourt Ventures) and Production of Vegetable Crops (HarvestYield Farm)"
        name="description" />

    <meta
        content="irrigation cultivation husbandry horticulture crop biofuel farm animal husbandry farming cultivate agribusiness food domestication agricultural manure  tillage monoculture forestry livestock harvest agronomy pesticide cotton wheat crop rotation dairy aquaculture sow overcrop education raw material genetically modified organism selective breeding climate plow farmer plant fertilize fiber grow fertile crescent"
        name="keywords" />

    
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="<?php echo e(asset('/images/favicon.png')); ?>" rel="icon" />
    <link href=" <?php echo e(asset('/images/apple-touch-icon.png')); ?>" rel="apple-touch-icon" />

    <!-- Style libraries -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?php echo e(asset('/css/app.css?ver=1.0')); ?>" />
    <?php echo $__env->yieldPushContent('styles'); ?>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(url('style.css?ver=1.0')); ?>" />
    

    <style>
        body {
            background: #22252a;
            color: #949494;
        }

        .navbar,
        .card-header,
        .box {
            background: #2d3035;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        }

        .box {
            padding: 10px
        }

        span {
            font-weight: 600;
        }

        .card {
            border: 0;
            background: inherit;
            border-radius: 0;
        }

        .card-header {
            padding: 10px 15px;
            font-size: 1rem;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

    </style>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?php echo e(url('images/logo.jpg')); ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form action="<?php echo e(route('logout')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button class="border-0 text-light px-3 bg-transparent py-1 w-100 outline-0" type="submit">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-6 my-3">
                <div class="box">
                    <img class="my-1" loading="lazy" src="<?php echo e(url('images/icons/user.png')); ?>" height="24" width="24"
                        title=" Registered Users" alt="users">
                    <h5> <span><?php echo e($users); ?> </span> Registered Users</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-3 ">
                <div class="box">
                    <img class="my-1" loading="lazy" src="<?php echo e(url('images/icons/students.png')); ?>" height="24"
                        width="24" alt="HYAcademy Students" title="HYAcademy Students">
                    <h5> <span><?php echo e($hyacademy->count()); ?> </span> HYAcademy Students </h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-3">
                <div class="box">
                    <img class="my-1" loading="lazy" src="<?php echo e(url('images/icons/blog.png')); ?>" height="24" width="24"
                        alt="blog" title="blog">
                    <h5> <span><?php echo e($blogs->count()); ?> </span> Blogs </h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-3 ">
                <div class="box">
                    <img class="my-1" loading="lazy" src="<?php echo e(url('images/icons/refresh.png')); ?>" height="24"
                        width="24" alt="updates" title="updates">
                    <h5> <span><?php echo e($updates->count()); ?> </span> Updates </h5>
                </div>
            </div>
        </div>

        <?php if(session('status')): ?>
            <div class="alert alert-success">
                <p><?php echo e(session('status')); ?></p>
            </div>
        <?php endif; ?>

        <div class="row my-3">
            <div class="col-lg-6 col-md-6 my-4">
                <div class="card">

                    <div class="card-header mb-2">
                        Recent Blog Posts
                    </div>
                    <a href="<?php echo e(route('blog.create')); ?>">Add Blogs</a>
                    <div class="card-body">

                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p> <b>Title: </b> <?php echo e($blog->title); ?> </p>
                            <a class="text-danger bg-transparent mx-2" href="<?php echo e(route('blog.edit', $blog->slug)); ?>">
                                <u>Edit</u>
                            </a>
                            <form class="d-inline" action="<?php echo e(route('blog.destroy', $blog->slug)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="text-danger border-0 outline-0 bg-transparent mx-2" type="submit">
                                    <u>Delete</u> </button>
                            </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <?php echo e($blogs->links()); ?>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 my-4">
                <div class="card">
                    <div class="card-header mb-2">
                        Recent Updates
                    </div>
                    <a href="<?php echo e(route('latestupdate.create')); ?>">Add Updates</a>

                    <div class="card-body">
                        <?php $__currentLoopData = $updates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $update): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="pb-0"> <b>Title: </b><?php echo e($update->title); ?></p>
                            <a class="text-danger mx-1 text-center"
                                href="<?php echo e(route('latestupdate.edit', $update->slug)); ?>">
                                <u>Edit</u> </a>

                            <form class="d-inline" action="<?php echo e(route('latestupdate.destroy', $update->slug)); ?>"
                                method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="text-danger border-0 outline-0 bg-transparent" type="submit">
                                    <u>Delete</u></button>
                            </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php echo e($updates->links()); ?>

                </div>
            </div>
        </div>

        
        <div class="row my-4">
            <div class="col-lg-6 col-md-6">
                <div class="card py-0">
                    <div class="card-header">
                        HarvestYield Students
                    </div>
                    <?php $__currentLoopData = $hyacademy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-1 d-flex justify-content-between">
                            <p><b>Name:</b> <?php echo e($student->name); ?></p>
                            <a href="mailto:<?php echo e($student->email); ?>"> <img
                                    src="<?php echo e(url('images/icons/message.png')); ?>" alt="mail to students"></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>



    <script src="<?php echo e(asset('/js/app.js?ver=1.0')); ?>"></script>
</body>

</html>

<?php $__env->startSection('content'); ?>
    <section id="admin">
        <div class="container">
            
            <div class="row d-flex justify-content-center my-5">
                <div class="col-lg-6 mt-2">
                    <div class="header text-center  p-3">
                        <h3>Admin Panel</h3>
                        <p> <?php echo e(Str::upper(auth()->user()->name)); ?>, Welcome to Admin Panel.</p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center my-3">
                <div class="col-lg-6 ">
                    <a href="<?php echo e(route('latestupdate.create')); ?>">
                        <div class="page text-center  p-3">
                            <img loading="lazy" class="mr-3" src="<?php echo e(url('images/icons/latest.png')); ?>" alt="">
                            <span>Post Latest Update</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row d-flex justify-content-center my-3">
                <div class="col-lg-6">
                    <a href="<?php echo e(route('blog.create')); ?>">
                        <div class="page text-center  p-3">
                            <img loading="lazy" class="mr-3" src="<?php echo e(url('images/icons/blog.png')); ?>" alt="">
                            <span>Post a Blog</span>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="row d-flex justify-content-center my-3">
                <div class="col-lg-6">
                    <a href="<?php echo e(route('admin.hyacademy')); ?>">
                        <div class="page text-center p-3">
                            <img loading="lazy" class="mr-3" src="<?php echo e(url('images/icons/harvestyield-logo.jpg')); ?>"
                                alt="harvestyield academy" height="24px" width="24px">
                            <span>HarvestYield Academy</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\abiod\Desktop\Laravel Projects\superoinc\resources\views/admin/admin.blade.php ENDPATH**/ ?>