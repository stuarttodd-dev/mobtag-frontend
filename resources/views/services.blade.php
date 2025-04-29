@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])
    @include('components/page-sub-header', [
        'title' => "Our Amazing Features",
        'desc' => "Our platform offers a range of features designed to help you succeed. From seamless integration to powerful analytics, we provide all the tools you need to drive your business forward."
    ])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="card hover-top">
                        <a href="#">
                            <img class="card-img-top" src="{{ asset('mobtag.png') }}" title="Seamless Integration" alt="Seamless Integration">
                        </a>
                        <div class="card-body">
                            <h5><a href="#" class="stretched-link text-reset">Seamless Integration</a></h5>
                            <p class="m-0">Easily integrate with a variety of third-party platforms to streamline your workflow.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="card hover-top">
                        <a href="#">
                            <img class="card-img-top" src="{{ asset('mobtag.png') }}" title="Real-Time Analytics" alt="Real-Time Analytics">
                        </a>
                        <div class="card-body">
                            <h5><a href="#" class="stretched-link text-reset">Real-Time Analytics</a></h5>
                            <p class="m-0">Track key metrics and KPIs with our powerful real-time analytics tool to make informed decisions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="card hover-top">
                        <a href="#">
                            <img class="card-img-top" src="{{ asset('mobtag.png') }}" title="Custom Dashboards" alt="Custom Dashboards">
                        </a>
                        <div class="card-body">
                            <h5><a href="#" class="stretched-link text-reset">Custom Dashboards</a></h5>
                            <p class="m-0">Design personalized dashboards to view the most important data in a format that works for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="card hover-top">
                        <a href="#">
                            <img class="card-img-top" src="{{ asset('mobtag.png') }}" title="Automated Workflow" alt="Automated Workflow">
                        </a>
                        <div class="card-body">
                            <h5><a href="#" class="stretched-link text-reset">Automated Workflow</a></h5>
                            <p class="m-0">Automate repetitive tasks and streamline your daily operations with our automated workflow tools.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="card hover-top">
                        <a href="#">
                            <img class="card-img-top" src="{{ asset('mobtag.png') }}" title="Enhanced Security" alt="Enhanced Security">
                        </a>
                        <div class="card-body">
                            <h5><a href="#" class="stretched-link text-reset">Enhanced Security</a></h5>
                            <p class="m-0">Your data is protected with top-of-the-line security protocols, keeping your business safe.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="card hover-top">
                        <a href="#">
                            <img class="card-img-top" src="{{ asset('mobtag.png') }}" title="24/7 Support" alt="24/7 Support">
                        </a>
                        <div class="card-body">
                            <h5><a href="#" class="stretched-link text-reset">24/7 Support</a></h5>
                            <p class="m-0">Our expert support team is available around the clock to assist with any questions or issues.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-10">
            <div class="row">
                <div class="col-lg-6 my-3 pe-xl-12">
                    <h3 class="display-6 mb-4">Unlock New Possibilities with Our Features</h3>
                    <p class="pb-2">
                        Take your business to the next level with tools that streamline your processes and provide actionable insights. Our platform helps you work smarter, not harder.
                    </p>
                    <p class="pb-2">
                        From advanced reporting features to customizable dashboards, we offer a wide array of solutions to meet your unique business needs.
                    </p>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="skill-lt">
                        <h6 class="dark-color">Seamless Integration</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Real-Time Analytics</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Custom Dashboards</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Automated Workflow</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Enhanced Security</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">24/7 Support</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components/small-business-solutions')
    @include('components/call-to-action1')
@endsection
