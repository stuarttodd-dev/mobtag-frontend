@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h5>This Cookie Policy explains how Half Shell Studios uses cookies and similar technologies when you visit our website.</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <p>
                        1. <b>What Are Cookies:</b> Cookies are small pieces of data stored on your device that help improve your browsing experience. They may store information about your preferences or past interactions with our website.
                    </p>

                    <p class="mt-5">
                        2. <b>How We Use Cookies:</b> We use cookies to analyze website traffic, personalize content, and provide social media features. Cookies also help us understand how you interact with our site, allowing us to make improvements.
                    </p>

                    <p class="mt-5">
                        3. <b>Types of Cookies:</b> We use both session and persistent cookies. Session cookies are temporary and are deleted when you close your browser, while persistent cookies remain on your device for a set period.
                    </p>

                    <p class="mt-5">
                        4. <b>Managing Cookies:</b> You can control and manage cookies in your browser settings. However, disabling certain cookies may impact your experience on our website.
                    </p>

                    <p class="mt-5">
                        By continuing to use our website, you consent to the use of cookies as described in this policy.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
