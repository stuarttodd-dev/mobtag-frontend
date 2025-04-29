@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-10 my-3">
                    <h3 class="display-6 mb-4">Who We Are</h3>
                    <div class="lead">
                        We’re a team of passionate technologists, creators, and problem solvers dedicated to building tools that help businesses grow and thrive. Since day one, we’ve believed in the power of simplicity, great design, and putting people first.
                    </div>
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="d-flex mb-4">
                                <div class="only-icon only-icon-lg text-primary">
                                    <i class="bi bi-patch-check"></i>
                                </div>
                                <div class="col ps-3">
                                    <h3 class="h4">Our Mission</h3>
                                    <p class="lead m-0">
                                        To empower small businesses with smart, user-friendly software that drives success without the overhead of complexity.
                                    </p>
                                </div>
                            </div>
                            <a class="btn btn-dark w-100" href="{{ route('register') }}">
                                <i class="bi bi-person"></i>
                                <span class="btn--text">Join Our Journey</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <img class="shadow-sm rounded w-100" src="{{ asset('assets/images/mobtag.png') }}" alt="Our team working together">
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h3 class="display-6 mb-3">Our Core Values</h3>
                    <div class="w-80px bg-primary h-2px mx-auto mb-4"></div>
                    <div class="lead">
                        These aren’t just buzzwords – they’re the principles that guide every decision we make and every product we build.
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach ([
                    ['title' => 'Integrity', 'desc' => 'We do the right thing, even when no one’s watching.'],
                    ['title' => 'Simplicity', 'desc' => 'We keep things clear, concise, and easy to use.'],
                    ['title' => 'Empathy', 'desc' => 'We build with real people in mind – not just users.'],
                    ['title' => 'Excellence', 'desc' => 'We strive to do our best work, every single time.']
                ] as $index => $value)
                    <div class="col-lg-3 col-sm-6">
                        <div class="p-3">
                            <div class="icon icon-lg icon-primary rounded mb-4 font-w-700">
                                <i class="fst-normal fs-5">{{ sprintf('%02d.', $index + 1) }}</i>
                            </div>
                            <h5 class="mb-2">{{ $value['title'] }}</h5>
                            <p class="m-0">{{ $value['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('components/small-business-solutions')
    @include('components/contact-form')
@endsection
