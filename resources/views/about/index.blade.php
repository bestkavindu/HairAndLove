@extends('layouts.master')

@section('head')
    <title>Hair and Love - About Us</title>
@endsection

@section('custom-css')
    <style>
        .modal-body p {
            font-size: 16px;
        }

        .text-dark {
            line-height: 30px;
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
        style="background-image: linear-gradient(rgba(0, 29, 35, .8), rgba(0, 29, 35, .8)),url('{{ asset($info->about_cover) }}')">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{ asset($info->about_main_img_1) }}"
                            alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2"
                            src="{{ asset($info->about_main_img_2) }}" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <h4 class="display-7 text-primary mb-3">Who we are</h4>
                            <p class="text-dark mb-2">“"At Love and Hair Company, we are on a mission to deliver quality
                                products that help you discover your perfect haircare routine at an affordable price.”</p>
                            <h4 class="display-7 text-primary mb-3">How do we do it</h4>
                            <p class="text-dark mb-2">“By delivering biweekly shipments of sample sized products from our
                                partnered companies” </p>
                            <h4 class="display-7 text-primary mb-2">Why we do it</h4>
                            <p class="text-dark mb-2">“because we love you and your hair”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection

@section('custom-js')
@endsection
