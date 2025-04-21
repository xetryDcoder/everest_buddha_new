@extends('layouts.app')

<link href="{{ asset('assets/css/elements-css/coaching-details.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/elements-css/sidebar.css') }}" rel="stylesheet">

@section('content')
    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url('{{ asset('storage/' . $country->sidebar_photo) }}')"></div>
        <div class="pattern-layer" style="background-image: url('{{ asset('assets/images/shape/shape-67.png') }}');"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Study in {{ $country->name }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Study in {{ $country->name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- coaching-details -->
    <section class="coaching-details p_relative">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="coaching-sidebar default-sidebar">
                        <div class="sidebar-widget category-widget">
                            <ul class="category-list clearfix">
                                <li><a href="coaching-details.html" class="current">Study in Australia</a></li>
                                <li><a href="coaching-details-2.html">Study in USA</a></li>
                                <li><a href="coaching-details-3.html">Study in UK</a></li>
                                <li><a href="coaching-details-4.html">Study in Europe</a></li>
                                <li><a href="coaching-details-5.html">Study in Japan</a></li>
                                <li><a href="coaching-details-6.html">Study in Korea</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-widget travel-widget">
                            <div class="widget-content p_relative">
                                <figure class="image-box"><img src="{{ asset('storage/'.$country->sidebar_photo) }}" alt="">
                                </figure>
                                <div class="content-box">
                                    <h3>Requirement</h3>
                                    <ul class="list-item clearfix">
                                        <li>ILETS 6.5</li>
                                        <li>20-30 Lakh</li>
                                        <li>2 Year Gap</li>
                                        <li>Other Requirement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget download-widget">
                            <div class="widget-content">
                                <div class="icon-shape"><img src="{{ asset('assets/images/icons/icon-15.png') }}" alt=""></div>
                                <h3>Download Process</h3>
                                <ul class="download-list clearfix">
                                    <li>
                                        <a href="coaching-details.html">
                                            <i class="icon-50"></i>
                                            <p>Process Checklist</p>
                                            <span>2025/26</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="coaching-details.html">
                                            <i class="icon-50"></i>
                                            <p>Download Broucer</p>
                                            <span>2025/26</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="coaching-details-content">
                        <div class="upper-box mb_40">
                            <h2>Study in {{ $country->name }}</h2>
                            <div class="text-box mb_40">
                                <p class="text-justified">{!! $country->short_description !!}</p>
                                <ul class="clearfix">
                                    <li><a href="coaching-details.html"><span>1</span>ILETS</a></li>
                                    <li><a href="coaching-details.html"><span>2</span>Study</a></li>
                                    <li><a href="coaching-details.html"><span>3</span>Work</a></li>
                                    <li><a href="coaching-details.html"><span>4</span>Earning</a></li>
                                </ul>
                            </div>
                            <figure class="image-box"><img src="{{ asset('storage/'.$country->top_photo_1) }}"  alt="">
                            </figure>
                        </div>
                        <div class="tabs-box">
                            <div class="tab-btn-box mb_40">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">More about {{ $country->name }}</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content-box">
                                        <div class="content-one mb_40">
                                            <div class="row align-items-center">
                                                <div class="col-lg-7 col-md-6 col-sm-12 text-column">
                                                    <div class="text">
                                                        {!! $country->top_description !!}
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-6 col-sm-12 image-column">
                                                    <figure class="image-box"><img
                                                            src="{{ asset('storage/'.$country->logo) }}" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="text mt_20">
                                                {!! $country->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-two pb_30">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <figure class="image-box"><img src="{{ asset('storage/'.$country->bottom_photo_1) }}"
                                                        alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <figure class="image-box"><img src="{{ asset('storage/'.$country->bottom_photo_2) }}"
                                                        alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- coaching-details end -->
@endsection
