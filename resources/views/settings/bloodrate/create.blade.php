@extends('layout.app')
@section('title','Blood Rate Add')
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
		Blood Rate
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Blood Rate Add
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
				<h5 class="widget-title lighter">Blood Rate Add Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.bloodrate.store')}}" method="post" class="form-search">
					@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('blood_rate_en')) has-error @endif">
									<label>Blood Rate <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="blood_rate_en" value="{{old('blood_rate_en')}}">
										@if($errors->has('blood_rate_en')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('blood_rate_en')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('blood_rate_en') }}
										</div>
									@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('blood_rate')) has-error @endif">
									<label>Blood Rate (Bangla) <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="blood_rate" value="{{old('country')}}">
										@if($errors->has('blood_rate')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('blood_rate')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('blood_rate') }}
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