<!DOCTYPE html>
<html lang="en">

<head>

    <title> Admin Panel </title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta
        content="Supero Agrobase Limited is an indigenous company in Nigeria with deep understanding of the needs and challenges of Nigerian farmers. We deal with  Agro - Input products, claims, research and Promotion, Sales of Agro input Products (AgriCourt Ventures) and Production of Vegetable Crops (HarvestYield Farm)"
        name="description" />

    <meta
        content="irrigation cultivation husbandry horticulture crop biofuel farm animal husbandry farming cultivate agribusiness food domestication agricultural manure  tillage monoculture forestry livestock harvest agronomy pesticide cotton wheat crop rotation dairy aquaculture sow overcrop education raw material genetically modified organism selective breeding climate plow farmer plant fertilize fiber grow fertile crescent"
        name="keywords" />

    {{-- Google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="{{ asset('/images/favicon.png') }}" rel="icon" />
    <link href=" {{ asset('/images/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Style libraries -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('/css/app.css?ver=1.0') }}" />
    @stack('styles')

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ url('style.css?ver=1.0') }}" />
    {{-- <link rel="stylesheet" href="{{ url('/css/style.css?ver=1.0') }}" /> --}}

    <style>
        body {
            background: #22252a;
            color: #949494;
        }

        .navbar,
        .card-header,
        .box {
            background: #2d3035;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        }

        .box {
            padding: 10px
        }

        span {
            font-weight: 600;
        }

        .card {
            border: 0;
            background: inherit;
            border-radius: 0;
        }

        .card-header {
            padding: 10px 15px;
            font-size: 1rem;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

    </style>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ url('images/logo.jpg') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="border-0 text-light px-3 bg-transparent py-1 w-100 outline-0" type="submit">
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3 col-md-6 my-3">
                <div class="box">
                    <img class="my-1" loading="lazy" src="{{ url('images/icons/user.png') }}" height="24" width="24"
                        title=" Registered Users" alt="users">
                    <h5> <span>{{ $users }} </span> Registered Users</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-3 ">
                <div class="box">
                    <img class="my-1" loading="lazy" src="{{ url('images/icons/students.png') }}" height="24"
                        width="24" alt="HYAcademy Students" title="HYAcademy Students">
                    <h5> <span>{{ $students }} </span> HYAcademy Students </h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-3">
                <div class="box">
                    <img class="my-1" loading="lazy" src="{{ url('images/icons/blog.png') }}" height="24" width="24"
                        alt="blog" title="blog">
                    <h5> <span>{{ $blogs->count() }} </span> Blogs </h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-3 ">
                <div class="box">
                    <img class="my-1" loading="lazy" src="{{ url('images/icons/refresh.png') }}" height="24"
                        width="24" alt="updates" title="updates">
                    <h5> <span>{{ $updates->count() }} </span> Updates </h5>
                </div>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <div class="row my-3">
            <div class="col-lg-6 col-md-6 my-4">
                <div class="card">

                    <div class="card-header mb-2">
                        Recent Blog Posts
                    </div>
                    <a href="{{ route('blog.create') }}">Add Blogs</a>
                    <div class="card-body">

                        @foreach ($blogs as $blog)
                            <p> <b>Title: </b> {{ $blog->title }} </p>
                            <a class="text-danger bg-transparent mx-2" href="{{ route('blog.edit', $blog->slug) }}">
                                <u>Edit</u>
                            </a>
                            <form class="d-inline" action="{{ route('blog.destroy', $blog->slug) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="text-danger border-0 outline-0 bg-transparent mx-2" type="submit">
                                    <u>Delete</u> </button>
                            </form>
                        @endforeach
                    </div>

                    {{ $blogs->links() }}
                </div>
            </div>
            <div class="col-lg-6 col-md-6 my-4">
                <div class="card">
                    <div class="card-header mb-2">
                        Recent Updates
                    </div>
                    <a href="{{ route('latestupdate.create') }}">Add Updates</a>

                    <div class="card-body">
                        @foreach ($updates as $update)
                            <p class="pb-0"> <b>Title: </b>{{ $update->title }}</p>
                            <a class="text-danger mx-1 text-center"
                                href="{{ route('latestupdate.edit', $update->slug) }}">
                                <u>Edit</u> </a>

                            <form class="d-inline" action="{{ route('latestupdate.destroy', $update->slug) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button class="text-danger border-0 outline-0 bg-transparent" type="submit">
                                    <u>Delete</u></button>
                            </form>
                        @endforeach
                    </div>
                    {{ $updates->links() }}
                </div>
            </div>
        </div>

        {{-- Hyacademy Students --}}
        <div class="row my-4">
            <div class="col-lg-6 col-md-6">
                <div class="card py-0">
                    <div class="card-header">
                        HarvestYield Students
                    </div>
                    @foreach ($hyacademy as $student)
                        <div class="p-1 d-flex justify-content-between">
                            <p><b>Name:</b> {{ $student->name }}</p>
                            <a href="mailto:{{ $student->email }}"> <img
                                    src="{{ url('images/icons/message.png') }}" alt="mail to students"></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('/js/app.js?ver=1.0') }}"></script>
</body>

</html>

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
