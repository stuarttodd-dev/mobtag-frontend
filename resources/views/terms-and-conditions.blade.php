@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h5>By using our services, you agree to comply with the following terms and conditions.</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <p>
                        1. <b>Acceptance of Terms:</b> By accessing and using Half Shell Studios's website, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions.
                    </p>

                    <p class="mt-5">
                        2. <b>Code Excellence:</b> Half Shell Studios is committed to delivering high-quality software solutions. Our services adhere to industry best practices, including clean code, SOLID principles, and test-driven development (TDD).
                    </p>

                    <p class="mt-5">
                        3. <b>Intellectual Property:</b> All content and materials on this website are the intellectual property of Half Shell Studios. You may not use, modify, or distribute any content without explicit permission.
                    </p>

                    <p class="mt-5">
                        4. <b>Modifications:</b> Half Shell Studios reserves the right to modify, suspend, or discontinue any aspect of the services at any time without prior notice.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
