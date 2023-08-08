@extends('layout.app')
@section('title','Union Update')
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
		Union
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Union Add
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
				<h5 class="widget-title lighter">Union Update Form</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.union.update',$union->id)}}" method="post" class="form-search">
					@csrf
					@method('PUT')
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label>Select Upazila</label>
									<select class="form-control" name="upazilla_id">
									    @if($allUpazilla)
											@foreach($allUpazilla as $u)
												<option value="{{$u->id}}" @if($u->id == $union->upazilla_id) selected @endif>{{$u->upazilla}}</option>
											@endforeach
									    @endif
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group @if($errors->has('union')) has-error @endif">
									<label>Union Name <span class="text-danger">*</span></label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="union" value="{{ old('union', $union->union) }}">
										@if($errors->has('union')) 
											<i class="ace-icon fa fa-times-circle"></i>
										@endif
									</span>
									@if($errors->has('union')) 
										<div class="help-block col-sm-reset">
											{{ $errors->first('union') }}
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