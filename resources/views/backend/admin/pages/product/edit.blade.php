@extends('backend.admin.layout.master')
@section('admin_content')
			
				
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Product</h2>
						</div>
						<br/>
						<p class="alert-success">
							<?php 
							$message=Session::get('message');
							if ($message) {
								echo $message;
								Session::put('message',null);
							}
							?>
						</p>

						
					
					<div class="box-content">
						<form class="form-horizontal" action="{{route('admin.product.update',$product->id)}}"method="post" enctype="multipart/form-data">
							{{csrf_field()}}
							@include('backend.admin.partials.messages')
						  <fieldset>

							<div class="control-group">
							  <label class="control-label" for="date01">Title</label>
							  <div class="controls">
								<input type="text" class="input-xlarge " name="title" value="{{$product->title}}">
							  </div>
							</div>

						        
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2"> Descripion</label>
							  <div class="controls">
								<textarea class="cleditor" name="description" rows="3" value="{{$product->description}}"></textarea>
							  </div>
							</div>
						         

							<div class="control-group">
							  <label class="control-label" for="date01">Price</label>
							  <div class="controls">
								<input type="number" class="input-xlarge " name="price" value="{{$product->price}}">
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="date01">Quantity</label>
							  <div class="controls">
								<input type="number" class="input-xlarge " name="quantity"value="{{$product->quantity}}">
							  </div>
							</div>

							
							<div class="control-group">
							  <label class="control-label" for="date01">Product Image</label>
							  <div class="controls">
								<input type="file" class="input-xlarge " name="product_image">
							  </div>
							</div>

							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
			
       
@endsection