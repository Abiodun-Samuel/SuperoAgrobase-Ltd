@extends('layouts.app')

@section('content')
    @include('layouts.inner-page')

    {{-- latest Updates --}}
    <section id="latestupdate-page">
        <div class="container">

            @if (session('status'))
                <div class="alert alert-success my-2">
                    <p>{{ session('status') }}</p>
                </div>
            @endif

            <div class="row my-3">
                <div class="col-lg-6">
                    @if (isset(Auth::user()->is_admin))
                        <a class="mybtn btn-a py-2 px-3" href="{{ route('latestupdate.create') }}">
                            Add More Updates
                        </a>
                    @endif
                </div>
            </div>

            <div class="row my-3">
                <div data-aos="fade-up" class="col-lg-8 d-flex flex-wrap">
                    @if ($latestUpdates->count())
                        @foreach ($latestUpdates as $latestUpdate)
                            <div class="col-lg-6 col-md-6 col-sm-6 my-3">
                                <div class="card">
                                    <img class="img-fluid bg-secondary mb-2" loading="lazy"
                                        src="{{ url('/storage/images/latestupdates/' . $latestUpdate->image_path) }}"
                                        alt="{{ $latestUpdate->title }}" width="300" height="300"
                                        title="{{ $latestUpdate->title }}">

                                    <div class="card-body">
                                        <h4> {{ Str::upper($latestUpdate->title) }}</h4>
                                        <span>By {{ $latestUpdate->user->name }}, </span> <span> Uploaded
                                            {{ $latestUpdate->updated_at->diffForHumans() }}</span>

                                        <p> {{ Str::words($latestUpdate->description, 10, ' ...') }} </p>

                                        <div>
                                            <a class="mybtn btn-a"
                                                href="{{ route('latestupdate.show', $latestUpdate->slug) }}">
                                                Read More
                                            </a>

                                            @if (isset(Auth::user()->is_admin))
                                                <a class="mybtn mx-1 rounded-pill text-center"
                                                    href="{{ route('latestupdate.edit', $latestUpdate->slug) }}">
                                                    Edit </a>

                                                <form class="d-inline"
                                                    action="{{ route('latestupdate.destroy', $latestUpdate->slug) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="mybtn bg-transparent rounded-pill" type="submit">Delete</button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                {{-- prev updates --}}
                <div class="col-lg-4 my-3 text-center">
                    <div data-aos="fade-up" data-aos-delay="100" class="card prevupdate p-2 mb-3 bg-white shadow-sm">
                        <h4>Previous Posts</h4>
                        <hr>
                        @foreach ($prevUpdates as $prevUpdate)
                            <a href="{{ route('latestupdate.show', $prevUpdate->slug) }}">
                                {{ Str::upper($prevUpdate->title) }}</a>
                            </a>
                        @endforeach
                    </div>

                    <div data-aos="fade-up" data-aos-delay="150" class="card prevupdate p-2 my-3 bg-white shadow-sm">
                        <h4>Advertisement</h4>
                        <hr>
                        <p>Place your advert here at an afford price</p>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>

            </div>

            {{ $latestUpdates->links() }}
        </div>
    </section>
    {{-- latest Updates --}}

@endsection
