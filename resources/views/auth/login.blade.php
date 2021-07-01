@extends('layouts.app')

@section('content')
    <section class="auth">
        <div class="container">
            <div class="header">
                <h3>Login</h3>
            </div>
            <div class="row justify-content-center mt-4">

                <div class="col-lg-4 my-3">
                    <img class="img-fluid" src="{{ url('/images/vegetables.jpg') }}" alt="vegetables" height="350"
                        width="350" title="vegetables">
                </div>

                <div class="col-lg-4 my-3 pt-3">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-danger">
                                <p>{{ session('status') }}</p>
                            </div>
                        @endif

                        @if (session('error_message'))
                            <div class="alert alert-danger">
                                <p>{{ session('error_message') }}</p>
                            </div>
                        @endif

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail*') }}</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" 
                                autocomplete="email">
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password"> {{ __('Password*') }} </label>
                            <input id="password" class="block mt-1 w-full" type="password" name="password"
                                autocomplete="new-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                                <input class="form-check-input mx-2" type="checkbox" id="remember_me" name="remember">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Login with:</label>
                            <a href="{{ route('login.google') }}"><img class="img-fluid"
                                    src="{{ url('/images/icons/google.png') }}" alt="google"></a>
                            <a href="{{ route('login.facebook') }}"><img class="img-fluid mx-2"
                                    src="{{ url('/images/icons/facebook.png') }}" alt=""></a>
                        </div>

                        <div class="form-group">
                            @if (Route::has('password.request'))
                                <small>
                                    <a class="text-danger" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                </small>
                            @endif
                            <br>
                            <small> Guest? <a href="{{ route('register') }}">Register</a> </small>
                        </div>
                        <button class="mybtn" onclick="this.classList.toggle('button--loading')">
                            {{ __('Log in') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        // loader for button
        const btn = document.querySelector(".button");
        btn.classList.add("button--loading");
        btn.classList.remove("button--loading");
    </script>
@endpush
