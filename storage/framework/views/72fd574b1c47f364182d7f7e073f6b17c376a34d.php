<!DOCTYPE html>
<html lang="en">

<head>

    <title> <?php echo e($title ?? 'Home'); ?> | SuperoAgrobase Limited</title>
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
    

</head>

<body>
    <!-- Header  -->
    <header class="fixed-top">
        <div class="top-nav ">
            <div class="container">

                <div>
                    <a class="cart px-3" href="<?php echo e(url('/')); ?>">
                        <img class="img-fluid" src="<?php echo e(url('/images/icons/trolley.png')); ?>" alt="cart" width="16"
                            height="16">
                        <sup class="text-danger">1</sup>
                        <span class="cart-text">Cart</span>
                    </a>
                </div>

                <div>
                    <a class="dropdown-toggle user" href="" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <span><img class="" src="<?php echo e(auth()->user()->avatar ?? url('/images/icons/user.png')); ?>"
                                alt="<?php echo e(auth()->user()->name ?? 'Guest'); ?>" width="16" height="16">
                            <?php echo e(auth()->user()->name ?? 'Guest'); ?> </span>
                    </a>

                    <li class="dropdown-menu list-unstyled" aria-labelledby="navbarDropdownMenuLink">
                        <?php if(auth()->guard()->guest()): ?>
                            <a class="dropdown-item" href="<?php echo e(route('register')); ?>">
                                Register
                            </a>
                            <a class="dropdown-item" href="<?php echo e(route('login')); ?>">
                                Login
                            </a>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                            <form action="<?php echo e(route('logout')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button class="w-100" type="submit">
                                    <a class="dropdown-item">
                                        Logout
                                    </a>
                                </button>
                            </form>
                        <?php endif; ?>
                    </li>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(url('/images/logo.png')); ?>" alt="Superoagrobase logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" focusable="false" width="1.4em" height="1.4em"
                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                            <path d="M0 1h16v3H0V1z" />
                            <path d="M0 6h16v3H0V6z" />
                            <path d="M0 11h16v3H0v-3z" />
                        </svg>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link active" href="<?php echo e(url('/')); ?>">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/about_us')); ?>">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo e(url('services/Agro-Input')); ?>">
                                    Agro-Input
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('services/Agricourt Ventures')); ?>">
                                    AgriCourt Ventures
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('services/Harvestyield Farm')); ?>">
                                    HarvestYield Farm
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/Our Products')); ?>"> Products </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('latestupdate.index')); ?>"> Updates </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('blog.index')); ?>"> Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('academy.home')); ?>"> HarvestYield Academy </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/contact_us')); ?>"> Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Ends -->

    <?php echo $__env->yieldContent("content"); ?>

    <!--  Footer  -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 footer-box d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Supero Agrobase limited</h6>
                            <img loading="lazy" class="img-fluid" src="<?php echo e(url('/images/logo.jpg')); ?>"
                                alt="Company logo">
                            <p>
                                Supero Incorporation Limited is a fast-rising agribusiness
                                enterprise that leverages in-depth research and development to
                                provide farmers with high quality agricultural inputs, farm
                                management, consultancy and agricultural laboratory services.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 footer-box  align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Services</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="<?php echo e(url('services/Agro-Input')); ?>"> Agro-Input </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('services/Agricourt Ventures')); ?>">
                                        AgriCourt Ventures</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url('services/Harvestyield Farm')); ?>">
                                        HarvestYield Farm
                                    </a>
                                </li>
                            </ul>
                            <h6 class="card-title">Quick links</h6>
                            <div class="quick-links">
                                <a href="<?php echo e(url('/')); ?>">Home</a>
                                <a href="<?php echo e(url('/about_us')); ?>">About </a>
                                <a href="<?php echo e(url('/Our Products')); ?>">Products</a>
                                <a href="<?php echo e(url('/contact_us')); ?>">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-4 col-md-12 mb-4 footer-box d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <p><?php echo e($error); ?></p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>

                            <h6>Newsletter </h6>
                            <p>
                                Get the latest updates on our products, exclusive offers, and more right in
                                your
                                inbox. Never miss important opportunities</p>

                            <form action="<?php echo e(route('newsletter')); ?>" method="POST"
                                enctype="application/x-www-form-urlencoded">
                                <?php echo csrf_field(); ?>

                                
                                <input type="email" name="email" placeholder="Enter Your Email"
                                    value="<?php echo e(old('email')); ?>" required />

                                <button class="my-2" type="submit" title="Subscribe">
                                    Subscribe
                                    <i>
                                        <svg width="2em" height="2em" viewBox="0 0 16 16">
                                            <path d="M6 8H1V6h5V4l3 3l-3 3zm10-8v13l-6 3v-3H4V9h1v3h5V3l4-2H5v4H4V0z" />
                                        </svg>
                                    </i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-foot">
            <div class="container">
                &copy Copyright <span id="year"></span> SuperoAgrobase Limited. All Rights Reserved.
                <br />
                Designed and Developed by
                <a href="https://wa.link/zmxpyc"> Abiodun Digital Hub </a>
            </div>
        </div>
    </footer>
    <!-- Footer  Ends  -->

    
    <div class="col-lg-12 contentBox">
        <div class="card">
            <i class="close text-right" style="cursor: pointer">
                <svg focusable="false" width="1.5em" height="1.5em" viewBox="0 0 32 32">
                    <path
                        d="M5 5v22h22V5zm2 2h18v18H7zm4.688 3.313l-1.407 1.406L14.562 16l-4.343 4.344l1.406 1.406l4.344-4.344l4.312 4.313l1.407-1.407L17.375 16l4.25-4.25l-1.406-1.406l-4.25 4.25z"
                        fill="#ff0000" />
                </svg>
            </i>
            <div class="card-body">
                <p class="card-text"> Do you want valuable tips on how to improve your farm for maximum yields? <br>
                    Do you want updates on our products, exclusive offers, and freebies? <br> We've got you covered.
                </p>
                <form class="d-inline" action="<?php echo e(route('newsletter')); ?>" method="POST"
                    enctype="application/x-www-form-urlencoded">
                    <?php echo csrf_field(); ?>
                    
                    <input class="w-100" type="email" name="email" placeholder="Enter Your Email"
                        value="<?php echo e(old('email')); ?>" required autocomplete="on" />
                    <button class="w-100 mt-3" type="submit" title="Subscribe">
                        SUBSCRIBE
                    </button>
                </form>
            </div>
        </div>
    </div>
    

    <!-- back-to-top -->
    <a id="back-to-top" title="Back to top">
        <svg width="2em" height="2em" viewBox="0 0 16 16">
            <g fill="#2f552e">
                <path fill-rule="evenodd"
                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 8.354a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 6.207V11a.5.5 0 0 1-1 0V6.207L5.354 8.354z" />
            </g>
        </svg>
    </a>

    <!-- Script -->
    <script src="<?php echo e(asset('/js/app.js?ver=1.0')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <!-- custom script file -->
    
    <script src="<?php echo e(url('/js/script.js?ver=1.0')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views/layouts/app.blade.php ENDPATH**/ ?>