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
                            <h2>Service</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index-2.html">Home</a></li>
                                <li>Service</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
        <!-- start wpo-Service-section -->
        <section class="wpo-Service-section section-padding" id="Service">
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
        <!-- start wpo-partners-section -->
        <section class="wpo-partners-section section-padding pt-0">
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