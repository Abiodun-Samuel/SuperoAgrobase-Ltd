@extends('layouts.app')

@section('content')

    <section id="blog">
        <div class="container">

            {{-- latest update --}}
            <div class="row d-flex justify-content-center my-5">
                <div data-aos="fade-up" class="col-lg-6 bg-light my-2">
                    <div class="header">
                        <h3>Edit Blog</h3>
                    </div>

                    <div class="latest p-3">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $message)
                                    <p>{{ $message }}</p>
                                @endforeach
                            </div>
                        @endif

                        <form class="mt-4" action="{{ route('blog.update', $blog->slug) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Update Title</label>
                                <input type="text" name="title" value="{{ $blog->title }}" class="form-control"
                                    id="exampleFormControlInput1">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Update Description</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"> {{ $blog->description }} </textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Picture</label>
                                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <small><em>(Pictures size must not be greater than 2mb)</em></small>
                            <small><em>(All fields are required)</em></small>

                            <div class="form-group mt-2 form">
                                <button class="mybtn w-100" type="submit">EDIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
