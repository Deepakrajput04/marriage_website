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
        <!-- end preloader -->
        <!-- Start header -->
        
        <!-- end of header -->
        <!-- start of wpo-hero-section -->
        <section class="wpo-hero-slider wpo-hero-style-2">
            <div class="wedding-announcement">
                <div class="couple-text">
                    <h2 class="wow slideInUp" data-wow-duration="1s">Planning Your Everlasting Memories</h2>
                    <p class="wow slideInUp" data-wow-duration="1.8s">Let’s Make Your Day Memorable.Your Successful
                        Wedding is Our Job.</p>
                </div>
            </div>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                    @foreach($slider as $key)
                        <div class="slide-inner slide-bg-image" data-background="{{('/images/'.$key->image)}}">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-2.jpg">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-3.jpg">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-4.jpg">
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    @endforeach
                </div>
                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- end of wpo-hero-section-->
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
                    @foreach($services as $top) 
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-Service-item">
                                <div class="wpo-Service-img">
                                    <img src="{{url('/images/'.$top->image)}}" alt="">
                                </div>
                                <div class="wpo-Service-text">
                                    <a href="service-single.html">{{$top->title}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
        <!--Start wpo-testimonial-section-->
        <section class="wpo-testimonial-section section-padding">
            <div class="container">
                <div class="wpo-testimonial-wrap">
                    <div class="row align-items-center">
                        <div class="col col-lg-7 wow fadeInLeftSlow" data-wow-duration="1700ms">
                            <div class="slider-for">
                                <div class="testimonial-img">
                                    <img src="assets/images/testimonial/img-1.jpg" alt="">
                                </div>
                                <div class="testimonial-img">
                                    <img src="assets/images/testimonial/img-2.jpg" alt="">
                                </div>
                                <div class="testimonial-img">
                                    <img src="assets/images/testimonial/img-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-5 wow fadeInRightSlow" data-wow-duration="1700ms">
                            <div class="wpo-testimonial-items">
                                <div class="slider-nav">
                                    <div class="wpo-testimonial-item">
                                        <div class="wpo-testimonial-text">
                                            <i class="fi flaticon-quotation"></i>
                                            <p>Varius aenean fringilla consectetur adipiscing felis, lectus. Id eros,
                                                porta quam quis proin non vulputate lacinia imperdiet. Mus ut amet
                                                tortor iEros, sed at semper sed in tempor ultrices sed. Id sem nulla
                                                quisque vel duiscoue necrd.</p>
                                            <div class="wpo-testimonial-text-btm">
                                                <h3>Marlin & Williamson</h3>
                                                <span>Wedding- 23.05.2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpo-testimonial-item">
                                        <div class="wpo-testimonial-text">
                                            <i class="fi flaticon-quotation"></i>
                                            <p>Varius aenean fringilla consectetur adipiscing felis, lectus. Id eros,
                                                porta quam quis proin non vulputate lacinia imperdiet. Mus ut amet
                                                tortor iEros, sed at semper sed in tempor ultrices sed. Id sem nulla
                                                quisque vel duiscoue necrd.</p>
                                            <div class="wpo-testimonial-text-btm">
                                                <h3>Rihanna & William</h3>
                                                <span>Wedding- 08.12.2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpo-testimonial-item">
                                        <div class="wpo-testimonial-text">
                                            <i class="fi flaticon-quotation"></i>
                                            <p>Varius aenean fringilla consectetur adipiscing felis, lectus. Id eros,
                                                porta quam quis proin non vulputate lacinia imperdiet. Mus ut amet
                                                tortor iEros, sed at semper sed in tempor ultrices sed. Id sem nulla
                                                quisque vel duiscoue necrd.</p>
                                            <div class="wpo-testimonial-text-btm">
                                                <h3>Sarah & Daniel</h3>
                                                <span>Wedding- 12.08.2022</span>
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
        <!--End wpo-testimonial-section-->
        <!-- start wpo-portfolio-section -->
        <section class="wpo-portfolio-section section-padding">
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
                        @foreach($organizer as $top)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-team-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-team-img">
                                    <img src="{{url('/images/'.$top->image)}}" alt="">
                                </div>
                                <div class="wpo-team-text">
                                    <h3><a href="team-single.html">{{$top->title}}</a></h3>
                                    <span>{{$top->profession}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                        
                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-team-section -->
        <!-- start wpo-partners-section -->
        <section class="wpo-partners-section">
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
        <!-- start wpo-product-section -->
        <section class="wpo-product-section section-padding">
            <div class="container">
                <div class="wpo-section-title">
                    <h4>Our Shop</h4>
                    <h2>Special Products For You</h2>
                </div>
                <div class="wpo-product-wrap">
                    <div class="row">
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-product-item wow fadeInUp" data-wow-duration="1000ms">
                                <div class="wpo-product-img">
                                    <img src="assets/images/product/1.jpg" alt="">
                                    <ul>
                                        <li><a href="wishlist.html"><i class="fi flaticon-heart"></i></a></li>
                                        <li><a href="cart.html">Add To Cart</a></li>
                                    </ul>
                                </div>
                                <div class="wpo-product-text">
                                    <h3><a href="shop-single.html">Stylish Simple Gown</a></h3>
                                    <ul>
                                        <li>$210</li>
                                        <li>$150</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-product-item wow fadeInUp" data-wow-duration="1200ms">
                                <div class="wpo-product-img">
                                    <img src="assets/images/product/2.jpg" alt="">
                                    <ul>
                                        <li><a href="wishlist.html"><i class="fi flaticon-heart"></i></a></li>
                                        <li><a href="cart.html">Add To Cart</a></li>
                                    </ul>
                                </div>
                                <div class="wpo-product-text">
                                    <h3><a href="shop-single.html">Wedding White Shoes</a></h3>
                                    <ul>
                                        <li>$160</li>
                                        <li>$110</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-product-item wow fadeInUp" data-wow-duration="1400ms">
                                <div class="wpo-product-img">
                                    <img src="assets/images/product/3.jpg" alt="">
                                    <ul>
                                        <li><a href="wishlist.html"><i class="fi flaticon-heart"></i></a></li>
                                        <li><a href="cart.html">Add To Cart</a></li>
                                    </ul>
                                </div>
                                <div class="wpo-product-text">
                                    <h3><a href="shop-single.html">Wedding Cake</a></h3>
                                    <ul>
                                        <li>$180</li>
                                        <li>$140</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="wpo-product-item wow fadeInUp" data-wow-duration="1600ms">
                                <div class="wpo-product-img">
                                    <img src="assets/images/product/4.jpg" alt="">
                                    <ul>
                                        <li><a href="wishlist.html"><i class="fi flaticon-heart"></i></a></li>
                                        <li><a href="cart.html">Add To Cart</a></li>
                                    </ul>
                                </div>
                                <div class="wpo-product-text">
                                    <h3><a href="shop-single.html">Bridal Flower Bouquets</a></h3>
                                    <ul>
                                        <li>$150</li>
                                        <li>$100</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </section>
        <!-- end wpo-product-section -->
        <!-- start of wpo-contact-section -->
        <section class="wpo-contact-section section-padding pt-0">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col col-xl-4 col-lg-3 col-md-3 col-12">
                        <div class="contact-img">
                            <img src="assets/images/contact/img-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                        <div class="wpo-contact-section-wrapper">
                            <div class="wpo-contact-form-area">
                                <div class="wpo-section-title">
                                    <h4>Lets Meet</h4>
                                    <h2>Make An Inquiry</h2>
                                </div>
                                <form method="post" class="contact-validation-active" id="contact-form-main">
                                    <div>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Name">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="date">
                                        <input class="form-control" name="date" autocomplete="off" type="text"
                                            id="datepicker" placeholder="Wedding Date">
                                    </div>
                                    <div>
                                        <select name="guest" class="form-control">
                                            <option disabled="disabled" selected>Number Of Guests</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                    <div>
                                        <select name="meal" class="form-control last">
                                            <option disabled="disabled" selected>Meal Preferences</option>
                                            <option>Chicken Soup</option>
                                            <option>Motton Kabab</option>
                                            <option>Chicken BBQ</option>
                                            <option>Mix Salad</option>
                                            <option>Beef Ribs </option>
                                        </select>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn-s3">Send An Inquiry</button>
                                        <div id="c-loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later.
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="vector-1">
                                <img src="assets/images/contact/1.png" alt="">
                            </div>
                            <div class="vector-2">
                                <img src="assets/images/contact/2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4 col-lg-3 col-md-3 col-12">
                        <div class="contact-img">
                            <img src="assets/images/contact/img-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of wpo-contact-section -->
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
        <!-- start wpo-blog-section -->
        <section class="wpo-blog-section section-padding">
            <div class="container">
                <div class="wpo-section-title">
                    <h4>Latest News</h4>
                    <h2>Read Our Wedding News</h2>
                </div>
                <div class="wpo-blog-items">
                    <div class="sortable-gallery">
                        <div class="gallery-filters"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="wpo-blog-grids gallery-container clearfix">
                                    <div class="grid">
                                        <div class="wpo-blog-item">
                                            <div class="wpo-blog-img">
                                                <img src="assets/images/blog/img-1.jpg" alt="">
                                            </div>
                                            <div class="wpo-blog-content">
                                                <ul>
                                                    <li>25</li>
                                                    <li>June</li>
                                                </ul>
                                                <h2><a href="blog.html">Photography is the important part of
                                                        wedding.</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="wpo-blog-item">
                                            <div class="wpo-blog-img">
                                                <img src="assets/images/blog/img-2.jpg" alt="">
                                            </div>
                                            <div class="wpo-blog-content">
                                                <h2><a href="blog.html">Best Wedding Gown For
                                                        Your Dream Day</a>
                                                </h2>
                                                <ul>
                                                    <li>22 Nov 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="wpo-blog-item">
                                            <div class="wpo-blog-img">
                                                <img src="assets/images/blog/img-3.jpg" alt="">
                                            </div>
                                            <div class="wpo-blog-content">
                                                <h2><a href="blog.html">Top 10 wedding fresh flower
                                                        decoration idea.</a>
                                                </h2>
                                                <ul>
                                                    <li>28 Nov 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid">
                                        <div class="wpo-blog-item">
                                            <div class="wpo-blog-img">
                                                <img src="assets/images/blog/img-4.jpg" alt="">
                                            </div>
                                            <div class="wpo-blog-content">
                                                <h2><a href="blog.html">Best wedding gift you may like
                                                        & choose.</a>
                                                </h2>
                                                <ul>
                                                    <li>25 Sep 2022</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-section -->

        <!-- wpo-site-footer start -->
        
        <!-- wpo-site-footer end -->

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

@endsection
