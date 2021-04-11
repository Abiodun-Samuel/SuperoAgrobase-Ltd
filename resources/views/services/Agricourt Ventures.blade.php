@extends("layouts.app")
@section('content')
    @include('layouts/inner-page')

    <section id="page">
        <div class="container">
            <h3>
                Sales of Agro-Input Products (AgriCourt Ventures)
            </h3>

            <p>
                Through in-depth research and development, we’ve focused on serving the needs of farmers through provision
                of quality inputs(AgriCourt Ventures) such as high quality seeds, granular and water soluble fertilizers,
                irrigation systems, Growing Media (Cocopeat, Peat moss, Worm compost), seedling trays, mulch film, grow
                bags, modern and locally adapted green houses and net houses, green house covers, shade nets, insect nets,
                high quality crop protection products and several other agricultural inputs
            </p>
        </div>

    </section>


    <section id="products">
        <div class="container">

            <div class="text-center my-2">
                <h2>Agricourt <span>Products</span></h2>
            </div>

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


    </section>
    
    @include('layouts/order')
    @include('layouts/contact')

@endsection
