@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading text-center">Message Received!</h4>
        <p class="text-center">{{ session('success') }}</p>
    </div>
    @endif

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h3 class="display-6 mb-3">Lorem Ipsum Dolor Sit Amet</h3>
                    <div class="w-80px bg-primary h-2px mx-auto mb-4"></div>
                    <div class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Curabitur luctus erat eget felis sollicitudin, nec hendrerit tortor volutpat. Duis at tempor turpis.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="h2 mb-4">Get in touch</h3>
                    <form method="post" action="{{ route('contact-us-submission') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label rd-input-label" for="contact-name">Your Name</label>
                                    <input id="contact-name" type="text" name="name" placeholder="Your Name" class="form-control form-control-has-validation form-control-last-child"><span class="invalid-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label rd-input-label" for="contact-email">Email Address</label>
                                    <input id="contact-email" type="email" name="email" placeholder="name@example.com" class="form-control form-control-has-validation form-control-last-child"><span class="invalid-feedback"></span>
                                </div>
                                <div class="form-group">
                                    <label class="form-label rd-input-label" for="contact-phone">Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="+44 888 888 6666" id="contact-phone">
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-row">
                                <div class="form-group w-100 d-flex flex-column">
                                    <label class="form-label rd-input-label" for="contact-message">Message</label>
                                    <textarea class="form-control min-h-150px h-100 w-100 form-control-has-validation form-control-last-child" id="contact-message" name="message" rows="3" placeholder="Hi there, I would like to ..." style="height: 150px"></textarea><span class="invalid-feedback"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" name="send">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center">
                            <div class="icon icon-primary icon-lg rounded-circle me-5">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div>
                                <div class="font-w-300 mb-1">PHONE NUMBER</div>
                                <h5 class="m-0">+441111111111</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center">
                            <div class="icon icon-primary icon-lg rounded-circle me-5">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <div class="font-w-300 mb-1">EMAIL</div>
                                <h5 class="m-0">info@mobtag.info</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
