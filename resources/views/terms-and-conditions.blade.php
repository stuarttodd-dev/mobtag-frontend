@extends('layouts.site-light')

@section('content')
    @include('components/page-header', ['page' => $page])

    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <p>
                        1. <b>Nullam dictum risus eget urna auctor vehicula:</b> Vivamus molestie risus id ex condimentum, at feugiat metus fermentum. Integer ut metus purus. Nulla facilisi.
                    </p>

                    <p class="mt-5">
                        2. <b>Code Curabitur faucibus:</b> Aliquam lobortis, erat sit amet rhoncus efficitur, ligula turpis sollicitudin ante, vitae imperdiet eros leo non nulla.
                    </p>

                    <p class="mt-5">
                        3. <b>Proin placerat pharetra:</b> In condimentum lectus ut eros gravida, eget sollicitudin felis egestas. Aenean eget nisi interdum, ultricies leo ac, luctus metus.
                    </p>

                    <p class="mt-5">
                        4. <b>Fusce ac ligula vitae libero consequat auctor:</b> Integer vulputate augue in augue luctus, vitae consequat nulla fermentum. Curabitur et libero velit.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
