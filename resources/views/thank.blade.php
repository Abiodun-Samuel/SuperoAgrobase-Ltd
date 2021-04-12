@extends("layouts.app")

@section('content')

    <div class="container">
        {{-- Success Message Display --}}
        <div class="row mt-3 mb-1">

            <div class="col-lg-4"></div>

            <div class="col-lg-4 p-3">

                <img class="img-fluid p-1" src="{{ url('images/thanks.jpg') }}" alt="Thank You">

                <p class="text-primary my-2"> <b>{{ $user }}</b></p>

                <p> <b>{{ $message_sent }}</b></p>

                <p>Go to <a class="btn btn-primary" href="{{ url('/') }}">Homepage</a></p>

            </div>

            <div class="col-lg-4"></div>
        </div>

    </div>

    @include('layouts/order')



@endsection
