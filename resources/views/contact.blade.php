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
       
        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Contact Us</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index-2.html">Home</a></li>
                                <li>Contact</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
        <!-- start wpo-contact-pg-section -->
        <section class="wpo-contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        <div class="office-info">
                            <div class="row">
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-maps-and-flags"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Address</h2>
                                            <p>7 Green Lake Street Crawfordsville, IN 47933</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-email"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Email Us</h2>
                                            <p>LoveLove@gmail.com</p>
                                            <p>helloyou@gmail.com</p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-phone-call"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Call Now</h2>
                                            <p>+1 800 123 456 789</p>
                                            <p>+1 800 123 654 987</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="wpo-contact-title">
                            <h2>Have Any Question?</h2>
                            <p>It is a long established fact that a reader will be distracted
                                content of a page when looking.</p>
                        </div>
                        <div class="wpo-contact-form-area">
                            <form method="post" action="{{route('addcontact')}}" class="contact-validation-active" id="contact-form-main">
                                @csrf
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="adress" id="adress" placeholder="Adress">
                                </div>
                                <div>
                                    <select name="service" class="form-control">
                                        <option disabled="disabled" selected="">Services</option>
                                        <option>Photography</option>
                                        <option>The Rehearsal Dinner</option>
                                        <option>The Afterparty</option>
                                        <option>Videographers</option>
                                        <option>Perfect Cake</option>
                                        <option>All Of The Above</option>
                                    </select>
                                </div>
                                <div class="fullwidth">
                                    <textarea class="form-control" name="Message" placeholder="Message..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button  class="theme-btn-s4" type="button">Get in Touch</button>
                                    
                                </div>
                                           
                            </form>
                        </div>
                    </div>                
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-contact-pg-section -->

        <!--  start wpo-contact-map -->
        <section class="wpo-contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="wpo-contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
            </div>
        </section>
        <!-- end wpo-contact-map -->
       

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