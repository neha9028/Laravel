@extends('layouts.admin')
@section('content')	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Offer</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			
			@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="col-md-10 col-md-offset-1">
				
				
				<div class="panel panel-default">
					<div class="panel-heading">
						Add Offer
						<span class="pull-right panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<form class="form-horizontal" action="{{route('create_offer')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<fieldset>
								<div class="form-group">
									<label class="col-md-2 control-label" for="name">Category</label>
									<div class="col-md-10">
										<select class="form-control" id="sel1" name="cat_name">
											<option>Select Category</option>
											 @for ($i = 0; $i < count($catgs); $i++)
												<option value="{{$catgs[$i]['id']}}">{{$catgs[$i]['name']}}</option>
										   	 @endfor
										 </select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="name">Give offers</label>
									<div class="col-md-10">
										<textarea name="offers" id="offer_editor" ></textarea>
									</div>
								</div>							
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!--/.col-->
			
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script type="text/javascript">
		CKEDITOR.replace( 'offer_editor' );
	</script>
@endsection

