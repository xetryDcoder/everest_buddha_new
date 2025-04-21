 <!-- main header -->
 <header class="main-header">
     <!-- header-top -->
     <div class="header-top">
         <div class="outer-container">
             <div class="top-inner">
                 <div class="top-left">
                     <ul class="info clearfix">
                         <li><i class="icon-1"></i><a
                                 href="mailto:everestbudhha19@gmail.com">everestbudhha19@gmail.com</a></li>
                         <li><i class="icon-2"></i>New Baneyswor, Kathamndu</li>
                         <li><i class="icon-3"></i>01-4535145, 9802397310 (Whatsapp)</li>
                     </ul>
                 </div>
                 <div class="top-right">
                     <ul class="social-links clearfix">
                         <li><a href="index.html"><i class="icon-4"></i></a></li>
                         <li><a href="index.html"><i class="icon-5"></i></a></li>
                         <li><a href="index.html"><i class="icon-6"></i></a></li>
                     </ul>
                     <div class="btn-box">
                         <a href="/contact"><span>Contact Us</span></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- header-lower -->
     <div class="header-lower">
         <div class="outer-box clearfix">
             <div class="logo-box">
                 <figure class="logo" style="width: 220px;"><a href="index.html"><img src="assets/images/logo.png"
                             alt=""></a></figure>
             </div>
             <div class="nav-outer">
                 <div class="menu-area clearfix">
                     <!--Mobile Navigation Toggler-->
                     <div class="mobile-nav-toggler">
                         <i class="icon-bar"></i>
                         <i class="icon-bar"></i>
                         <i class="icon-bar"></i>
                     </div>
                     <nav class="main-menu navbar-expand-md navbar-light">
                         <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                             <ul class="navigation clearfix">
                                 <li class="current"><a href="/">Home</a>
                                 </li>
                                 <li class="dropdown"><a href="index.html">Country</a>
                                     <ul>
                                         @foreach ($countries as $country)
                                             <li><a href="/country/{{ $country->slug }}">
                                                     {{ $country->name }}
                                                 </a>
                                             </li>
                                         @endforeach
                                     </ul>
                                 </li>
                                 <li class="dropdown"><a href="#">Courses</a>
                                     <ul>
                                         <li><a href="#">Engineering</a></li>
                                         <li><a href="#">IT</a></li>
                                         <li><a href="#">Management</a></li>
                                         <li><a href="#">Finance</a></li>
                                         <li><a href="#">Accounting</a></li>
                                         <li><a href="#">Hospitality</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="services.html">Services</a>
                                 </li>
                                 <li class="dropdown"><a href="index.html">Universities</a>
                                     <ul>
                                         <li class="dropdown"><a href="index.html">Australia</a>
                                             <ul>
                                                 <li><a href="https://www.unimelb.edu.au" target="_blank">University of
                                                         Melbourne</a></li>
                                                 <li><a href="https://www.anu.edu.au" target="_blank">Australian
                                                         National University (ANU)</a></li>
                                                 <li><a href="https://www.sydney.edu.au" target="_blank">University of
                                                         Sydney</a></li>
                                                 <li><a href="https://www.uq.edu.au" target="_blank">University of
                                                         Queensland (UQ)</a></li>
                                                 <li><a href="https://www.unsw.edu.au" target="_blank">University of New
                                                         South Wales (UNSW)</a></li>
                                                 <li><a href="https://www.monash.edu" target="_blank">Monash
                                                         University</a></li>
                                                 <li><a href="https://www.uwa.edu.au" target="_blank">University of
                                                         Western Australia (UWA)</a></li>
                                                 <li><a href="https://www.adelaide.edu.au" target="_blank">University of
                                                         Adelaide</a></li>
                                                 <li><a href="https://www.uts.edu.au" target="_blank">University of
                                                         Technology Sydney (UTS)</a></li>
                                                 <li><a href="https://www.rmit.edu.au" target="_blank">RMIT
                                                         University</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">United States (USA):</a>
                                             <ul>
                                                 <li><a href="https://www.harvard.edu" target="_blank">Harvard
                                                         University</a></li>
                                                 <li><a href="https://www.stanford.edu" target="_blank">Stanford
                                                         University</a></li>
                                                 <li><a href="https://www.mit.edu" target="_blank">Massachusetts
                                                         Institute of Technology (MIT)</a></li>
                                                 <li><a href="https://www.berkeley.edu" target="_blank">University of
                                                         California, Berkeley</a></li>
                                                 <li><a href="https://www.caltech.edu" target="_blank">California
                                                         Institute of Technology (Caltech)</a></li>
                                                 <li><a href="https://www.princeton.edu" target="_blank">Princeton
                                                         University</a></li>
                                                 <li><a href="https://www.uchicago.edu" target="_blank">University of
                                                         Chicago</a></li>
                                                 <li><a href="https://www.columbia.edu" target="_blank">Columbia
                                                         University</a></li>
                                                 <li><a href="https://www.yale.edu" target="_blank">Yale
                                                         University</a></li>
                                                 <li><a href="https://www.upenn.edu" target="_blank">University of
                                                         Pennsylvania</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">United Kingdom (UK):</a>
                                             <ul>
                                                 <li><a href="https://www.ox.ac.uk" target="_blank">University of
                                                         Oxford</a></li>
                                                 <li><a href="https://www.cam.ac.uk" target="_blank">University of
                                                         Cambridge</a></li>
                                                 <li><a href="https://www.imperial.ac.uk" target="_blank">Imperial
                                                         College London</a></li>
                                                 <li><a href="https://www.lse.ac.uk" target="_blank">London School of
                                                         Economics and Political Science (LSE)</a></li>
                                                 <li><a href="https://www.ucl.ac.uk" target="_blank">University
                                                         College London (UCL)</a></li>
                                                 <li><a href="https://www.ed.ac.uk" target="_blank">University of
                                                         Edinburgh</a></li>
                                                 <li><a href="https://www.manchester.ac.uk" target="_blank">University
                                                         of Manchester</a></li>
                                                 <li><a href="https://www.kcl.ac.uk" target="_blank">King’s College
                                                         London</a></li>
                                                 <li><a href="https://warwick.ac.uk" target="_blank">University of
                                                         Warwick</a></li>
                                                 <li><a href="https://www.bristol.ac.uk" target="_blank">University of
                                                         Bristol</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">Canada:</a>
                                             <ul>
                                                 <li><a href="https://www.utoronto.ca" target="_blank">University of
                                                         Toronto</a></li>
                                                 <li><a href="https://www.mcgill.ca" target="_blank">McGill
                                                         University</a></li>
                                                 <li><a href="https://www.ubc.ca" target="_blank">University of
                                                         British Columbia (UBC)</a></li>
                                                 <li><a href="https://www.umontreal.ca" target="_blank">University of
                                                         Montreal</a></li>
                                                 <li><a href="https://www.ualberta.ca" target="_blank">University of
                                                         Alberta</a></li>
                                                 <li><a href="https://www.mcmaster.ca" target="_blank">McMaster
                                                         University</a></li>
                                                 <li><a href="https://www.uottawa.ca" target="_blank">University of
                                                         Ottawa</a></li>
                                                 <li><a href="https://www.uwo.ca" target="_blank">Western
                                                         University</a></li>
                                                 <li><a href="https://www.queensu.ca" target="_blank">Queen’s
                                                         University</a></li>
                                                 <li><a href="https://www.sfu.ca" target="_blank">Simon Fraser
                                                         University</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">New Zealand:</a>
                                             <ul>
                                                 <li><a href="https://www.auckland.ac.nz" target="_blank">University
                                                         of Auckland</a></li>
                                                 <li><a href="https://www.otago.ac.nz" target="_blank">University of
                                                         Otago</a></li>
                                                 <li><a href="https://www.victoria.ac.nz" target="_blank">Victoria
                                                         University of Wellington</a></li>
                                                 <li><a href="https://www.canterbury.ac.nz" target="_blank">University
                                                         of Canterbury</a></li>
                                                 <li><a href="https://www.aut.ac.nz" target="_blank">Auckland
                                                         University of Technology (AUT)</a></li>
                                                 <li><a href="https://www.massey.ac.nz" target="_blank">Massey
                                                         University</a></li>
                                                 <li><a href="https://www.waikato.ac.nz" target="_blank">University of
                                                         Waikato</a></li>
                                                 <li><a href="https://www.lincoln.ac.nz" target="_blank">Lincoln
                                                         University</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">South Korea (English-Taught
                                                 Program):</a>
                                             <ul>
                                                 <li><a href="https://en.snu.ac.kr" target="_blank">Seoul National
                                                         University (SNU)</a></li>
                                                 <li><a href="https://www.kaist.ac.kr" target="_blank">KAIST (Korea
                                                         Advanced Institute of Science and Technology)</a></li>
                                                 <li><a href="https://www.postech.ac.kr" target="_blank">POSTECH
                                                         (Pohang University of Science and Technology)</a></li>
                                                 <li><a href="https://www.yonsei.ac.kr" target="_blank">Yonsei
                                                         University</a></li>
                                                 <li><a href="https://www.korea.ac.kr" target="_blank">Korea
                                                         University</a></li>
                                                 <li><a href="https://www.hanyang.ac.kr" target="_blank">Hanyang
                                                         University</a></li>
                                                 <li><a href="https://www.skku.edu" target="_blank">Sungkyunkwan
                                                         University (SKKU)</a></li>
                                                 <li><a href="https://www.ewha.ac.kr" target="_blank">Ewha Womans
                                                         University</a></li>
                                                 <li><a href="https://www.sufs.ac.kr" target="_blank">Seoul University
                                                         of Foreign Studies (SUFS)</a></li>
                                                 <li><a href="https://www.inha.ac.kr" target="_blank">Inha
                                                         University</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">Japan (English-Taught Program):</a>
                                             <ul>
                                                 <li><a href="https://www.u-tokyo.ac.jp" target="_blank">University of
                                                         Tokyo</a></li>
                                                 <li><a href="https://www.keio.ac.jp" target="_blank">Keio
                                                         University</a></li>
                                                 <li><a href="https://www.waseda.jp" target="_blank">Waseda
                                                         University</a></li>
                                                 <li><a href="https://www.sophia.ac.jp" target="_blank">Sophia
                                                         University</a></li>
                                                 <li><a href="https://www.kyoto-u.ac.jp" target="_blank">Kyoto
                                                         University</a></li>
                                                 <li><a href="https://www.hit-u.ac.jp" target="_blank">Hitotsubashi
                                                         University</a></li>
                                                 <li><a href="https://www.titech.ac.jp" target="_blank">Tokyo
                                                         Institute of Technology</a></li>
                                                 <li><a href="https://www.hosei.ac.jp" target="_blank">Hosei
                                                         University</a></li>
                                                 <li><a href="https://www.chuo-u.ac.jp" target="_blank">Chuo
                                                         University</a></li>
                                                 <li><a href="https://www.rikkyo.ac.jp" target="_blank">Rikkyo
                                                         University</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown"><a href="#">Europe (English-Taught Program):</a>
                                             <ul>
                                                 <li><a href="https://ethz.ch" target="_blank">ETH Zurich
                                                         (Switzerland)</a></li>
                                                 <li><a href="https://www.tum.de" target="_blank">Technical University
                                                         of Munich (Germany)</a></li>
                                                 <li><a href="https://www.uva.nl" target="_blank">University of
                                                         Amsterdam (Netherlands)</a></li>
                                                 <li><a href="https://www.ku.dk" target="_blank">University of
                                                         Copenhagen (Denmark)</a></li>
                                                 <li><a href="https://www.lu.se" target="_blank">Lund University
                                                         (Sweden)</a></li>
                                                 <li><a href="https://www.ub.edu" target="_blank">University of
                                                         Barcelona (Spain)</a></li>
                                                 <li><a href="https://www.universite-paris-saclay.fr"
                                                         target="_blank">University of Paris-Saclay (France)</a></li>
                                                 <li><a href="https://www.universiteitleiden.nl"
                                                         target="_blank">Leiden University (Netherlands)</a></li>
                                                 <li><a href="https://www.kuleuven.be" target="_blank">KU Leuven
                                                         (Belgium)</a></li>
                                                 <li><a href="https://www.univie.ac.at" target="_blank">University of
                                                         Vienna (Austria)</a></li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="dropdown"><a href="index.html">Scholarship </a>
                                     <ul>
                                         <li><a href="scholarships_austrilia.html"> Scholarships in Australia</a></li>
                                         <li><a href="scholarships_austrilia.html">Scholarships in USA</a></li>
                                         <li><a href="scholarships_austrilia.html">Scholarship in Canada</a></li>
                                         <li><a href="scholarships_austrilia.html">Scholarship in New Zealand</a></li>
                                         <li><a href="scholarships_austrilia.html">Scholarship in UK</a></li>
                                         <li><a href="scholarships_austrilia.html">Scholarship in Europe</a></li>
                                         <li><a href="scholarships_austrilia.html">Scholarship in South Korea</a></li>
                                         <li><a href="scholarships_austrilia.html">Scholarships in Japan</a></li>

                                     </ul>
                                 </li>
                                 <li class="dropdown"><a href="index.html">Test Prepearation </a>
                                     <ul>
                                         <li><a href="ilets.html">ILETS</a></li>
                                         <li><a href="gre.html">GRE</a></li>
                                         <li><a href="pte.html">PTE</a></li>
                                         <li><a href="GMAT.html">GMAT</a></li>
                                     </ul>
                                 </li>
                                 <li><a href="about.html">About Us</a></li>
                             </ul>
                         </div>
                     </nav>
                 </div>
             </div>
         </div>
     </div>

     <!--sticky Header-->
     <div class="sticky-header">
         <div class="auto-container">
             <div class="outer-box">
                 <div class="logo-box">
                     <figure class="logo"><a href="index.html"><img src="assets/images/logo.png"
                                 alt=""></a>
                     </figure>
                 </div>
                 <div class="menu-area clearfix">
                     <nav class="main-menu clearfix">
                         <!--Keep This Empty / Menu will come through Javascript-->
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- main-header end -->


 <!-- Mobile Menu  -->
 <div class="mobile-menu">
     <div class="menu-backdrop"></div>
     <div class="close-btn"><i class="fas fa-times"></i></div>

     <nav class="menu-box">
         <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""
                     title=""></a>
         </div>
         <div class="menu-outer">
             <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
         </div>
         <div class="contact-info">
             <h4>Contact Info</h4>
             <ul>
                 <li>Opposit to Global Collge, New Baneswor, Kathmandu</li>
                 <li><a href="tel:+9779802397310">01-4535145, 9802397310</a></li>
                 <li><a href="mailto:everestbudhha19@gmail.com">everestbudhha19@gmail.com</a></li>
             </ul>
         </div>
         <div class="social-links">
             <ul class="clearfix">
                 <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                 <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                 <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                 <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                 <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
             </ul>
         </div>
     </nav>
 </div><!-- End Mobile Menu -->
