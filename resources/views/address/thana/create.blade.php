@extends('layout.app')
@section('title','Thana Add')
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
		Thana
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Thana Add
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
				<h5 class="widget-title lighter">Thana Add Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.thana.store')}}" method="post" class="form-search">
					@csrf
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('thana')) has-error @endif">
									<label>Thana Name <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="thana" value="{{old('thana')}}">
										@if($errors->has('thana')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('thana')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('thana') }}
										</div>
									@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Select Upazilla</label>
									<select class="form-control" name="upazilla_id">
									    <option value="">Select Upazilla</option>
									    @if($allUpazilla)
									    @foreach($allUpazilla as $upazilla)
									    <option value="{{$upazilla->id}}">{{$upazilla->upazilla}}</option>
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