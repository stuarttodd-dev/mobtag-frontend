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
                        1. <b>Nullam tristique orci sit amet:</b> Aliquam suscipit velit ut erat bibendum, ut interdum ante tristique. Integer aliquet sapien id dui pretium malesuada.
                    </p>

                    <p class="mt-5">
                        2. <b>Phasellus vitae ante eget:</b> Fusce quis lorem non arcu tempus pharetra eget in nisi. Aenean euismod ante vitae erat convallis, ut iaculis elit volutpat.
                    </p>

                    <p class="mt-5">
                        3. <b>Curabitur facilisis lorem eu:</b> Duis pretium enim nec arcu interdum, vel varius justo gravida. Integer posuere velit eu mi auctor, vel elementum felis mollis.
                    </p>

                    <p class="mt-5">
                        4. <b>Vivamus vulputate ligula in:</b> Etiam at leo nec augue condimentum ullamcorper. Nam vel elit turpis, vitae tempor odio facilisis. Suspendisse potenti.
                    </p>

                    <p class="mt-5">
                        5. <b>Ut tempor pharetra felis:</b> Phasellus id risus sit amet nunc consectetur tempus. Nulla ac tristique ante, at tincidunt sem. Pellentesque euismod augue ac viverra egestas.
                    </p>

                    <p class="mt-5">
                        By continuing to use our website, you consent to the use of cookies as described in this policy.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
