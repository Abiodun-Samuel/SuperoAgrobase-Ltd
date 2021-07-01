@extends("layouts.app")
@section('content')
    @include('layouts/inner-page')

    <section id="service-page">
        <div class="container">
            <div class="mb-3">
                <h3 class="mb-4"> Agro-Input</h3>
                <h5> Products Claim(s), Research & Promotion</h5>
            </div>

            <p>
                The rate at which small-scale farmers and commercial farmers lose their farm produce to the negative impacts
                of adulterated and low quality input is enormous. We stand out and authenticate manufacturer claims on
                agro-input products approved by SON and NAFDAC with quality research on our 3ha research facility and
                promote to a network of over 10,000 farmers in our database (as at December 2020).
            </p>

            <p>
                We identify problems in production, search for product(s) to solve the problem, conduct trial(s) to affirm
                manufacturer claims about such product, promote the product brand(s) to users (farmers) and make such
                product available through our Agro-input dealers’ network nationwide
            </p>
            <x-page-component description="We have fresh Agricultural Products for you, Check them out" link="Our Products"
                linktext="Products" />
        </div>
    </section>

@endsection
