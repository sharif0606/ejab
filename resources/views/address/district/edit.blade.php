@extends('layout.app')
@section('title','District Update')
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
		District
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            District Add
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
				<h5 class="widget-title lighter">District Update Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.district.update',$district->id)}}" method="post" class="form-search">
					@csrf
					@method('PUT')
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Select Divistion</label>
									<select class="form-control" name="division_id">
									    @if($allDivision)
											@foreach($allDivision as $dv)
												<option value="{{$dv->id}}" @if($dv->id == $district->division_id) selected @endif>{{$dv->division}}</option>
											@endforeach
									    @endif
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="form-group @if($errors->has('district_en')) has-error @endif">
									<label>District Name <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="district_en" value="{{ old('district_en', $district->district_en) }}">
										@if($errors->has('district_en')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('district_en')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('district_en') }}
										</div>
									@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="form-group @if($errors->has('district')) has-error @endif">
									<label>District Name (Bangla)<span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="district" value="{{ old('district', $district->district) }}">
										@if($errors->has('district')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('district')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('district') }}
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