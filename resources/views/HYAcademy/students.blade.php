@extends('layouts.app')

@section('content')
    <section id="hya-student">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6 mt-5">
                    <div class="student-box bg-white shadow-sm p-4">
                        <h3>My Dashboard</h3>

                        @if (!empty(auth()->user()->hyacademy) && auth()->user()->hyacademy !== null)

                            <h4>Admission Details:</h4>
                            <p>Add No: {{ auth()->user()->hyacademy->admission_no }}</p>
                            <p>Name: {{ auth()->user()->hyacademy->name }}</p>
                            <p>Email: {{ auth()->user()->hyacademy->email }}</p>
                            <p><a href="{{ url('/storage/images/HYAcademy/' . auth()->user()->hyacademy->name . '.pdf') }}"
                                    download> <u>Download</u> </a> your admission letter</P>

                            <div class="mt-4">
                                <a class="hya-class" href="https://chat.whatsapp.com/GZPPN5XoSDXGtmoBcNPNYr" target="_blank"> Join the
                                    Online
                                    Class Now </a>
                            </div>
                        @else
                            <p> You are not a registered student. <a href="{{ route('academy.register') }}">Register
                                    Now</a>
                            </p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
