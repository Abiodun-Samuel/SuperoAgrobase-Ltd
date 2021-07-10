@extends('layouts.app')

@section('content')
    <section id="hya-student">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4 my-2">
                    <div class="card">
                        <div class="card-header">My Dashboard</div>
                        <div class="card-body dashboard">
                            @if (!empty(auth()->user()->hyacademy) && auth()->user()->hyacademy !== null)
                                <h5>Admission Details:</h5>
                                <hr>
                                <p><span>Add No: </span> {{ auth()->user()->hyacademy->admission_no }}</p>
                                <p><span>Name: </span> {{ auth()->user()->hyacademy->name }}</p>
                                <p><span>Email: </span> {{ auth()->user()->email }}</p>
                                <p><a href="{{ url('/images/HYAcademy/' . auth()->user()->hyacademy->name . '.pdf') }}"
                                        download> <u class="text-danger">Download</u> </a> your admission letter</P>

                                <div class="mt-4">
                                    <a class="hya-class" href="https://chat.whatsapp.com/GZPPN5XoSDXGtmoBcNPNYr"
                                        target="_blank"><u class="text-danger"> Online Class </u> </a>
                                </div>
                            @else
                                <p> You are not a registered student. <a href="{{ route('academy.register') }}">Register
                                        Now</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header"> Course Outline </div>
                                <div class="card-body">
                                    @foreach ($courses as $course)
                                        <p> <b>Week {{ $course->week }}: </b> {{ $course->topic }} <br>
                                            @if (!empty($course->material))
                                                <a href="{{ url('/images/HYAcademy/course/' . $course->material) }}"
                                                    download>Download</a>
                                            @endif
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header"> Events / Notitifications </div>
                                <div class="card-body">
                                    @foreach ($news as $new)
                                        <p> {{ $new->news }} <br>
                                            <small class="text-danger"> By {{ $new->user->name }}, Uploaded
                                                {{ $new->created_at->diffForHumans() }}</small>
                                        </p>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header"> Submit Assignment </div>
                                <div class="card-body">

                                    <form action="{{ route('academy.assignment') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @if (session('assignment'))
                                            <div class="alert alert-success">
                                                <p>{{ session('assignment') }}</p>
                                            </div>
                                        @endif

                                        @error('assignment_file')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <label for="assignment_file"> Upload file
                                            <em>(Format:pdf,docx,doc,jpeg,jpg. Max size:2048)</em></label>
                                        <input type="file" class="w-100 my-2" name="assignment_file" id="assignment_file">

                                        <input class="w-100" type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-3">
                            <div class="card">
                                <div class="card-header"> Send Message</div>
                                <div class="card-body">
                                    <form action="{{ route('academy.message') }}" method="post"
                                        enctype="application/x-www-form-urlencoded">
                                        @csrf

                                        @if (session('studentmessage'))
                                            <div class="alert alert-success">
                                                <p>{{ session('studentmessage') }}</p>
                                            </div>
                                        @endif

                                        @error('student_message')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <label for="student_message"> Message </label>
                                        <textarea class="w-100 my-2" name="student_message" id="student_message" cols="30"
                                            rows="2">  {{ old('student_message') }}</textarea>
                                        <input class="w-100" type="submit" value="Send">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
