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
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                
                <div class="navbar-header">
                    <div>
                        <p>Author : Alfiansyah Bayu</p>
                    </div>
                    
                    <div class="head-navbar4">
                        <p>Kamis, 14 Desember 2023</p>
                    </div>
                    
                </div>
                    
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <div class="about-img">
                                    <img src="{{asset('upload/'. $berita[0]->thumbnail)}}" alt="">
                                </div>
                                <div class="section-tittle mb-30 pt-30">
                                    <h3>{{$berita[0]->judul}}</h3>
                                </div>
                                <div class="about-prea">
                                    {{$berita[0]->isi}}
                                </div>
                                {{-- <div class="social-share pt-30">
                                    <div class="section-tittle">
                                        <h3 class="mr-20">Komentar :</h3>
                                        <ul>
                                            <li><a href="#"><img src="{{asset('template/img/news/icon-ins.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('template/img/news/icon-fb.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('template/img/news/icon-tw.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('template/img/news/icon-yo.png')}}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                            <!-- From -->
                            @auth
                            <div class="row">
                                <div class="col-lg-8">
                                    <h3 class="mr-20">Komentar :</h3><br>

                                    <form class="form-contact contact_form mb-80" action="" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @endauth
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

                            @foreach ($ads as $ad)
                                @if ($ad->letak == 'atas')
                                    @php
                                        $topAd = $ad;
                                    @endphp
                                @elseif ($ad->letak == 'tengah')
                                    @php
                                        $midAd = $ad;
                                    @endphp
                                @elseif($ad->letak=='bawah')
                                    @php
                                        $botAd = $ad;
                                    @endphp
                                @endif
                            @endforeach

                            <div class="news-poster d-none d-lg-block">
                                @if(isset($topAd))
                                    <img src="{{ asset("storage/images/iklan/". $topAd->gambar )  }}" alt="{{$topAd->judul}}" width="300" height="755">
                                @else
                                    <img src="{{asset('template/img/news/no_space.png')}}" alt="">
                                @endif
                            </div>
                            <br>
                            <div class="news-poster d-none d-lg-block">
                                @if(isset($midAd))
                                    <img src="{{ asset("storage/images/iklan/". $midAd->gambar )  }}" alt="{{$midAd->judul}}" width="300" height="755">
                                @else
                                    <img src="{{asset('template/img/news/no_space.png')}}" alt="">
                                @endif
                            </div>
                            <br>
                            <div class="news-poster d-none d-lg-block">
                                @if(isset($botAd))
                                    <img src="{{ asset("storage/images/iklan/". $botAd->gambar )  }}" alt="{{$botAd->judul}}" width="300" height="755">
                                @else
                                    <img src="{{asset('template/img/news/no_space.png')}}" alt="">
                                @endif
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel" >Keluar?</h5>
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