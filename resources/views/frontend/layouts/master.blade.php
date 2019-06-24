<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>
		@yield('title','Crystal Music | Home')
	</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="{{route('index')}}" class="site-logo">
							<h3>Crystal Music</h3>
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form" action="{!! route('search')!!}" method="get">
							<input name="search" type="text" placeholder="Search on crystal music ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Shopping Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	@include('frontend.partials.nav')
	</header>
	<!-- Header section end -->



@yield('content')

	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="{{URL::to('/')}}"><h2 style="color:#fff;">Crystal Music</h2></a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About Us</h2>
						<p>We aim to respond Fast to our customer’s need. We maintain our highest care while providing to our customers. We have multilingual support staff so that everyone will be assured and feel comfortable.</p>
						<img src="{{asset('frontend/img/cards.png')}}" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Menu</h2>
						<ul>
					<li><a href="{{URL::to('/')}}">Home</a></li>
					<li><a href="{{URL::to('/shop')}}">Shop</a></li>
					<li><a href="{{URL::to('/music')}}">Music</a></li>
					<li><a href="{{URL::to('/contact-us')}}">Contact us
						<span class="new">New</span>
					</a></li>
					<li><a href="{{URL::to('/faq')}}">FAQ</a>
					
					</li>

					<li><a href="{{URL::to('/my-account')}}">My account</a></li>
						</ul>
					
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Latest News</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="{{URL::to('frontend/img/blog-thumbs/1.jpg')}}"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="{{URL::to('frontend/img/blog-thumbs/2.jpg')}}"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Address</h2>
						<div class="con-info">
							<span>C.</span>
							<p>Crystal Music </p>
						</div>
						<div class="con-info">
							<span>B.</span>
							<p>Campshill Road,London, SE13 6QS </p>
						</div>
						<div class="con-info">
							<span>T.</span>
							<p>0203 5700 101</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>info@crystalmusic.co.uk</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5"><script>document.write(new Date().getFullYear());</script> Crystal Music | Developed  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Crystal IT</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>

	</body>
</html>
