@extends('frontend.layouts.master')
@section('content')
<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Search Products</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					@include('frontend.partials.product-sidebar')
				</div>
				
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
							@foreach($products as $product)
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									@php 
										$i = 1;

									@endphp

										@foreach ($product->images as $image)
										@if($i>0)

										<a href="{!! route('products.show', $product->slug) !!}"><img src="{{asset('/images/products/'.$image->image)}}" alt="{{$product->title}}"></a>
										@endif
										@php $i--; @endphp
										@endforeach


										<div class="pi-links">
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>£{{$product->price}}+vat</h6>

									<p> <a href="{!! route('products.show', $product->slug) !!}">{{$product->title}}</a> </p>
								</div>
							</div>
						</div>
						@endforeach
				

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->
@endsection

		