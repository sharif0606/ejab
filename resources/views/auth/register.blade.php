@extends('layout.auth_master')
@section('title','Admin Register')
@section('auth')

<div class="position-relative">
	<div id="signup-box" class="signup-box no-border">
		<div class="widget-body">
			<div class="widget-main">
				<h4 class="header green lighter bigger">
					<i class="ace-icon fa fa-users blue"></i>
					New User Registration
				</h4>
				@if(Session::has('response'))
					<div class="alert alert-{{Session::get('response')['class']}}">
					{{Session::get('response')['message']}}
					</div>
				@endif
				<div class="space-6"></div>
				<p> Enter your details to begin: </p>

				<form method="post" action="{{route('signUpStore')}}">
					@csrf
					<fieldset>
						<label class="block clearfix  @if($errors->has('name')) has-error @endif">
							<span class="block input-icon input-icon-right">
								<input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Full Name" />
								<i class="ace-icon fa fa-user"></i>
							</span>
							@if ($errors->has('name'))
								<span class="text-danger">{{ $errors->first('name') }}</span>
							@endif
						</label>
						<label class="block clearfix  @if($errors->has('email')) has-error @endif">
							<span class="block input-icon input-icon-right">
								<input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email" />
								<i class="ace-icon fa fa-envelope"></i>
							</span>
							@if ($errors->has('email'))
								<span class="text-danger">{{ $errors->first('email') }}</span>
							@endif
						</label>

						<label class="block clearfix  @if($errors->has('contact')) has-error @endif">
							<span class="block input-icon input-icon-right">
								<input type="text" name="contact" class="form-control" value="{{old('contact')}}" placeholder="Contact Number" />
								<i class="ace-icon fa fa-envelope"></i>
							</span>
							@if ($errors->has('contact'))
								<span class="text-danger">{{ $errors->first('contact') }}</span>
							@endif
						</label>

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

						<label class="block clearfix">
							<span class="block input-icon input-icon-right">
								<input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password" />
								<i class="ace-icon fa fa-retweet"></i>
							</span>
						</label>

						<label class="block">
							<input type="checkbox" class="ace" />
							<span class="lbl">
								I accept the
								<a href="#">User Agreement</a>
							</span>
						</label>

						<div class="space-24"></div>

						<div class="clearfix">
							<button type="reset" class="width-30 pull-left btn btn-sm">
								<i class="ace-icon fa fa-refresh"></i>
								<span class="bigger-110">Reset</span>
							</button>

							<button type="submit" class="width-65 pull-right btn btn-sm btn-success">
								<span class="bigger-110">Register</span>

								<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
							</button>
						</div>
					</fieldset>
				</form>
			</div>

			<div class="toolbar center">
				<a href="{{route('login')}}" class="back-to-login-link">
					<i class="ace-icon fa fa-arrow-left"></i>
					Back to login
				</a>
			</div>
		</div><!-- /.widget-body -->
	</div><!-- /.signup-box -->
</div>
@endsection