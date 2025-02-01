<header class="header-main header-light fixed-top header-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/primary-logo.png') }}" alt="Half Shell Studios" style="width:150px">
            </a>
            <button class="navbar-toggler ms-auto me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about-us') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('why-choose-us') }}" class="nav-link">Why Choose Us?</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('services') }}" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact-us') }}" class="nav-link">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav flex-nowrap align-items-center">
                <div class="nav-item d-none d-xl-block">
                    <a href="{{ route('contact-us') }}" class="btn btn-sm btn-success rounded mb-0 mx-2 text-nowrap">Get a FREE Quote</a>
                </div>
            </div>
        </div>
    </nav>
</header>
