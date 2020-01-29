@extends('layouts.admin')
@section('content')	
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header pull-left">Category List</h1>
				<a class="btn btn-primary pull-right" href="{{route('category')}}" role="button" style="margin-top: 20px;">Add Category +</a>
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
				      	<th>#</th>
				        <th>Name</th>
				        <th>Offers</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    	@for ($i = 0; $i < count($catgs); $i++)
					      <tr>
					      	<td>{{$i + 1}}</td>
					        <td>{{$catgs[$i]->name}}</td>
					        <td>{!! $catgs[$i]->available_offers !!}</td>
					       
					        <?php
	      
							    $parameter= Crypt::encrypt($catgs[$i]->id);
							?>
					        <td><a class="btn btn-primary" href="{{url('subcat-form/'.$parameter)}}" role="button">Add Subcategory <i class="fa fa-plus"></i></a></td>
					      </tr>
				       @endfor
				    
				    </tbody>
				  </table>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection

