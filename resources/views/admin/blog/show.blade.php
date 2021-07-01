@extends('layouts.app')

@section('content')
    <div id="inner-page">
        <div class="container">
            <h2> <a href="{{ url('/') }}"> Home</a> | <a href="{{ route('blog.index') }}"> Blog </a>
                |{{ $title = $blog->title }} </h2>
        </div>
    </div>
    <section id="blog-page-show">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" class="col-lg-7 col-md-7 my-2">
                    <h3> {{ $blog->title }}</h3>
                    <div> <span>By {{ $blog->user->name }}, </span> <span> Uploaded
                            {{ $blog->updated_at->diffForHumans() }}</span></div>
                    <div style="height: 30px" class="sharethis-inline-share-buttons my-3"></div>
                    <p class="mt-3"> {{ $blog->description }} </p>
                    <img class="img-fluid bg-secondary my-3" loading="lazy"
                        src="{{ url('/storage/images/blogs/' . $blog->image_path) }}" alt="{{ $blog->title }}" width="300"
                        height="300" title="{{ $blog->title }}">
                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-5 col-md-5 my-2">
                    <div class="card text-center rounded-0 border-0">
                        <div class="card-top">
                            <h3>More Blogs</h3>
                            <hr>
                        </div>

                        <div class="card-body">
                            @foreach ($moreBlogs as $moreBlog)
                                <p>
                                    <a href="{{ route('blog.show', $moreBlog->slug) }}">
                                        {{ Str::upper($moreBlog->title) }}</a>
                                    </a>
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=60b73fbacdfdc30011c6f7ac&product=inline-share-buttons">
    </script>
@endpush
