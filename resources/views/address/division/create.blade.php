@extends('layout.app')
@section('title','Division Add')
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
		Division
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Division Add
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
				<h5 class="widget-title lighter">Division Add Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.division.store')}}" method="post" class="form-search">
					@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Select Zone <span class="text-danger">*</span></label>
									<select class="form-control" name="zone_id" required>
									    @if($allZone)
    									    @foreach($allZone as $zone)
    									        <option value="{{$zone->id}}">{{$zone->zone}}</option>
    									    @endforeach
									    @endif
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('division')) has-error @endif">
									<label>Division Name <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="division" value="{{old('division')}}" required>
										@if($errors->has('division')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('division')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('division') }}
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