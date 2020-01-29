@extends('layouts.admin')
@section('content')	
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header pull-left">SubCategory List</h1>
			</div>

		</div><!--/.row-->

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				 <table class="table table-striped">
				    <thead>
				      <tr>
				      	<th>#</th>
				        <th>Name</th>
				        
				      </tr>
				    </thead>
				    <tbody>
				    	@for ($i = 0; $i < count($sub_category); $i++)
					      <tr>
					      	<td>{{$i + 1}}</td>
					        <td>{{$sub_category[$i]->name}}</td>
					        
					      </tr>
				       @endfor
				    
				    </tbody>
				  </table>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection

