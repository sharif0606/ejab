<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>{{Session::get('identity')}} | @yield('title')</title>

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('public/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="{{asset('public/assets/css/fonts.googleapis.com.css')}}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('public/assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="{{asset('public/assets/css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="{{asset('public/assets/css/ace-skins.min.css')}}" />
		<link rel="stylesheet" href="{{asset('public/assets/css/ace-rtl.min.css')}}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="{{asset('public/assets/css/ace-ie.min.css')}}" />
		<![endif]-->

		<!-- inline styles related to this page -->
		<link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}"/>
		<style>
		    .sidebar.h-sidebar {margin-top: 0px;}
		    .page-header {
                margin: 0 0 5px;
                border-bottom: 1px dotted #E2E2E2;
                padding-bottom: 2px;
                padding-top: 0px;
            }
            .h-sidebar+.main-content .page-content {padding-top: 5px;}
            @media print {
                .no-print {
                    display: none;
                }
            }
		</style>
		@stack('style')
		<!-- ace settings handler -->
		<script src="{{asset('public/assets/js/ace-extra.min.js')}}"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="{{asset('public/assets/js/html5shiv.min.js')}}"></script>
		<script src="{{asset('public/assets/js/respond.min.js')}}"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state no-print">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts no-print" id="sidebar-shortcuts">
					ejab Database 
				</div><!-- /.sidebar-shortcuts -->

				@include('layout.'.currentUser()."_nav")
			
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">

						@yield('content')
						
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Powered By </span>
							Techshore Bangladesh 
						</span>

					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{asset('public/assets/js/jquery-2.1.4.min.js')}}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="{{asset('public/assets/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('public/assets/js/ace.min.js')}}"></script>

		<!-- inline scripts related to this page -->
		@stack('script')
	</body>
</html>
