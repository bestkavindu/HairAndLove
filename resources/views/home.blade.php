@extends('layouts.master')

@section('head')
    <title>Hair and Love - Home Page</title>
@endsection

@section('custom-css')
    <style>
        .modal-body p {
            font-size: 16px;
        }

        .text-dark {
            line-height: 30px;
        }

        .principal-icon {
            font-size: 70px;
            padding: 20px 0;
            color: #d99976;
        }

        .service-img img {
            border-radius: 10px;
            width: 100%;
            padding-top: 15px;

        }

        @media (min-width: 1200px) {
            .display-4 {
                font-size: 2.5rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">'
                    <img class="w-100" src="{{asset($info->slider_1)}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Discover
                                        Black-Owned Haircare Companies</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Discover and Support Black-Owned
                                        Haircare Companies. Join Our Biweekly Service Subscription and Make a Difference!
                                    </p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset($info->slider_2)}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Discover
                                        Black-Owned Haircare Companies</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Discover and Support Black-Owned
                                        Haircare Companies. Join Our Biweekly Service Subscription and Make a Difference!
                                    </p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{$homeinfo->home_about_img_1}}" alt=""
                            style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="{{$homeinfo->home_about_img_2}}" alt=""
                            style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <h1 class="display-6 mb-5">Who we are</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">{{$homeinfo->home_about}}</p>
                        </div>
                        <a href="/about" class="btn btn-primary py-2 px-3 me-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a href="/contact" class="btn btn-outline-primary py-2 px-3" href="">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Feature Products</div>
                <h1 class="display-6 mb-5">Explore our new Products</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div
                            class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">

                                <div class="service-img">

                                    <img class="img-fluid" src="{{ asset($product->image) }}" alt="">
                                </div>
                                <h5 class="mb-3 mt-3">{{ $product->title }}</h5>
                                <p class="text-truncate-3">{!! $product->desc !!}</p>
                                <a class="btn btn-outline-primary px-3" href="">
                                    View
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimonial</div>
                <h1 class="display-6 mb-5">Trusted By Thousands Of People And Nonprofits</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg"
                        style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut
                            diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                        </p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->
@endsection

@section('custom-js')
@endsection
