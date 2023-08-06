@extends('layout.auth_master')
@section('title','Admin Forget Password')
@section('auth')

<div class="position-relative">
	<div id="forgot-box" class="forgot-box no-border">
		<div class="widget-body">
			<div class="widget-main">
				<h4 class="header red lighter bigger">
					<i class="ace-icon fa fa-key"></i>
					Retrieve Password
				</h4>
				@if(Session::has('response'))
					<div class="alert alert-{{Session::get('response')['class']}}">
					{{Session::get('response')['message']}}
					</div>
				@endif
				<div class="space-6"></div>
				<p>
					Enter your email and to receive instructions
				</p>

				<form>
					<fieldset>
						<label class="block clearfix">
							<span class="block input-icon input-icon-right">
								<input type="email" class="form-control" placeholder="Email" />
								<i class="ace-icon fa fa-envelope"></i>
							</span>
						</label>

						<div class="clearfix">
							<button type="button" class="width-35 pull-right btn btn-sm btn-danger">
								<i class="ace-icon fa fa-lightbulb-o"></i>
								<span class="bigger-110">Send Me!</span>
							</button>
						</div>
					</fieldset>
				</form>
			</div><!-- /.widget-main -->

			<div class="toolbar center">
				<a href="{{route('login')}}" class="back-to-login-link">
					<i class="ace-icon fa fa-arrow-left"></i>
					Back to login
				</a>
			</div>
		</div><!-- /.widget-body -->
	</div><!-- /.forgot-box -->
</div>
@endsection