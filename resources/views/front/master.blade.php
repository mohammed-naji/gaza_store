<!DOCTYPE html>
<html lang="{{ app()->currentLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield('title', env('APP_NAME'))</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-hexashop.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
    @yield('css')

    <style>
        .item .thumb img {
            height: 350px;
            object-fit: cover
        }
        .page-links ul {
            justify-content: center;
            column-gap: 15px;
        }

        .page-links ul .page-link {
            border-radius: 0 !important;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-color: #2a2a2a !important;
            color: #2a2a2a;
        }

        .page-links ul .page-link:hover,.page-links ul li.active .page-link {
            background: #2a2a2a;
            color: #fff;
        }
        .item .down-content h4 a {
            color: inherit;
        }
    </style>

    @if (app()->currentLocale() == 'ar')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');
            body {
                direction: rtl;
                text-align: right;
                font-family: 'Cairo', sans-serif;
            }
            .header-area .main-nav .logo {
                float: right;
            }
            .header-area .main-nav .nav {
                float: left;
            }
            .header-area .main-nav .nav li a {
                letter-spacing: 0
            }
            .header-area .main-nav .nav li.submenu ul li a {
                padding-right: 20px;
            }
            .header-area .main-nav .nav li.submenu ul li a:hover {
                padding-right: 25px
            }
        </style>
    @endif

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('front.index') }}" class="logo">
                            <img src="{{ asset('assets/images/logo.png') }}">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('front.index') }}" {{ request()->routeIs('front.index') ? 'class=active' : '' }}>{{ __('front.home') }}</a></li>
                            <li class="scroll-to-section"><a href="{{ route('front.about') }}" {{ request()->routeIs('front.about') ? 'class=active' : '' }}>{{ __('front.about') }}</a></li>
                            <li class="scroll-to-section"><a href="{{ route('front.products') }}" {{ request()->routeIs('front.products') ? 'class=active' : '' }}>{{ __('front.products') }}</a></li>

                            <li class="submenu">
                                <a href="javascript:;">{{ __('front.cat') }}</a>
                                <ul>
                                    @foreach (\App\Models\Category::all() as $item)
                                        <li><a href="{{ route('front.category', $item->id) }}">{{ $item->trans_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="{{ route('front.contact') }}" {{ request()->routeIs('front.contact') ? 'class=active' : '' }}>{{ __('front.contact') }}</a></li>

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if (app()->currentLocale() != $localeCode)
                            <li class="scroll-to-section"><a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a></li>
                            @endif


                                @endforeach
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="{{ asset('assets/images/white-logo.png') }}" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved.

                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>

                        <br>Distributed By: <a href="https://themewagon.com" target="_blank" title="free & premium responsive templates">ThemeWagon</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
    @yield('js')
  </body>
</html>
