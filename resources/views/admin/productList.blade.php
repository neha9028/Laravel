@extends('layouts.admin')
@section('content')	
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header pull-left">Product List</h1>
				<a class="btn btn-primary pull-right" href="{{route('products')}}" role="button" style="margin-top: 20px;">Add Product +</a>
			</div>

		</div><!--/.row-->

		<div class="row">
			@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="col-md-10 col-md-offset-1">
				 <table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Name</th>
				        <th>Image</th>
				        <th>Price</th>
				        <th>Quantity</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    	@foreach ($products as $pro)
					      <tr>
					        <td>{{$pro['name']}}</td>
					        <td><img src="{{ asset('storage/'.$pro['main_image']) }}" style="width: 150px; height: 150px;"></td>
					        <td>{{$pro['price']}}</td>
					        <td>{{$pro['quantity']}}</td>
					        <?php
	      
							    $parameter= Crypt::encrypt($pro['id']);
							?>
					        <td><a class="btn btn-primary" href="{{url('variants-form/'.$parameter)}}" role="button">Add Variant <i class="fa fa-plus"></i></a></td>
					      </tr>
				      @endforeach
				    
				    </tbody>
				  </table>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection

