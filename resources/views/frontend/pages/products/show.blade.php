@extends('frontend.layouts.master')

@section('title')
{{$product->title}} | Crystal Music
@endsection
@section('content')
<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>{{$product->title}}</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="{{route('products')}}"> &lt;&lt; Back to Shop</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						@foreach($product->images as $image)
						<img class="product-big-img" src="{{asset('/images/products/'.$image->image)}}" alt="">
						@endforeach
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							@php $i=1; @endphp
							@foreach($product->images as $image)

							<div class="pt {{ $i == 1 ? 'active':''}}" data-imgbigurl="{{asset('/images/products/'.$image->image)}}"><img src="{{asset('/images/products/'.$image->image)}}" alt=""></div>
							@php $i++; @endphp
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title">{{$product->title}}</h2>
					<h3 class="p-price">£{{$product->price}}+vat</h3>
					<h4 class="p-stock">Available: <span>In Stock</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
				
					<form action="{{url('/add-to-cart')}}" method="post">
						{{csrf_field()}}
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty">
                        	<input name="qty" type="text" value="1">
                        	<input name="product_id" type="hidden" value="{{$product->id}}">
                        </div>
                    </div>

					<button type="submit" class="site-btn">Add To Cart</button>
					</form>

					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Short Description</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									{{$product->description}}
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Full Description </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									
									{{$product->description}}
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

		