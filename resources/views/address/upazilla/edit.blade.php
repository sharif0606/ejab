@extends('layout.app')
@section('title','Upazila Update')
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
		Upazila
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Upazila Add
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
				<h5 class="widget-title lighter">Upazila Update Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.upazilla.update',$upazilla->id)}}" method="post" class="form-search">
					@csrf
					@method('PUT')
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('upazilla')) has-error @endif">
									<label>Upazilla Name <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="upazilla" value="{{ old('upazilla', $upazilla->upazilla) }}">
										@if($errors->has('upazilla')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('upazilla')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('upazilla') }}
										</div>
									@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Select District</label>
									<select class="form-control" name="district_id">
									    <option value="">Select District</option>
									    @if($allDistrict)
									    @foreach($allDistrict as $dv)
									    <option value="{{$dv->id}}" @if($dv->id == $upazilla->district_id) selected @endif>{{$dv->district}}</option>
									    @endforeach
									    @endif
									</select>
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