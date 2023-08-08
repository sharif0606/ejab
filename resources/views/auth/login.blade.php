@extends('layout.auth_master')
@section('title','Admin Login')
@section('auth')
<div class="position-relative">
	<div id="login-box" class="login-box visible widget-box no-border">
		<div class="widget-body">
			<div class="widget-main">
				<h4 class="header blue lighter bigger">
					<i class="ace-icon fa fa-coffee green"></i>
					Please Enter Your Information
				</h4>
				@if(Session::has('response'))
					<div class="alert alert-{{Session::get('response')['class']}}">
					{{Session::get('response')['message']}}
					</div>
				@endif
				<div class="space-6"></div>

				<form method="post" action="{{route('signin.varify')}}">
					@csrf
					<fieldset>
						<label class="block clearfix  @if($errors->has('username')) has-error @endif">
							<span class="block input-icon input-icon-right">
								<input type="text" name="username" class="form-control" value="{{old('username')}}" placeholder="Username" />
								<i class="ace-icon fa fa-user"></i>
							</span>
							@if ($errors->has('username'))
								<span class="text-danger">{{ $errors->first('username') }}</span>
							@endif
						</label>

						<label class="block clearfix  @if($errors->has('password')) has-error @endif">
							<span class="block input-icon input-icon-right">
								<input type="password" name="password" class="form-control" placeholder="Password" />
								<i class="ace-icon fa fa-lock"></i>
							</span>
							@if ($errors->has('password'))
								<span class="text-danger">{{ $errors->first('password') }}</span>
							@endif
						</label>


						<div class="space"></div>

						<div class="clearfix">
							<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
								<i class="ace-icon fa fa-key"></i>
								<span class="bigger-110">Login</span>
							</button>
						</div>

						<div class="space-4"></div>
					</fieldset>
				</form>
			</div><!-- /.widget-main -->

			<div class="toolbar clearfix">
				<div>
					<a href="{{route('forget')}}" class="forgot-password-link">
						<i class="ace-icon fa fa-arrow-left"></i>
						I forgot my password
					</a>
				</div>

				<!-- <div>
					<a href="{{route('signup')}}" class="user-signup-link">
						I want to register
						<i class="ace-icon fa fa-arrow-right"></i>
					</a>
				</div> -->
			</div>
		</div><!-- /.widget-body -->
	</div><!-- /.login-box -->

</div><!-- /.position-relative -->
@endsection
