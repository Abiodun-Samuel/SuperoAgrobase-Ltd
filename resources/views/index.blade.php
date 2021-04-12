@extends("layouts.app")

@section('content')

    <!-- ========== Intro Section ========== -->
    <div class="hero-section spadding-y-xxl position-relative z-index-1">
        <div class="container max-width-adaptive-sm position-relative z-index-2">
            <div class="row pt-5">
                <div class="col-lg-12 hero-text mt-3">
                    <div>
                        <p>Proffering The Best Global
                        </p>
                        <h3> AGRICULTURAL <span> PRODUCTS</span> &
                            <span>SERVICES</span>
                        </h3>
                        <em>Superoagrobase ... Key to Agricultural Productivity</em>
                    </div>
                    <div>
                        <a href="{{ url('/contact_us') }}"><button class="btn btn--sec">Contact Us</button></a>
                        <a href="{{ url('/Our Products') }}"><button class=" btn btn--pry ml-4"> Our
                                Products</button></a>
                    </div>
                </div>

            </div>


        </div>

        <figure class="bg-decoration z-index-1" aria-hidden="true">
            <svg class="bg-decoration__svg color-contrast-higher opacity-40%" viewBox="0 0 1920 450" fill="none">
                <rect opacity="1" x="610.131" y="-440" width="128" height="836.003" transform="rotate(46.8712 610.131 -440)"
                    fill="url(#bg-decoration-v1-fx-5-linear-1)" />
                <rect opacity="1" x="1899.13" y="-262" width="128" height="836.003" transform="rotate(46.8712 1899.13 -262)"
                    fill="url(#bg-decoration-v1-fx-5-linear-2)" />
                <rect opacity="1" x="2076.13" y="-321" width="128" height="836.003" transform="rotate(46.8712 2076.13 -321)"
                    fill="url(#bg-decoration-v1-fx-5-linear-5)" />
                <rect opacity="1" x="1294.5" y="40.3308" width="128" height="836.003"
                    transform="rotate(-132.518 1294.5 40.3308)" fill="url(#bg-decoration-v1-fx-5-linear-4)" />
                <rect opacity="1" x="1866.13" y="-453" width="128" height="836.003" transform="rotate(46.8712 1866.13 -453)"
                    fill="url(#bg-decoration-v1-fx-5-linear-5)" />
                <rect opacity="1" x="800.131" y="-418" width="128" height="836.003" transform="rotate(46.8712 800.131 -418)"
                    fill="url(#bg-decoration-v1-fx-5-linear-5)" />
                <rect opacity="1" x="436.448" y="-251" width="76.1734" height="340.424"
                    transform="rotate(46.8712 436.448 -251)" fill="url(#bg-decoration-v1-fx-5-linear-7)" />
                <defs>
                    <linearGradient id="bg-decoration-v1-fx-5-linear-1" x1="674.131" y1="-440" x2="674.131" y2="396.003"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="currentColor" />
                        <stop offset="1" stop-color="currentColor" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="bg-decoration-v1-fx-5-linear-2" x1="1963.13" y1="-262" x2="1963.13" y2="574.003"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="currentColor" />
                        <stop offset="1" stop-color="currentColor" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="bg-decoration-v1-fx-5-linear-3" x1="2140.13" y1="-321" x2="2140.13" y2="515.003"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="currentColor" />
                        <stop offset="1" stop-color="currentColor" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="bg-decoration-v1-fx-5-linear-4" x1="1358.5" y1="40.3308" x2="1358.5" y2="876.334"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="currentColor" />
                        <stop offset="1" stop-color="currentColor" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="bg-decoration-v1-fx-5-linear-5" x1="1930.13" y1="-453" x2="1930.13" y2="383.003"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="currentColor" />
                        <stop offset="1" stop-color="currentColor" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="bg-decoration-v1-fx-5-linear-5" x1="864.131" y1="-418" x2="864.131" y2="418.003"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="currentColor" />
                        <stop offset="1" stop-color="currentColor" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="bg-decoration-v1-fx-5-linear-7" x1="474.534" y1="-251" x2="474.534" y2="89.4236"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="currentColor" stop-opacity="0" />
                        <stop offset="1" stop-color="currentColor" />
                    </linearGradient>
                </defs>
            </svg>
        </figure>


    </div>
    <!-- ========== End Intro Section ========== -->

    <!-- ========== About Us Section ========== -->
    <section id="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="header">
                        <div>
                            <h1>Welcome to</h1>
                            <h2>Supero <span>Agrobase</span> limited</h2>
                            <p>
                                Supero Agrobase Limited is a fast-rising agribusiness enterprise
                                that leverages in-depth research and development to provide
                                farmers with high quality agricultural inputs, farm management,
                                consultancy and agricultural laboratory services.
                            </p>
                            <a href="{{ url('/about_us') }}"> <button class="mybtn-2"> Read More </button></a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 text-center">
                    <div class="about-img-box">
                        <img loading="lazy" class="about-img rounded img-fluid" src="{{ url('/images/office.jpg') }}"
                            alt="SUPEROAGROBASE OFFICE">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ========== About Us Section ========== -->

    <!-- ========== Gallery Section ========== -->
    <div class="about-gallery">
        <div class="container">
            <div class="row">
                {{-- Gallery 1 --}}
                <div class="col-lg-2"></div>

                <div class="col-lg-8 text-center">
                    <div class="swiper-container">
                        <div class="swiper-wrapper py-4">

                            <div class="swiper-slide">
                                <img class="swiper-lazy img-fluid" loading="lazy"
                                    src="{{ url('images/gallery/gallery1.jpg') }}" alt="image" />
                                {{-- <div class="swiper-lazy-preloader"></div> --}}
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid swiper-lazy" loading="lazy"
                                    src="{{ url('images/gallery/gallery2.jpg') }}" alt="image" />

                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid swiper-lazy" loading="lazy"
                                    src="{{ url('images/gallery/gallery3.jpg') }}" alt="image" />

                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid swiper-lazy" loading="lazy"
                                    src="{{ url('images/gallery/gallery4.jpg') }}" alt="image" />

                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid swiper-lazy" loading="lazy"
                                    src="{{ url('images/gallery/gallery5.jpg') }}" alt="image" />

                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid swiper-lazy" loading="lazy"
                                    src="{{ url('images/gallery/gallery6.jpg') }}" alt="image" />

                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid swiper-lazy" loading="lazy"
                                    src="{{ url('images/gallery/gallery7.jpg') }}" alt="image" />

                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid swiper-lazy" loading="lazy"
                                    src="{{ url('images/gallery/gallery8.jpg') }}" alt="image" />

                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid swiper-lazy" loading="lazy"
                                    src="{{ url('images/gallery/gallery9.jpg') }}" alt="image" />

                            </div>
                        </div>

                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>

                <div class="col-lg-2"></div>
            </div>
        </div>

    </div>
    <!-- ========== Gallery Section ========== -->

    <!-- ========== Services Section ========== -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center my-2">
                        <h2>Our <span>Services</span></h2>
                    </div>
                </div>
            </div>

            {{-- services rows --}}
            <div class="row my-3">

                {{-- Agricourt Ventures Services --}}
                <div class="col-lg-6 col-md-6 my-4">
                    <div class="card">
                        <div class="service-logo text-center">
                            <img loading="lazy" src="{{ url('/images/agricourt-logo.png') }}" class="card-img-top"
                                alt="agricourt-logo">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Agricourt Ventures</h5>
                            <p class="card-text">
                                Through in-depth research and development, we’ve focused on
                                serving the needs of farmers through provision of quality
                                inputs such as high quality seeds,
                                granular and water soluble fertilizers, irrigation systems,
                                Growing Media (Cocopeat, Peat moss, Worm compost), seedling
                                trays, mulch film, grow bags, modern and locally adapted
                                green houses and net houses, green house covers...
                            </p>
                            <a href="{{ url('/services/Agricourt Ventures') }}"> <button class="mybtn-2"> Read More
                                </button></a>

                        </div>
                    </div>
                </div>

                {{-- Harvestyield Services --}}
                <div class="col-lg-6 col-md-6 my-4">
                    <div class="card">
                        <div class="service-logo text-center">
                            <img loading="lazy" src="{{ url('/images/harvestyield-logo.png') }}" class="card-img-top"
                                alt="harvestyield-logo">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Harvestyield Farm</h5>
                            <p class="card-text">
                                Through our 10Ha Farmland focused on vegetable crop
                                production i,e Tomato, Cucumber, Sweetcorn, Special
                                Watermelon and Pepper, we provide farm management and
                                consultancy services and partner with other reputable
                                companies to offer soil analysis, fertilizer and manure
                                analysis and other laboratory services which are necessary
                                for successful growing...
                            </p>
                            <a href="{{ url('/services/Harvestyield Farm') }}"> <button class="mybtn-2"> Read More
                                </button></a>

                        </div>
                    </div>
                </div>

                {{-- Agro Input Services --}}
                <div class="col-lg-12 my-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agro-Input products claim(s), Research and Promotion </h5>
                            <p class="card-text">
                                The rate at which small-scale farmers and commercial farmers
                                lose their farm produce to the negative impacts of
                                adulterated and low quality input is enormous. We stand out
                                and authenticate manufacturer claims on agro-input products
                                approved by SON and NAFDAC with quality research on our 3ha
                                research facility and promote to a network of over 10,000
                                farmers in our database (as at December 2020)...
                            </p>
                            <a href="{{ url('/services/Agro-Input') }}"> <button class="mybtn-2"> Read More
                                </button></a>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ========== Services Section Ends========== -->


    <!-- ========== Products Section ========== -->
    <section id="products">
        <div class="container">

            <div class="text-center my-4">
                <h2> Harvestyield <span>Products</span></h2>
            </div>

            <!-- ========== Harvestyield Products Section =========== -->
            <div class="row text-center my-4">

                <x-harvestyield-prd product="Cucumber" />
                <x-harvestyield-prd product="Tomatoes" />
                <x-harvestyield-prd product="Sweetcorn" />
                <x-harvestyield-prd product="Pepper" />
                <x-harvestyield-prd product="Watermelon" />

            </div>

            <div class="text-center my-4">
                <h2>Agricourt <span>Products</span></h2>
            </div>

            <!-- ========== Agricourt Products Section =========== -->
            <div class="row text-center my-4">
                {{-- Products pix are 300px by 300px --}}
                <x-agricourt-prd product="Irrigation Drips" />
                <x-agricourt-prd product="Seeds" />
                <x-agricourt-prd product="Herbicides" />
                <x-agricourt-prd product="Fungicides" />
                <x-agricourt-prd product="Insecticides" />
                <x-agricourt-prd product="Cocopeat" />
                <x-agricourt-prd product="Greenhouse" />
                <x-agricourt-prd product="Seedling Tray" />
                <x-agricourt-prd product="Seedlings" />

            </div>

        </div>
    </section>
    <!-- ========== Products Section Ends========== -->

    {{-- ========= Order Update ========== --}}
    <section id="order-update">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10  text-center">
                    <img loading="lazy" src="{{ url('/images/sweetcorn.jpg') }}" alt="Place order now"
                        class="img-fluid my-3 rounded">

                    @include('layouts/order')
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
    {{-- ========= Order Update ========== --}}

    {{-- ========== Contact Section ========== --}}
    @include('layouts.contact')
    {{-- ========== Contact Section ========== --}}

@endsection
