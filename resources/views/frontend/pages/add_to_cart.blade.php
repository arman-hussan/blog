
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


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<?php $contents=Cart::content(); ?>
								<tr>
									<th class="product-th">Product</th>
									<th class="quy-th">Quantity</th>
									<th></th>
									<th class="quy-th">  Price</th>
									<th class="quy-th">  Action</th>

									
								</tr>
							</thead>
							<tbody>
								<?php foreach ($contents as $cont) {
									
								 ?>
								<tr>
									<td class="product-col">
										<img src="{{URL::to($cont->options->image)}}" alt="" width="50px" height="50px">
										<div class="pc-title">
											<h4>{{$cont->name}}</h4>
											<p>£{{$cont->price}}</p>

										</div>
									</td>
									<td class="quy-col">
										<form action="{{URL::to('/update-to-cart')}}" method="post">
													{{csrf_field()}}
										<div class="quantity">
					                        <div class="pro-qty">
					                        	
													<input type="text" name="qty" value="{{$cont->qty}}">
													<input type="hidden" name="rowId" value="{{$cont->rowId}}">
													
												
											</div>
                    					</div>
                    					</td>
                    					<td>
                    					<input type="submit" name="submit" value="update" class="btn btn-smbtn-default">
												</form>

										</td>
									
									<td class="total-col"><h4>£{{Cart::subtotal()}}</h4></td>

									<td class="quy-col">
										<div class="quantity">

					                        <a href="{{URL::to('/delete-to-cart/'.$cont->rowId)}}" style="color: black;">x</a>
                    					</div>
									</td>
								</tr>
							

							<?php } ?>
					
						
							</tbody>
						</table>
						<div class="col-sm-6"></div>
						<div class="col-sm-6">
							
							<div class="total_area">
											<ul>
												<li>Cart Sub Total <span>£{{Cart::subtotal()}}</span></li>
												<li>Vat <span>£{{Cart::tax()}}</span></li>
												
											</ul>
												
												
										</div>
						</div>

										
								
						</div>

						<div class="total-cost">

							<h6>





								Total <span>£{{Cart::total()}}</span></h6>

						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form>
					

						<?php 
								$customer_id=Session::get('customer_id');
								?>
								@if( $customer_id != NULL)
							
								<a href="{{URL::to('/checkout')}}" class="site-btn">Proceed to checkout</a>
								@else
								<a href="{{URL::to('/login-check')}}" class="site-btn">Proceed to checkout</a>
								@endif
					
					<a href="{{URL::to('/shop')}}" class="site-btn sb-dark">Continue shopping</a>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<h2>Continue Shopping</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="{{URL::to('frontend/img/product/2.jpg')}}" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="{{URL::to('frontend/img/product/5.jpg')}}" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="{{URL::to('frontend/img/product/9.jpg')}}" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="{{URL::to('frontend/img/product/1.jpg')}}" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Related product section end -->
					@endsection