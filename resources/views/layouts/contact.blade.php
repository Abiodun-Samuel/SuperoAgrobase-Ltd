<section id="contact-page" class="contact section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Get in Touch</h2>
            <p>
                Do you want to make an enquiry about our services, products, prices or about our company? Our able
                team is ready to answer you promptly. We'd love to hear from you.
            </p>
        </div>



        {{-- Form Section --}}
        <div class="row mt-5">
            <div class=" col-lg-6 col-md-6 my-2">
                <div class="card">
                    <div class="card-body">
                        <div class="contact">
                            <div class="form">

                                <form action="{{ route('contactmail') }}" method="POST" class="contactForm"
                                    enctype="application/x-www-form-urlencoded">
                                    @csrf

                                    @if ($errors->all())
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <small>{{ $error }}</li></small> <br>
                                            @endforeach
                                        </div>
                                    @endif

                                    <div class="form-row">

                                        {{-- Name --}}
                                        <div class="form-group col-lg-6">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Name" value="{{ old('name') }}" required />
                                        </div>

                                        {{-- Phone --}}
                                        <div class="form-group col-lg-6">
                                            <input type="number" class="form-control" name="phone" id="phone"
                                                placeholder="Phone Number" value="{{ old('phone') }}" required />
                                        </div>

                                        {{-- Subject --}}
                                        <div class="form-group col-lg-6">
                                            <input type="subject" class="form-control" name="subject" id="subject"
                                                placeholder="Subject" value="{{ old('subject') }}" required />
                                        </div>

                                        {{-- Email --}}
                                        <div class="form-group col-lg-6">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email" value="{{ old('email') }}" required />
                                        </div>

                                        {{-- Message --}}
                                        <div class="form-group col-lg-12">
                                            <textarea class="form-control" name="message" rows="4" placeholder="Message"
                                                value="{{ old('message') }}" required></textarea>

                                            <small> <em>(All fields are required)</em></small>
                                        </div>
                                    </div>

                                    {{-- google recaptcha --}}
                                    <div class="form-group col-lg-12 my-3">
                                        <div class="g-recaptcha img-fluid"
                                            data-sitekey="{{ config('services.recaptcha.key') }}">
                                        </div>
                                        @if (Session::has('g-recaptcha-response'))
                                            <div class="alert alert-danger">
                                                <p>{{ Session::get('g-recaptcha-response') }}</p>
                                            </div>
                                        @endif
                                    </div>

                                    {{-- Buttons --}}
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

            <div class="col-lg-6 col-md-6 my-2">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title"> <span><b>Our Working Hours</b></span> : <b>Mon - Fri:</b> 9am -- 5pm
                            <b>Sat:</b> 9am -- 1pm
                        </p>
                        <hr>

                        <div class="contact-icons">
                            {{-- WhatsApp --}}
                            <a href="https://wa.me/message/KK2QPDR6KTLBK1">
                                <i>
                                    <svg width="1.3em" height="1.3em" viewBox="0 0 464 488">
                                        <path
                                            d="M462 228q0 93-66 159t-160 66q-56 0-109-28L2 464l40-120q-32-54-32-116q0-93 66-158.5T236 4t160 65.5T462 228zM236 39q-79 0-134.5 55.5T46 228q0 62 36 111l-24 70l74-23q49 31 104 31q79 0 134.5-55.5T426 228T370.5 94.5T236 39zm114 241q-1-1-10-7q-3-1-19-8.5t-19-8.5q-9-3-13 2q-1 3-4.5 7.5t-7.5 9t-5 5.5q-4 6-12 1q-34-17-45-27q-7-7-13.5-15t-12-15t-5.5-8q-3-7 3-11q4-6 8-10l6-9q2-5-1-10q-4-13-17-41q-3-9-12-9h-11q-9 0-15 7q-19 19-19 45q0 24 22 57l2 3q2 3 4.5 6.5t7 9t9 10.5t10.5 11.5t13 12.5t14.5 11.5t16.5 10t18 8.5q16 6 27.5 10t18 5t9.5 1t7-1t5-1q9-1 21.5-9t15.5-17q8-21 3-26z"
                                            fill="#25D366" />
                                    </svg>
                                </i>
                            </a>

                            {{-- facebook --}}
                            <a href="https://www.facebook.com/superoagrobasedltd/">
                                <i>
                                    <svg width="1.3em" height="1.3em" viewBox="0 0 486.037 1000">
                                        <path
                                            d="M124.074 1000V530.771H0V361.826h124.074V217.525C124.074 104.132 197.365 0 366.243 0C434.619 0 485.18 6.555 485.18 6.555l-3.984 157.766s-51.564-.502-107.833-.502c-60.9 0-70.657 28.065-70.657 74.646v123.361h183.331l-7.977 168.945H302.706V1000H124.074"
                                            fill="#4267B2" />
                                    </svg>
                                </i>
                            </a>

                            {{-- instagram --}}
                            <a href="https://www.instagram.com/invitescontact/?i=2bwlzjofwtqzutm_content=4711fcu">
                                <i>
                                    <svg width="1.3em" height="1.3em" viewBox="0 0 256 256">
                                        <path
                                            d="M128 80a48 48 0 1 0 48 48a48.054 48.054 0 0 0-48-48zm0 80a32 32 0 1 1 32-32a32.036 32.036 0 0 1-32 32zm44-132H84a56.064 56.064 0 0 0-56 56v88a56.064 56.064 0 0 0 56 56h88a56.064 56.064 0 0 0 56-56V84a56.064 56.064 0 0 0-56-56zm40 144a40.045 40.045 0 0 1-40 40H84a40.045 40.045 0 0 1-40-40V84a40.045 40.045 0 0 1 40-40h88a40.045 40.045 0 0 1 40 40zm-20-96a12 12 0 1 1-12-12a12 12 0 0 1 12 12z"
                                            fill="#E1306C" />
                                    </svg>
                                </i>
                            </a>

                            {{-- linkedin --}}
                            <a href="#">
                                <i>
                                    <svg width="1.3em" height="1.3em" viewBox="0 0 20 20">
                                        <path
                                            d="M2.5 18h3V6.9h-3V18zM4 2c-1 0-1.8.8-1.8 1.8S3 5.6 4 5.6s1.8-.8 1.8-1.8S5 2 4 2zm6.6 6.6V6.9h-3V18h3v-5.7c0-3.2 4.1-3.4 4.1 0V18h3v-6.8c0-5.4-5.7-5.2-7.1-2.6z"
                                            fill="#0072b1" />
                                    </svg>
                                </i>
                            </a>
                            {{-- mail --}}
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
                            {{-- phone --}}
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
                        <hr>

                        <div style="width: 100%">
                            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=bakare%20Abiodun%20Street,%20Wera,%20Ikorodu%20Lagos.+(superoagrobase)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-3">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" focusable="false" width="1.5em" height="1.5em" viewBox="0 0 2048 1536">
                            <path
                                d="M1024 1003q0-64-9-117.5t-29.5-103t-60.5-78t-97-28.5q-6 4-30 18t-37.5 21.5T725 733t-43 14.5t-42 4.5t-42-4.5t-43-14.5t-35.5-17.5T482 694t-30-18q-57 0-97 28.5t-60.5 78t-29.5 103t-9 117.5t37 106.5t91 42.5h512q54 0 91-42.5t37-106.5zM867 483q0-94-66.5-160.5T640 256t-160.5 66.5T413 483t66.5 160.5T640 710t160.5-66.5T867 483zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5T1756 640h-568q-15 0-25.5 10.5T1152 676v56q0 15 10.5 25.5T1188 768h568q15 0 25.5-10.5T1792 732zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96H640v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96H160q-66 0-113-47T0 1376V160Q0 94 47 47T160 0h1728q66 0 113 47t47 113z"
                                fill="#79b927" />
                        </svg>
                    </i>
                    <h3>Our Address</h3>
                    <p> 13, Bakare Abiodun Street, Wera, Ikorodu Lagos.<br>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box mb-4">
                    <i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" focusable="false" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                            <path
                                d="M12 .64L8.23 3H5v2L2.97 6.29C2.39 6.64 2 7.27 2 8v10a2 2 0 0 0 2 2h16c1.11 0 2-.89 2-2V8c0-.73-.39-1.36-.97-1.71L19 5V3h-3.23M7 5h10v4.88L12 13L7 9.88M8 6v1.5h8V6M5 7.38v1.25L4 8m15-.62L20 8l-1 .63M8 8.5V10h8V8.5z"
                                fill="#79b927" />
                        </svg></i>
                    <h3>Email Us</h3>
                    <p>contact@superoagrobase.com</p>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box mb-4">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true" focusable="false" width="1.5em" height="1.5em" viewBox="0 0 20 20">
                            <path
                                d="M17.256 12.253c-.096-.667-.611-1.187-1.274-1.342c-2.577-.604-3.223-2.088-3.332-3.734C12.193 7.092 11.38 7 10 7s-2.193.092-2.65.177c-.109 1.646-.755 3.13-3.332 3.734c-.663.156-1.178.675-1.274 1.342l-.497 3.442C2.072 16.907 2.962 18 4.2 18h11.6c1.237 0 2.128-1.093 1.953-2.305l-.497-3.442zM10 15.492c-1.395 0-2.526-1.12-2.526-2.5s1.131-2.5 2.526-2.5s2.526 1.12 2.526 2.5s-1.132 2.5-2.526 2.5zM19.95 6c-.024-1.5-3.842-3.999-9.95-4C3.891 2.001.073 4.5.05 6s.021 3.452 2.535 3.127c2.941-.381 2.76-1.408 2.76-2.876C5.345 5.227 7.737 4.98 10 4.98s4.654.247 4.655 1.271c0 1.468-.181 2.495 2.76 2.876C19.928 9.452 19.973 7.5 19.95 6z"
                                fill="#79b927" />
                        </svg>
                    </i>
                    <h3>Call Us</h3>
                    <p>+2348157037737
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
