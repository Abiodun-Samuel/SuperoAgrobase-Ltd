@extends('layouts.app')

@section('content')
    <section id="admin">
        <div class="container">
            {{-- header --}}
            <div class="row d-flex justify-content-center my-5">
                <div class="col-lg-6 mt-2">
                    <div class="header text-center  p-3">
                        <h3>Admin Panel</h3>
                        <p> {{ Str::upper(auth()->user()->name) }}, Welcome to Admin Panel.</p>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center my-3">
                <div class="col-lg-6 ">
                    <a href="{{ route('latestupdate.create') }}">
                        <div class="page text-center  p-3">
                            <img loading="lazy" class="mr-3" src="{{ url('images/icons/latest.png') }}" alt="">
                            <span>Post Latest Update</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row d-flex justify-content-center my-3">
                <div class="col-lg-6">
                    <a href="{{ route('blog.create') }}">
                        <div class="page text-center  p-3">
                            <img loading="lazy" class="mr-3" src="{{ url('images/icons/blog.png') }}" alt="">
                            <span>Post a Blog</span>
                        </div>
                    </a>
                </div>
            </div>
            {{-- harvestyield academy --}}
            <div class="row d-flex justify-content-center my-3">
                <div class="col-lg-6">
                    <a href="{{ route('admin.hyacademy') }}">
                        <div class="page text-center p-3">
                            <img loading="lazy" class="mr-3" src="{{ url('images/icons/harvestyield-logo.jpg') }}"
                                alt="harvestyield academy" height="24px" width="24px">
                            <span>HarvestYield Academy</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
