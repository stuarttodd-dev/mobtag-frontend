<section class="section bg-dark">
    <div class="container">
        <div class="row section-heading">
            <div class="col-lg-7 col-md-12 col-xs-10">
                <h3 class="display-4 mb-4 text-white">Fast, Responsive Websites for Small Businesses</h3>
                <div class="fs-5 w-lg-80 text-white-50">
                    Your business deserves a website that loads instantly, looks great on any device, and helps you attract more customers. We build high-performance, mobile-friendly sites designed to drive results.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <ul class="nav-tabs nav flex-column nav-pills lead fw-bold justify-content-center border-0" id="myTab" role="tablist">
                    <li class="nav-item my-3" role="presentation">
                        <a class="nav-link text-white border-0 d-flex active py-2" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            <div class="only-icon pe-3">
                                <i class="bi bi-lightning-charge lh-1"></i>
                            </div>
                            <div class="col">Blazing Fast Speeds</div>
                        </a>
                    </li>
                    <li class="nav-item my-3" role="presentation">
                        <a class="nav-link text-white border-0 d-flex py-2" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                            <div class="only-icon pe-3">
                                <i class="bi bi-phone lh-1"></i>
                            </div>
                            <div class="col">100% Mobile-Friendly</div>
                        </a>
                    </li>
                    <li class="nav-item my-3" role="presentation">
                        <a class="nav-link text-white border-0 d-flex py-2" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                            <div class="only-icon pe-3">
                                <i class="bi bi-search lh-1"></i>
                            </div>
                            <div class="col">SEO-Optimised</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="tab-content pt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('static/img/fast-loading.png') }}" title="Fast Loading Websites" alt="Fast Website" style="width:350px">
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <h3 class="display-7 my-4 text-white">Lightning-Fast Performance</h3>
                                <div class="mb-4 text-white-50">
                                    We optimise every aspect of your site to ensure fast load times and seamless browsing. A slow website costs you customers—ours keep them engaged.
                                </div>
                                <a class="btn btn-warning" href="{{ route('contact-us') }}">
                                    <span class="btn--text">Get Started Today</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('static/img/mobile-friendly.png') }}" title="Mobile-Friendly Websites" alt="Responsive Design" style="width:350px">
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <h3 class="display-7 my-4 text-white">100% Mobile-Friendly</h3>
                                <div class="mb-4 text-white-50">
                                    Over half of web traffic comes from mobile devices. We design responsive websites that look perfect on any screen, from phones to desktops.
                                </div>
                                <a class="btn btn-warning" href="{{ route('contact-us') }}">
                                    <span class="btn--text">Get Started Today</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('static/img/seo.png') }}" title="SEO Optimised Websites" alt="SEO" style="width:350px">
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <h3 class="display-7 my-4 text-white">SEO-Optimised for Growth</h3>
                                <div class="mb-4 text-white-50">
                                    What’s the point of a great website if no one finds it? Our sites are built with SEO best practices, helping your business rank higher and attract more visitors.
                                </div>
                                <a class="btn btn-warning" href="{{ route('contact-us') }}">
                                    <span class="btn--text">Get Started Today</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
