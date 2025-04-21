@extends('layouts.app')

<link href="assets/css/elements-css/blog.css" rel="stylesheet">
<link href="assets/css/elements-css/sidebar.css" rel="stylesheet">

@section('content')
    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url(assets/images/resource/austrilia.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-67.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1> Scholarships in Australia</h1>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-standard p_relative">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="content-one mb_40">
                            <figure class="image-box"><img src="assets/images/resource/austrilia.jpg" alt="">
                            </figure>
                            <ul class="post-info clearfix">
                                <li><i class="icon-27"></i><a href="blog-details.html">Admin</a></li>
                                <li><i class="icon-56"></i>Feb 6, 2022 </li>
                                <li><i class="icon-57"></i><a href="blog-details.html">03 Comments</a></li>
                            </ul>
                            <div class="text">
                                Here are detailed descriptions of each scholarship program available for
                                international students in Australia:
                                <div class="scholarship-details">
                                    <h2 class="mb-2 mt-2">Australia Awards Scholarships</h2>
                                    <ul>
                                        <li><strong>Description:</strong>
                                            <p>Funded by the Australian Government, these scholarships aim to
                                                promote knowledge, education links, and enduring ties between
                                                Australia and the global community, particularly the Asia-Pacific
                                                region.</p>
                                        </li>
                                        <li><strong>Eligibility:</strong>
                                            <ul>
                                                <li>Open to students from developing countries in the Asia-Pacific
                                                    region, Africa, and the Middle East.</li>
                                                <li>Applicants must meet certain eligibility criteria based on the
                                                    country of origin.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Benefits:</strong>
                                            <ul>
                                                <li>Full tuition fees.</li>
                                                <li>Travel costs (flights, visa).</li>
                                                <li>Living expenses, including accommodation and food.</li>
                                                <li>Health insurance.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Application:</strong>
                                            <ul>
                                                <li>Applications are usually opened in February/March each year.
                                                </li>
                                                <li>The application process involves applying through the Australian
                                                    Embassy or High Commission in your home country.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Website:</strong> <a href="#">Australia Awards Scholarships</a>
                                        </li>
                                    </ul>

                                    <h2 class="mb-2 mt-2">Endeavour Postgraduate Scholarship Awards</h2>
                                    <ul>
                                        <li><strong>Description:</strong>
                                            <p>Aimed at high-achieving international students who wish to undertake
                                                postgraduate studies or research in Australia. Available for
                                                coursework, master’s, and doctoral degrees.</p>
                                        </li>
                                        <li><strong>Eligibility:</strong>
                                            <ul>
                                                <li>Applicants must have a good academic record and meet specific
                                                    academic requirements.</li>
                                                <li>Open to all international students from eligible countries.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Benefits:</strong>
                                            <ul>
                                                <li>Full tuition fees for the duration of the course.</li>
                                                <li>Travel allowance (airfare to and from Australia).</li>
                                                <li>A monthly stipend for living costs.</li>
                                                <li>Health and travel insurance.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Application:</strong>
                                            <ul>
                                                <li>Applications typically open in early April and close in June.
                                                </li>
                                                <li>Apply directly through the Endeavour program website.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Website:</strong> <a href="#">Endeavour Scholarships</a></li>
                                    </ul>

                                    <h2 class="mb-2 mt-2">University-Specific Scholarships</h2>
                                    <p>Many Australian universities offer their own scholarships for international
                                        students. Here are some examples:</p>
                                    <ul>
                                        <li><strong>a. University of Melbourne International Undergraduate
                                                Scholarships</strong>
                                            <ul>
                                                <li><strong>Eligibility:</strong> Open to international students who
                                                    have completed high school and meet the academic requirements
                                                    for admission.</li>
                                                <li><strong>Benefits:</strong> Provides a percentage reduction in
                                                    tuition fees for up to the duration of the course.</li>
                                                <li><strong>Website:</strong> <a href="#">University of Melbourne
                                                        Scholarships</a></li>
                                            </ul>
                                        </li>
                                        <li><strong>b. University of Sydney International Scholarships</strong>
                                            <ul>
                                                <li><strong>Eligibility:</strong> Open to international students for
                                                    various undergraduate, postgraduate coursework, and research
                                                    programs.</li>
                                                <li><strong>Benefits:</strong> Full or partial tuition fee
                                                    remission.</li>
                                                <li><strong>Website:</strong> <a href="#">University of Sydney
                                                        Scholarships</a></li>
                                            </ul>
                                        </li>
                                        <li><strong>c. Australian National University (ANU) International
                                                Scholarships</strong>
                                            <ul>
                                                <li><strong>Eligibility:</strong> Open to international students
                                                    pursuing undergraduate and postgraduate degrees.</li>
                                                <li><strong>Benefits:</strong> Full or partial tuition fee
                                                    reduction, living expenses, and some travel costs.</li>
                                                <li><strong>Website:</strong> <a href="#">ANU Scholarships</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <h2 class="mb-2 mt-2">Research Training Program (RTP)</h2>
                                    <ul>
                                        <li><strong>Description:</strong>
                                            <p>The RTP is an Australian government-funded program designed to
                                                support international students pursuing research-based Master’s or
                                                PhD degrees at Australian universities.</p>
                                        </li>
                                        <li><strong>Eligibility:</strong>
                                            <ul>
                                                <li>Open to international students pursuing postgraduate research
                                                    programs (Masters or PhD).</li>
                                                <li>Must have a strong academic background and research potential.
                                                </li>
                                            </ul>
                                        </li>
                                        <li><strong>Benefits:</strong>
                                            <ul>
                                                <li>Full tuition fees.</li>
                                                <li>A living allowance to cover living expenses.</li>
                                                <li>Health insurance.</li>
                                                <li>A relocation allowance for international students.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Application:</strong>
                                            <ul>
                                                <li>Applications are processed directly through the universities.
                                                </li>
                                            </ul>
                                        </li>
                                        <li><strong>Website:</strong> <a href="#">Research Training Program</a></li>
                                    </ul>

                                    <h2 class="mb-2 mt-2">Destination Australia Program</h2>
                                    <ul>
                                        <li><strong>Description:</strong>
                                            <p>A government-funded program designed to encourage international
                                                students to study in regional Australia, supporting both
                                                undergraduate and postgraduate students.</p>
                                        </li>
                                        <li><strong>Eligibility:</strong>
                                            <ul>
                                                <li>Open to international students from any country who plan to
                                                    study in a regional or remote part of Australia.</li>
                                                <li>Students must meet the university-specific entry requirements.
                                                </li>
                                            </ul>
                                        </li>
                                        <li><strong>Benefits:</strong>
                                            <ul>
                                                <li>Up to AUD $15,000 per year for living expenses.</li>
                                                <li>Tuition fee coverage (may vary by institution).</li>
                                            </ul>
                                        </li>
                                        <li><strong>Application:</strong>
                                            <ul>
                                                <li>Apply through participating universities in regional Australia.
                                                </li>
                                            </ul>
                                        </li>
                                        <li><strong>Website:</strong> <a href="#">Destination Australia</a></li>
                                    </ul>

                                    <h2 class="mb-2 mt-2">International Postgraduate Research Scholarships (IPRS)</h2>
                                    <ul>
                                        <li><strong>Description:</strong>
                                            <p>The IPRS provides international students with the opportunity to
                                                undertake research-based postgraduate study in Australia.</p>
                                        </li>
                                        <li><strong>Eligibility:</strong>
                                            <ul>
                                                <li>Open to international students applying for research-based
                                                    postgraduate degrees.</li>
                                                <li>Applicants must meet specific research criteria and be nominated
                                                    by an Australian university.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Benefits:</strong>
                                            <ul>
                                                <li>Tuition fee coverage.</li>
                                                <li>Living allowance.</li>
                                                <li>Health and travel insurance.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Application:</strong>
                                            <ul>
                                                <li>Apply through the Australian university that is offering the
                                                    scholarship.</li>
                                            </ul>
                                        </li>
                                        <li><strong>Website:</strong> <a href="#">Check with individual Australian
                                                universities for details</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="content-two mb_40">
                            <figure class="image-box"><img src="assets/images/resource/austrilia.jpg" alt="">
                            </figure>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="default-sidebar blog-sidebar ml_10">
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Other Schlorship</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list-two clearfix">
                                    <li><a href="blog-details.html">Scholarships in Australia</a></li>
                                    <li><a href="blog-details.html">Scholarships in USA</a></li>
                                    <li><a href="blog-details.html">Scholarship in Canada</a></li>
                                    <li><a href="blog-details.html">Scholarship in New Zealand</a></li>
                                    <li><a href="blog-details.html">Scholarship in UK</a></li>
                                    <li><a href="blog-details.html">Scholarship in Europe</a></li>
                                    <li><a href="blog-details.html">Scholarship in South Korea</a></li>
                                    <li><a href="blog-details.html">Scholarship in Japan</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Popular Post</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="assets/images/news/post-1.jpg" alt=""></a></figure>
                                    <h5><a href="blog-details.html">Kickstart Your Visa ApprovalWith 4 Easy
                                            Steps</a></h5>
                                    <span class="post-date">December 30, 2020</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="assets/images/news/post-2.jpg" alt=""></a></figure>
                                    <h5><a href="blog-details.html">Customers Applying for Priority Visas.</a></h5>
                                    <span class="post-date">December 25, 2020</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img
                                                src="assets/images/news/post-3.jpg" alt=""></a></figure>
                                    <h5><a href="blog-details.html">Travelling to Australia for Tourism or
                                            Business?</a></h5>
                                    <span class="post-date">December 22, 2020</span>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget gallery-widget">
                            <div class="widget-title">
                                <h3>Our Gallery</h3>
                            </div>
                            <div class="widget-content p_relative">
                                <ul class="image-list clearfix">
                                    <li>
                                        <figure class="image-box"><a href="assets/images/news/gallery-1.jpg"
                                                class="lightbox-image" data-fancybox="gallery"><img
                                                    src="assets/images/news/gallery-1.jpg" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="assets/images/news/gallery-2.jpg"
                                                class="lightbox-image" data-fancybox="gallery"><img
                                                    src="assets/images/news/gallery-2.jpg" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="assets/images/news/gallery-3.jpg"
                                                class="lightbox-image" data-fancybox="gallery"><img
                                                    src="assets/images/news/gallery-3.jpg" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="assets/images/news/gallery-4.jpg"
                                                class="lightbox-image" data-fancybox="gallery"><img
                                                    src="assets/images/news/gallery-4.jpg" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="assets/images/news/gallery-5.jpg"
                                                class="lightbox-image" data-fancybox="gallery"><img
                                                    src="assets/images/news/gallery-5.jpg" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="assets/images/news/gallery-6.jpg"
                                                class="lightbox-image" data-fancybox="gallery"><img
                                                    src="assets/images/news/gallery-6.jpg" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="assets/images/news/gallery-7.jpg"
                                                class="lightbox-image" data-fancybox="gallery"><img
                                                    src="assets/images/news/gallery-7.jpg" alt=""></a></figure>
                                    </li>
                                    <li>
                                        <figure class="image-box"><a href="assets/images/news/gallery-8.jpg"
                                                class="lightbox-image" data-fancybox="gallery"><img
                                                    src="assets/images/news/gallery-8.jpg" alt=""></a></figure>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget tags-widget">
                            <div class="widget-title">
                                <h3>Popular Tags</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="tags-list clearfix">
                                    <li><a href="blog-details.html"># Agents</a></li>
                                    <li><a href="blog-details.html"># Business</a></li>
                                    <li><a href="blog-details.html"># Career</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
@endsection
