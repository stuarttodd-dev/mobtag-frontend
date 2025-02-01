@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h5>At Half Shell Studios, we take your privacy seriously.</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <p>This Privacy Policy outlines how we collect, use, and protect your personal information when you use our services.</p>
                    <p class="mt-5">
                        1. <b>Information We Collect:</b> We may collect personal information such as your name, email address, and contact details when you use our website or services.
                    </p>

                    <p class="mt-5">
                        2. <b>How We Use Your Information:</b> We use your information to provide and improve our services, communicate with you, and enhance your user experience.
                    </p>

                    <p class="mt-5">
                        3. <b>Data Security:</b> We implement security measures to protect your information and ensure the confidentiality of your data.
                    </p>

                    <p class="mt-5">
                        4. <b>Third-Party Disclosure:</b> We do not sell, trade, or otherwise transfer your personal information to third parties without your consent.
                    </p>

                    <p class="mt-5">
                        5. <b>Cookie Policy:</b> Our website may use cookies to enhance your browsing experience. You can manage your cookie preferences in your browser settings.
                    </p>

                    <p class="mt-5">
                        By using our services, you agree to the terms outlined in this policy.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
