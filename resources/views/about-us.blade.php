@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-10 my-3">
                    <h3 class="display-6 mb-4">Solving Business Problems, Driving Long-Term Success</h3>
                    <div class="lead">We’re not here for a quick buck. We’re here to partner with you, understand your pain points, and develop solutions that help your business thrive. When you succeed, we succeed too, and we’re committed to building solutions that have a lasting, positive impact.</div>
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="d-flex mb-4">
                                <div class="only-icon only-icon-lg text-primary">
                                    <i class="bi bi-patch-check"></i>
                                </div>
                                <div class="col ps-3">
                                    <h3 class="h4">Our goal is simple.</h3>
                                    <p class="lead m-0">To solve the unique challenges that your business faces via software engineering.</p>
                                </div>
                            </div>
                            <a class="btn btn-success w-100" href="{{ route('contact-us') }}">
                                <i class="bi bi-person"></i>
                                <span class="btn--text">Get Started today</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <img class="shadow-sm rounded w-100" src="{{ asset('static/img/icon-black.png') }}" title="" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h3 class="display-6 mb-3">Our Working Process</h3>
                    <div class="w-80px bg-primary h-2px mx-auto mb-4"></div>
                    <div class="lead">We follow a structured approach to ensure that every project is handled with precision and excellence from start to finish.</div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="p-3">
                        <div class="icon icon-lg icon-primary rounded mb-4 font-w-700">
                            <i class="fst-normal fs-5">01.</i>
                        </div>
                        <h5 class="mb-2">Kick-off Meeting</h5>
                        <p class="m-0">We begin with a collaborative kick-off meeting to understand your vision, goals, and expectations for the project, ensuring we're aligned from the very start.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="p-3">
                        <div class="icon icon-lg icon-primary rounded mb-4 font-w-700">
                            <i class="fst-normal fs-5">02.</i>
                        </div>
                        <h5 class="mb-2">Design</h5>
                        <p class="m-0">Our design phase focuses on crafting intuitive, user-friendly layouts that capture your brand's essence while prioritising the user experience.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="p-3">
                        <div class="icon icon-lg icon-primary rounded mb-4 font-w-700">
                            <i class="fst-normal fs-5">03.</i>
                        </div>
                        <h5 class="mb-2">Develop</h5>
                        <p class="m-0">We take the approved design and transform it into a fully functional website or app, using the latest technologies to ensure optimal performance.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="p-3">
                        <div class="icon icon-lg icon-primary rounded mb-4 font-w-700">
                            <i class="fst-normal fs-5">04.</i>
                        </div>
                        <h5 class="mb-2">Deliver</h5>
                        <p class="m-0">After thorough testing and final reviews, we deliver your project, ensuring everything is ready to go live with flawless functionality and quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components/small-business-solutions')
    @include('components/contact-form')
@endsection
