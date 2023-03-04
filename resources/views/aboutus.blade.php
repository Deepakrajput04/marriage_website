@extends('layouts.newlayout')

@section('content')


<div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.svg" alt="">
                </div>
            </div>
        </div>
        
        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>About Us</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index-2.html">Home</a></li>
                                <li>About</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
        <!-- start of wpo-about-section -->
        <section class="wpo-about-section section-padding">
            <div class="container">
                <div class="wpo-about-wrap">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-item wow fadeInLeftSlow" data-wow-duration="1500ms">
                                <div class="wpo-about-img">
                                    <img src="assets/images/about/1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="wpo-about-text wow fadeInRightSlow" data-wow-duration="1600ms">
                                <h2>About Us</h2>
                                <h4>We Are The Best Wedding Planner & Decor.</h4>
                                <p>Convallis gravida odio viverra nisi, aliquam sem netus. Sed at semper at lacus.
                                    Nam integer nunc pellentesque nunc pulvinar donec scelerisque. Malesuada massa
                                    facilisis aliquam nunc ut nisl tincidunt nibh. Massa feugiat vitae habitant
                                    metus viverra. Praesent massa habitant sapien odio ac scelerisque praesent id.
                                </p>
                                <a href="contact.html" class="theme-btn">APPOINMENT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-about-wrap">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12 order-lg-1 order-2">
                            <div class="wpo-about-text wow fadeInLeftSlow" data-wow-duration="1700ms">
                                <h2>Our Story</h2>
                                <h4>Our Company Has a Great Mission & Policy</h4>
                                <p>Convallis gravida odio viverra nisi, aliquam sem netus. Sed at semper at lacus.
                                    Nam integer nunc pellentesque nunc pulvinar donec scelerisque. Malesuada massa
                                    facilisis aliquam nunc ut nisl tincidunt nibh. Massa feugiat vitae habitant
                                    metus viverra. Praesent massa habitant sapien odio ac scelerisque praesent id.
                                </p>
                                <a href="contact.html" class="theme-btn">CONTACT US</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12 order-lg-2 order-1">
                            <div class="wpo-about-item wow fadeInRightSlow" data-wow-duration="1800ms">
                                <div class="wpo-about-img">
                                    <img src="assets/images/about/2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-about-section -->
        <!-- start wpo-Service-section -->
        <section class="wpo-Service-section section-padding pt-0" id="Service">
            <div class="container">
                <div class="wpo-section-title">
                    <h4>Our Services</h4>
                    <h2>WHAT WE OFFER FOR YOU</h2>
                </div>
                <div class="wpo-Service-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-Service-item">
                                <div class="wpo-Service-img">
                                    <img src="assets/images/service/img-1.jpg" alt="">
                                </div>
                                <div class="wpo-Service-text">
                                    <a href="service-single.html">Wedding Dress</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-Service-item">
                                <div class="wpo-Service-img">
                                    <img src="assets/images/service/img-2.jpg" alt="">
                                </div>
                                <div class="wpo-Service-text">
                                    <a href="service-single.html">Event Planning</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-Service-item">
                                <div class="wpo-Service-img">
                                    <img src="assets/images/service/img-3.jpg" alt="">
                                </div>
                                <div class="wpo-Service-text">
                                    <a href="service-single.html">Photography</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-Service-item">
                                <div class="wpo-Service-img">
                                    <img src="assets/images/service/img-4.jpg" alt="">
                                </div>
                                <div class="wpo-Service-text">
                                    <a href="service-single.html">Cake Design</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end Service-section -->
        <!-- start wpo-fun-fact-section -->
        <section class="wpo-fun-fact-section">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-fun-fact-grids clearfix">
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="1360">00</span>+</h3>
                                    <p>Happy Couples</p>
                                </div>
                                <div class="flower"><img src="assets/images/funfact/1.png" alt=""></div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="503">00</span>+</h3>
                                    <p>Decoration</p>
                                </div>
                                <div class="flower"><img src="assets/images/funfact/2.png" alt=""></div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="1530">00</span>+</h3>
                                    <p>Wedding</p>
                                </div>
                                <div class="flower"><img src="assets/images/funfact/3.png" alt=""></div>
                            </div>
                            <div class="grid">
                                <div class="info">
                                    <h3><span class="odometer" data-count="306">00</span>+</h3>
                                    <p>Location</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end wpo-fun-fact-section -->
        <!-- start wpo-portfolio-section -->
        <section class="wpo-portfolio-section section-padding pt-120">
            <div class="container">
                <div class="wpo-section-title">
                    <h4>Amazing Work</h4>
                    <h2>FEATURED WEDDING STORY</h2>
                </div>
                <div class="sortable-gallery">
                    <div class="gallery-filters"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-grids gallery-container clearfix">
                                <div class="grid wow fadeInUp" data-wow-duration="1000ms">
                                    <div class="img-holder">
                                        <img src="assets/images/portfolio/1.jpg" alt="">
                                        <div class="portfolio-content">
                                            <h4><a href="portfolio-single.html">Alia & Robert</a></h4>
                                            <span>Chaina - 14 Sep 2019</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid wow fadeInUp" data-wow-duration="1300ms">
                                    <div class="img-holder">
                                        <img src="assets/images/portfolio/2.jpg" alt="">
                                        <div class="portfolio-content">
                                            <h4><a href="portfolio-single.html">Rihanna & William</a></h4>
                                            <span>Austria - 28 Oct 2020</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid wow fadeInUp" data-wow-duration="1600ms">
                                    <div class="img-holder">
                                        <img src="assets/images/portfolio/4.jpg" alt="">
                                        <div class="portfolio-content">
                                            <h4><a href="portfolio-single.html">Kate & Johnthan</a></h4>
                                            <span>London - 22 June 2022</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid wow fadeInUp" data-wow-duration="1900ms">
                                    <div class="img-holder">
                                        <img src="assets/images/portfolio/3.jpg" alt="">
                                        <div class="portfolio-content">
                                            <h4><a href="portfolio-single.html">Sarah & Daniel</a></h4>
                                            <span>Singapore - 16 May 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end wpo-portfolio-section -->
        <!-- start wpo-banner-section -->
        <section class="wpo-banner-section">
            <h4>We Are Waiting for Celebrate Your Love</h4>
        </section>
        <!-- end wpo-banner-section -->
        <!-- start wpo-team-section -->
        <section class="wpo-team-section section-padding">
            <div class="container">
                <div class="wpo-section-title">
                    <h4>Our Organizers</h4>
                    <h2>Awesome Team Member</h2>
                </div>
                <div class="wpo-team-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/img-1.jpg" alt="">
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="team-single.html">Margarate Bennet</a></h3>
                                    <span>Dress Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1200ms">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/img-2.jpg" alt="">
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="team-single.html">Robert William</a></h3>
                                    <span>Wedding Planner</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1400ms">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/img-3.jpg" alt="">
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="team-single.html">Henry D’suza</a></h3>
                                    <span>Assistant</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1600ms">
                                <div class="wpo-team-img">
                                    <img src="assets/images/team/img-4.jpg" alt="">
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="team-single.html">Jenefer Abram</a></h3>
                                    <span>Lead Assistant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-team-section -->
        
        <!-- start wpo-pricing-section -->
        <section class="wpo-pricing-section section-padding pt-0">
            <div class="container">
                <div class="wpo-section-title">
                    <h4>Choose Yours</h4>
                    <h2>Wedding Packages</h2>
                </div>
                <div class="wpo-pricing-wrap">
                    <div class="row">
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-text">
                                        <h4>Basic Package</h4>
                                        <h2>$250<span>/Monthly</span></h2>
                                    </div>
                                </div>
                                <div class="shape"><img src="assets/images/pricing/p-shape.svg" alt=""></div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Stylish makeup for bride.</li>
                                            <li>Top label arrengement</li>
                                            <li>Amazing meal & breakfast</li>
                                            <li>Manicure & Pedicure</li>
                                            <li>Full body Polish</li>
                                        </ul>
                                        <a class="theme-btn" href="pricing.html">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-text">
                                        <h4>Standard Package</h4>
                                        <h2>$550<span>/Monthly</span></h2>
                                    </div>
                                </div>
                                <div class="shape"><img src="assets/images/pricing/p-shape.svg" alt=""></div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Stylish makeup for bride.</li>
                                            <li>Top label arrengement</li>
                                            <li>Amazing meal & breakfast</li>
                                            <li>Manicure & Pedicure</li>
                                            <li>Full body Polish</li>
                                        </ul>
                                        <a class="theme-btn" href="pricing.html">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6 col-12">
                            <div class="wpo-pricing-item">
                                <div class="wpo-pricing-top">
                                    <div class="wpo-pricing-text">
                                        <h4>Luxary Package</h4>
                                        <h2>$880<span>/Monthly</span></h2>
                                    </div>
                                </div>
                                <div class="shape"><img src="assets/images/pricing/p-shape.svg" alt=""></div>
                                <div class="wpo-pricing-bottom">
                                    <div class="wpo-pricing-bottom-text">
                                        <ul>
                                            <li>Stylish makeup for bride.</li>
                                            <li>Top label arrengement</li>
                                            <li>Amazing meal & breakfast</li>
                                            <li>Manicure & Pedicure</li>
                                            <li>Full body Polish</li>
                                        </ul>
                                        <a class="theme-btn" href="pricing.html">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start wpo-pricing-section -->
        <!-- start wpo-partners-section -->
        <section class="wpo-partners-section section-padding">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider owl-carousel">
                            <div class="grid">
                                <img src="assets/images/partners/1.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/2.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/3.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/4.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/5.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-partners-section-->

        
        <!-- color-switcher -->
        <div class="color-switcher-wrap">
            <div class="color-switcher-item">
                <div class="color-toggle-btn">
                    <i class="fa fa-cog"></i>
                </div>
                <ul id="switcher">
                    <li class="btn btn1" id="Button1"></li>
                    <li class="btn btn2" id="Button2"></li>
                    <li class="btn btn3" id="Button3"></li>
                    <li class="btn btn4" id="Button4"></li>
                    <li class="btn btn5" id="Button5"></li>
                    <li class="btn btn6" id="Button6"></li>
                    <li class="btn btn7" id="Button7"></li>
                    <li class="btn btn8" id="Button8"></li>
                    <li class="btn btn9" id="Button9"></li>
                    <li class="btn btn10" id="Button10"></li>
                    <li class="btn btn11" id="Button11"></li>
                    <li class="btn btn12" id="Button12"></li>
                </ul>
            </div>
        </div>
    </div>
@endsection