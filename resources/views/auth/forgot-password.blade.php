@extends('layouts.app')

@section('content')
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

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

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail*') }}</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                autocomplete="email">
                        </div>

                        <div class="my-3">
                            <button class="mybtn">
                                {{ __('Email Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
