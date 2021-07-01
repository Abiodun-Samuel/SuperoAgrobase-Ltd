@extends("layouts.app")

@section('content')
    @include('layouts/inner-page')

    <div id="product">
        <div class="container text-center">
            <img loading="lazy" class="img-fluid bg-secondary" src="{{ url('/images/under-construction.jpg') }}"
                alt="page is under construction" height="400" width="400">
        </div>
    </div>
    <x-page-component
        description="Do you want to make enquiry about any of our products or you want to place an order? Please feel free to contact us,  we'll get back to you promptly. Cheers!"
        link="contact_us" linktext="Contact Us" />
@endsection
