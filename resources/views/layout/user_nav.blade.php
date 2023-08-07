<ul class="nav nav-list  no-print">
	<li class="hover">
		<a href="{{route(currentUser().'.dashboard')}}"><span class="menu-text"> Dashboard </span></a>
		<b class="arrow"></b>
	</li>
	<li class="hover">
		<a href="{{route(currentUser().'.cattle.index')}}"><span class="menu-text"> Cattle </span></a>
		<b class="arrow"></b>
	</li>
	
	
	<li style="width:100px; float:right"><a href="{{route('logout')}}">Logout</a></li>
</ul><!-- /.nav-list -->