
@extends('index')
@section('content')



	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->



	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
							<p class="alert-success" style="font-size: 20px;">
							<?php 
							$message=Session::get('message');
							if ($message) {
								echo $message;
								Session::put('message',null);
							}
							?>
						</p>
					<br><br>
					<form class="checkout-form" action="{{url('/save-shipping')}}" method="post">
						{{csrf_field()}}
						<div class="cf-title">Billing Address</div>
						<div class="row">
							<div class="col-md-7">
								<p>*Billing Information</p>
							</div>
							<div class="col-md-5">
								<div class="cf-radio-btns address-rb">
									<div class="cfr-item">
										<input type="radio" name="pm" id="one">
										<label for="one">Use my regular address</label>
									</div>
									<div class="cfr-item">
										<input type="radio" name="pm" id="two">
										<label for="two">Use a different address</label>
									</div>
								</div>
							</div>
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="First Name" required="" name="first_name">
								<input type="text" placeholder="Last Name" required="" name="last_name">
								<input type="text" placeholder="Business Legal Name" required="" name="business_legal">
								<input type="text" placeholder="Address" required="" name="address">
								<input type="text" placeholder="Country" required="" name="country">
								<input type="email" placeholder="Email" required="" name="customer_email">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Post code" required="" name="post_code">
							</div>
							<div class="col-md-6">
								<input type="number" placeholder="Phone no." required="" name="phone_no">
							</div>
						</div>
						<div class="cf-title">Delievery Info</div>
						<div class="row shipping-btns">
							<div class="col-6">
								<h4>Standard</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-1">
										<label for="ship-1">Free</label>
									</div>
								</div>
							</div>
						
						</div>
						<div class="cf-title">Payment</div>
						<ul class="payment-list">
							<li><input type="radio" value="paypal" required="" name="payment_method"> Paypal
								</li>
							<li><input type="radio" value="bank_transfer" required="" name="payment_method"> Bank Transfer
								</li>
							
						</ul>
						<button class="site-btn submit-order-btn" name="save_shipping">Place Order</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Your Cart</h3>
						<?php $contents=Cart::content(); ?>

						<?php foreach ($contents as $cont) {
									
								 ?>
						<ul class="product-list">
							<li>
								<div class="pl-thumb"><img src="{{URL::to($cont->options->image)}}" alt=""></div>
								<h6>{{$cont->name}}</h6>
								<p>£{{$cont->price}}</p>
							</li>
						
						</ul>
						<?php } ?>
						<ul class="price-list">
							<li>Sub Total<span>£{{Cart::subtotal()}}</span></li>
							<li>Vat<span>£{{Cart::tax()}}</span></li>
							<li class="total">Total<span>£{{Cart::total()}}</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- checkout section end -->

	
	



@endsection