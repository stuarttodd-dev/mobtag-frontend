@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h3 class="display-6 mb-3">Lorem ipsum dolor sit amet</h3>
                    <div class="w-80px bg-primary h-2px mx-auto mb-4"></div>
                    <p class="lead">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="row pt-6">
                <div class="col-lg-4 my-3">
                    <div class="d-flex">
                        <div class="icon icon-lg icon-primary rounded-circle">
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="col ps-4">
                            <h6>Nulla facilisi</h6>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="d-flex">
                        <div class="icon icon-lg icon-primary rounded-circle">
                            <i class="bi bi-columns"></i>
                        </div>
                        <div class="col ps-4">
                            <h6>Aliquam hendrerit</h6>
                            <p class="m-0">Proin fringilla nunc vel sollicitudin. Curabitur varius ex in felis efficitur volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="d-flex">
                        <div class="icon icon-lg icon-primary rounded-circle">
                            <i class="bi bi-command"></i>
                        </div>
                        <div class="col ps-4">
                            <h6>Vestibulum ante</h6>
                            <p class="m-0">Sed dignissim sapien nec ante convallis, non venenatis magna placerat.</p>
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
                    <img src="{{ asset('static/img/step1.png') }}" title="Phase One" alt="Phase One">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 ps-xl-10">
                    <h3 class="h1">01. Phase One</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.</p>
                </div>
            </div>
            <div class="divider opacity-2 mx-auto w-60 w-md-50 w-lg-30 my-6 my-lg-12"></div>
            <div class="row justify-content-center align-items-center flex-row-reverse">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/step2.png') }}" title="Phase Two" alt="Phase Two">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 pe-xl-10">
                    <h3 class="h1">02. Phase Two</h3>
                    <p>Maecenas malesuada nibh id dui condimentum, ut faucibus lorem iaculis.</p>
                </div>
            </div>
            <div class="divider opacity-2 mx-auto w-60 w-md-50 w-lg-30 my-6 my-lg-12"></div>
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/step3.png') }}" title="Phase Three" alt="Phase Three">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 ps-xl-10">
                    <h3 class="h1">03. Phase Three</h3>
                    <p>Quisque faucibus nulla ut leo tincidunt, sit amet tempor odio vehicula.</p>
                </div>
            </div>
            <div class="divider opacity-2 mx-auto w-60 w-md-50 w-lg-30 my-6 my-lg-12"></div>
            <div class="row justify-content-center align-items-center flex-row-reverse">
                <div class="col-xxl-5 col-lg-6 my-3">
                    <img src="{{ asset('static/img/step4.jpg') }}" title="Phase Four" alt="Phase Four">
                </div>
                <div class="col-xxl-5 col-lg-6 my-3 pe-xl-10">
                    <h3 class="h1">04. Phase Four</h3>
                    <p>Aliquam erat volutpat. Donec condimentum lacus vitae neque auctor, et consequat mi sodales.</p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
