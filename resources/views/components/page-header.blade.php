<section class="page-heading bg-dark">
    <div class="container position-relative">
        <div class="row align-items-center justify-content-center min-vh-40">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 text-white m-0">{{ $page }}</h1>
                <ol class="breadcrumb light mb-0 mt-3 justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    @if(!empty($menu))
                        <li class="breadcrumb-item"><a href="{{ $menu['route'] }}">{{ $menu['title'] }}</a></li>
                    @endif
                    <li class="breadcrumb-item active" aria-current="page">{{ $page  }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>
