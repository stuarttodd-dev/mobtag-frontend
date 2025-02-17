<footer class="footer bg-dark">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/mobtag-logo-white.png') }}" alt="Mobtag" style="width:150px">
                    </a>
                    <p class="w-md-80 text-white-50">Digital Asset Tagging and Management</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    @if(!empty($footerServices))
                        <h5 class="text-white my-3">Case Studies</h5>
                        <ul class="list-unstyled white-link footer-links">
                            @foreach($footerServices as $service)
                                <li><a href="{{ route('feature', ['id' => $service->id, 'slug' => $service->slug]) }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">{{ $service->title }}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="col-sm-6 col-lg-3">
                    <h5 class="text-white my-3">Explore</h5>
                    <ul class="list-unstyled white-link footer-links">
                        <li><a href="{{ route('about-us') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">About Us</a></li>
                        <li><a href="{{ route('how-does-it-work') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">How Does It Work?</a></li>
                        <li><a href="{{ route('features') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Features</a></li>
                        <li><a href="{{ route('case-studies') }}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Blog</a></li>
                        <li><a href="https://assets.mobtag.io/register" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">SIGN UP</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5 class="text-white my-3">Policies</h5>
                    <ul class="list-unstyled white-link footer-links">
                        <li><a href="{{ asset('terms.pdf')}}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Terms</a></li>
                        <li><a href="{{ asset('privacy.pdf')}}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Privacy Policy</a></li>
                        <li><a href="{{ asset('cookies.pdf')}}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Cookie Policy</a></li>
                        <li><a href="{{ asset('acceptable_use.pdf')}}" class="hover:border-b hover:border-turtle tracking-custom2 opacity-75 text-sm">Acceptable Use Policy</a></li>
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
                        <a class="icon icon-sm icon-primary rounded-circle me-2" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="icon icon-sm icon-primary rounded-circle me-2" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="icon icon-sm icon-primary rounded-circle me-2" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="icon icon-sm icon-primary rounded-circle me-2" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 my-3 text-center text-md-end text-white-50">
                    <p class="m-0">&copy; {{ date('Y') }} Mobtag Ltd | 13231739 | All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
