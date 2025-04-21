@extends('layouts.app')


<link href="assets/css/elements-css/visa-details.css" rel="stylesheet">
<link href="assets/css/elements-css/sidebar.css" rel="stylesheet">

@section('content')
    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url(assets/images/background/page-title-2.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-67.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>GRE</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>GRE (Graduate Record Examination)</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- visa-details -->
    <section class="visa-details p_relative">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="visa-sidebar default-sidebar">
                        <div class="sidebar-widget category-widget">
                            <ul class="category-list clearfix">
                                <li><a href="visa-details.html">ILETS</a></li>
                                <li><a href="visa-details-2.html">PTE</a></li>
                                <li><a href="visa-details-2.html">SAT</a></li>
                                <li><a href="visa-details-2.html">GRE</a></li>
                                <li><a href="visa-details-2.html">GMAT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="visa-details-content">
                        <div class="content-one mb_60">
                            <div class="text mb_45">
                                <h2>For Graduate School Admissions</h2>
                                <p>The GRE is an essential test for those applying to graduate programs in the U.S. It
                                    evaluates your verbal reasoning, quantitative reasoning, and analytical writing skills.
                                    The GRE is used by many top universities to assess the readiness of applicants for
                                    graduate study.</p>
                            </div>
                            <figure class="image-box"><img src="assets/images/resource/visa-17.jpg" alt=""></figure>
                            <div class="lower-text">

                            </div>
                        </div>
                        <div class="content-two mb_35">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 left-column">
                                    <div class="left-content">
                                        <h3><strong>GRE Test Format:</strong></h3>
                                        <ul>
                                            <li><strong>Analytical Writing (60 minutes):</strong> Two essay tasks that test
                                                your critical thinking and argumentation skills.</li>
                                            <li><strong>Verbal Reasoning (60 minutes):</strong> Reading comprehension,
                                                vocabulary, and critical reasoning questions.</li>
                                            <li><strong>Quantitative Reasoning (70 minutes):</strong> Math-related questions
                                                involving arithmetic, algebra, geometry, and data analysis.</li>
                                            <li><strong>Experimental/Research Section:</strong> May be included but is
                                                unscored.</li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 right-column">
                                <div class="right-content">
                                    <h3>Our GRE Preparation Program Includes:</h3>
                                    <ul class="list-item clearfix">
                                        <li>Comprehensive training in both verbal and quantitative sections.</li>
                                        <li>Customized strategies for tackling difficult math problems and reading passages.
                                        </li>
                                        <li>Expert coaching on writing clear and coherent essays.</li>
                                        <li>Timed full-length mock tests to monitor progress.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- visa-details end -->
@endsection
