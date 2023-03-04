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
                            <h2>Latest News</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index-2.html">Home</a></li>
                                <li>Blog</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start wpo-blog-pg-section -->
        <section class="wpo-blog-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="wpo-blog-content">
                            @foreach($blog as $top)
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="{{url('/images/'.$top->image)}}" alt>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> By <a href="#">Aliza Anny</a> </li>
                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                        <li><i class="fi flaticon-calendar-1"></i> 24 Jun 2022</li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="blog-single.html">{{$top->title}}</a></h3>
                                    <p>{{$top->description}}</p>
                                    <a href="blog-single.html" class="read-more">READ MORE...</a>
                                </div>
                            </div>
                            @endforeach

                            <div class="pagination-wrapper pagination-wrapper-left">
                                <ul class="pg-pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="fi ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="fi ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="blog-sidebar">
                            <div class="widget about-widget">
                                <div class="img-holder">
                                    <img src="assets/images/blog/about-widget.jpg" alt>
                                </div>
                                <h4>Aliza Anny</h4>
                                <p>Hi! beautiful people. I`m an authtor of this blog. Read our post - stay with us</p>
                                <div class="social">
                                    <ul class="clearfix">
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <div class="aw-shape">
                                    <img src="assets/images/blog/ab.png" alt="">
                                </div>
                            </div>
                            <div class="widget search-widget">
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search Post..">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget category-widget">
                                <h3>Categories</h3>
                                <ul>
                                    <li><a href="blog.html">Wedding Event <span>5</span></a></li>
                                    <li><a href="blog.html">Photography <span>7</span></a></li>
                                    <li><a href="blog.html">Album <span>3</span></a></li>
                                    <li><a href="blog.html">Wedding Dress<span>6</span></a></li>
                                    <li><a href="blog.html">Best Gift <span>2</span></a></li>
                                    <li><a href="blog.html">Wedding Tips <span>8</span></a></li>
                                </ul>
                            </div>
                            <div class="widget recent-post-widget">
                                <h3>Related Posts</h3>
                                <div class="posts">
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="assets/images/recent-posts/img-1.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="blog-single.html">Best Wedding Gift You May Like and Prefer</a>
                                            </h4>
                                            <span class="date">19 Jun 2022 </span>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="assets/images/recent-posts/img-2.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="blog-single.html">Best Hair Style Tips You May Follow in your
                                                    Wedding</a></h4>
                                            <span class="date">22 May 2022 </span>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="assets/images/recent-posts/img-3.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="blog-single.html">How To Avoid Massive Weasting Money in Your
                                                    wedding</a></h4>
                                            <span class="date">12 Apr 2022 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget wpo-instagram-widget">
                                <div class="widget-title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul class="d-flex">
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/1.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/2.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/3.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/4.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/5.jpg"
                                                alt=""></a></li>
                                    <li><a href="portfolio-single.html"><img src="assets/images/instragram/6.jpg"
                                                alt=""></a></li>
                                </ul>
                            </div>
                            <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <ul>
                                    <li><a href="#">photography</a></li>
                                    <li><a href="#">Planning</a></li>
                                    <li><a href="#">wedding</a></li>
                                    <li><a href="#">events</a></li>
                                    <li><a href="#">creative</a></li>
                                    <li><a href="#">Solution</a></li>
                                    <li><a href="#">collection</a></li>
                                    <li><a href="#">Idea</a></li>
                                    <li><a href="#">bride & groom</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-pg-section -->
       

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