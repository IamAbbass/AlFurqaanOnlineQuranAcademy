
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/fav.png" />
  <!-- Author Meta -->
  <meta name="author" content="colorlib" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Al-Furqaan Online Quran Academy</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <!--
      CSS {{ asset('') }}
      =============================================
    -->
  <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('css/hexagons.min.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>

<body>
  <!-- ================ Start Header Area ================= -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="img/logo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="courses.html">Courses</a></li>
            <!-- Dropdown -->
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Pages
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="elements.html">Elements</a>
                <a class="dropdown-item" href="course-details.html">Course Details</a>
              </div>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Blog
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog-home.html">Blog Home</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
            <li><a href="contacts.html">Contacts</a></li>

            <li>
              <button class="search">
                {{-- <span class="lnr lnr-magnifier" id="search"></span> --}}
                <i class="fas fa-search"></i>
            </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="search-input" id="search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
        </form>
      </div>
    </div>
  </header>
  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= -->
  <section class="home-banner-area">
    <div class="container">
      <div class="row justify-content-center fullscreen align-items-center">
        <div class="col-lg-5 col-md-8 home-banner-left">
          <h1 class="text-white">
            Take the first step <br />
            to learn with us
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            In the history of modern astronomy, there is probably no one
            greater leap forward than the building and launch of the space
            telescope known as the Hubble.
          </p>
        </div>
        <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
          <img class="img-fluid" src="img/header-img.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <section class="feature-area">
    <div class="container-fluid">
      <div class="feature-inner row">
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-book"></i>
            <div class="ml-20">
              <h4>New Classes</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex">
            <i class="ti-cup"></i>
            <div class="ml-20">
              <h4>Top Courses</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6">
          <div class="feature-item d-flex border-right-0">
            <i class="ti-desktop"></i>
            <div class="ml-20">
              <h4>Full E-Books</h4>
              <p>
                In the history of modern astronomy, there is probably no one greater leap forward.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Feature Area ================= -->

  @yield('content')

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
							 required="" type="email">
							<button class="click-btn btn btn-default text-uppercase">subscribe</button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 footer-social">
					{{-- <a href="#"><i class="fa fa-facebook"></i></a> 
                    <a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>--}}
                    <a href="#">
                        <span class="icons">
                            <i class="fab fa-facebook-f"></i>
                        </span>
                    </a>
                    <a href="#">
                        <span class="icons">
                            <i class="fab fa-twitter"></i>
                        </span>
                    </a>
					<a href="#">
                        <span class="icons">
                            <i class="fab fa-dribbble"></i>                        
                        </span>
                    </a>
					<a href="#">
                        <span class="icons">
                            <i class="fab fa-behance"></i>
                        </span>
                    </a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="{{ asset('js/all.min.js') }}"></script>

  <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/parallax.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js')}}"></script>
  <script src="{{ asset('js/hexagons.min.js') }}"></script>
  <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('js/waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>