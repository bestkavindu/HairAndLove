@extends('layouts.master')

@section('head')
    <title>Hair and Love - Products</title>
@endsection

@section('custom-css')
    <style>
        .modal-body p {
            font-size: 16px;
        }

        .text-dark {
            line-height: 30px;
        }

        .service-img {

            margin-bottom: 15px;
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
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s"
        style="background-image: linear-gradient(rgba(0, 29, 35, .8), rgba(0, 29, 35, .8)),url('{{$info->products_cover}}')">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Causes Start -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Feature Products</div>
                <h1 class="display-6 mb-5">hair and Love</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($products as $product )
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">

                            <div class="service-img">

                                <img class="img-fluid" src="{{$product->image}}" alt="">
                            </div>
                            <h5 class="mb-3">{{$product->title}}</h5>
                            <p>{!!$product->desc!!}</p>
                            <a class="btn btn-outline-primary px-3" href="">
                                Learn More
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
    <!-- Causes End -->
@endsection

@section('custom-js')
@endsection
