@extends("layouts.app")

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
@endpush

@section('content')
    <!-- Hero -->
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1><span class="p-0 m-0"> Best Agricultural Products & Services </span> </h1>
                    <p><span> We Provide Innovative Agricultural Solutions and Quality Services to Improve Crop Yields
                            Optimally, Contact Us Now.</span> </p>

                    <div class="hero-btn my-4 anim">
                        <a class="mybtn mr-4" href="{{ url('/Our Products') }}">Products</a>
                        <a class="mybtn" href="{{ url('/contact_us') }}">Contact</a>
                    </div>
                    <div class="hero-icon my-5 anim">
                        <a href="https://wa.me/message/KK2QPDR6KTLBK1">
                            <img loading="lazy" src="{{ url('/images/icons/whatsapp.png') }}" alt="whatsapp"
                                title="whatsapp">
                        </a>
                        <a href="https://twitter.com/LimitedSupero">
                            <img loading="lazy" src="{{ url('/images/icons/twitter.png') }}" alt="twitter"
                                title="twitter">
                        </a>
                        <a href="https://www.instagram.com/superoagrobase/">
                            <img loading="lazy" src="{{ url('/images/icons/instagram.png') }}" alt="Instagram"
                                title="Instagram">
                        </a>
                        <a href="https://www.facebook.com/superoagrobasedltd/">
                            <img loading="lazy" src="{{ url('/images/icons/facebook.png') }}" alt="Facebook"
                                title="Facebook">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Ends -->

    <!-- About Us -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div data-aos="zoom-in" class="col-lg-6 col-md-6 d-flex align-items-stretch text-center">
                    <div class="about-box ">
                        <h3>Who Are We?</h3>
                        <p>
                            <span>Supero Agrobase Limited</span> is a fast-rising agribusiness enterprise
                            that leverages in-depth research and development to provide
                            farmers with high quality agricultural inputs, farm management,
                            consultancy and agricultural laboratory services.
                        </p>
                        <a class="mybtn" href="{{ url('/about_us') }}"> Read More </a>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-delay="150"
                    class="col-lg-6 col-md-6 d-flex align-items-stretch text-center">
                    <div class="about-box ">
                        <h3>Why Choose us?</h3>
                        <p>
                            We are a team of well trained Agric professionals; we have a vast network, strong experience in
                            the sector and global exposure to offer high quality products and services to our clients. <br>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" focusable="false" width="1.3em" height="1.3em" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path d="M22 11l-7-9v5C3.047 7 1.668 16.678 2 22c.502-2.685.735-7 13-7v5l7-9z"
                                            stroke="#005164" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </i>
                            Our Core Values are <b>Integrity</b>, <b>Respect</b>,
                            <b>Transparency</b>, <b>Excellence</b> and <b>Team Work.</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us -->

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="header">
                <h3> What We Do </h3>
            </div>

            <div class="row my-5">
                {{-- Agricourt Ventures Services --}}
                <div data-aos="zoom-in" class="col-lg-4 col-md-6 my-4 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img loading="lazy" src="{{ url('/images/icons/agricourt-logo.png') }}"
                                    alt="agricourt-logo" title="agricourt-logo" height="100" width="100">
                            </div>
                            <p>
                                At Agricourt Ventures, we provide quality Agricultural inputs such as;
                            </p>
                            <ul class="list-unstyled">
                                <li> High quality seeds, Granular and Water soluble fertilizers.</li>
                                <li> Irrigation systems.</li>
                                <li> Growing Media (Cocopeat,
                                    Peat moss, Worm compost).</li>
                                <li> Seedling trays, mulch
                                    film, grow bags.</li>
                                <li> Modern and locally
                                    adapted green houses and net houses, green
                                    house covers.</li>
                                <li> Shade nets, Insect nets
                                    and many more.</li>
                            </ul>
                            <a class="mybtn" href="{{ url('/services/Agricourt Ventures') }}"> Read More </a>
                            <a class="mybtn" href="{{ url('/Our Products') }}"> Products </a>
                        </div>
                    </div>
                </div>

                {{-- Harvestyield Services --}}
                <div data-aos="zoom-in" data-aos-delay="100" class="col-lg-4 col-md-6 my-4 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img loading="lazy" src="{{ url('/images/icons/harvestyield-logo.png') }}"
                                    alt="Harvestyield Farm Logo" title="Harvestyield Farm" height="100" width="100">
                            </div>
                            <p>
                                At Harvestyield Farm, we focus on production of vegetable crops like;
                            </p>
                            <ul class="list-unstyled">
                                <li> Tomato, Cucumber, Sweetcorn, Special Watermelon & Pepper.</li>
                                <li> We also provide farm management & consultancy services, and partner with
                                    other
                                    reputable
                                    companies to offer soil analysis, fertilizer and manure analysis and other
                                    laboratory
                                    services. </li>
                            </ul>
                            <a class="mybtn" href="{{ url('/services/Harvestyield Farm') }}"> Read More </a>
                            <a class="mybtn" href="{{ url('/Our Products') }}"> Products </a>
                        </div>
                    </div>
                </div>

                {{-- Agro Input Services --}}
                <div data-aos="zoom-in" data-aos-delay="200" class="col-lg-4 col-md-12 my-4 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Agro-Input Products claims, Research & Promotion.
                            </h5>
                            <p class="card-text">
                                {{-- data-aos="fade-up" data-aos-once="false" data-aos-delay="150" --}}
                            <ul class="list-unstyled">
                                <li class="box"> We identify problems in Production.</li>
                                <li class="box"> Search for product(s) to solve the problem.</li>
                                <li class="box"> Conduct trial(s) to affirm manufacturer claims about such product(s).</li>
                                <li class="box"> Promote the product brand(s) to users (farmers) and make such
                                    product available through our Agro-Input dealers’ network nationwide.</li>
                            </ul>
                            </p>
                            <a class="mybtn" href="{{ url('/services/Agro-Input') }}"> Read More </a>
                            <a class="mybtn" href="{{ route('contact') }}"> Contact Us </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Services Ends -->

    {{-- latest Updates --}}
    <section id="latest-update">
        <div class="container">
            <div class="header text-center">
                <h3>
                    Latest Updates
                </h3>
            </div>

            <div class="row mt-5">
                @if ($latestUpdates->count())
                    @foreach ($latestUpdates as $latestUpdate)
                        <div data-aos="fade-up" class="col-lg-4 col-md-6 my-3">
                            <div class="card">
                                <img class="img-fluid bg-secondary" loading="lazy"
                                    src="{{ url('images/latestupdates/' . $latestUpdate->image_path) }}"
                                    alt="{{ $latestUpdate->title }}" width="300" height="300"
                                    title="{{ $latestUpdate->title }}">

                                <div class="card-body">
                                    <h4> {{ $latestUpdate->title }}</h4>
                                    <span>By {{ $latestUpdate->user->name }}, </span> <span> Uploaded
                                        {{ $latestUpdate->created_at->diffForHumans() }}</span>

                                    <p> {{ Str::words($latestUpdate->description, 10, ' ...') }} </p>

                                    <div class="mt-1">
                                        <a class="mybtn btn-a"
                                            href="{{ route('latestupdate.show', $latestUpdate->slug) }}">
                                            Read
                                            More </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-4 col-md-12 col-sm-12">
                    {{-- comment --}}
                    <div class="comment my-4 p-4">
                        <h4>Let's hear from you</h4>
                        <form action="{{ route('post.blog') }}" class="comment-form" method="POST"
                            enctype="application/x-www-form-urlencoded">
                            @csrf
                            @error('body')
                                <p>{{ $message }}</p>
                            @enderror

                            <div class=" form-group">
                                <textarea class="w-100 p-2" id="textarea" name="body" rows="5"
                                    placeholder="Write your comments here" value="{{ old('body') }}" required></textarea>
                            </div>
                            <div class="my-2">
                                <button class="mybtn w-100 btn-sub" type="submit" title="Send Message">
                                    POST
                                </button>
                            </div>
                        </form>

                        @if ($posts->count())
                            @foreach ($posts as $post)
                                <div class="comment-box mt-3">
                                    @if ($post->user)
                                        <img loading="lazy" class="img-fluid"
                                            src="{{ $post->user->avatar ?? url('/images/icons/user.png') }}" alt=""
                                            width="16" height="16">
                                        <a class="text-info"
                                            href="{{ route('user.post', $post->user) }}">{{ $post->user->name }}</a>
                                        <span class="">{{ $post->created_at->diffForHumans() }}</span>
                                        <p>{{ $post->body }}</p>
                                    @endif
                                    {{-- like and unlike comments --}}
                                    <div class="like">
                                        @auth()
                                            @if (!$post->likedBy(auth()->user()))
                                                <form action="{{ route('post.like', $post) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    <button type="submit">Like</button>
                                                    <span> {{ $post->likes->count() }}
                                                        {{ Str::plural('Like', $post->likes->count()) }}</span>
                                                </form>
                                            @else
                                                <form action="{{ route('post.unlike', $post) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Unlike</button>
                                                    <span> {{ $post->likes->count() }}
                                                        {{ Str::plural('Like', $post->likes->count()) }}</span>
                                                </form>
                                            @endif
                                        @endauth
                                    </div>
                                </div>
                            @endforeach
                            {{ $posts->links() }}
                        @else
                            <div class="comment-box mt-4">
                                <p>No Comments</p>
                            </div>
                        @endif

                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div data-aos="fade-up" class="col-lg-6 col-md-6 mt-5">
                    <div class="card weather-text border-0 rounded-0">
                        <h3>Weather Update</h3>
                        <p>Stay up to date with the current weather condition in your location</p>
                        <em><q>There's no such thing as good weather, or bad weather. There's just weather and your
                                attitude towards it. -- Louise Hay </q></em>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-6 col-md-6 mt-5 ">
                    <div class="shadow-sm p-3  weather border-0  d-flex justify-content-between align-items-stretch">
                        <div class="div">
                            @php date_default_timezone_set("Africa/Lagos") @endphp
                            <h5> As of today {{ date('Y-m-d g:iA') }} </h5>
                            <h1>{{ json_encode($news['main']['temp']) }} <sup>0</sup>C </h1>
                            <h4 class="text-light">{{ trim(json_encode($news['weather'][0]['main']), '"') }}</h4>
                            <p> Probably
                                {{ trim(json_encode($news['weather'][0]['description']), '"') }}</p>
                        </div>

                        <div class="">
                            <img loading="lazy" class="img-fluid d-inline"
                                src="{{ url('http://openweathermap.org/img/wn/' . trim(json_encode($news['weather'][0]['icon']), '"') . '@2x.png') }}"
                                alt="">
                            <p>{{ json_encode($news['main']['temp_min']) }}/{{ json_encode($news['main']['temp_max']) }}
                                <sup>0</sup>C
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- latest Updates --}}

    <!-- Products Section -->
    <section id="products">
        <div class="container">
            <div class="header">
                <h3> Our Products </h3>
            </div>
            <h4 class="mt-4 mb-2">Harvestyield Products and Agricourt Products</h4>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-2 col-md-4 col-sm-6 xs">
                        <div class="card m-2">
                            <div class="product-box">
                                <img loading="lazy" src="{{ url('/images/products/' . $product->name . '.jpg') }}"
                                    class="card-img-top bg-secondary" alt="{{ $product->name }}" height="300" width="300"
                                    title="{{ $product->name }}">
                                <div class="card-body">
                                    <p class="card-text">
                                        {{ $product->name }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <x-page-component
        description="Do you want to make enquiry about any of our products and services? Please feel free to contact us,  we'll get back to you promptly. Cheers!"
        link="contact_us" linktext="Contact Us" />
    <!-- Products Ends -->

    {{-- Order Update --}}
    <div id="order-update">
        <div class="container">
            <div class="row justify-content-center">
                <div data-aos="fade-up" class="col-lg-4 col-md-6 text-center">
                    <img loading="lazy" src="{{ url('/images/office-new.jpg') }}" alt="Our Office is open"
                        class="img-fluid my-3 " title="Office address" height="350" width="350">
                </div>
                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-4 col-md-6 text-center">
                    <img loading="lazy" src="{{ url('/images/takeorder.jpg') }}" alt="Place order now"
                        class="img-fluid my-3 " title="place order now" height="350" width="350">
                </div>
            </div>
        </div>
    </div>
    {{-- Order Update --}}
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/CSSRulePlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js"></script>
    <script>
        // load gsap
        gsap.registerPlugin(ScrollTrigger);
        var rule = CSSRulePlugin.getRule(".hero span:after");
        // var box = gsap.timeline({
        //     scrollTrigger: {
        //         trigger: ".box",
        //         markers: true,
        //         start: "top 70%",
        //         end: "bottom 20%",
        //         scrub: true
        //     }
        // });
        // box.from(".box", {
        //     y: 50,
        //     opacity: 0,
        //     duration: 0.5,
        //     stagger: 0.2,
        // })

        var tl = gsap.timeline({
            defaults: {
                duration: 0.6
            }
        });
        tl.to(rule, {
                cssRule: {
                    scaleY: 0
                }
            })
            .from(".anim", {
                y: 50,
                stagger: 0.2,
                opacity: 0
            });

        $(function() {
            @if (Session::has('success'))
                Swal.fire({
                icon: 'success',
                title: 'Great!',
                text: '{{ Session::get('success') }}'
                })
            @endif
        });
    </script>
@endpush
