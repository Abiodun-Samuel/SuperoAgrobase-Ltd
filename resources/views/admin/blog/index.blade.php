@extends('layouts.app')

@section('content')
    @include('layouts.inner-page')

    {{-- latest blogs --}}
    <section id="blog">
        <div class="container">

            @if (session('status'))
                <div class="alert alert-success my-3">
                    <p>{{ session('status') }}</p>
                </div>
            @endif

            @if (isset(Auth::user()->is_admin))
                <div class="col-lg-6 my-3">
                    <a class="mybtn btn-more py-2 px-4" href="{{ route('blog.create') }}">
                        Add More Blogs
                    </a>
                </div>
            @endif

            <div class="row my-3">
                @if ($blogs->count())
                    @foreach ($blogs as $blog)
                        <div data-aos="fade-up" class="col-lg-4 col-md-6 col-sm-6 my-5">
                            <div class="card">
                                <img class="img-fluid bg-secondary mb-2" loading="lazy"
                                    src="{{ url('/storage/images/blogs/' . $blog->image_path) }}"
                                    alt="{{ $blog->title }}" width="300" height="300" title="{{ $blog->title }}">

                                <div class="card-body">
                                    <h4> {{ Str::upper($blog->title) }}</h4>
                                    <span>By {{ $blog->user->name }}, </span> <span> Uploaded
                                        {{ $blog->updated_at->diffForHumans() }}</span>

                                    <p> {{ Str::words($blog->description, 10, ' ...') }} </p>

                                    <div>
                                        <a class="mybtn btn-more py-2 px-3" href="{{ route('blog.show', $blog->slug) }}">
                                            Read More
                                        </a>

                                        @if (isset(Auth::user()->is_admin))
                                            <a class="mybtn rounded-pill bg-transparent admin mx-2"
                                                href="{{ route('blog.edit', $blog->slug) }}">
                                                Edit
                                            </a>

                                            <form class="d-inline" action="{{ route('blog.destroy', $blog->slug) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="mybtn admin bg-transparent rounded-pill mx-2"
                                                    type="submit">Delete</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            {{ $blogs->links() }}
        </div>
    </section>
@endsection
