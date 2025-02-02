@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])
    @include('components/page-sub-header', [
        'title' => "Lorem Ipsum Dolor",
        'desc' => "Sed ut perspiciatis unde omnis iste <strong>natus error</strong> sit voluptatem accusantium doloremque laudantium. Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."
    ])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="card hover-top">
                        <a href="{{ route('feature', ['id' => $service->id, 'slug' => $service->slug]) }}">
                            <img class="card-img-top" src="{{ asset('assets/images/' . $service->image) }}" title="{{ $service->title  }}" alt="{{ $service->title }}" style="height:200px">
                        </a>
                        <div class="card-body">
                            <h5><a href="{{ route('feature', ['id' => $service->id, 'slug' => $service->slug]) }}" class="stretched-link text-reset">{{ $service->title }}</a></h5>
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
                    <h3 class="display-6 mb-4">Lorem ipsum dolor sit amet</h3>
                    <p class="pb-2">
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <p class="pb-2">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                    </p>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="skill-lt">
                        <h6 class="dark-color">Duis</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Cccaecat</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Voluptatem</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Dolore</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Natus</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Commodo</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Minim</h6>
                        <div class="skill-bar">
                            <div class="skill-bar-in bg-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                <span>100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill-lt">
                        <h6 class="dark-color">Nisi</h6>
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
