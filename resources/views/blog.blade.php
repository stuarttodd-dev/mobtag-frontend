@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="pt-10 pb-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <p class="h4">Our Case Studies</p>
                    <p class="lead text-muted mt-3">Explore how Mobtag has partnered with companies to improve asset management, streamline compliance, and enhance operational efficiency. Our solutions have helped organizations like MGH, ESSCO Group, and Sunnerg overcome challenges with outdated systems and manual processes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <!-- Case Study 1: MGH -->
                <div class="col-md-6 col-lg-4 mb-5 d-flex flex-row">
                    <div class="hover-top card shadow-only-hover w-100">
                        <img class="card-img-top" src="{{ asset('mobtag.png') }}" title="MGH" alt="MGH">
                        <div class="card-body">
                            <h5 class="mb-3"><a class="text-dark stretched-link" href="#">MGH</a></h5>
                            <p class="m-0">MGH partnered with Mobtag to streamline their asset management and compliance processes. Facing challenges with outdated tracking systems and manual documentation, they needed a flexible, digital-first solution that could integrate seamlessly with their existing workflows.</p>
                        </div>
                        <div class="card-footer border-top">
                            <div class="nav small">
                                <a class="text-body font-w-600 ms-auto" href="#">Read More <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2: ESSCO Group -->
                <div class="col-md-6 col-lg-4 mb-5 d-flex flex-row">
                    <div class="hover-top card shadow-only-hover w-100">
                        <img class="card-img-top" src="{{ asset('mobtag.png') }}" title="ESSCO Group" alt="ESSCO Group">
                        <div class="card-body">
                            <h5 class="mb-3"><a class="text-dark stretched-link" href="#">ESSCO Group</a></h5>
                            <p class="m-0">The ESSCO Group approached Mobtag to improve oversight across multiple sites and ensure consistent asset tracking company-wide. Their previous system made it difficult to monitor equipment use and maintenance schedules across departments, leading to delays and compliance risks.</p>
                        </div>
                        <div class="card-footer border-top">
                            <div class="nav small">
                                <a class="text-body font-w-600 ms-auto" href="#">Read More <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3: Sunnerg -->
                <div class="col-md-6 col-lg-4 mb-5 d-flex flex-row">
                    <div class="hover-top card shadow-only-hover w-100">
                        <img class="card-img-top" src="{{ asset('mobtag.png') }}" title="Sunnerg" alt="Sunnerg">
                        <div class="card-body">
                            <h5 class="mb-3"><a class="text-dark stretched-link" href="#">Sunnerg</a></h5>
                            <p class="m-0">Sunnerg needed a simple, scalable way to manage inspection records and maintenance logs across a growing number of client sites. Their paper-based systems were prone to delays, missed updates, and human error.</p>
                        </div>
                        <div class="card-footer border-top">
                            <div class="nav small">
                                <a class="text-body font-w-600 ms-auto" href="#">Read More <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
