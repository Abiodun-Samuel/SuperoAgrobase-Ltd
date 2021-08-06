<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission Letter</title>
    <style>
        h3,
        h4,
        p {
            letter-spacing: 0.5px;
        }

        h4.center {
            text-align: center;
        }

    </style>

</head>

<body>

    <h3>
        Mr. Adetola Damilola, <br>
        Training Coordinator, <br>
        HarvestYield Academy, <br>
        10, Jimoh Odu Street, Opp Benson B/S, <br>
        Ikorodu Garage, <br>
        Lagos.
    </h3>

    <p> Dear Mr/Mrs/Miss <?php echo e(auth()->user()->hyacademy->name); ?>,</p>

    <h4 class="center"> ADMISSION LETTER</h4>

    <p>
        We are pleased to inform you that you have been offered admission to Harvestyield Academy. <br>
        Harvestyield Academy is a subsidiary of SuperoAgrobase Inc where we educate and equip aspiring farmers with
        necessary tools they need in other to be successive.
    </p>
    <p>
        The program will run for 3months. <br>
        12 Online classes on Google meet app. <br>
        3 Practical sessions on the farm. <br>
        It is important for all participants to get starter packs (Production Value packs) contents are Seeds, basic
        Agrochemicals, Hand Sprayers and Fertilizers. This subsidizes to (#20,000 or $50). <br>
        Assignment and Personal field showcase is an important assessment upon certification. <br>
    </p>

    <h4> ADMISSION DETAILS:</h4>
    <p>
        <b>Full Name</b>: <?php echo e(auth()->user()->hyacademy->name); ?> <br>
        <b>Admission Number:</b> <?php echo e(auth()->user()->hyacademy->admission_no); ?> <br>
        <b>Email:</b> <?php echo e(auth()->user()->email); ?> <br>
        <b>Phone:</b> <?php echo e(auth()->user()->hyacademy->phone); ?>

    </p>
    <p> Congratulations, this is surely the right step towards your career advancement as a practising farmer and we are
        really delighted to have you on board, we look forward towards an amazing training sessions with you. </p>
    <p>Sit tight, commencement date will be communicated via your email. Cheers!!!</p>

    <p class="my-2">
        Regards, <br>
        Mr Adetola Damilola, <br>
        Training Coordinator.
    </p>

</body>

</html>
<?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\HYAcademy\admission-letter.blade.php ENDPATH**/ ?>