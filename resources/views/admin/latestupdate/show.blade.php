@extends('layouts.app')

@section('content')
    <div id="inner-page">
        <div class="container">
            <h2> <a href="{{ url('/') }}"> Home</a> | <a href="{{ route('latestupdate.index') }}">Latest Updates</a>
                | {{ $title = $latestUpdate->title }} </h2>
        </div>
    </div>

    <section id="latestupdate-page-show">
        <div class="container">
            <div class="row">
                <div data-aos="fade-up" class="col-lg-7 col-md-7 my-2">
                    <h3> {{ $latestUpdate->title }} </h3>
                    <div> <span>By {{ $latestUpdate->user->name }}, </span> <span> Uploaded
                            {{ $latestUpdate->updated_at->diffForHumans() }}</span></div>
                    <!-- ShareThis BEGIN -->
                    <div style="height: 30px" class="sharethis-inline-share-buttons my-3"></div><!-- ShareThis END -->
                    <p class="mt-3"> {{ $latestUpdate->description }} </p>
                    <img class="img-fluid bg-secondary" loading="lazy"
                        src="{{ url('/storage/images/latestupdates/' . $latestUpdate->image_path) }}"
                        alt="{{ $latestUpdate->title }}" width="300" height="300" title="{{ $latestUpdate->title }}">
                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="col-lg-5 col-md-5 my-2">
                    <div class="card text-center rounded-0 border-0">
                        <div class="card-top">
                            <h3>More Updates</h3>
                            <hr>
                        </div>

                        <div class="card-body">
                            @foreach ($moreUpdates as $moreUpdate)
                                <p>
                                    <a href="{{ route('latestupdate.show', $moreUpdate->slug) }}">
                                        {{ Str::upper($moreUpdate->title) }}</a>
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
