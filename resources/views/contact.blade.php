@extends('layouts.app')

<link href="assets/css/elements-css/contact.css" rel="stylesheet">

@section('content')
    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-67.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- contact-style-two -->
    <section class="contact-style-two p_relative">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb_30">
                            <span class="sub-title">Quick Contact</span>
                            <h2>Have Questions? <br />Don't Hesitate to Contact Us</h2>
                        </div>
                        <div class="text mb_30">
                            <p>Fell free to ask us anything from Education Consulting to visa processing with ease</p>
                        </div>
                        <div class="location-box pb_40 mb_110">
                            <div class="icon-box"><i class="icon-61"></i></div>
                            <h3>Location</h3>
                            <p>Opposite to Global Collge, Baneyswor, Kathmandu, Nepal</p>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-62"></i></div>
                                        <h3>Quick Contact</h3>
                                        <ul class="info-list clearfix">
                                            <li>
                                                <h5>Phone:</h5>
                                                <p><a href="tel:18963648018">01-4535145, 9802397310 (Whatsapp)</a></p>
                                            </li>
                                            <li>
                                                <h5>Email:</h5>
                                                <p><a href="mailto:everestbudhha19@gmail.com">everestbudhha19@gmail.com</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-63"></i></div>
                                        <h3>Opening Hrs</h3>
                                        <ul class="info-list clearfix">
                                            <li>
                                                <h5>Sun - Friday:</h5>
                                                <p>09.00 am to 07.00 pm</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <div class="sec-title mb_40">
                            <span class="sub-title">Let’s Connect</span>
                            <h2>Send Your Message</h2>
                            <p>Send your Enquiries to us so that we can help you to answer your confusuoin</p>
                        </div>
                        @if (session('success'))
                            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Your message here"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn btn-two"
                                        name="submit-form"><span>Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->


    <!-- google-map-section -->
    <section class="google-map-section p_relative">
        <div class="auto-container">
            <div class="map-inner p_relative d_block">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d941.736093382081!2d85.33930292920911!3d27.700042734707896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1744909379622!5m2!1sen!2snp"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
        </div>
    </section>
    <!-- google-map-section end -->
@endsection
