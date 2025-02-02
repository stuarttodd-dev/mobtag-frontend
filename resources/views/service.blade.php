@extends('layouts.site-light')

@section('content')
    <div id="top"></div>
    @include('components/page-header', [
        'page' => $page,
        'menu' => ['route' => route('features'), 'title' => 'Features']
    ])

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-lg-10 my-3">
                    <h3 class="display-6 mb-4">Why us?</h3>
                    <div class="lead">{{ $service->long_desc }}</div>
                </div>
                <div class="col-lg-6 my-3">
                    <img class="shadow-sm rounded w-100" src={{ asset('assets/images/' . $service->image) }} title="{{ $service->title }}" alt="{{ $service->title }}">
                </div>
            </div>
        </div>
    </section>

    <section class="section effect-section">
        <div class="mask opacity-8 bg-black"></div>
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-start">
                    <h3 class="h2 text-white">{{ $service->short_desc }}</h3>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <a class="btn btn-light" href="{{ route('contact-us') }}">Let's Work Together</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container position-relative bg-white z-index-1">
            <div class="row">
                <div class="col-lg-12 my-3">
                    <article class="card card-body">
                        @php echo file_get_contents(storage_path($service->content)) @endphp
                    </article>
                </div>
            </div>
        </div>
    </section>

    @if(!empty($services))
    <section class="section bg-gray-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 my-3">
                    <h3 class="h1 text-black text-center">We don't only deal in {{ $service->title }}.</h3>
                    <p class="lead text-black text-center">Here's our full list of services.</p>
                </div>
            @foreach($services as $row)
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="border p-3 p-lg-5 position-relative theme-hover-bg hover-top {{ $service->id === $row->id ? 'bg-grey-100' : 'bg-white' }}">
                        <div class="icon icon-lg icon-primary shadow border border-2 border-white mb-4">
                            <i class="bi {{ $row->icon }}"></i>
                        </div>
                        <h5 class="mb-2">{{ $row->title }}</h5>
                        <p>{{ $row->short_desc }}</p>
                        @if($service->id !== $row->id)
                        <a class="link-effect z-index-1" href="{{ route('feature', ['id' => $row->id, 'slug' => $row->slug]) }}">Read More</a>
                        @else
                            <a class="link-effect z-index-1" href="#top">Read More</a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    @include('components/call-to-action1')
@endsection
