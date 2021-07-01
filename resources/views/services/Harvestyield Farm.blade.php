@extends("layouts.app")
@section('content')
    @include('layouts/inner-page')

    <section id="service-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 my-2">
                    <div class=" mb-4">
                        <h3> HarvestYield Farm</h3>
                    </div>
                    <h5>Production of Vegetable Crops</h5>
                    <p>
                        Through our 10Ha Farmland focused on vegetable crop production i,e Tomato, Cucumber, Sweetcorn,
                        Special
                        Watermelon and Pepper, we provide farm management and consultancy services and partner with other
                        reputable
                        companies to offer soil analysis, fertilizer and manure analysis and other laboratory services which
                        are
                        necessary for successful growing.

                    </p>

                    <x-page-component description="We have fresh Agricultural Products for you, Check them out"
                        link="Our Products" linktext="Products" />
                </div>
                <div class="col-lg-5 col-md-6 my-2">
                    <img class="img-thumbnail" loading="lazy" src="{{ url('/images/icons/harvestyield-logo.jpg') }}"
                        alt="" title="Harvestyield" width="400" height="400">
                </div>
            </div>
        </div>
    </section>
@endsection
