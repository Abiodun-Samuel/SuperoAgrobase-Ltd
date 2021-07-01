@extends('layouts.app')

@section('content')
    <section id="hyacademy-admin">
        <div class="container">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-lg-6 p-2 bg-white shadow-sm">
                    <header class="text-center py-2">
                        <img src="{{ url('/images/icons/harvestyield-logo.png') }}" loading="lazy"
                            alt="harvestyield academy" class="img-fluid" title="harvestyield academy" height="100px"
                            width="100px">
                        <h3 class="text-dark">Harvestyield Academy</h3>
                        <p class="text-secondary">List of Registered Students</p>
                    </header>
                </div>
            </div>

            <div class="row mt-4">
                @if ($students->count())
                    @foreach ($students as $student)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card p-3 bg-white shadow-sm my-2">
                                <p><b>Name:</b> {{ $student->name }}</p>
                                <p><b>Email:</b> {{ $student->email }}</p>
                                <p><b>Phone:</b> {{ $student->phone }}</p>
                                <p><b>Gender:</b> {{ $student->gender }}</p>
                                <p><b>Education:</b> {{ $student->education }}</p>
                                <p><b>Address:</b> {{ $student->address }}</p>
                                <p><b>How did you hear about the training?</b> {{ $student->media }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-12 text-center mt-3">
                        <p class="text-danger">Oops, No Students registered yet.</p>
                    </div>
                @endif
                {{ $students->links() }}

            </div>
        </div>
    </section>
@endsection
