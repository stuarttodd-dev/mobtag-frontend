@extends('layouts.site-light')

@section('content')
    @include('components/page-header', [
        'page' => $page,
        'menu' => ['route' => route('blog'), 'title' => 'Blog']
    ])

    <div class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center article">
                <div class="col-lg-10">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
    </div>

    @include('components/call-to-action1')
@endsection
