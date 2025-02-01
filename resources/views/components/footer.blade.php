<footer class="footer" style="background-color: #0B1F22; background-image: url('https://halfshellstudios.co.uk/assets/svg/footer-pattern.svg');background-size: cover;">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/primary-logo.png') }}" alt="Half Shell Studios" style="width:150px">
                    </a>
                    <p class="w-md-80 text-white-50">A team of seasoned software engineers located in Teesside, in the heart of the North East of England, UK.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    @if(!empty($footerServices))
                        <h5 class="text-white my-3">Services</h5>
                        <ul class="list-unstyled white-link footer-links">
                            @foreach($footerServices as $service)
                                <li><a href="{{ route('service', ['id' => $service->id, 'slug' => $service->slug]) }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="col-sm-6 col-lg-3">
                    <h5 class="text-white my-3">Explore</h5>
                    <ul class="list-unstyled white-link footer-links">
                        <li><a href="{{ route('about-us') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">About Us</a></li>
                        <li><a href="{{ route('why-choose-us') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Why Choose Us?</a></li>
                        <li><a href="{{ route('services') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Services</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Blog</a></li>
                        <li><a href="{{ route('contact-us') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">GET A QUOTE</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5 class="text-white my-3">Policies</h5>
                    <ul class="list-unstyled white-link footer-links">
                        <li><a href="{{ route('terms-and-conditions') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Terms</a></li>
                        <li><a href="{{ route('privacy-policy') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Privacy Policy</a></li>
                        <li><a href="{{ route('cookie-policy') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom border-style top light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-3">
                    <div class="nav justify-content-center justify-content-md-start">
{{--                        <a class="icon icon-sm icon-success rounded-circle me-2" href="#">--}}
{{--                            <i class="fab fa-facebook-f"></i>--}}
{{--                        </a>--}}
{{--                        <a class="icon icon-sm icon-success rounded-circle me-2" href="#">--}}
{{--                            <i class="fab fa-twitter"></i>--}}
{{--                        </a>--}}
{{--                        <a class="icon icon-sm icon-success rounded-circle me-2" href="#">--}}
{{--                            <i class="fab fa-instagram"></i>--}}
{{--                        </a>--}}
{{--                        <a class="icon icon-sm icon-success rounded-circle me-2" href="#">--}}
{{--                            <i class="fab fa-linkedin-in"></i>--}}
{{--                        </a>--}}
                    </div>
                </div>
                <div class="col-md-6 my-3 text-center text-md-end text-white-50">
                    <p class="m-0">&copy; {{ date('Y') }} Half Shell Studios Ltd | 15839928 | All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
