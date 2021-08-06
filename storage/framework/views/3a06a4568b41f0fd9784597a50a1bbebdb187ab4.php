<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.inner-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section id="contact-page" class="contact section-bg">
        <div class="container">

            <div class="header">
                <h3>Get in Touch</h3>
                <p>
                    Do you want to make an enquiry about our services, products, prices or about our company? Our able
                    team is ready to answer you promptly. We'd love to hear from you.
                </p>
            </div>

            
            <div class="row">
                
                <div data-aos="fade-up" class="col-lg-6 col-md-6 my-2 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <div class="contact">
                                <div class="form">

                                    <form action="<?php echo e(route('contactmail')); ?>" method="POST" class="contactForm"
                                        enctype="application/x-www-form-urlencoded">
                                        <?php echo csrf_field(); ?>

                                        <?php if($errors->all()): ?>
                                            <div class="alert alert-danger">
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <p><?php echo e($error); ?></p>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-row">

                                            
                                            <div class="form-group col-lg-6">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Name" value="<?php echo e(old('name')); ?>" required />
                                            </div>

                                            
                                            <div class="form-group col-lg-6">
                                                <input type="number" class="form-control" name="phone" id="phone"
                                                    placeholder="Phone Number" value="<?php echo e(old('phone')); ?>" required />
                                            </div>

                                            
                                            <div class="form-group col-lg-6">
                                                <input type="subject" class="form-control" name="subject" id="subject"
                                                    placeholder="Subject" value="<?php echo e(old('subject')); ?>" required />
                                            </div>

                                            
                                            <div class="form-group col-lg-6">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email" value="<?php echo e(old('email')); ?>" required />
                                            </div>

                                            
                                            <div class="form-group col-lg-12">
                                                <textarea class="form-control" name="message" rows="4" placeholder="Message"
                                                    value="<?php echo e(old('message')); ?>" required></textarea>

                                                <small> <em>(All fields are required)</em></small>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group my-3">
                                            <div loading="lazy" class="g-recaptcha"
                                                data-sitekey="<?php echo e(config('services.recaptcha.key')); ?>">
                                            </div>
                                            <?php if(Session::has('g-recaptcha-response')): ?>
                                                <div class="alert alert-danger">
                                                    <p><?php echo e(Session::get('g-recaptcha-response')); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        
                                        <div class="text-center mt-3">
                                            <button type="submit" title="Send Message">
                                                Send Message
                                            </button>

                                            <button type="reset" title="Clear" class="mx-1">
                                                Clear
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-6 col-md-6 my-2 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title"> <span><b>Work Hours</b></span> : <b>Monday - Friday:</b> 9am - 5pm
                                <b>Saturday:</b> 9am - 1pm
                            </p>

                            <div class="contact-icons my-3">
                                
                                <a href="https://wa.me/message/KK2QPDR6KTLBK1">
                                    <i>
                                        <svg width="1.3em" height="1.3em" viewBox="0 0 464 488">
                                            <path
                                                d="M462 228q0 93-66 159t-160 66q-56 0-109-28L2 464l40-120q-32-54-32-116q0-93 66-158.5T236 4t160 65.5T462 228zM236 39q-79 0-134.5 55.5T46 228q0 62 36 111l-24 70l74-23q49 31 104 31q79 0 134.5-55.5T426 228T370.5 94.5T236 39zm114 241q-1-1-10-7q-3-1-19-8.5t-19-8.5q-9-3-13 2q-1 3-4.5 7.5t-7.5 9t-5 5.5q-4 6-12 1q-34-17-45-27q-7-7-13.5-15t-12-15t-5.5-8q-3-7 3-11q4-6 8-10l6-9q2-5-1-10q-4-13-17-41q-3-9-12-9h-11q-9 0-15 7q-19 19-19 45q0 24 22 57l2 3q2 3 4.5 6.5t7 9t9 10.5t10.5 11.5t13 12.5t14.5 11.5t16.5 10t18 8.5q16 6 27.5 10t18 5t9.5 1t7-1t5-1q9-1 21.5-9t15.5-17q8-21 3-26z"
                                                fill="#25D366" />
                                        </svg>
                                    </i>
                                </a>
                                
                                <a href="https://www.facebook.com/superoagrobasedltd/">
                                    <i>
                                        <svg width="1.3em" height="1.3em" viewBox="0 0 486.037 1000">
                                            <path
                                                d="M124.074 1000V530.771H0V361.826h124.074V217.525C124.074 104.132 197.365 0 366.243 0C434.619 0 485.18 6.555 485.18 6.555l-3.984 157.766s-51.564-.502-107.833-.502c-60.9 0-70.657 28.065-70.657 74.646v123.361h183.331l-7.977 168.945H302.706V1000H124.074"
                                                fill="#4267B2" />
                                        </svg>
                                    </i>
                                </a>
                                
                                <a href="https://www.instagram.com/superoagrobase/">
                                    <i>
                                        <svg width="1.3em" height="1.3em" viewBox="0 0 256 256">
                                            <path
                                                d="M128 80a48 48 0 1 0 48 48a48.054 48.054 0 0 0-48-48zm0 80a32 32 0 1 1 32-32a32.036 32.036 0 0 1-32 32zm44-132H84a56.064 56.064 0 0 0-56 56v88a56.064 56.064 0 0 0 56 56h88a56.064 56.064 0 0 0 56-56V84a56.064 56.064 0 0 0-56-56zm40 144a40.045 40.045 0 0 1-40 40H84a40.045 40.045 0 0 1-40-40V84a40.045 40.045 0 0 1 40-40h88a40.045 40.045 0 0 1 40 40zm-20-96a12 12 0 1 1-12-12a12 12 0 0 1 12 12z"
                                                fill="#E1306C" />
                                        </svg>
                                    </i>
                                </a>
                                
                                <a href="https://twitter.com/LimitedSupero">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1.5em" height="1.5em"
                                            viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path
                                                    d="M23.643 4.937c-.835.37-1.732.62-2.675.733a4.67 4.67 0 0 0 2.048-2.578a9.3 9.3 0 0 1-2.958 1.13a4.66 4.66 0 0 0-7.938 4.25a13.229 13.229 0 0 1-9.602-4.868c-.4.69-.63 1.49-.63 2.342A4.66 4.66 0 0 0 3.96 9.824a4.647 4.647 0 0 1-2.11-.583v.06a4.66 4.66 0 0 0 3.737 4.568a4.692 4.692 0 0 1-2.104.08a4.661 4.661 0 0 0 4.352 3.234a9.348 9.348 0 0 1-5.786 1.995a9.5 9.5 0 0 1-1.112-.065a13.175 13.175 0 0 0 7.14 2.093c8.57 0 13.255-7.098 13.255-13.254c0-.2-.005-.402-.014-.602a9.47 9.47 0 0 0 2.323-2.41l.002-.003z"
                                                    fill="#1DA1F2" />
                                            </g>
                                        </svg>
                                    </i>
                                </a>
                                
                                <a href="mailto:contact@superoagrobase.com">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1.5em" height="1.5em"
                                            viewBox="0 0 32 32">
                                            <g fill="none" stroke="#626262" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="3">
                                                <path d="M2 26h28V6H2zM2 6l14 10L30 6" />
                                            </g>
                                        </svg>

                                    </i>
                                </a>
                                
                                <a href="tel:+2348157037737">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="1.5em" height="1.5em" viewBox=" 0 0 24 24">
                                            <path d="M20 10.999h2C22 5.869 18.127 2 12.99 2v2C17.052 4 20 6.943 20 10.999z"
                                                fill="white" />
                                            <path
                                                d="M13 8c2.103 0 3 .897 3 3h2c0-3.225-1.775-5-5-5v2zm3.422 5.443a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66c-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a1 1 0 0 0-.086-1.391l-4.064-3.696z"
                                                fill="#212121" />
                                        </svg>
                                    </i>
                                </a>
                            </div>

                            <div style="width: 100%">
                                <iframe loading="lazy" width="100%" height="250" frameborder="0" scrolling="yes"
                                    marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=250&amp;hl=en&amp;q=10,%20jimoh%20odu%20street,%20ikorodu%20lagos+(SuperoAgrobase%20Inc)&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row mt-3">
                <div data-aos="fade-up" class="col-lg-6 ">
                    <div class="info-box mb-4">
                        <i>
                            <img src="<?php echo e(url('/images/icons/address.png')); ?>" alt="address" height="24" width="24"
                                loading="lazy" title="address">
                        </i>
                        <h3>Our Address</h3>
                        <p> 10, Jimoh Odu Street, Opp Benson B/S, <br> Ikorodu Garage, Ikorodu, Lagos.
                        </p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-3 col-md-6 ">
                    <div class="info-box mb-4">
                        <i>
                            <img src="<?php echo e(url('/images/icons/message.png')); ?>" alt="email" height="24" width="24"
                                loading="lazy" title="email">
                        </i>
                        <h3>Email Us</h3>
                        <p>contact@superoagrobase.com</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="col-lg-3 col-md-6  ">
                    <div class="info-box mb-4">
                        <i>
                            <img src="<?php echo e(url('/images/icons/telephone.png')); ?>" alt="phone" height="24" width="24"
                                loading="lazy" title="phone">
                        </i>
                        <h3>Call Us</h3>
                        <p>+2348157037737
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Abiodun Samuel\Laravel-Projects\superoinc\resources\views\contact_us.blade.php ENDPATH**/ ?>