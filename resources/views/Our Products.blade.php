@extends("layouts.app")
@section('content')

    @include('layouts/inner-page')

    <section id="order-page">

        <div class="container">

            <h3>You can purchase our products in 3 quick steps:</h3>

            <ul class="ml-4">
                <li> Select product by clicking the product name.</li>
                <li> Input the quantity you want to purchase. </li>
                <li> Enter your personal details. </li>
            </ul>
            <small><em> (Note: Please ensure you follow the steps above in other for us to serve you better)</em></small>

            <form action="" method="post">
                @csrf

                <div class="row mt-3">

                    <x-order.order product="Irrigation Drips" />
                    <x-order.order product="Seeds" />
                    <x-order.order product="Herbicides" />
                    <x-order.order product="Fungicides" />
                    <x-order.order product="Insecticides" />
                    <x-order.order product="Cocopeat" />
                    <x-order.order product="Greenhouse" />
                    <x-order.order product="Seedling Tray" />
                    <x-order.order product="Seedlings" />
                    <x-order.order product="Cucumber" />
                    <x-order.order product="Pepper" />
                    <x-order.order product="Sweetcorn" />
                    <x-order.order product="Tomatoes" />
                    <x-order.order product="Watermelon" />

                </div>





            </form>




        </div>

    </section>


@endsection
