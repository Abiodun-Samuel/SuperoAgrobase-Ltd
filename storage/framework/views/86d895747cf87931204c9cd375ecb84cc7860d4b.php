<!DOCTYPE html>
<html lang="en">

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
        <div class="row">
            <div class="col-lg-12">
                <h3>HarvestYield Academy </h3>
                <p>Student's Details</p>
            </div>


            <table class="table mt-5 mb-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Ad No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Education</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($student['admission_no']); ?></td>
                            <td><?php echo e($student->name); ?></td>
                            <td><?php echo e(Str::upper(Str::limit($student->gender, 1, ''))); ?></td>
                            <td><?php echo e($student->phone); ?> </td>
                            <td><?php echo e($student->email); ?> </td>
                            <td><?php echo e($student->address); ?> </td>
                            <td><?php echo e($student->education); ?> </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="<?php echo e(asset('/js/app.js?ver=1.0')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\abiod\Desktop\Laravel-Projects\superoinc\resources\views/admin/hyacademy-student-list.blade.php ENDPATH**/ ?>