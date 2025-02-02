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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras euismod dui at urna auctor, ac tempus justo vehicula.</p>
                    <p class="mt-5">
                        1. <b>Nullam tristique orci sit amet:</b> Suspendisse commodo turpis sit amet dui tristique, in tincidunt erat eleifend. Aenean vulputate ante eu nulla tempus.
                    </p>

                    <p class="mt-5">
                        2. <b>Phasellus vitae ante eget:</b> Aliquam sagittis augue at augue egestas, at scelerisque ligula consequat. Proin ut nunc ut turpis pretium feugiat.
                    </p>

                    <p class="mt-5">
                        3. <b>Curabitur facilisis lorem eu:</b> Etiam euismod est at purus vulputate, sed aliquet ante posuere. Vivamus tristique, nulla vel varius consequat, leo enim tincidunt neque.
                    </p>

                    <p class="mt-5">
                        4. <b>Vivamus vulputate ligula in:</b> Nam aliquet libero at volutpat ullamcorper. Ut ac mollis dui. Quisque bibendum urna ut risus auctor, sit amet sollicitudin lectus fringilla.
                    </p>

                    <p class="mt-5">
                        5. <b>Ut tempor pharetra felis:</b> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis lorem vel magna varius gravida.
                    </p>

                    <p class="mt-5">
                        By using our services, you agree to the terms outlined in this policy.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('components/call-to-action1')
@endsection
