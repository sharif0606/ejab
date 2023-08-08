@extends('layout.app')
@section('title','Zone Add')
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
		Zone
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Zone Add
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
				<h5 class="widget-title lighter">Zone Add Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.zone.store')}}" method="post" class="form-search">
					@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Select Country <span class="text-danger">*</span></label>
									<select class="form-control" name="country_id">
									    @if($allCountry)
    									    @foreach($allCountry as $country)
    									        <option value="{{$country->id}}">{{$country->code}}-{{$country->country}}</option>
    									    @endforeach
									    @endif
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="form-group @if($errors->has('zone_en')) has-error @endif">
									<label>zone Name <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" required name="zone_en" value="{{old('zone_en')}}">
										@if($errors->has('zone_en')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('zone_en')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('zone_en') }}
										</div>
									@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="form-group @if($errors->has('zone')) has-error @endif">
									<label>zone Name (Bangla) <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" required name="zone" value="{{old('zone')}}">
										@if($errors->has('zone')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('zone')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('zone') }}
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