@extends('layouts.app')

@section('content')
    <section id="blog">
        <div class="container ">
            {{-- latest update --}}
            <div class="row d-flex justify-content-center my-5">
                <div data-aos="fade-up" class="col-lg-6 bg-light my-2">
                    <div class="header">
                        <h3>Post Blog</h3>
                    </div>
                    <div class="latest p-3">
                        @if ($errors->any())
                            @foreach ($errors->all() as $message)
                                <div class="alert alert-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @endforeach
                        @endif

                        <form class="form mt-4" action="{{ route('blog.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> Blog Title</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Blog Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Picture</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <small><em>(Pictures size must not be greater than 2mb)</em></small>
                            <small><em>(All fields are required)</em></small>

                            <div class="form-group mt-2">
                                <button class="mybtn w-100" type="submit">POST BLOG</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

