<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section id="hya-home">
        <div class="container">
            <div class="row mt-5 ">
                <div data-aos="fade-up" class="col-lg-8 col-md-7 mt-4 ">
                    <h3> Welcome to HarvestYield Academy </h3>
                    <p>
                        HarvestYield Academy is the Knowledge Transfer arm of SuperoAgrobase Ltd, where we train
                        participants on entire growing cycle in vegetable production and its value chain.
                    </p>
                    <p> At HarvestYield farm, our 10Ha Farmland is focused on vegetable crop, we provide farm management and
                        consultancy services and partner with other reputable companies to offer soil analysis, fertilizer
                        and manure analysis and other laboratory services. <br>
                        Therefore, we are certain that our comprehensive training and thorough practical sessions will equip
                        you to become a successful vegetable producer.
                    </p>
                    <h5> About the Program</h5>
                    <ul class="ml-4">
                        <li>The program will run for 3months.</li>
                        <li>12 Online classes on Google meet app.</li>
                        <li> 3 Practical sessions on the farm.</li>
                        <li>It is important for all participants to get starter packs (Production Value packs) contents are
                            Seeds, basic Agrochemicals, Hand Sprayers and Fertilizers. This subsidizes to (#20,000 or $50).
                        </li>
                        <li>Assignment and Personal field showcase is an important assessment upon certification.</li>
                    </ul>

                </div>
                
                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-4 col-md-5 mt-4">
                    <img loading='lazy' class="img-fluid bg-secondary"
                        src="<?php echo e(url('/images/icons/harvestyield-logo.jpg')); ?>" alt="Harvestyield academy" width="400"
                        height="400">
                </div>
            </div>
            <div class="row mt-1 ">
                <div data-aos="fade-up"  data-aos-delay="200" class="col-lg-8 col-md-7 mt-4 ">
                   <h5>After the program, All participants should be able to:</h5>
                    <ul class="ml-4">
                        <li>Plan and execute all process in set up and running a Vegetable production.</li>
                        <li>Understand all the Value in Vegetable product.</li>
                        <li>All participants will be inducted into our community and they stand the chance of coordinating
                            production program, endorsed them for job opportunities such as Farm Supervisors, Farm Manager,
                            Project Coordinators.</li>
                    </ul>
                    <h5> Who Should Register? </h5>
                    <ul class="ml-4">
                        <li>Graduate and Undergraduate Agricultural Science students who want to choose
                            Horticulture/Vegetable production as a career.</li>
                        <li>Investors that want to learn about Vegetable production and its value chain. </li>
                        <li>Existing Farmers who want to learn more about production.</li>
                        <li>Newbies are welcomed too.</li>
                    </ul>
                    <p> Click the registration link below. Register with a valid details and Download your admission
                        letter. </p>

                    <div class="hya-btn my-3">
                        <?php if(!empty(auth()->user()->hyacademy) && auth()->user()->hyacademy !== null): ?>
                            <a href="https://chat.whatsapp.com/GZPPN5XoSDXGtmoBcNPNYr" target="_blank">Enter Class</a>
                            <a href="<?php echo e(route('academy.student')); ?>" target="_blank"> Dashboard</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('academy.register')); ?>">Register</a>
                        <?php endif; ?>
                    </div>

                </div>
                
                <div data-aos="fade-up" data-aos-delay="300" class="col-lg-4 col-md-5 mt-4">
                    <img loading='lazy' class="img-fluid bg-secondary mt-5" src="<?php echo e(url('/images/icons/hyacademy.jpg')); ?>"
                        alt="Harvestyield academy" width="400" height="400">
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function() {
            <?php if(Session::has('success')): ?>
                Swal.fire({
                icon: 'success',
                title: 'Welcome on Board',
                text: '<?php echo e(Session::get('success')); ?>'
                })
            <?php endif; ?>
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abiod\Desktop\Laravel Projects\superoinc\resources\views/HYAcademy/home.blade.php ENDPATH**/ ?>