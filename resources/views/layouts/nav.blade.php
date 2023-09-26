<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-4"></i>{{ App\Models\GenaralInfo::first()?->address }}</small>
            {{-- <a href="//wa.me/+9477265341" target="_blank">077 265 341</a> --}}
            <small class="ms-4"><i class="fa-brands fa-whatsapp me-2"></i> <a href="//wa.me/+713-280-6838" target="_blank">{{ App\Models\GenaralInfo::first()?->phone }}</a></small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>{{ App\Models\GenaralInfo::first()?->email }}</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <a class="text-white-50 ms-3" href="{{ App\Models\GenaralInfo::first()?->fb_link }}"><i class="fab fa-facebook-f"></i></a>
            <a class="text-white-50 ms-3" href="{{ App\Models\GenaralInfo::first()?->tw_link }}"><i class="fab fa-twitter"></i></a>
            {{-- <a class="text-white-50 ms-3" href="{{ App\Models\GenaralInfo::first()?->ig_link }}"><i class="fab fa-linkedin-in"></i></a> --}}
            <a class="text-white-50 ms-3" href="{{ App\Models\GenaralInfo::first()?->ig_link }}"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand ms-4 ms-lg-0">
            <img src="{{ App\Models\GenaralInfo::first()?->logo }}" style="width: 300px" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="/about"
                    class="nav-item nav-link {{ Request::segment(1) === 'about' ? 'active' : '' }}">About</a>
                <a href="/services"
                    class="nav-item nav-link  {{ Request::segment(1) === 'services' ? 'active' : '' }}">Services</a>
                    <a href="/products"
                    class="nav-item nav-link  {{ Request::segment(1) === 'products' ? 'active' : '' }}">Products</a>

                <a href="/blog" class="nav-item nav-link  {{ Request::segment(1) === 'blog' ? 'active' : '' }}">Blog
                    and News</a>
                <a href="/contact"
                    class="nav-item nav-link {{ Request::segment(1) === 'contact' ? 'active' : '' }}">Contact</a>
            </div>
            {{-- <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-primary py-2 px-3" href="">
                    Donate Now
                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                        <i class="fa fa-arrow-right"></i>
                    </div>
                </a>
            </div> --}}
        </div>
    </nav>
</div>
<!-- Navbar End -->
