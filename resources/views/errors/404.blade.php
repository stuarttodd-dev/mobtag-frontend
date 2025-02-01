@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => '404 - Not Found'])

    <section class="section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 text-center">
                    <p class="h4">Whoops, it looks like the page you requested wasn't found.</p>
                    <div class="my-7">
                        <img src="{{ asset('static/img/effect/404.svg') }}" title="404 - Not Found" alt="404 - Not Found">
                    </div>
                    <div>
                        <a class="btn btn-success" href="{{ route('home') }}">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
