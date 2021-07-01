@extends("layouts.app")

@section('content')
    @include('layouts/inner-page')

    <section id="aboutus-page">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" class="col-lg-6 col-md-6 p-2">
                    <h3>SuperoAgrobase limited</h3>
                    <p>
                        Supero Agrobase Limited is a fast-rising agribusiness enterprise
                        that leverages in-depth research and development to provide
                        farmers with high quality agricultural inputs, farm management,
                        consultancy and agricultural laboratory services.
                    </p>

                    <h3>
                        Our services
                    </h3>

                    <ol class="ml-4">
                        <li>Sales of Agro-Input Products (AgriCourt Ventures)
                            <a href="{{ url('/services/Agricourt Ventures') }}"> Read More.</a>
                        </li>
                        <li>Agro-Input products claim(s), research and promotion
                            <a href="{{ url('/services/Agro-Input') }}"> Read More.</a>
                        </li>
                        <li>Production of Vegetable Crops (HarvestYield Farm)
                            <a href="{{ url('/services/Harvestyield Farm') }}"> Read More.</a>
                        </li>
                    </ol>
                    <p>Our Core Values are:
                        Integrity
                        Respect
                        Transparency
                        Excellence
                        Team Work
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-6 col-md-6 d-flex align-items-stretch">
                    <img class="img-fluid bg-secondary mt-3" loading="lazy" src="{{ url('/images/product.jpg') }}"
                        alt="product" width="400" height="400">
                </div>
            </div>

            {{-- Team section --}}
            <div class="mt-5">
                <h3>
                    Meet our Team
                </h3>
                <p>
                    We are a team of professionals; we also have a vast network, strong experiences in the sector and
                    global exposure to offer high quality solutions to our clients.
                </p>
            </div>

            <div class="row my-4">
                <div data-aos="fade-up" class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 xs d-flex align-items-stretch">
                    <div class="card">
                        <img loading="lazy" src="{{ url('/images/team/member3.jpg') }}" class="card-img-top"
                            alt="team member">

                        <div class="card-body text-center">
                            <p class="member-name">
                                Adetola D. Taiwo
                            </p>
                            <p class="position font-italic">
                                (Technical Sales & General Manager)
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="100"
                    class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 xs  d-flex align-items-stretch">
                    <div class="card">
                        <img loading="lazy" src="{{ url('/images/team/member1.jpg') }}" class="card-img-top"
                            alt="team member">

                        <div class="card-body text-center">
                            <p class="member-name">
                                Adebowale Miracle
                            </p>
                            <p class="position font-italic">
                                (Administrative Officer)
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="200"
                    class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 xs  d-flex align-items-stretch">
                    <div class="card">
                        <img loading="lazy" src="{{ url('/images/team/member2.jpg') }}" class="card-img-top"
                            alt="team member">

                        <div class="card-body text-center">
                            <p class="member-name">
                                Bankole Tomiwa
                            </p>
                            <p class="position font-italic">
                                (Technical & Media Manager)
                            </p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="300"
                    class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 xs  d-flex align-items-stretch">
                    <div class="card">
                        <img loading="lazy" src="{{ url('/images/team/member4.jpg') }}" class="card-img-top"
                            alt="team member">

                        <div class="card-body text-center">
                            <p class="member-name">
                                Kolapo A. Olawunmi
                            </p>
                            <p class="position font-italic">
                                (Technical sales & Inventory Manager)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
