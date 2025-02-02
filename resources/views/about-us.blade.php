@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-10 my-3">
                    <h3 class="display-6 mb-4">Lorem Ipsum Dolor Sit Amet</h3>
                    <div class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae magna et velit tincidunt fermentum eu sed nisi. Ut vel pretium ante. Phasellus sagittis eu ante a suscipit. Aliquam erat volutpat. Integer maximus, leo et volutpat feugiat, nisl erat euismod lorem, ac elementum ante odio et metus.</div>
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="d-flex mb-4">
                                <div class="only-icon only-icon-lg text-primary">
                                    <i class="bi bi-patch-check"></i>
                                </div>
                                <div class="col ps-3">
                                    <h3 class="h4">Sed Ut Perspiciatis Unde Omnis</h3>
                                    <p class="lead m-0">Mauris in velit ac augue scelerisque dictum. Integer nec elit nisi. Nulla facilisi. Nunc egestas risus ut neque dictum, at lobortis odio tincidunt.</p>
                                </div>
                            </div>
                            <a class="btn btn-dark w-100" href="https://assets.mobtag.io/register">
                                <i class="bi bi-person"></i>
                                <span class="btn--text">Get Started Today</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <img class="shadow-sm rounded w-100" src="{{ asset('assets/images/mobtag.png') }}" title="" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h3 class="display-6 mb-3">Nunc Volutpat Tempor Commodo</h3>
                    <div class="w-80px bg-primary h-2px mx-auto mb-4"></div>
                    <div class="lead">Sed vestibulum ante id odio dictum, at volutpat dui auctor. Suspendisse potenti. Vivamus ut augue sit amet nunc cursus tristique ut vel nulla.</div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="p-3">
                        <div class="icon icon-lg icon-primary rounded mb-4 font-w-700">
                            <i class="fst-normal fs-5">01.</i>
                        </div>
                        <h5 class="mb-2">Aliquam Erat Volutpat</h5>
                        <p class="m-0">Donec auctor lacus ut arcu euismod, ac varius risus maximus. Sed vehicula libero vel lorem egestas maximus. Suspendisse at lorem nec sapien mollis luctus.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="p-3">
                        <div class="icon icon-lg icon-primary rounded mb-4 font-w-700">
                            <i class="fst-normal fs-5">02.</i>
                        </div>
                        <h5 class="mb-2">Etiam Ut Erat Sit Amet</h5>
                        <p class="m-0">Fusce varius urna sit amet orci tempus, nec venenatis urna congue. Donec congue erat non eros suscipit, ac volutpat dui sollicitudin.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="p-3">
                        <div class="icon icon-lg icon-primary rounded mb-4 font-w-700">
                            <i class="fst-normal fs-5">03.</i>
                        </div>
                        <h5 class="mb-2">Vestibulum Quis Ipsum</h5>
                        <p class="m-0">Integer euismod sem non turpis euismod, vel aliquet nisi tempor. Quisque quis dui eget nulla consequat malesuada at sed risus.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="p-3">
                        <div class="icon icon-lg icon-primary rounded mb-4 font-w-700">
                            <i class="fst-normal fs-5">04.</i>
                        </div>
                        <h5 class="mb-2">Cras Tempor Magna</h5>
                        <p class="m-0">Pellentesque ac mauris eget nunc malesuada fermentum. Etiam ac nunc ac nulla aliquet luctus nec at lectus. Morbi feugiat vitae leo ac tincidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components/small-business-solutions')
    @include('components/contact-form')
@endsection
