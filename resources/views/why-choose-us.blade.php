@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h3 class="display-6 mb-3">Why Choose Us?</h3>
                    <div class="w-80px bg-primary h-2px mx-auto mb-4"></div>
                    <p class="lead">We provide innovative solutions to help businesses thrive in the digital world. Our team of experts is dedicated to delivering top-notch service with a focus on your success.</p>
                </div>
            </div>
            <div class="row pt-6">
                <div class="col-lg-4 my-3">
                    <div class="d-flex">
                        <div class="icon icon-lg icon-primary rounded-circle">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="col ps-4">
                            <h6>Expertise</h6>
                            <p class="m-0">Our team brings years of experience across a variety of industries, ensuring your business receives the best strategies tailored to your needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="d-flex">
                        <div class="icon icon-lg icon-primary rounded-circle">
                            <i class="bi bi-columns"></i>
                        </div>
                        <div class="col ps-4">
                            <h6>Innovative Solutions</h6>
                            <p class="m-0">We specialise in delivering cutting-edge technology solutions that drive growth and help you stay ahead of the competition.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="d-flex">
                        <div class="icon icon-lg icon-primary rounded-circle">
                            <i class="bi bi-command"></i>
                        </div>
                        <div class="col ps-4">
                            <h6>Customer Focus</h6>
                            <p class="m-0">Your success is our priority. We collaborate closely with you to ensure that our solutions meet your specific business goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/fast-loading.png') }}" title="Phase One" alt="Phase One">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 ps-xl-10">
                    <h3 class="h1">01. Discovery & Planning</h3>
                    <p>We begin by understanding your business objectives and challenges, gathering all the information necessary to craft a tailored strategy for success.</p>
                </div>
            </div>
            <div class="divider opacity-2 mx-auto w-60 w-md-50 w-lg-30 my-6 my-lg-12"></div>
            <div class="row justify-content-center align-items-center flex-row-reverse">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/mobile-friendly.png') }}" title="Phase Two" alt="Phase Two">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 pe-xl-10">
                    <h3 class="h1">02. Design & Development</h3>
                    <p>Our design and development teams collaborate to create innovative solutions that are not only visually appealing but also functional and user-friendly.</p>
                </div>
            </div>
            <div class="divider opacity-2 mx-auto w-60 w-md-50 w-lg-30 my-6 my-lg-12"></div>
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/seo.png') }}" title="Phase Three" alt="Phase Three">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 ps-xl-10">
                    <h3 class="h1">03. Testing & Optimisation</h3>
                    <p>We rigorously test every component of the project to ensure everything works as expected. We then optimize the performance to guarantee seamless user experience.</p>
                </div>
            </div>
            <div class="divider opacity-2 mx-auto w-60 w-md-50 w-lg-30 my-6 my-lg-12"></div>
            <div class="row justify-content-center align-items-center flex-row-reverse">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/step4.jpg') }}" title="Phase Four" alt="Phase Four">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 pe-xl-10">
                    <h3 class="h1">04. Launch & Support</h3>
                    <p>After launch, we provide ongoing support and maintenance to ensure your solution continues to operate smoothly and evolve with your business needs.</p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
