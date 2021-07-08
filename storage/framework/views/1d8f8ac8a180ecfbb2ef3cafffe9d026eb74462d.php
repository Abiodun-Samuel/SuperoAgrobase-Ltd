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
        .card {
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
            /* background: inherit; */
            border-radius: 0;
        }

        .card-header {
            padding: 10px 15px;
            font-size: 1rem;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .card-body p {
            font-size: 0.95rem;
            padding: 0;
            margin: 3px 0;
        }

        .table {
            color: #c0bebe;
        }

        @media  screen and (max-width: 568px) {
            td {
                font-size: 0.75rem;
            }

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
        <div class="row my-3">
            <div class=" col-lg-12 card-header mb-2">
                HarvestYield Academy

                <p> Students' Details </p>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p><b>Name:</b> <?php echo e($student->name); ?></p>
                            <p><b>Email:</b> <?php echo e(auth()->user()->email); ?></p>
                            <p><b>Phone:</b> <?php echo e($student->phone); ?></p>
                            <p><b>Gender:</b> <?php echo e($student->gender); ?></p>
                            <p><b>Education:</b> <?php echo e($student->education); ?></p>
                            <p><b>Address:</b> <?php echo e($student->address); ?></p>
                            <p><b>How did you hear about the training?</b> <?php echo e($student->media); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    </div>

    <script src="<?php echo e(asset('/js/app.js?ver=1.0')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views/admin/harvestyield-academy/index.blade.php ENDPATH**/ ?>