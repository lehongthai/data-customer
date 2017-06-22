<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Test - BCA Studio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="{{ asset('test/favicon.ico') }}" type="image/gif" sizes="16x16">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{ asset('test/css/font.css') }}">
        <link rel="stylesheet" href="{{ asset('test/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('test/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('test/css/flickity.min.css') }}">
        <link rel="stylesheet" href="{{ asset('test/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('test/css/nice-select.css') }}">
        <!--build:css css/all.min.css-->
        <link rel="stylesheet" href="{{ asset('test/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('test/css/responsive.css') }}">
        <!--endbuild-->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="fixed-overlay"></div>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <header>
      <div class="navbar">
        <div class="container">
                    <input id="btn-nav-input" class="hidden" type="checkbox">
          <div class="navbar-header"> 
            <img class="logo" src="{{ asset('test/images/logo.png') }}">
            <div class="btn-nav">
                            <label class="btn-nav-lable" for="btn-nav-input">
                                <span class="one onetop">
                                    <span class="two twotop"></span>
                                </span>
                                <span class="one onebot">
                                    <span class="two twobot"></span>
                                </span>
                            </label>
                        </div>
          </div>
          <nav class="collapse navbar-collapse">
            <ul class="nav navbar-nav"> 
              <li><a href="index.html">HOME</a></li>
              <li><a href="about.html">PEOPLE</a></li>
              <li><a href="investment.html">INVESTMENT STRATEGY</a></li>
              <li><a href="portfolio.html">PORTFOLIO</a></li>
              <li class="active"><a href="#">CONTACT</a></li>
            </ul>
          </nav> 
        </div>
      </div>
      <div class="clearfix"></div>
    </header>

    <!-- Content Page -->
    @yield('content')

 <footer class="wow fadeIn" data-wow-duration="0.5s">
      <div class="container">
        <div class="footer-left pull-left">
            <p>Maestro Equity Partners  &copy; 2017</p>
        </div>
        <div class="footer-right pull-right">
        <ul>
                    <li><a href="">Term of Use</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">English</a></li>
        </ul>
        </div>
      </div>
    </footer>
        
    <script src="{{ asset('test/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('test/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('test/js/classie.js') }}"></script>
    <script src="{{ asset('test/js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('test/js/wow.min.js') }}"></script>
    <script src="{{ asset('test/js/jquery.matchHeight.js') }}"></script>
        <script src="{{ asset('test/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('test/js/jquery.validate.min.js') }}"></script>
        <!--build:js js/main.min.js -->
        <script src="{{ asset('test/js/plugins.js') }}"></script>
        <script src="{{ asset('test/js/scripts.js') }}"></script>
        <!-- endbuild -->
    
    <script>
            $(window).load(function () {
                new WOW().init();
            $('.auto-height').matchHeight();
            });
            
        
            
           function initMap() {
            var storeLtn = {lat: 10.792772, lng: 106.717751};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
              center: storeLtn
            });
            var marker = new google.maps.Marker({
              position: storeLtn,
              map: map
            });
          }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy29iyXL8OYCEtckVNs-Di7QLKEOJXlY8&callback=initMap"></script>
    </body>
</html>