@extends("layouts.app")

@section('content')


    <div class="container">
        <div class="row py-5">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center">
                <img class="img-fluid" src="{{ url('images/error.jpg') }}" alt="Page does not exist">
                <p class="my-3">Go back to <a class="text-success" href="{{ url('/') }}">Homepage</a> </p>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>

@endsection
