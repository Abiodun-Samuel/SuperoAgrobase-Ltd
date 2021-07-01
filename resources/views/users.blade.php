@extends('layouts.app')

@section('content')
    @include('layouts.inner-page')

    <section id="user">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-3">
                    <div class="user-box">
                        <h3>{{ Str::upper($user->name) }}</h3>
                        <p> Has posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and
                            received {{ $user->receivedLikes->count() }}
                            {{ Str::plural('like', $user->receivedLikes->count()) }}. </p>

                        @if ($posts->count())
                            @foreach ($posts as $post)
                                <div class="comment-box mt-3">
                                    <img loading="lazy" class="img-fluid" src="{{ $post->user->avatar ?? url('/images/icons/user.png') }}" alt=""
                                        width="16" height="16">
                                    <a class="text-info"
                                        href="{{ route('user.post', $post->user) }}">{{ $post->user->name }}</a>
                                    <span class="">{{ $post->created_at->diffForHumans() }}</span>
                                    <p>{{ $post->body }}</p>

                                    {{-- like and unlike comments --}}
                                    <div class="like">
                                        @auth()
                                            @if (!$post->likedBy(auth()->user()))
                                                <form action="{{ route('post.like', $post) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    <button type="submit">Like</button>
                                                    <span> {{ $post->likes->count() }}
                                                        {{ Str::plural('Like', $post->likes->count()) }}</span>
                                                </form>
                                            @else
                                                <form action="{{ route('post.like', $post) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Unlike</button>
                                                    <span> {{ $post->likes->count() }}
                                                        {{ Str::plural('Like', $post->likes->count()) }}</span>
                                                </form>
                                            @endif
                                        @endauth
                                    </div>
                                </div>
                            @endforeach
                            {{ $posts->links() }}
                        @else
                            <div class="comment-box mt-4">
                                <p> {{ $user->name }} does not have any posts.</p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
