@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="pt-10 pb-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <p class="h4">We Love Writing About Software Development</p>
                    <p class="lead text-muted mt-3">Sharing knowledge is what we do best. From frontend to backend, we dive deep into best practices, tools, and frameworks to help developers build efficient, scalable, and modern applications.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                @if(!empty($articles))
                    @foreach($articles as $article)
                    <div class="col-md-6 col-lg-4 mb-5 d-flex flex-row">
                        <div class="hover-top card shadow-only-hover w-100">
                            <img class="card-img-top" src="{{ asset('assets/images/' . $article->image) }}" title="{{ $article->title }}" alt="{{ $article->title }}" style="height:200px">
                            <div class="card-body">
                                <h5 class="mb-3"><a class="text-dark stretched-link" href="{{ route('article', ['id' => $article->id, 'slug' => $article->slug]) }}">{{ $article->title }}</a></h5>
                                <p class="m-0">{{ Str::limit($article->sub_title, 150, '...') }}</p>
                            </div>
                            <div class="card-footer border-top">
                                <div class="nav small">
                                    <a class="text-body font-w-600 ms-auto" href="{{ route('article', ['id' => $article->id, 'slug' => $article->slug]) }}">Read More <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
