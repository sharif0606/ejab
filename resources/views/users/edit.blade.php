@extends('layout.app')
@section('title','Users Edit')
@push('style')
<style>
select {
    padding: 3px 4px;
    height: 34px;
}
</style>
@endpush
@section('content')
<div class="page-header">
    <h1>
        Users
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            User Edit
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
	@if(Session::has('response'))
        <div class="alert alert-{{Session::get('response')['class']}}">
        {{Session::get('response')['message']}}
        </div>
    @endif
        <!-- PAGE CONTENT BEGINS -->
        <div class="widget-box">
			<div class="widget-header widget-header-small">
				<h5 class="widget-title lighter">User Edit Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route('users.update',$user->id)}}" method="post" class="form-search">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{$user->id}}">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('name')) has-error @endif">
									<label>Name</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="name" value="{{$user->name}}">
										@if($errors->has('name')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('name')) 
										<div class="help-block col-sm-reset">
									{{ $errors->first('name') }}
										</div>
								@endif
								</div>
							</div>
							
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('email')) has-error @endif">
									<label>Email</label>
									<span class="block input-icon input-icon-right">
										<input type="email" class="width-100" name="email" value="{{$user->email}}">
										@if($errors->has('email')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('email')) 
										<div class="help-block col-sm-reset">
									{{ $errors->first('email') }}
										</div>
								@endif
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('contact')) has-error @endif">
									<label>Contact</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="contact" value="{{$user->contact}}">
										@if($errors->has('contact')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('contact')) 
										<div class="help-block col-sm-reset">
									{{ $errors->first('contact') }}
										</div>
								@endif
								</div>
							</div>
							
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Password</label>
									<span class="block input-icon input-icon-right">
										<input type="password" class="width-100" name="password" value=" " autocomplete="kamal">
									</span>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('username')) has-error @endif">
									<label>Username</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="username" value="{{$user->username}}">
										@if($errors->has('username')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('username')) 
										<div class="help-block col-sm-reset">
									{{ $errors->first('username') }}
										</div>
								@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('role_id')) has-error @endif">
									<label>Role</label>
									<span class="block input-icon input-icon-right">
										<select class="width-100" name="role_id">
											<option value="">Select Role</option>
											@if($role)
												@foreach($role as $r)
											<option value="{{$r->id}}" @if($r->id==$user->role_id) selected @endif>{{$r->type}}</option>
												@endforeach
											@endif
										</select>
										@if($errors->has('role_id')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('role_id')) 
										<div class="help-block col-sm-reset">
									{{ $errors->first('role_id') }}
										</div>
								@endif
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('status')) has-error @endif">
									<label>Status</label>
									<span class="block input-icon input-icon-right">
									@php $status=array('Inactive','active','Pending','Freez','Block'); @endphp
										<select class="width-100" name="status">
											<option value="">Select Status</option>
											@if($status)
												@foreach($status as $i=>$s)
											<option value="{{$i}}" @if($i==$user->status) selected @endif>{{$s}}</option>
												@endforeach
											@endif
										</select>
										@if($errors->has('status')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('status')) 
										<div class="help-block col-sm-reset">
									{{ $errors->first('status') }}
										</div>
								@endif
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-12 text-right">
								<button class="btn btn-primary" type="submit"> Update </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
</div>

@endsection