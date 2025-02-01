@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])
    @include('components/page-sub-header', [
        'title' => "Experienced Software Engineers",
        'desc' => "We're straight talking <strong>Software Engineers</strong> with years of experience. If we can't do something, we'll be honest and let you know. If we can, we'll deliver it to the highest standard possible."
    ])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="card hover-top">
                        <a href="{{ route('service', ['id' => $service->id, 'slug' => $service->slug]) }}">
                            <img class="card-img-top" src="{{ asset('assets/images/' . $service->image) }}" title="{{ $service->title  }}" alt="{{ $service->title }}" style="height:200px">
                        </a>
                        <div class="card-body">
                            <h5><a href="{{ route('service', ['id' => $service->id, 'slug' => $service->slug]) }}" class="stretched-link text-reset">{{ $service->title }}</a></h5>
                            <p class="m-0">{{ $service->short_desc  }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container mt-10">
            <div class="row">
                <div class="col-lg-6 my-3 pe-xl-12">
                    <h3 class="display-6 mb-4">Here's what we bring to the table</h3>
                    <p class="pb-2">
                        We don’t just build websites and mobile apps—we craft high-performance, scalable, and visually stunning digital experiences.
                        From modern web development frameworks to robust backend architecture, we ensure your project is fast, secure, and future-proof.
                    </p>
                    <p class="pb-2">
                        Whether it’s a sleek front-end, an optimised database, or a seamless API integration, we have the skills to bring your ideas to life.
                        Our expertise spans across cutting-edge technologies, guaranteeing solutions that are tailored to your business needs and designed to impress users.
                    </p>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="skill-lt">
                        <h6 class="dark-color">PHP</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Laravel</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Vue.js</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">React</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">JavaScript (ES6+)</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Tailwind CSS</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">React Native</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">MySQL</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">API Development</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Performance Optimisation</h6>
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
