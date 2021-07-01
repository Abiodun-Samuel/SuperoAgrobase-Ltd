@extends("layouts.app")
@section('content')
    @include('layouts/inner-page')

    <section id="service-page">
        <div class="container">

            <div class="row">

                <div class="col-lg-7 col-md-6 my-2">
                    <div class="mb-2">
                        <h3 class="mb-4">AgriCourt Ventures</h3>
                        <h5>Sales of Agro-Input Products</h5>
                    </div>
                    <p>
                        Through in-depth research and development, we’ve focused on serving the needs of farmers through
                        provision
                        of quality inputs(AgriCourt Ventures) such as high quality seeds, granular and water soluble
                        fertilizers,
                        irrigation systems, Growing Media (Cocopeat, Peat moss, Worm compost), seedling trays, mulch film,
                        grow
                        bags, modern and locally adapted green houses and net houses, green house covers, shade nets, insect
                        nets,
                        high quality crop protection products and several other agricultural inputs.
                    </p>

                    <x-page-component
                        description="We have fresh Agricultural Products for you, Check them out"
                        link="Our Products" linktext="Products" />
                </div>
                <div class="col-lg-5 col-md-6 my-2">
                    <img class="img-thumbnail" loading="lazy" src="{{ url('/images/icons/agricourt-logo.jpg') }}" alt=""
                        title="AgriCourt Ventures" width="400" height="400">
                </div>

            </div>


        </div>
    </section>

@endsection
