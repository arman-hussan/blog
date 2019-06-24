@extends('index')
@section('content')

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{URL::to('frontend/img/headphones.jpg')}}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span></span>
							<h1>Simple, Reliable and Awesome Music !!</h1>
							<p>Collection of (PRS & PPL) licence free lounge music for your
Indian restaurant. </p>
							<a href="#" class="site-btn sb-line">CALL US AT:</a>
							<a href="#" class="site-btn sb-white"style="font-size:20px">02035700101</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>for</span>
						<h3>Traditional Music</h3>
						<p>JOIN US</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{URL::to('frontend/img/bg3.jpg')}}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span></span>
							<h1>Simple, Reliable and Awesome Music !!</h1>
							<p>Collection of (PRS & PPL) licence free lounge music for your
Indian restaurant.</p>
							<a href="#" class="site-btn sb-line">CALL US AT:</a>
							<a href="#" class="site-btn sb-white" style="font-size:20px">02035700101</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>for</span>
						<h3>Awesome Music</h3>
						<p>JOIN US</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="{{URL::to('frontend/img/icons/4.png')}}" alt="#">
						</div>
						<h2>Classic Music</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="{{URL::to('frontend/img/icons/5.png')}}" alt="#">
						</div>
						<h2>Modern Music</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="{{URL::to('frontend/img/icons/6.png')}}" alt="#">
						</div>
						<h2>Folk Music</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--	 Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>OUR PACKAGES</h2>
				<SPAN>you can choose from our variety of packages.</SPAN>
			</div>
			<div class="product-slider owl-carousel">
					@foreach($all_product as $product)
				<div class="product-item">
					<div class="pi-pic">
						<img src="{{URL::to($product->product_image)}}" alt="">
						<div class="pi-links">
							<a href="{{URL::to('/view_product/'.$product->product_id)}}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>£{{$product->product_price}}+vat</h6>
						
					</div>
				</div>
				@endforeach
		
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2 class="dark-text">More than just your music</h2>
				<div class="sub-heading">**terms &amp; and conditions applies.<br /> <h4>** You have to play our crystal music only.<h4></h4></h4></h2></div>
			</div>
		
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="product-item">
						<div class="pic-container-inner">
							 <img src="http://www.crystalmusic.co.uk//wp-content/uploads/2018/12/12.png"
                     alt="Excelled to be highest standards">
						
						</div>
						<div class="pi-text">
							<h5 class="colored-text">Excelled to be highest standards</h5>
							<p style="text-align: justify;">
                    Always we aim to do better. Maintaining the highest quality standards means knowing our service users not just in terms of their needs but as individuals so we can offer them the bespoke support they deserve. Our staffs are inducted to a minimum Skills for customer support and bespoke training to meet our customers need.</p>
					</div>
						</div>
					</div>
				<div class="col-lg-4 col-sm-6">
					<div class="product-item">
						<div class="pic-container-inner">
							  <img src="http://www.crystalmusic.co.uk//wp-content/uploads/2018/10/circle-2-150x150.png"
                     alt="Our system is always on">
						
						</div>
						<div class="pi-text">
            <h5 class="colored-text">Our system is always on </h5>
						 <p style="text-align: justify;">
                    The high performance audio equipment we provide is always on. Therefore, you just need to plug and play. Crystal music is as simple as it is! </p>
					</div>
						</div>
					</div>
				<div class="col-lg-4 col-sm-6">
					<div class="product-item">
						<div class="pic-container-inner">
							 <img src="http://www.crystalmusic.co.uk//wp-content/uploads/2018/10/circle-3-150x150.png"
                     alt="Control from any device">
						
						</div>
						<div class="pi-text">
            <h5 class="colored-text">Control from any device  </h5>						
					<p style="text-align: justify;">
                    From Basic Standalone To Fully Integrated crystal music! We are working hard to make our music compatible to your device so that you can control them very easy and nice way.                                                    </p>
					</div>
						</div>
					</div>
				<div class="col-lg-4 col-sm-6">
					<div class="product-item">
						<div class="pic-container-inner">
		          		  <img src="http://www.crystalmusic.co.uk//wp-content/uploads/2018/12/2.png"
                     alt="Fastest response in the uk">
						
						</div>
						<div class="pi-text">
   			         <h5 class="colored-text">Fastest response in the uk    </h5>
						  <p style="text-align: justify;">
                    We aim to respond Fast to our customer’s need. We maintain our highest care while providing to our customers. We have multilingual support staff so that everyone will be assured and feel comfortable.  </p>
					</div>
						</div>
					</div>
				<div class="col-lg-4 col-sm-6">
					<div class="product-item">
						<div class="pic-container-inner">
							  <img src="http://www.crystalmusic.co.uk//wp-content/uploads/2018/11/5.png"
                     alt="We are here to help 12:00 to 22:00">
						
						</div>
						<div class="pi-text">
       	 <h5 class="colored-text"> We are here to help 12:00 to 22:00  </h5>
							            <p>
                    Monday- 12:00 - 22:00<br />
					Tuesday- 12:00 - 22:00<br />
					Wednesday- 12:00 - 22:00<br />
					Thursday- 12:00 - 22:00<br />
					Friday- 12:00 - 22:00<br />
					Saturday- Closed<br />
					Sunday- Closed  </p>
					</div>
						</div>
					</div>
				<div class="col-lg-4 col-sm-6">
					<div class="product-item">
						<div class="pic-container-inner">
							 <img src="http://www.crystalmusic.co.uk//wp-content/uploads/2018/10/circle-7-150x150.png"
                     alt="For your best solutions">
						
						</div>
						<div class="pi-text">
                <h5 class="colored-text">For your best solutions </h5>
							                <p style="text-align: justify;">
                    If you are in a music contract with<br /> someone else please call us for your<br /> best advice.                                                    </p>
					</div>
						</div>
					</div>

			
			
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->







	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="{{URL::to('frontend/img/banner-bg.jpg')}}">
				<div class="tag-new">NEW</div>
				<span>More than just your music</span>

				<a href="#" class="site-btn">JOIN US</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->



@endsection