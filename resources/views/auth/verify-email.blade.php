@extends('layouts.app')

@section('content')
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-5">
                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-danger">
                           <p class="p-1"> {{ __('A new verification link has been sent to the email address you provided during registration.') }}</p>
                        </div>
                    @endif

                    <div class="mt-4 ">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div>
                                <button class="mybtn">
                                    {{ __('Resend Verification Email') }}
                                </button>
                            </div>
                        </form>

                        {{-- <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="mybtn my-3">
                                {{ __('Log out') }}
                            </button>
                        </form> --}}
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
