<!doctype html>
<html lang="en">

  <head>
    <title>RinTrips</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('public')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{url('public')}}/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{url('public')}}/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html" class="font-weight-bold">
                  <img src="{{url('public')}}/images/logo.png" alt="Image" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="{{url('index')}}" class="nav-link {{request()->is('index') ? 'active' :''}}">Home</a></li>
                  <li><a href="{{url('blog')}}" class="nav-link {{request()->is('blog') ? 'active' :''}}">Blog</a></li>
                  <li><a href="{{url('login')}}" class="nav-link {{request()->is('login') ? 'active' :''}}">Login</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('{{url('public')}}/images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5" data-aos="fade-right">
              <h1 class="mb-2 text-white">Let's Enjoy The Wonders of Nature</h1>
              <p>Jangan pikir 2 kali untuk merencanakan liburan, Just do it!</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="heading-39101 mb-5">
              <span class="backdrop">Story</span>
              <h3>Yuk Liburan</h3>
            </div>
            <p>Dunia adalah sebuah buku dan mereka yang tidak bepergian hanya membaca satu halaman.</p>
            <p>Jadilah traveler, bukan turis. Cobalah hal-hal baru, temui orang-orang baru, dan lihat apa yang ada di depanmu. Itulah kunci untuk memahami dunia menakjubkan yang kita tinggali ini.</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <img src="{{url('public')}}/images/traveler.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('{{url('public')}}/images/hero_1.jpg')">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-white">Join and Trip With Us</h2>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3">Instagram</h2>
            <div class="row">
              <div class="col-4 gal_col">
                <a href="#"><img src="{{url('public')}}/images/insta_1.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="{{url('public')}}/images/insta_2.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="{{url('public')}}/images/insta_3.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="{{url('public')}}/images/insta_4.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="{{url('public')}}/images/insta_5.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="{{url('public')}}/images/insta_6.jpg" alt="Image" class="img-fluid"></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt odio iure animi ullam quam, deleniti rem!</p>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >SitiMaryani</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="{{url('public')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{url('public')}}/js/jquery-migrate-3.0.0.js"></script>
    <script src="{{url('public')}}/js/popper.min.js"></script>
    <script src="{{url('public')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('public')}}/js/jquery.sticky.js"></script>
    <script src="{{url('public')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{url('public')}}/js/jquery.animateNumber.min.js"></script>
    <script src="{{url('public')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{url('public')}}/js/jquery.stellar.min.js"></script>
    <script src="{{url('public')}}/js/jquery.easing.1.3.js"></script>
    <script src="{{url('public')}}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{url('public')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{url('public')}}/js/aos.js"></script>

    <script src="{{url('public')}}/js/main.js"></script>

  </body>

</html>

