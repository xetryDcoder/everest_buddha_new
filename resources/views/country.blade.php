@extends('layouts.app')

<link href="{{ asset('assets/css/elements-css/coaching-details.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/elements-css/sidebar.css') }}" rel="stylesheet">

@section('content')
    <!-- page-title -->
    <section class="page-title centred p_relative">
        <div class="bg-layer" style="background-image: url(assets/images/resource/austrilia.jpg);"></div>
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-67.png);"></div>
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
                                <figure class="image-box"><img src="assets/images/resource/austrilia.jpg" alt="">
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
                                <div class="icon-shape"><img src="assets/images/icons/icon-15.png" alt=""></div>
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
                            <figure class="image-box"><img src="{{ asset($country->banner_photo) }}"  alt="">
                            </figure>
                        </div>
                        <div class="tabs-box">
                            <div class="tab-btn-box mb_40">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">More about Austrilia</li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="content-box">
                                        <div class="content-one mb_40">
                                            <div class="row align-items-center">
                                                <div class="col-lg-7 col-md-6 col-sm-12 text-column">
                                                    <div class="text">
                                                        <h3>World-Renowned Universities & High-Quality Education</h3>
                                                        <p>Australia is globally recognized for its academic excellence,
                                                            ranking among the top education systems in the world. According
                                                            to the QS World University Rankings 2024, seven Australian
                                                            universities are ranked in the top 100, reflecting their
                                                            commitment to research, innovation, and teaching standards.</p>
                                                        <h5 class="font-weight-bold">Top Universities Include:</h5>
                                                        <ul class="mt-1">
                                                            <li>- The University of Melbourne</li>
                                                            <li>- The Australian National University (ANU)</li>
                                                            <li>- The University of Sydney</li>
                                                            <li>- The University of Queensland (UQ)</li>
                                                            <li>- The University of New South Wales (UNSW)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-6 col-sm-12 image-column">
                                                    <figure class="image-box"><img
                                                            src="assets/images/resource/australia.png" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="text mt_20">
                                                <p>These institutions are known for their state-of-the-art facilities,
                                                    expert faculty, and strong industry connections. An Australian degree is
                                                    highly regarded worldwide, giving graduates a competitive edge in the
                                                    global job market.</p>
                                                <p>Whether you choose a traditional academic path or a more specialized
                                                    professional program, studying in Australia guarantees a globally
                                                    respected qualification and access to future career opportunities both
                                                    locally and internationally.</p>
                                                <h3>Wide Range of Courses & Flexible Study Options</h3>
                                                <p>Australia's education system is designed to cater to diverse student
                                                    needs and interests, offering a wide variety of programs across all
                                                    major disciplines—including:</p>
                                                <ul>
                                                    <li>- Engineering & Technology</li>
                                                    <li>- Medicine & Health Sciences</li>
                                                    <li>- Business & Management</li>
                                                    <li>- Information Technology (IT)</li>
                                                    <li>- Arts & Humanities</li>
                                                    <li>- Environmental Science</li>
                                                    <li>- Education & Social Work</li>

                                                </ul>
                                                <h3>Flexible Learning Opportunities:</h3>
                                                <ul>
                                                    <li><strong>Double Degrees:</strong> Combine two areas of study to
                                                        broaden your expertise and career options.</li>
                                                    <li><strong>Pathway Programs:</strong> Ideal for students who need
                                                        additional academic or English language preparation before entering
                                                        a degree program.</li>
                                                    <li><strong>Online & Blended Learning:</strong> Many universities offer
                                                        digital learning formats, allowing greater flexibility for students
                                                        balancing work or personal commitments.</li>
                                                </ul>
                                                <p>Australian institutions focus on industry-aligned curricula, ensuring
                                                    students develop practical skills, critical thinking, and real-world
                                                    experience relevant to today’s job market. With a hands-on approach and
                                                    emphasis on innovation, Australia equips students for success in their
                                                    chosen fields.</p>

                                                <h3>Multicultural Environment:</h3>
                                                <p>Australia is one of the most culturally diverse countries, with students
                                                    from all over the world choosing to study there. This multicultural
                                                    environment allows you to interact with people from different cultures,
                                                    fostering a global perspective and broadening your worldview.</p>
                                                <ul>
                                                    <li><strong>Global Networking Opportunities:</strong> You will have the
                                                        chance to make friends and connections from around the world, which
                                                        can be valuable in both your personal and professional life.</li>
                                                    <li><strong>Supportive International Student Community:</strong>
                                                        Australia provides a welcoming atmosphere for international
                                                        students, with numerous support services, including language
                                                        assistance, cultural programs, and student groups.</li>
                                                </ul>

                                                <h3 class="mt-3">Work Opportunities for Students:</h3>
                                                <p>One of the key advantages of studying in Australia is the ability to work
                                                    while you study. International students are allowed to work part-time
                                                    during their studies, helping them gain valuable work experience and
                                                    support their living expenses.</p>
                                                <ul>
                                                    <li><strong>Work While You Study:</strong> Students can work up to 20
                                                        hours per week during the semester and full-time during holidays,
                                                        providing a great way to earn extra income and build professional
                                                        experience.</li>
                                                    <li><strong>Post-Study Work Visa:</strong> After completing your
                                                        studies, you may be eligible for a Post-Study Work Visa, allowing
                                                        you to stay and work in Australia for up to four years (depending on
                                                        your qualification level).</li>
                                                </ul>

                                                <h3 class="mt-3">Beautiful and Safe Environment:</h3>
                                                <p>Australia is renowned for its stunning natural beauty, with breathtaking
                                                    landscapes, beaches, and unique wildlife. Whether you're exploring the
                                                    Great Barrier Reef, hiking in the Blue Mountains, or relaxing on the
                                                    beaches of Bondi, there’s always something exciting to discover.</p>
                                                <ul>
                                                    <li><strong>Safe and Secure:</strong> Australia ranks highly on the
                                                        global safety index. It is known for its low crime rates and
                                                        well-maintained infrastructure, ensuring a safe living environment
                                                        for students.</li>
                                                    <li><strong>Great Climate:</strong> With a temperate climate, Australia
                                                        offers an enjoyable lifestyle with plenty of opportunities to
                                                        explore outdoor activities and enjoy an active lifestyle.</li>
                                                </ul>

                                                <h3 class="mt-3">Career Opportunities and Industry Connections:</h3>
                                                <p>Australia offers a robust job market with a variety of career
                                                    opportunities across various sectors, including technology, healthcare,
                                                    engineering, business, and creative industries. Many universities have
                                                    strong ties with industry leaders, providing students with opportunities
                                                    for internships, industry projects, and networking events.</p>
                                                <ul>
                                                    <li><strong>Industry Connections:</strong> Australian universities often
                                                        collaborate with leading companies, giving students the opportunity
                                                        to gain practical experience and valuable industry exposure.</li>
                                                    <li><strong>Job Prospects:</strong> Australia’s strong economy and low
                                                        unemployment rate mean that graduates are in high demand. The
                                                        country has specific work visas for skilled workers, which increases
                                                        your chances of finding employment post-graduation.</li>
                                                </ul>

                                                <h3 class="mt-3">Affordable Education and Scholarships:</h3>
                                                <p>Compared to other study destinations like the UK and the US, studying in
                                                    Australia can be more affordable. While tuition fees vary depending on
                                                    the course and university, Australia offers numerous scholarships for
                                                    international students to help reduce the financial burden.</p>
                                                <ul>
                                                    <li><strong>Scholarships:</strong> Many universities offer merit-based
                                                        and need-based scholarships to international students. Scholarships
                                                        can cover part or all of your tuition fees and living expenses.</li>
                                                    <li><strong>Affordable Living:</strong> While major cities like Sydney
                                                        and Melbourne may have higher living costs, there are plenty of
                                                        affordable accommodation options and cost-effective living solutions
                                                        available in other parts of the country.</li>
                                                </ul>

                                                <h3 class="mt-3">High Quality of Life:</h3>
                                                <p>Australia is known for its high quality of life, with excellent
                                                    healthcare, education, and public services. The country offers a perfect
                                                    balance between work, study, and leisure, with a strong focus on
                                                    well-being.</p>
                                                <ul>
                                                    <li><strong>Healthcare System:</strong> Australia provides world-class
                                                        healthcare services through Medicare, which covers many medical
                                                        expenses for international students.</li>
                                                    <li><strong>Lifestyle:</strong> From outdoor sports to vibrant arts and
                                                        culture scenes, Australia offers an active and fulfilling lifestyle
                                                        with opportunities for relaxation and adventure.</li>
                                                </ul>

                                                <h3 class="mt-3">Beautiful Student Cities:</h3>
                                                <p>Australia is home to some of the world’s most vibrant and
                                                    student-friendly cities, offering everything from affordable housing and
                                                    excellent public transportation to social events and cultural
                                                    experiences.</p>
                                                <ul>
                                                    <li><strong>Sydney and Melbourne:</strong> Known for their cosmopolitan
                                                        atmosphere, world-class amenities, and strong student communities.
                                                    </li>
                                                    <li><strong>Brisbane, Perth, and Adelaide:</strong> Smaller cities
                                                        offering a more relaxed environment, lower living costs, and
                                                        close-knit communities.</li>
                                                </ul>

                                                <h3 class="mt-3">Conclusion:</h3>
                                                <p>Australia is a prime destination for students looking to pursue higher
                                                    education, offering top-tier universities, an inclusive and diverse
                                                    culture, and a high standard of living. Whether you’re seeking quality
                                                    education, career opportunities, or a unique cultural experience,
                                                    studying in Australia offers a well-rounded experience that can set you
                                                    up for success in the global job market.</p>
                                                <p><strong>Start your study abroad journey in Australia today!</strong> Let
                                                    us help you with the application process, scholarship guidance, and more
                                                    to make your dream of studying in Australia a reality.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-two pb_30">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <figure class="image-box"><img src="assets/images/resource/austrilia.jpg"
                                                        alt=""></figure>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <figure class="image-box"><img src="assets/images/resource/austrilia.jpg"
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
