@extends("layouts.app")

@section('content')
    @include('layouts/inner-page')

    <section id="page">
        <div class="container">
            <h3>About SuperoAgrobase limited</h3>

            <p>
                Supero Agrobase Limited is a fast-rising agribusiness enterprise
                that leverages in-depth research and development to provide
                farmers with high quality agricultural inputs, farm management,
                consultancy and agricultural laboratory services.
            </p>




            <h4>
                Our services include;
            </h4>

            <ol class="ml-4">
                <li>Sales of Agro-Input Products (AgriCourt Ventures)
                    <a href="{{ url('/services/Agricourt Ventures') }}"> Read More.</a>
                </li>
                <li>Agro-Input products claim(s), research and promotion
                    <a href="{{ url('/services/Agro-Input') }}"> Read More.</a>
                </li>
                <li>Production of Vegetable Crops (HarvestYield Farm)
                    <a href="{{ url('/services/Harvestyield Farm') }}"> Read More.</a>
                </li>
            </ol>
            <p>Our Core Values are:
                Integrity
                Respect
                Transparency
                Excellence
                Team Work
            </p>

            <h5 class="mt-4">
                Meet our Team
            </h5>
            <p>
                We are a team of agric professionals; we also have a vast network, strong experiences in the sector and
                global exposure to offer high quality solutions to our clients.
            </p>

            <div class="row mt-4 mb-4">

                <div class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 xs">
                    <div class="card">
                        <img src="{{ url('/images/team/member3.jpg') }}" class="card-img-top" alt="team member">

                        <div class="card-body text-center">
                            <p class="member-name">
                                Adetola D. Taiwo
                            </p>
                            <p class="position font-italic">
                                (Technical Sales & General Manager)
                            </p>
                            <p class="team-socials">

                                {{-- mail --}}
                                <a href="mailto">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M4 10v8h16v-8l-8 3l-8-3zm0-4v2l8 3l8-3V6H4zm0-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                                fill-rule="nonzero" />
                                        </svg>
                                    </i>
                                </a>

                                {{-- phone --}}
                                <a href="">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                            <path
                                                d="M17.256 12.253c-.096-.667-.611-1.187-1.274-1.342c-2.577-.604-3.223-2.088-3.332-3.734C12.193 7.092 11.38 7 10 7s-2.193.092-2.65.177c-.109 1.646-.755 3.13-3.332 3.734c-.663.156-1.178.675-1.274 1.342l-.497 3.442C2.072 16.907 2.962 18 4.2 18h11.6c1.237 0 2.128-1.093 1.953-2.305l-.497-3.442zM10 15.492c-1.395 0-2.526-1.12-2.526-2.5s1.131-2.5 2.526-2.5s2.526 1.12 2.526 2.5s-1.132 2.5-2.526 2.5zM19.95 6c-.024-1.5-3.842-3.999-9.95-4C3.891 2.001.073 4.5.05 6s.021 3.452 2.535 3.127c2.941-.381 2.76-1.408 2.76-2.876C5.345 5.227 7.737 4.98 10 4.98s4.654.247 4.655 1.271c0 1.468-.181 2.495 2.76 2.876C19.928 9.452 19.973 7.5 19.95 6z" />
                                        </svg>
                                    </i>
                                </a>

                                {{-- whatsapp --}}
                                <a href="">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 464 488">
                                            <path
                                                d="M462 228q0 93-66 159t-160 66q-56 0-109-28L2 464l40-120q-32-54-32-116q0-93 66-158.5T236 4t160 65.5T462 228zM236 39q-79 0-134.5 55.5T46 228q0 62 36 111l-24 70l74-23q49 31 104 31q79 0 134.5-55.5T426 228T370.5 94.5T236 39zm114 241q-1-1-10-7q-3-1-19-8.5t-19-8.5q-9-3-13 2q-1 3-4.5 7.5t-7.5 9t-5 5.5q-4 6-12 1q-34-17-45-27q-7-7-13.5-15t-12-15t-5.5-8q-3-7 3-11q4-6 8-10l6-9q2-5-1-10q-4-13-17-41q-3-9-12-9h-11q-9 0-15 7q-19 19-19 45q0 24 22 57l2 3q2 3 4.5 6.5t7 9t9 10.5t10.5 11.5t13 12.5t14.5 11.5t16.5 10t18 8.5q16 6 27.5 10t18 5t9.5 1t7-1t5-1q9-1 21.5-9t15.5-17q8-21 3-26z" />
                                        </svg>
                                    </i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 xs">
                    <div class="card">
                        <img src="{{ url('/images/team/member1.jpg') }}" class="card-img-top" alt="team member">

                        <div class="card-body text-center">
                            <p class="member-name">
                                Adebowale Miracle
                            </p>
                            <p class="position font-italic">
                                (Administrative Officer)
                            </p>
                            <p class="team-socials">

                                {{-- mail --}}
                                <a href="mailto">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M4 10v8h16v-8l-8 3l-8-3zm0-4v2l8 3l8-3V6H4zm0-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                                fill-rule="nonzero" />
                                        </svg>
                                    </i>
                                </a>

                                {{-- phone --}}
                                <a href="">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                            <path
                                                d="M17.256 12.253c-.096-.667-.611-1.187-1.274-1.342c-2.577-.604-3.223-2.088-3.332-3.734C12.193 7.092 11.38 7 10 7s-2.193.092-2.65.177c-.109 1.646-.755 3.13-3.332 3.734c-.663.156-1.178.675-1.274 1.342l-.497 3.442C2.072 16.907 2.962 18 4.2 18h11.6c1.237 0 2.128-1.093 1.953-2.305l-.497-3.442zM10 15.492c-1.395 0-2.526-1.12-2.526-2.5s1.131-2.5 2.526-2.5s2.526 1.12 2.526 2.5s-1.132 2.5-2.526 2.5zM19.95 6c-.024-1.5-3.842-3.999-9.95-4C3.891 2.001.073 4.5.05 6s.021 3.452 2.535 3.127c2.941-.381 2.76-1.408 2.76-2.876C5.345 5.227 7.737 4.98 10 4.98s4.654.247 4.655 1.271c0 1.468-.181 2.495 2.76 2.876C19.928 9.452 19.973 7.5 19.95 6z" />
                                        </svg>
                                    </i>
                                </a>

                                {{-- whatsapp --}}
                                <a href="">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 464 488">
                                            <path
                                                d="M462 228q0 93-66 159t-160 66q-56 0-109-28L2 464l40-120q-32-54-32-116q0-93 66-158.5T236 4t160 65.5T462 228zM236 39q-79 0-134.5 55.5T46 228q0 62 36 111l-24 70l74-23q49 31 104 31q79 0 134.5-55.5T426 228T370.5 94.5T236 39zm114 241q-1-1-10-7q-3-1-19-8.5t-19-8.5q-9-3-13 2q-1 3-4.5 7.5t-7.5 9t-5 5.5q-4 6-12 1q-34-17-45-27q-7-7-13.5-15t-12-15t-5.5-8q-3-7 3-11q4-6 8-10l6-9q2-5-1-10q-4-13-17-41q-3-9-12-9h-11q-9 0-15 7q-19 19-19 45q0 24 22 57l2 3q2 3 4.5 6.5t7 9t9 10.5t10.5 11.5t13 12.5t14.5 11.5t16.5 10t18 8.5q16 6 27.5 10t18 5t9.5 1t7-1t5-1q9-1 21.5-9t15.5-17q8-21 3-26z" />
                                        </svg>
                                    </i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 xs">
                    <div class="card">
                        <img src="{{ url('/images/team/member2.jpg') }}" class="card-img-top" alt="team member">

                        <div class="card-body text-center">
                            <p class="member-name">
                                Bankole Tomiwa
                            </p>
                            <p class="position font-italic">
                                (Technical & Media Manager)
                            </p>
                            <p class="team-socials">

                                {{-- mail --}}
                                <a href="mailto">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M4 10v8h16v-8l-8 3l-8-3zm0-4v2l8 3l8-3V6H4zm0-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                                fill-rule="nonzero" />
                                        </svg>
                                    </i>
                                </a>

                                {{-- phone --}}
                                <a href="">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                            <path
                                                d="M17.256 12.253c-.096-.667-.611-1.187-1.274-1.342c-2.577-.604-3.223-2.088-3.332-3.734C12.193 7.092 11.38 7 10 7s-2.193.092-2.65.177c-.109 1.646-.755 3.13-3.332 3.734c-.663.156-1.178.675-1.274 1.342l-.497 3.442C2.072 16.907 2.962 18 4.2 18h11.6c1.237 0 2.128-1.093 1.953-2.305l-.497-3.442zM10 15.492c-1.395 0-2.526-1.12-2.526-2.5s1.131-2.5 2.526-2.5s2.526 1.12 2.526 2.5s-1.132 2.5-2.526 2.5zM19.95 6c-.024-1.5-3.842-3.999-9.95-4C3.891 2.001.073 4.5.05 6s.021 3.452 2.535 3.127c2.941-.381 2.76-1.408 2.76-2.876C5.345 5.227 7.737 4.98 10 4.98s4.654.247 4.655 1.271c0 1.468-.181 2.495 2.76 2.876C19.928 9.452 19.973 7.5 19.95 6z" />
                                        </svg>
                                    </i>
                                </a>

                                {{-- whatsapp --}}
                                <a href="">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 464 488">
                                            <path
                                                d="M462 228q0 93-66 159t-160 66q-56 0-109-28L2 464l40-120q-32-54-32-116q0-93 66-158.5T236 4t160 65.5T462 228zM236 39q-79 0-134.5 55.5T46 228q0 62 36 111l-24 70l74-23q49 31 104 31q79 0 134.5-55.5T426 228T370.5 94.5T236 39zm114 241q-1-1-10-7q-3-1-19-8.5t-19-8.5q-9-3-13 2q-1 3-4.5 7.5t-7.5 9t-5 5.5q-4 6-12 1q-34-17-45-27q-7-7-13.5-15t-12-15t-5.5-8q-3-7 3-11q4-6 8-10l6-9q2-5-1-10q-4-13-17-41q-3-9-12-9h-11q-9 0-15 7q-19 19-19 45q0 24 22 57l2 3q2 3 4.5 6.5t7 9t9 10.5t10.5 11.5t13 12.5t14.5 11.5t16.5 10t18 8.5q16 6 27.5 10t18 5t9.5 1t7-1t5-1q9-1 21.5-9t15.5-17q8-21 3-26z" />
                                        </svg>
                                    </i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 xs">
                    <div class="card">
                        <img src="{{ url('/images/team/member4.jpg') }}" class="card-img-top" alt="team member">

                        <div class="card-body text-center">
                            <p class="member-name">
                                Kolapo A. Olawunmi
                            </p>
                            <p class="position font-italic">
                                (Technical sales & Inventory Manager)
                            </p>
                            <p class="team-socials">

                                {{-- mail --}}
                                <a href="mailto">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path
                                                d="M4 10v8h16v-8l-8 3l-8-3zm0-4v2l8 3l8-3V6H4zm0-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"
                                                fill-rule="nonzero" />
                                        </svg>
                                    </i>
                                </a>

                                {{-- phone --}}
                                <a href="">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                            <path
                                                d="M17.256 12.253c-.096-.667-.611-1.187-1.274-1.342c-2.577-.604-3.223-2.088-3.332-3.734C12.193 7.092 11.38 7 10 7s-2.193.092-2.65.177c-.109 1.646-.755 3.13-3.332 3.734c-.663.156-1.178.675-1.274 1.342l-.497 3.442C2.072 16.907 2.962 18 4.2 18h11.6c1.237 0 2.128-1.093 1.953-2.305l-.497-3.442zM10 15.492c-1.395 0-2.526-1.12-2.526-2.5s1.131-2.5 2.526-2.5s2.526 1.12 2.526 2.5s-1.132 2.5-2.526 2.5zM19.95 6c-.024-1.5-3.842-3.999-9.95-4C3.891 2.001.073 4.5.05 6s.021 3.452 2.535 3.127c2.941-.381 2.76-1.408 2.76-2.876C5.345 5.227 7.737 4.98 10 4.98s4.654.247 4.655 1.271c0 1.468-.181 2.495 2.76 2.876C19.928 9.452 19.973 7.5 19.95 6z" />
                                        </svg>
                                    </i>
                                </a>

                                {{-- whatsapp --}}
                                <a href="">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            aria-hidden="true" focusable="false" width="1em" height="1em"
                                            style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 464 488">
                                            <path
                                                d="M462 228q0 93-66 159t-160 66q-56 0-109-28L2 464l40-120q-32-54-32-116q0-93 66-158.5T236 4t160 65.5T462 228zM236 39q-79 0-134.5 55.5T46 228q0 62 36 111l-24 70l74-23q49 31 104 31q79 0 134.5-55.5T426 228T370.5 94.5T236 39zm114 241q-1-1-10-7q-3-1-19-8.5t-19-8.5q-9-3-13 2q-1 3-4.5 7.5t-7.5 9t-5 5.5q-4 6-12 1q-34-17-45-27q-7-7-13.5-15t-12-15t-5.5-8q-3-7 3-11q4-6 8-10l6-9q2-5-1-10q-4-13-17-41q-3-9-12-9h-11q-9 0-15 7q-19 19-19 45q0 24 22 57l2 3q2 3 4.5 6.5t7 9t9 10.5t10.5 11.5t13 12.5t14.5 11.5t16.5 10t18 8.5q16 6 27.5 10t18 5t9.5 1t7-1t5-1q9-1 21.5-9t15.5-17q8-21 3-26z" />
                                        </svg>
                                    </i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>

    @include('layouts/order')

    {{-- ========== Contact Section ========== --}}
    @include('layouts.contact')
    {{-- ========== Contact Section ========== --}}

@endsection
