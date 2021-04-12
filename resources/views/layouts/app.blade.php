<!DOCTYPE html>
<html lang="en">

<head>

    <title> {{ $title }} | Welcome to SuperoAgrobase</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
        content="Supero Agrobase Limited is an indigenous company in Nigeria with deep understanding of the needs and challenges of Nigerian farmers. We deal with  Agro - Input products, claims, research and Promotion, Sales of Agro input Products (AgriCourt Ventures) and Production of Vegetable Crops (HarvestYield Farm)"
        name="description" />

    <meta
        content="irrigation cultivation husbandry horticulture crop biofuel farm animal husbandry farming cultivate agribusiness food domestication agricultural manure  tillage monoculture forestry livestock harvest agronomy pesticide cotton wheat crop rotation dairy aquaculture sow overcrop education raw material genetically modified organism selective breeding climate plow farmer plant fertilize fiber grow fertile crescent"
        name="keywords" />

    {{-- Google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;1,400&display=swap"
        rel="stylesheet">

    <link href="{{ url('/images/favicon.png') }}" rel="icon" />
    <link href=" {{ url('/images/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- css libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> --}}

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="{{ url('css/pagestyle.css') }}" />
    <link rel="stylesheet" href="{{ url('css/style.css') }}" />
</head>

<body>
    <!-- header section starts -->
    <header class="sticky-top">
        <div id="topbar" class="d-lg-flex">
            <div class="container d-flex justify-content-between">
                <div class="contact-info">
                    <a href="tel:+2348157037737 ">
                        <svg aria-hidden="true" focusable="false" width="1.2em" height="1.2em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36">
                            <path class="clr-i-solid clr-i-solid-path-1"
                                d="M15.22 20.64a20.37 20.37 0 0 0 7.4 4.79l3.77-3a.67.67 0 0 1 .76 0l7 4.51a2 2 0 0 1 .33 3.18l-3.28 3.24a4 4 0 0 1-3.63 1.07a35.09 35.09 0 0 1-17.15-9A33.79 33.79 0 0 1 1.15 8.6a3.78 3.78 0 0 1 1.1-3.55l3.4-3.28a2 2 0 0 1 3.12.32L13.43 9a.63.63 0 0 1 0 .75l-3.07 3.69a19.75 19.75 0 0 0 4.86 7.2z" />
                        </svg></a>

                    <a href="mailto:contact@superoagrobase.com">
                        <svg aria-hidden="true" focusable="false" width="1.5em" height="1.5em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <g>
                                <path
                                    d="M18 7.373V14.5a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 2 14.5V7.373l7.746 4.558a.5.5 0 0 0 .508 0L18 7.373zM15.5 4a2.5 2.5 0 0 1 2.485 2.223L10 10.92L2.015 6.223A2.5 2.5 0 0 1 4.5 4h11z" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="social-links">
                    {{-- twitter --}}
                    <a href="">
                        <svg width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path
                                d="M19.633 7.997c.013.175.013.349.013.523c0 5.325-4.053 11.461-11.46 11.461c-2.282 0-4.402-.661-6.186-1.809c.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721a4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062c.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973a4.02 4.02 0 0 1-1.771 2.22a8.073 8.073 0 0 0 2.319-.624a8.645 8.645 0 0 1-2.019 2.083z" />
                        </svg>
                    </a>

                    {{-- facebook --}}
                    <a href="https://www.facebook.com/superoagrobasedltd/">
                        <svg aria-hidden="true" focusable="false" width="1.5em" height="1.5em"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path
                                d="M15.402 21v-6.966h2.333l.349-2.708h-2.682V9.598c0-.784.218-1.319 1.342-1.319h1.434V5.857a19.19 19.19 0 0 0-2.09-.107c-2.067 0-3.482 1.262-3.482 3.58v1.996h-2.338v2.708h2.338V21H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4.598z" />
                        </svg>
                    </a>

                    {{-- instagram --}}
                    <a href="https://www.instagram.com/invitescontact/?i=2bwlzjofwtqzutm_content=4711fcu">
                        <svg width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                            <path
                                d="M512 378.7c-73.4 0-133.3 59.9-133.3 133.3S438.6 645.3 512 645.3S645.3 585.4 645.3 512S585.4 378.7 512 378.7zM911.8 512c0-55.2.5-109.9-2.6-165c-3.1-64-17.7-120.8-64.5-167.6c-46.9-46.9-103.6-61.4-167.6-64.5c-55.2-3.1-109.9-2.6-165-2.6c-55.2 0-109.9-.5-165 2.6c-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6c46.9 46.9 103.6 61.4 167.6 64.5c55.2 3.1 109.9 2.6 165 2.6c55.2 0 109.9.5 165-2.6c64-3.1 120.8-17.7 167.6-64.5c46.9-46.9 61.4-103.6 64.5-167.6c3.2-55.1 2.6-109.8 2.6-165zM512 717.1c-113.5 0-205.1-91.6-205.1-205.1S398.5 306.9 512 306.9S717.1 398.5 717.1 512S625.5 717.1 512 717.1zm213.5-370.7c-26.5 0-47.9-21.4-47.9-47.9s21.4-47.9 47.9-47.9s47.9 21.4 47.9 47.9a47.84 47.84 0 0 1-47.9 47.9z" />
                        </svg>
                    </a>

                    {{-- linkedin --}}
                    <a href="#" class="linkedin">
                        <svg width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                            <path
                                d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM349.3 793.7H230.6V411.9h118.7v381.8zm-59.3-434a68.8 68.8 0 1 1 68.8-68.8c-.1 38-30.9 68.8-68.8 68.8zm503.7 434H675.1V608c0-44.3-.8-101.2-61.7-101.2c-61.7 0-71.2 48.2-71.2 98v188.9H423.7V411.9h113.8v52.2h1.6c15.8-30 54.5-61.7 112.3-61.7c120.2 0 142.3 79.1 142.3 181.9v209.4z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Top Bar-->
        <nav>
            <div class="container wrapper">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img loading="lazy" src="/images/logo.png" alt="Supero Agrobase Limited logo" /></a>
                </div>
                <input type="radio" name="slider" id="menu-btn" />
                <input type="radio" name="slider" id="close-btn" />
                <ul class="nav-links">
                    <label for="close-btn" class="btn close-btn">
                        <i>
                            <svg width="1.3em" height="1.3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64">
                                <path fill="#f5f5f5"
                                    d="M62 10.6L53.4 2L32 23.4L10.6 2L2 10.6L23.4 32L2 53.4l8.6 8.6L32 40.6L53.4 62l8.6-8.6L40.6 32z" />
                            </svg>
                        </i>
                    </label>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about_us') }}">About Us</a></li>
                    <li>
                        <a class="desktop-item">
                            Services
                            <i>
                                <svg width="1.7em" height="1.7em" viewBox="0 0 24 24">
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                                </svg>
                            </i>
                        </a>
                        <input type="checkbox" id="showDrop" />
                        <label for="showDrop" class="mobile-item">
                            Services
                            <i>
                                <svg width="1.7em" height="1.7em" viewBox="0 0 24 24">
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6l-6-6l1.41-1.41z" />
                                </svg>
                            </i>
                        </label>
                        <ul class="drop-menu">
                            <li><a href="{{ url('services/Agro-Input') }}"> Agro-Input </a></li>
                            <li>
                                <a href="{{ url('services/Agricourt Ventures') }}">
                                    AgriCourt Ventures</a>
                            </li>

                            <li>
                                <a href="{{ url('services/Harvestyield Farm') }}">
                                    HarvestYield Farm
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="{{ url('/Our Products') }}"> Our Products</a></li>
                    <li><a href="{{ url('/contact_us') }}"> Contact Us</a></li>
                </ul>

                <label for="menu-btn" class="btn menu-btn">
                    <svg width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                        <g fill="#2f552e">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14 5H2V3h12v2zm0 4H2V7h12v2zM2 13h12v-2H2v2z" />
                        </g>
                    </svg></label>
            </div>
        </nav>
    </header>
    <!-- header section ends -->
    <div>
        @yield("content")
    </div>

    <!-- ========== Footer Section Begins Here ========== -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 footer-box">
                    <div class="card">
                        <div class="card-body">

                            <img loading="lazy" src="{{ url('images/logo.jpg') }}" alt="Company logo">

                            <h6 class="card-title"><span>Supero Agrobase limited</span></h6>

                            <p class="card-text">
                                Supero Incorporation Limited is a fast-rising agribusiness
                                enterprise that leverages in-depth research and development to
                                provide farmers with high quality agricultural inputs, farm
                                management, consultancy and agricultural laboratory services.
                                <br />
                                Our Core Values are Integrity, Respect, Transparency,
                                Excellence and Team Work.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 footer-box">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title"><span>Services</span></h6>
                            <div class="footer-add">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="{{ url('services/Agro-Input') }}"> Agro-Input </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('services/Agricourt Ventures') }}">
                                            AgriCourt Ventures</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('services/Harvestyield Farm') }}">
                                            HarvestYield Farm
                                        </a>
                                    </li>
                                </ul>
                                <h6 class="card-title"><span>Quick links</span></h6>

                                <div class="quick-links">
                                    <a href="{{ url('/') }}">Home</a>
                                    <a href="{{ url('/about_us') }}">About </a>
                                    <a href="{{ url('/Our Products') }}">Products</a>
                                    <a href="{{ url('/contact_us') }}">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- newsletter --}}
                <div class="col-lg-4 col-md-12 mb-4 footer-box">
                    <div class="card">
                        <div class="newsletter">
                            <div class="card-body">
                                <h6><span>Newsletter</span> </h6>
                                <p>
                                    Get the latest updates on our products, exclusive offers, and more right in
                                    your
                                    inbox. Never miss important opportunities</p>


                                <form action="{{ route('newsletter') }}" method="POST"
                                    enctype="application/x-www-form-urlencoded">
                                    @csrf

                                    {{-- Name --}}
                                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
                                        required />
                                    {{-- Error Message --}}
                                    @error('name')
                                        {{ $message }}
                                    @enderror

                                    {{-- Email --}}
                                    <input type="email" name="email" placeholder="Enter Your Email"
                                        value="{{ old('email') }}" required />

                                    {{-- Error Message --}}
                                    @error('email')
                                        {{ $message }}
                                    @enderror

                                    <button class="my-1" type="submit" title="Subscribe">
                                        Subscribe
                                        <i>
                                            <svg width="2em" height="2em" viewBox="0 0 16 16">
                                                <path
                                                    d="M6 8H1V6h5V4l3 3l-3 3zm10-8v13l-6 3v-3H4V9h1v3h5V3l4-2H5v4H4V0z" />
                                            </svg>
                                        </i>
                                    </button>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-foot">
            <div class="container">
                &copy Copyright 2021 Supero Agrobase Limited. All Rights Reserved.
                <br />
                Designed and Developed by
                <a href="https://wa.link/zmxpyc"> Abiodun Digital Hub </a>
            </div>
        </div>
    </footer>
    <!-- ========== Footer Section Ends Here ========== -->

   

    {{-- ========== Pop up Display ========== --}}
    <div class="contentBox">
        <div class="popup">
            <div class="card">
                <i class="close text-right">
                    <svg focusable="false" width="1.5em" height="1.5em" viewBox="0 0 32 32">
                        <path
                            d="M5 5v22h22V5zm2 2h18v18H7zm4.688 3.313l-1.407 1.406L14.562 16l-4.343 4.344l1.406 1.406l4.344-4.344l4.312 4.313l1.407-1.407L17.375 16l4.25-4.25l-1.406-1.406l-4.25 4.25z"
                            fill="#212121" />
                    </svg>
                </i>

                <img loading="lazy" src="{{ url('/images/product.jpg') }}" class="card-img-top img-fluid"
                    alt="Place order now">
                <div class="card-body">
                    <p class="card-text"> Check out our fresh products </p>
                    <a href="{{ route('product') }}" class="btn btn-primary"> Click Here</a>
                </div>
            </div>
        </div>
    </div>

    {{-- ========== Pop up Display ========== --}}

    <!-- ========== fixed buttons ========== -->
    <a href="https://wa.me/message/KK2QPDR6KTLBK1" class="whatsapp-btn">
        <svg aria-hidden="true" focusable="false" width="2.2em" height="2.2em" viewBox="0 0 20 20">
            <path
                d="M16.8 5.7C14.4 2 9.5.9 5.7 3.2C2 5.5.8 10.5 3.2 14.2l.2.3l-.8 3l3-.8l.3.2c1.3.7 2.7 1.1 4.1 1.1c1.5 0 3-.4 4.3-1.2c3.7-2.4 4.8-7.3 2.5-11.1zm-2.1 7.7c-.4.6-.9 1-1.6 1.1c-.4 0-.9.2-2.9-.6c-1.7-.8-3.1-2.1-4.1-3.6c-.6-.7-.9-1.6-1-2.5c0-.8.3-1.5.8-2c.2-.2.4-.3.6-.3H7c.2 0 .4 0 .5.4c.2.5.7 1.7.7 1.8c.1.1.1.3 0 .4c.1.2 0 .4-.1.5c-.1.1-.2.3-.3.4c-.2.1-.3.3-.2.5c.4.6.9 1.2 1.4 1.7c.6.5 1.2.9 1.9 1.2c.2.1.4.1.5-.1s.6-.7.8-.9c.2-.2.3-.2.5-.1l1.6.8c.2.1.4.2.5.3c.1.3.1.7-.1 1z"
                fill="#25D366" />
        </svg>
    </a>

    <!-- back-to-top -->
    <a style="display: none" href="" id="back-to-top" title="Back to top">
        <svg width="2em" height="2em" viewBox="0 0 16 16">
            <g fill="#2f552e">
                <path fill-rule="evenodd"
                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 8.354a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 6.207V11a.5.5 0 0 1-1 0V6.207L5.354 8.354z" />
            </g>
        </svg></a>
    <!-- ========== fixed buttons ========== -->

    <!-- script libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.min.js"></script> --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script> --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/CSSRulePlugin.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>


    <!-- custom script file -->
    <script src="{{ url('/js/script.js') }}"></script>
</body>

</html>
