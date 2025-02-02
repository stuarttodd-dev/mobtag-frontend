@extends('layouts.site-light')

@section('content')
    @include('components/page-header', [
        'page' => $page,
        'menu' => ['route' => route('case-studies'), 'title' => 'Blog']
    ])

    <section>
        <div class="container position-relative bg-white z-index-1">
            <div class="row">
                <div class="col-lg-12 my-3">
                    <article class="card card-body">
                        @php echo file_get_contents(storage_path($article->content)) @endphp
                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
