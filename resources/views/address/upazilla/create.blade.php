@extends('layout.app')
@section('title','Upazilla Add')
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
		Upazilla
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Upazilla Add
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
				<h5 class="widget-title lighter">Upazilla Add Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.upazilla.store')}}" method="post" class="form-search">
					@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Select District</label>
									<select class="form-control" name="district_id">
									    @if($allDistrict)
											@foreach($allDistrict as $district)
												<option value="{{$district->id}}">{{$district->district}}</option>
											@endforeach
									    @endif
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="form-group @if($errors->has('upazilla_en')) has-error @endif">
									<label>Upazilla Name <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="upazilla_en" value="{{old('upazilla_en')}}">
										@if($errors->has('upazilla_en')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('upazilla_en')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('upazilla_en') }}
										</div>
									@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="form-group @if($errors->has('upazilla')) has-error @endif">
									<label>Upazilla Name (Bangla) <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="upazilla" value="{{old('upazilla')}}">
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