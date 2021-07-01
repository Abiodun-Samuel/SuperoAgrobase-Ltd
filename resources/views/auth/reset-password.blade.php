@extends('layouts.app')

@section('content')
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <label class="my-3 text-danger" for="">Please enter a new password</label>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail*') }}</label>
                            <input id="email" type="email" name="email" value="{{ $request->email }}" required
                                autocomplete="email">
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password"> {{ __('Password*') }} </label>
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group">
                            <label for="password_confirmation"> {{ __('Confirm Password*') }} </label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required />
                        </div>

                        <div class="my-4">
                            <button class="mybtn">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
