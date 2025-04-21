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
                <h1>GMAT</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>GMAT (Graduate Management Admission Test)</li>
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
                                <h2>The Gateway to Business School</h2>
                                <p>The GMAT is specifically designed for students applying to MBA and business-related
                                    programs. It evaluates higher-order reasoning and analytical skills crucial for success
                                    in business school.</p>
                            </div>
                            <figure class="image-box"><img src="assets/images/resource/visa-17.jpg" alt=""></figure>
                            <div class="lower-text">

                            </div>
                        </div>
                        <div class="content-two mb_35">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 left-column">
                                    <div class="left-content">
                                        <h3>GMAT Test Format:</h3>
                                        <ul>
                                            <li><strong>Analytical Writing Assessment (30 minutes): </strong> An essay
                                                analyzing and evaluating arguments.</li>
                                            <li><strong>Integrated Reasoning (30 minutes):</strong> Data interpretation,
                                                analysis, and problem-solving.</li>
                                            <li><strong>Quantitative Reasoning (62 minutes): </strong> Problem-solving and
                                                data sufficiency questions.</li>
                                            <li><strong>Verbal Reasoning (65 minutes): </strong> Critical reasoning,
                                                sentence correction, and reading comprehension.</li>
                                        </ul>


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 right-column">
                                    <div class="right-content">
                                        <h3>Our IELTS Preparation Program Includes:</h3>
                                        <ul class="list-item clearfix">
                                            <li>Specialized training in quantitative reasoning and integrated reasoning.
                                            </li>
                                            <li>In-depth sessions on improving verbal reasoning and grammar.</li>
                                            <li>Timed mock exams and adaptive tests to simulate actual GMAT conditions.</li>
                                            <li>One-on-one coaching to address individual strengths and weaknesses.</li>
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
