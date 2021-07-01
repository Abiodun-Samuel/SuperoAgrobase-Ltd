@extends("layouts.app")

@section('content')
    <section>
        <div class="container">
            <div class="row my-3 d-flex justify-content-center">
                <div class="col-lg-5 p-3">
                    <img loading="lazy" class="img-fluid p-1" src="{{ url('images/thanks.jpg') }}" alt="Thank You">
                    <p class="text-primary my-2"> <b>{{ $user }}, </b></p>
                    <p> <b>{{ $message_sent }}</b></p>
                    <p>Go to <a class="mybtn btn-primary" href="{{ url('/') }}">Homepage</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
