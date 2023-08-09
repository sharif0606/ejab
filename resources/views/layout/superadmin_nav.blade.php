<ul class="nav nav-list  no-print">
	<li class="hover">
		<a href="{{route(currentUser().'.dashboard')}}"><span class="menu-text"> Dashboard </span></a>
		<b class="arrow"></b>
	</li>
	<li class="hover">
		<a href="{{route(currentUser().'.cattle.index')}}"><span class="menu-text"> Cattle </span></a>
		<b class="arrow"></b>
	</li>
	<li class="open hover">
		<a href="#" class="dropdown-toggle">
			<span class="menu-text"> Address Settings </span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
			<li class="hover"><a href="{{route(currentUser().'.country.index')}}">Country</a></li>
			<li class="hover"><a href="{{route(currentUser().'.zone.index')}}">Zone</a></li>
			<li class="hover"><a href="{{route(currentUser().'.division.index')}}">Division</a></li>
			<li class="hover"><a href="{{route(currentUser().'.district.index')}}">District</a></li>
			<li class="hover"><a href="{{route(currentUser().'.upazilla.index')}}">Upazilla</a></li>
			<li class="hover"><a href="{{route(currentUser().'.union.index')}}">Union</a></li>
			{{-- <li class="hover"><a href="{{route(currentUser().'.village.index')}}">Village</a></li>
			<li class="hover"><a href="{{route(currentUser().'.postoffice.index')}}">Postoffice</a></li> --}}
		</ul>
	</li>
	<li class="open hover">
		<a href="#" class="dropdown-toggle">
			<span class="menu-text"> Settings </span>
			<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
			<li class="hover"><a href="{{route(currentUser().'.color.index')}}">Color</a></li>
			<li class="hover"><a href="{{route(currentUser().'.bloodrate.index')}}">Blood Rate</a></li>
			<li class="hover"><a href="{{route(currentUser().'.breed.index')}}">Breed</a></li>
			<li class="hover"><a href="{{route(currentUser().'.bull.index')}}">Bull</a></li>
		</ul>
	</li>
	<li class="hover">
		<a href="{{route(currentUser().'.users.index')}}"><span class="menu-text"> Users </span></a>
		<b class="arrow"></b>
	</li>
	<li class="hover">
		<a href="{{route(currentUser().'.aidealer.index')}}"><span class="menu-text"> AI Dealer </span></a>
		<b class="arrow"></b>
	</li>
	
	<li style="width:100px; float:right"><a href="{{route('logout')}}">Logout</a></li>
</ul><!-- /.nav-list -->