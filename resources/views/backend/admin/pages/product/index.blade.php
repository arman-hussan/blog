@extends('backend.admin.layout.master')
@section('admin_content')


	
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="ro">		
				<div class="boxs ">
					
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
								@include('backend.admin.partials.messages')
						  <thead>
							  <tr>
								  <th>Product Title</th>
								  <th>Product Price</th>
								
								  <th>Quantity</th>
								  <th>Actions</th>
								  <th></th>
							  </tr>
						  </thead>  

							@foreach($products as $product)
						  <tbody>
					<tr>
								
								
								<td>{{$product->title}}</td>
								<td class="center">{{$product->price}}    </td>
								<td class="center">{{$product->quantity}}    </td>
								

		


								
								<td class="center">
								

								<span class="label label-success">Active</span>
								
								 <span class="label label-warning">Inactive</span>
							

								</td>
								
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="{{route('admin.product.edit', $product->id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#deleteModel{{ $product->id }}" data-toggle="modal" data-target="#exampleModal">
										<i class="halflings-icon white trash"></i> 
									</a>

			

										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
										        <button type="button" class="close"  aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">
										        <form action="{{route('admin.product.delete', $product->id)}}" method="post">
										        	{{csrf_field()}}

										        	<button type="submit" class="btn btn-secondary">Permanent Delete</button>
										        </form>
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										        
										      </div>
										    </div>
										  </div>
										</div>
							</td>
							</tr>
		
						  </tbody>
						  @endforeach
				

					  </table>  
				</div><!--/span-->
			
			</div><!--/row-->


		

@endsection