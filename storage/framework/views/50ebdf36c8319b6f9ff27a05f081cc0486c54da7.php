<?php $__env->startSection('content'); ?>
    <section id="academy">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="reg-form">
                        <header>Registration Form</header>

                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p><?php echo e($error); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <!-- The dots/circles -->
                        <div class="text-center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            
                        </div>

                        <form role="form" action="<?php echo e(route('academy.store')); ?>" method="post"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="mySlides fades w-100">
                                <fieldset>
                                    <legend>Step 1</legend>

                                    
                                    <div class="form-row my-3">
                                        <div class="col-lg-12">
                                            <label for="name"> Fullname </label>
                                            <div class="input-cont d-flex align-items-stretch w-100">
                                                <div class="form-icon">
                                                    <img loading="lazy" src="<?php echo e(url('/images/icons/user.png')); ?>"
                                                        alt="name">
                                                </div>
                                                <input type="text" minlength="3" maxlength="100" class="w-100" name="name"
                                                    value="<?php echo e(auth()->user()->name); ?>" placeholder="Full name" />
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="form-row my-3">
                                        <div class="col-lg-12">
                                            <label for="phone"> Whatsapp Phone No </label>
                                            <div class="input-cont d-flex align-items-stretch w-100">
                                                <div class="form-icon">
                                                    <img loading="lazy" src="<?php echo e(url('/images/icons/telephone.png')); ?>"
                                                        alt="message">
                                                </div>
                                                <input type="tel" name="phone" value="<?php echo e(old('phone')); ?>" maxlength="100"
                                                    class="w-100" placeholder="08012345678" />
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="form-row my-3">
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-6 xs">
                                            <label for="gender">Gender</label> <br>
                                            <select class="w-100" name="gender" id="gender">
                                                <option value="" selected="selected" disabled="disabled">- Select -</option>
                                                <option value="male">Male</option>
                                                <option value="female">female</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-6 xs">
                                            <label for="education">Education</label> <br>
                                            <select class="w-100" name="education" id="education">
                                                <option value="" selected="selected" disabled="disabled">- Select -</option>
                                                <option value="No formal education">No Formal Education</option>
                                                <option value="SSCE">SSCE</option>
                                                <option value="Student">Undergraduate</option>
                                                <option value="ND or HND">ND/HND</option>
                                                <option value="Bachelor's degree">Bachelor's degree</option>
                                                <option value="Master's degree">Master's degree</option>
                                                <option value="Doctorate or higher">Doctorate or higher</option>
                                            </select>
                                        </div>
                                    </div>

                                </fieldset>

                            </div>

                            <div class="mySlides fades w-100">
                                <fieldset>

                                    <legend>Step 2</legend>
                                    
                                    <div class="form-row my-3">
                                        <div class="col-lg-6 col-md-6 col-sm-6 xs">
                                            <label for="state">Address(State)</label> <br>
                                            <select class="w-100" onchange="toggleLGA(this);" name="state" id="state">
                                                <option value="" selected="selected" disabled>- Select -</option>
                                                <option value="Abia">Abia</option>
                                                <option value="Adamawa">Adamawa</option>
                                                <option value="AkwaIbom">AkwaIbom</option>
                                                <option value="Anambra">Anambra</option>
                                                <option value="Bauchi">Bauchi</option>
                                                <option value="Bayelsa">Bayelsa</option>
                                                <option value="Benue">Benue</option>
                                                <option value="Borno">Borno</option>
                                                <option value="Cross River">Cross River</option>
                                                <option value="Delta">Delta</option>
                                                <option value="Ebonyi">Ebonyi</option>
                                                <option value="Edo">Edo</option>
                                                <option value="Ekiti">Ekiti</option>
                                                <option value="Enugu">Enugu</option>
                                                <option value="FCT">FCT</option>
                                                <option value="Gombe">Gombe</option>
                                                <option value="Imo">Imo</option>
                                                <option value="Jigawa">Jigawa</option>
                                                <option value="Kaduna">Kaduna</option>
                                                <option value="Kano">Kano</option>
                                                <option value="Katsina">Katsina</option>
                                                <option value="Kebbi">Kebbi</option>
                                                <option value="Kogi">Kogi</option>
                                                <option value="Kwara">Kwara</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Nasarawa">Nasarawa</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Ogun">Ogun</option>
                                                <option value="Ondo">Ondo</option>
                                                <option value="Osun">Osun</option>
                                                <option value="Oyo">Oyo</option>
                                                <option value="Plateau">Plateau</option>
                                                <option value="Rivers">Rivers</option>
                                                <option value="Sokoto">Sokoto</option>
                                                <option value="Taraba">Taraba</option>
                                                <option value="Yobe">Yobe</option>
                                                <option value="Zamfara">Zamafara</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 xs">
                                            <label for="lga">LGA</label> <br>
                                            <select name="lga" id="lga" class="select-lga w-100">
                                                <option value="" selected="selected" disabled>- Select -</option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-row my-3">
                                        <div class="col-lg-12 d-flex ">
                                            <label for="media">How did you hear about the training?</label>
                                            <select class="w-75" name="media" id="media">
                                                <option value="" selected="selected" disabled>- Select -</option>
                                                <option value="Instagram">Instagram</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="Twitter">Twitter</option>
                                                <option value="Friend/Colleague">Friend/Colleague</option>
                                                <option value="Whatsapp">Whatsapp</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="col-lg-12">
                                            <input type="checkbox" name="declaration" id="declaration" class="mr-2">
                                            <label class="d-inline p-0" for="declaration">I hereby declare that all the
                                                information
                                                provided
                                                above is true and valid to the best of my knowledge.</label>
                                        </div>
                                    </div>

                                    <button class="mybtn button w-100 mt-4 py-2 btn-submit" type="submit"
                                        onclick="this.classList.toggle('button--loading')">
                                        <span class="button__text">REGISTER</span>
                                    </button>
                                </fieldset>

                            </div>
                            <!-- Next and previous buttons -->
                            <div class="text-center mt-4 mb-3">
                                <a class="prev mybtn" onclick="plusSlides(-1)">Prev</a>
                                <a class="next mybtn" onclick="plusSlides(1)">Next</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(url('/js/lga.min.js')); ?>"></script>
    <script>
        // Make password visible
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function showPassword_two() {
            var y = document.getElementById("password_confirmation");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }

        // MultiStep form
        var slideIndex = 1;
        showSlides(slideIndex);
        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
        // loader for button
        const btn = document.querySelector(".button");
        btn.classList.add("button--loading");
        btn.classList.remove("button--loading");
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\HYAcademy\form.blade.php ENDPATH**/ ?>