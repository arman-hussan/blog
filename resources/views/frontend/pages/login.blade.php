
@extends('index')
@section('content')
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 order-2 order-lg-1">
					
						
						

						<div class="row address-inputs">	
							<div class="col-md-5">
								<form class="checkout-form" action="{{url('/customer_login')}}" method="post">
									{{csrf_field()}}
								<h2>Login to your account</h2>	
								<br>
								<input type="email" placeholder="Email Address" name="customer_email" required="">
								<input type="password" placeholder="Password" name="password">
									<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<br/><br>
						<button class="site-btn submit-order-btn">Login</button>
								</form>
							</div>
							<div class="col-md-2">
								<div class="col-sm-1">
									<br>
									<h2 class="or">OR</h2>
								</div>
							</div>
							<div class="col-md-5">
								
									
									<form class="checkout-form" action="{{url('/customer_regestration')}}" method="post">
										{{csrf_field()}}
										<h2>New User Signup!</h2>
										<br>
										<input type="text" placeholder="Full Name" name="customer_name" required="">
										<input type="text" placeholder="Business Trading Name" name="business_trading" required="">
										<input type="email" placeholder="Email Address" name="customer_email" required="">
										<input type="text" placeholder="Username" name="username" required="" / >
										<input type="password" placeholder="Password" name="password" required="" />
										<button class="site-btn submit-order-btn">Signup</button>
									</form>
								
							</div>


						</div>
						
							
					
					</div><!--/login form-->
				</div>

				
			</div>
	
	</section><!--/form-->

	@endsection