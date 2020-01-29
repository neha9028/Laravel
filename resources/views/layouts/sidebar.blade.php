<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">{{Auth::user()->name}}</div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	
	<ul class="nav menu">
		<li><a href="{{ url('/home') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
		<li><a href="{{ url('/widgets-dash') }}"><em class="fa fa-calendar">&nbsp;</em> Category</a></li>
		<li><a href="{{ route('product_list') }}"><em class="fa fa-bar-chart">&nbsp;</em> Products</a></li>
		<li><a href="{{ route('offers') }}"><em class="fa fa-bar-chart">&nbsp;</em> offers</a></li>
	</ul>
</div><!--/.sidebar-->


