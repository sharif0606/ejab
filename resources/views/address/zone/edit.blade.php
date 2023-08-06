@extends('layout.app')
@section('title','Country Update')
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
		Country
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Country Add
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
				<h5 class="widget-title lighter">Country Update Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.country.update',$country->id)}}" method="post" class="form-search">
					@csrf
					@method('PUT')
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('country')) has-error @endif">
									<label>Country Name <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="country" value="{{$country->country}}">
										@if($errors->has('country')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('country')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('country') }}
										</div>
									@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Country Code</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="code" value="{{$country->code}}">
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-right">
								<button class="btn btn-primary" type="submit"> Submit </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
</div>

@endsection