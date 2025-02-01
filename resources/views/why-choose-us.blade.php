@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h3 class="display-6 mb-3">We are committed to solving real business problems</h3>
                    <div class="w-80px bg-primary h-2px mx-auto mb-4"></div>
                    <p class="lead">With integrity, transparency, empathy, excellence and a focus on long-term success.</p>
                </div>
            </div>
            <div class="row pt-6">
                <div class="col-lg-4 my-3">
                    <div class="d-flex">
                        <div class="icon icon-lg icon-primary rounded-circle">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="col ps-4">
                            <h6>Identify</h6>
                            <p class="m-0">We collaborate with you to identify your business’s core challenges and design tailored strategies that drive tangible results and long-term success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="d-flex">
                        <div class="icon icon-lg icon-primary rounded-circle">
                            <i class="bi bi-columns"></i>
                        </div>
                        <div class="col ps-4">
                            <h6>Solve</h6>
                            <p class="m-0">We design and develop mobile and web applications that effectively solve your problems, streamline processes, and contribute to your company’s overall success and growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="d-flex">
                        <div class="icon icon-lg icon-primary rounded-circle">
                            <i class="bi bi-command"></i>
                        </div>
                        <div class="col ps-4">
                            <h6>Support</h6>
                            <p class="m-0">Our work doesn’t stop at delivery. We provide continuous support and maintenance to ensure that your solutions continue to meet the evolving needs of your business.</p>
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
                    <img src="{{ asset('static/img/step1.png') }}" title="Kick-off Meeting" alt="Kick-off Meeting">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 ps-xl-10">
                    <h3 class="h1">01. Kick-off Meeting</h3>
                    <p>We start with a collaborative discussion to understand your vision, goals, and expectations. This ensures we’re aligned from the outset, setting a solid foundation for success.</p>
                </div>
            </div>
            <div class="divider opacity-2 mx-auto w-60 w-md-50 w-lg-30 my-6 my-lg-12"></div>
            <div class="row justify-content-center align-items-center flex-row-reverse">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/step2.png') }}" title="Design" alt="Design">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 pe-xl-10">
                    <h3 class="h1">02. Design</h3>
                    <p>Our design phase focuses on creating user-friendly, visually appealing layouts that capture your brand’s identity while ensuring an intuitive experience for your users.</p>
                </div>
            </div>
            <div class="divider opacity-2 mx-auto w-60 w-md-50 w-lg-30 my-6 my-lg-12"></div>
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/step3.png') }}" title="Development" alt="Development">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 ps-xl-10">
                    <h3 class="h1">03. Development</h3>
                    <p>Once the design is approved, we bring it to life with modern, scalable technologies, ensuring performance, security, and seamless functionality across all devices.</p>
                </div>
            </div>
            <div class="divider opacity-2 mx-auto w-60 w-md-50 w-lg-30 my-6 my-lg-12"></div>
            <div class="row justify-content-center align-items-center flex-row-reverse">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/step4.jpg') }}" title="Delivery" alt="Delivery">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 pe-xl-10">
                    <h3 class="h1">04. Delivery</h3>
                    <p>After thorough testing and final refinements, we ensure everything is polished and ready for launch. Your project goes live with full confidence in its quality and reliability.</p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
