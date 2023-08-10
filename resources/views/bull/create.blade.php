@extends('layout.app')
@section('title','ষাঁড় যোগ')

@section('content')
<div class="page-header">
    <h1>
		ষাঁড়
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
             ষাঁড় যোগ
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
				<h5 class="widget-title lighter">ষাঁড় যোগ ফর্ম</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.bull.store')}}" method="post" class="form-search">
					@csrf
						
						<div class="row">
					        <div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label> ষাড়ের জাত </label>
									<span class="block input-icon input-icon-right">
										<select class="width-100 chosen-select" name="breed_id">
										    <option value="">জাত নির্বাচন করুন </option>
										    @if($breed)
										        @foreach($breed as $z)
										            <option value="{{$z->id}}" @if($z->id==old('breed_id')) selected @endif >{{$z->breed}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
							<div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label> রক্তের হার </label>
									<span class="block input-icon input-icon-right">
										<select class="width-100 chosen-select" name="blood_rate_id">
										    <option value="">রক্তের হার নির্বাচন করুন </option>
										    @if($bloodrate)
										        @foreach($bloodrate as $z)
										            <option value="{{$z->id}}" @if($z->id==old('blood_rate_id')) selected @endif >{{$z->blood_rate}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
					        <div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>ষাড়ের নাম </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="bull_name" value="{{old('bull_name')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>ষাড়ের নাম্বার </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="bull_number" value="{{old('bull_number')}}">
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
