@extends("layouts.app")
@section('content')
    @include('layouts/inner-page')

    <section id="page">
        <div class="container">
            <h3>
                Production of Vegetable Crops (HarvestYield Farm)
            </h3>
            <p>
                Through our 10Ha Farmland focused on vegetable crop production i,e Tomato, Cucumber, Sweetcorn, Special
                Watermelon and Pepper, we provide farm management and consultancy services and partner with other reputable
                companies to offer soil analysis, fertilizer and manure analysis and other laboratory services which are
                necessary for successful growing.
            </p>

        </div>

    </section>

    <!-- ========== Harvestyield Products Section =========== -->

    <section id="products">
        <div class="container">

            <div class="text-center my-2">
                <h2> Harvestyield <span>Products</span></h2>
            </div>

            <div class="row text-center my-4">

                <x-harvestyield-prd product="Cucumber" />
                <x-harvestyield-prd product="Tomatoes" />
                <x-harvestyield-prd product="Sweetcorn" />
                <x-harvestyield-prd product="Pepper" />
                <x-harvestyield-prd product="Watermelon" />

            </div>

        </div>
    </section>

    <!-- ========== Products Section =========== -->


    @include('layouts/order')
    @include('layouts/contact')

@endsection
