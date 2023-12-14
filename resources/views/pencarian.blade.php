<!DOCTYPE html>
<html lang="en">

<head>
    <title>UNS News</title>
    @include ('layouts.head')
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/img/favicon.ico')}}">

    <!-- CSS here -->
    <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/ticker-style.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/slicknav.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include ('layouts.navbar')
                <!-- End of Topbar -->

                <main>
                    <!-- Trending Area Start -->
                    <div>
                        <h2 class="head-navbar text-blue-100">Hasil Pencarian : Kata Kunci</h2>
                    </div>
                    <div class="trending-area fix">
                        <div class="container">
                            <div class="trending-main">
                                <!-- Trending Tittle -->
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Trending Top -->
                                        <div class="trending-top mb-30">
                                            <div class="trend-top-img">
                                                <img src="{{asset('template/img/trending/trending_top.jpg')}}" alt="">
                                                <div class="trend-top-cap">
                                                    <span>Appetizers</span>
                                                    <h2><a href="/detail">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Trending Bottom -->
                                        <div class="trending-bottom">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="single-bottom mb-35">
                                                        <div class="trend-bottom-img mb-30">
                                                            <img src="{{asset('template/img/trending/trending_bottom1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="trend-bottom-cap">
                                                            <span class="color1">Lifestyple</span>
                                                            <h4><a href="/detail">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="single-bottom mb-35">
                                                        <div class="trend-bottom-img mb-30">
                                                            <img src="{{asset('template/img/trending/trending_bottom2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="trend-bottom-cap">
                                                            <span class="color2">Sports</span>
                                                            <h4>
                                                                <h4><a href="/detail">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="single-bottom mb-35">
                                                        <div class="trend-bottom-img mb-30">
                                                            <img src="{{asset('template/img/trending/trending_bottom3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="trend-bottom-cap">
                                                            <span class="color3">Travels</span>
                                                            <h4><a href="/detail"> Welcome To The Best Model Winner Contest</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Riht content -->
                                    <div class="col-lg-4">
                                        <div class="trand-right-single d-flex">
                                            <div class="trand-right-img">
                                                <img src="{{asset('template/img/trending/right1.jpg')}}" alt="">
                                            </div>
                                            <div class="trand-right-cap">
                                                <span class="color1">Concert</span>
                                                <h4><a href="/detail">Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                        </div>
                                        <div class="trand-right-single d-flex">
                                            <div class="trand-right-img">
                                                <img src="{{asset('template/img/trending/right2.jpg')}}" alt="">
                                            </div>
                                            <div class="trand-right-cap">
                                                <span class="color3">sea beach</span>
                                                <h4><a href="/detail">Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                        </div>
                                        <div class="trand-right-single d-flex">
                                            <div class="trand-right-img">
                                                <img src="{{asset('template/img/trending/right3.jpg')}}" alt="">
                                            </div>
                                            <div class="trand-right-cap">
                                                <span class="color2">Bike Show</span>
                                                <h4><a href="/detail">Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                        </div>
                                        <div class="trand-right-single d-flex">
                                            <div class="trand-right-img">
                                                <img src="{{asset('template/img/trending/right4.jpg')}}" alt="">
                                            </div>
                                            <div class="trand-right-cap">
                                                <span class="color4">See beach</span>
                                                <h4><a href="/detail">Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                        </div>
                                        <div class="trand-right-single d-flex">
                                            <div class="trand-right-img">
                                                <img src="{{asset('template/img/trending/right5.jpg')}}" alt="">
                                            </div>
                                            <div class="trand-right-cap">
                                                <span class="color1">Skeping</span>
                                                <h4><a href="/detail">Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Area End -->
                    <!--   Weekly-News start -->
                    <div class="weekly-news-area pt-50">
                        <div class="container">
                            <div class="weekly-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-tittle mb-30">
                                            <h3>Weekly Top News</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="weekly-news-active dot-style d-flex dot-style">
                                            <div class="weekly-single">
                                                <div class="weekly-img">
                                                    <img src="{{asset('template/img/news/weeklyNews2.jpg')}}" alt="">
                                                </div>
                                                <div class="weekly-caption">
                                                    <span class="color1">Strike</span>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="weekly-single active">
                                                <div class="weekly-img">
                                                    <img src="{{asset('template/img/news/weeklyNews1.jpg')}}" alt="">
                                                </div>
                                                <div class="weekly-caption">
                                                    <span class="color1">Strike</span>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="weekly-single">
                                                <div class="weekly-img">
                                                    <img src="{{asset('template/img/news/weeklyNews3.jpg')}}" alt="">
                                                </div>
                                                <div class="weekly-caption">
                                                    <span class="color1">Strike</span>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="weekly-single">
                                                <div class="weekly-img">
                                                    <img src="{{asset('template/img/news/weeklyNews1.jpg')}}" alt="">
                                                </div>
                                                <div class="weekly-caption">
                                                    <span class="color1">Strike</span>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Weekly-News -->
                    <!-- Whats New Start -->
                    <section class="whats-news-area pt-50 pb-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-lg-3 col-md-3">
                                            <div class="section-tittle mb-30">
                                                <h3>Whats New</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9">
                                            <div class="properties__button">
                                                <!--Nav Button  -->
                                                <nav>
                                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lifestyle</a>
                                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Travel</a>
                                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Fashion</a>
                                                        <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
                                                    </div>
                                                </nav>
                                                <!--End Nav Button  -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Nav Card -->
                                            <div class="tab-content" id="nav-tabContent">
                                                <!-- card one -->
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="whats-news-caption">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews1.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews3.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card two -->
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="whats-news-caption">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews1.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews3.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card three -->
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    <div class="whats-news-caption">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews1.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews3.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card fure -->
                                                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                                    <div class="whats-news-caption">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews1.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews3.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card Five -->
                                                <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                                    <div class="whats-news-caption">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews1.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews3.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card Six -->
                                                <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                                    <div class="whats-news-caption">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews1.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews2.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews3.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="single-what-news mb-100">
                                                                    <div class="what-img">
                                                                        <img src="{{asset('template/img/news/whatNews4.jpg')}}" alt="">
                                                                    </div>
                                                                    <div class="what-cap">
                                                                        <span class="color1">Night party</span>
                                                                        <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Nav Card -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <!-- Section Tittle -->
                                    <div class="section-tittle mb-40">
                                        <h3>Follow Us</h3>
                                    </div>
                                    <!-- Flow Socail -->
                                    <div class="single-follow mb-45">
                                        <div class="single-box">
                                            <div class="follow-us d-flex align-items-center">
                                                <div class="follow-social">
                                                    <a href="#"><img src="{{asset('template/img/news/icon-fb.png')}}" alt=""></a>
                                                </div>
                                                <div class="follow-count">
                                                    <span>8,045</span>
                                                    <p>Fans</p>
                                                </div>
                                            </div>
                                            <div class="follow-us d-flex align-items-center">
                                                <div class="follow-social">
                                                    <a href="#"><img src="{{asset('template/img/news/icon-tw.png')}}" alt=""></a>
                                                </div>
                                                <div class="follow-count">
                                                    <span>8,045</span>
                                                    <p>Fans</p>
                                                </div>
                                            </div>
                                            <div class="follow-us d-flex align-items-center">
                                                <div class="follow-social">
                                                    <a href="#"><img src="{{asset('template/img/news/icon-ins.png')}}" alt=""></a>
                                                </div>
                                                <div class="follow-count">
                                                    <span>8,045</span>
                                                    <p>Fans</p>
                                                </div>
                                            </div>
                                            <div class="follow-us d-flex align-items-center">
                                                <div class="follow-social">
                                                    <a href="#"><img src="{{asset('template/img/news/icon-yo.png')}}" alt=""></a>
                                                </div>
                                                <div class="follow-count">
                                                    <span>8,045</span>
                                                    <p>Fans</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- New Poster -->
                                    <div class="news-poster d-none d-lg-block">
                                        <img src="{{asset('template/img/news/news_card.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Whats New End -->
                    <!--   Weekly2-News start -->
                    <div class="weekly2-news-area  weekly2-pading gray-bg">
                        <div class="container">
                            <div class="weekly2-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-tittle mb-30">
                                            <h3>Weekly Top News</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="weekly2-news-active dot-style d-flex dot-style">
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{asset('template/img/news/weekly2News1.jpg')}}" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <span class="color1">Corporate</span>
                                                    <p>25 Jan 2020</p>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{asset('template/img/news/weekly2News2.jpg')}}" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <span class="color1">Event night</span>
                                                    <p>25 Jan 2020</p>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{asset('template/img/news/weekly2News3.jpg')}}" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <span class="color1">Corporate</span>
                                                    <p>25 Jan 2020</p>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{asset('template/img/news/weekly2News4.jpg')}}" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <span class="color1">Event time</span>
                                                    <p>25 Jan 2020</p>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{asset('template/img/news/weekly2News4.jpg')}}" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <span class="color1">Corporate</span>
                                                    <p>25 Jan 2020</p>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Weekly-News -->

                    <!--  Recent Articles start -->
                    <div class="recent-articles">
                        <div class="container">
                            <div class="recent-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-tittle mb-30">
                                            <h3>Recent Articles</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="recent-active dot-style d-flex dot-style">
                                            <div class="single-recent mb-100">
                                                <div class="what-img">
                                                    <img src="{{asset('template/img/news/recent1.jpg')}}" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="single-recent mb-100">
                                                <div class="what-img">
                                                    <img src="{{asset('template/img/news/recent2.jpg')}}" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="single-recent mb-100">
                                                <div class="what-img">
                                                    <img src="{{asset('template/img/news/recent3.jpg')}}" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                            <div class="single-recent mb-100">
                                                <div class="what-img">
                                                    <img src="{{asset('template/img/news/recent2.jpg')}}" alt="">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Night party</span>
                                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Recent Articles End -->
                    <!--Start pagination -->
                    <div class="pagination-area pb-45 text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-wrap d-flex justify-content-center">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start">
                                                <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End pagination  -->
                </main>

                <!-- JS here -->

                {{-- <!-- All JS Custom Plugins Link Here here -->
                <script src="{{asset('template/js/vendor/modernizr-3.5.0.min.js')}}"></script>
                <!-- Jquery, Popper, Bootstrap -->
                <script src="{{asset('template/js/vendor/jquery-1.12.4.min.js')}}"></script>
                <script src="{{asset('template/js/popper.min.js')}}"></script>
                <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
                <!-- Jquery Mobile Menu -->
                <script src="{{asset('template/js/jquery.slicknav.min.js')}}"></script>

                <!-- Jquery Slick , Owl-Carousel Plugins -->
                <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
                <script src="{{asset('template/js/slick.min.js')}}"></script>
                <!-- Date Picker -->
                <script src="{{asset('template/js/gijgo.min.js')}}"></script>
                <!-- One Page, Animated-HeadLin -->
                <script src="{{asset('template/js/wow.min.js')}}"></script>
                <script src="{{asset('template/js/animated.headline.js')}}"></script>
                <script src="{{asset('template/js/jquery.magnific-popup.js')}}"></script>

                <!-- Breaking New Pluging -->
                <script src="{{asset('template/js/jquery.ticker.js')}}"></script>
                <script src="{{asset('template/js/site.js')}}"></script>

                <!-- Scrollup, nice-select, sticky -->
                <script src="{{asset('template/js/jquery.scrollUp.min.js')}}"></script>
                <script src="{{asset('template/js/jquery.nice-select.min.js')}}"></script>
                <script src="{{asset('template/js/jquery.sticky.js')}}"></script>

                <!-- contact js -->
                <script src="{{asset('template/js/contact.js')}}"></script>
                <script src="{{asset('template/js/jquery.form.js')}}"></script>
                <script src="{{asset('template/js/jquery.validate.min.js')}}"></script>
                <script src="{{asset('template/js/mail-script.js')}}"></script>
                <script src="{{asset('template/js/jquery.ajaxchimp.min.js')}}"></script>

                <!-- Jquery Plugins, main Jquery -->
                <script src="{{asset('template/js/plugins.js')}}"></script>
                <script src="{{asset('template/js/main.js')}}"></script> --}}




            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include ('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda yakin ingin keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <a class="btn btn-primary" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Keluar</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include ('layouts.script')
</body>

</html>