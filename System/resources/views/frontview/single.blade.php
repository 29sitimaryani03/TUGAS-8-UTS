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
    <link rel="stylesheet" href="{{url('public')}}/fonts/flaticon/font/flaticon.css">
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
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('{{url('public')}}/images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <span class="d-block mb-3 text-white" data-aos="fade-up"> <span class="mx-2 text-primary">&bullet;</span> by {{$artikel->penulis}}</span>
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Single Blog</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 blog-content">
          <h2 href="{{url('single', $artikel->id)}}">{{$artikel->judul}}</h2>
          <span class="meta d-inline-block mb-2"> <span class="mx-1">by <a href="#">{{$artikel->penulis}}</a></span>
          <br>
          <br>
          
            <p>{{$artikel->deskripsi}}</p>
            

            <!--COMMENT-->
            <div class="pt-5">
              <h3 class="mb-5">Komentar Netizen</h3>
              <ul class="comment-list">
            <div>
            <hr>
            @foreach ($list_komentar as $komentar)
                <li class="comment">
                  <div class="comment-body">
                    <h3>{{ $komentar->nama }}</h3>
                    <div class="meta">{{ $komentar->created_at->diffForHumans()}}</div>
                    <p>{{ $komentar->isi}}</p>
                  </div>
            @endforeach
                    </li>
                  </ul>
                </li>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Silahkan komen</h3>
                <form action="" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="" class="control-label"><strong> Nama </strong></label>
                    <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form-group">
                  <label for="" class="control-label">
                    <strong> Komentar </strong> :
                  </label>
                    <textarea name="isi" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Komentar" class="btn btn-primary btn-md text-white">
                  </div>
                </form>
          </div>

          <div class="col-md-4 sidebar">
              </div>
            </div>
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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Siti Maryani</a>
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

