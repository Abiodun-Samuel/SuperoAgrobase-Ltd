@extends('layouts.app')

@section('content')
    <section id="latestupdate">
        <div class="container">
            {{-- latest update --}}
            <div class="row d-flex justify-content-center my-5">
                <div data-aos="fade-up" class="col-lg-6 bg-light my-2">

                    <div class="header">
                        <h3> Post Update</h3>
                    </div>

                    <div class="latest p-3">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $message)
                                    <p>{{ $message }}</p>
                                @endforeach
                            </div>
                        @endif

                        <div class="card-body">

                            <form action="{{ route('latestupdate.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                @if (session('update'))
                                    <div class="alert alert-success">
                                        <p>{{ session('update') }}</p>
                                    </div>
                                @endif

                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Update Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                        id="exampleFormControlInput1">
                                </div>

                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Update Description</label>
                                    <textarea name="description" value="{{ old('description') }}" class="form-control"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Picture</label>
                                    <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <small><em>(Pictures size must not be greater than 2mb)</em></small>
                                <small><em>(All fields are required)</em></small>

                                <div class="form-group mt-2">
                                    <button class="mybtn w-100" type="submit">POST UPDATE</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
