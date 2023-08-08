@extends('layout.app')
@section('title','Dealer & Technician Add')
@push('style')
<link rel="stylesheet" href="{{asset('public/assets/css/chosen.min.css')}}"/>
<style>
select {
    padding: 3px 4px;
    height: 34px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
}
.form-group{
    margin-bottom:5px;
}
		
</style>
@endpush
@section('content')
<div class="page-header">
    <h1>
		Dealer & Technician
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Dealer & Technician Add
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
				<h5 class="widget-title lighter">Ai Dealer</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.aidealer.store')}}" method="post" class="form-search" enctype="multipart/form-data">
					@csrf
						<div class="row">
					        <div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label> Zone </label>
									<span class="block input-icon input-icon-right">
										<select class="width-100 chosen-select" name="zone_id" onchange="$('.pdiviop').hide();$('.pdiviop'+this.value).show()">
										    <option value="">Select Zone</option>
										    @if($zone)
										        @foreach($zone as $z)
										            <option value="{{$z->id}}" @if($z->id==old('zone_id')) selected @endif >{{$z->zone}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
					        <div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label> Division</label>
									<span class="block input-icon input-icon-right">
										<select class="width-100 chosen-select" name="division_id" onchange="$('.pdist').hide();$('.pdist'+this.value).show()">
										    <option value="">Select Division</option>
										    @if($division)
										        @foreach($division as $divi)
										            <option value="{{$divi->id}}" @if($divi->id==old('division_id')) selected @endif class="pdiviop pdiviop{{$divi->zone_id}}">{{$divi->division}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
					        <div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label>District</label>
									<span class="block input-icon input-icon-right">
										<select class="width-100 chosen-select" name="district_id" onchange="$('.pupo').hide();$('.pupo'+this.value).show()">
										    <option value="">Select District </option>
										    @if($district)
										        @foreach($district as $dist)
										            <option value="{{$dist->id}}"  @if($dist->id==old('district_id')) selected @endif class="pdist pdist{{$dist->division_id}}">{{$dist->district}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
					        <div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label>Upazilla</label>
									<span class="block input-icon input-icon-right">
										<select class="width-100 chosen-select" name="upazilla_id" onchange="$('.puni').hide();$('.puni'+this.value).show()">
										    <option value="">Select Upazilla</option>
										    @if($upazilla)
										        @foreach($upazilla as $upo)
										            <option value="{{$upo->id}}"  @if($upo->id==old('upazilla_id')) selected @endif class="pupo pupo{{$upo->district_id}}">{{$upo->upazilla}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
					        <div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label>Union</label>
									<span class="block input-icon input-icon-right">
										<select class="width-100 chosen-select" name="union_id">
										    <option value="">Select Union </option>
										    @if($union)
										        @foreach($union as $uni)
										            <option value="{{$uni->id}}"  @if($uni->id==old('union_id')) selected @endif class="puni puni{{$uni->upazilla_id}}">{{$uni->union}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
					        
					    </div>
						<hr/>
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label> Dealer Name</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="name" value="{{old('name')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label> Dealer Contact  </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="contact_number" value="{{old('contact_number')}}">
									</span>
								</div>
							</div>
							
							<div class="col-xs-12">
								<div class="form-group">
									<label>Dealer Address </label>
									<span class="block input-icon input-icon-right">
										<textarea class="width-100" rows="2" name="address">{{old('address')}}</textarea>
									</span>
								</div>
							</div>
						</div>
						<hr/>
						<div class="row">
						    <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label> AI Technician Name</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ai_technician_name" value="{{old('ai_technician_name')}}">
									</span>
								</div>
							</div>
						    <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label> ID/Reg. No </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ai_technician_id" value="{{old('ai_technician_id')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label> AI Technician Contact </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ai_technician_contact" value="{{old('ai_technician_contact')}}">
									</span>
								</div>
							</div>
						</div>
						<hr/>
						<div class="row">
						    <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label> Training Institute</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="training_institute" value="{{old('training_institute','Ejab')}}">
									</span>
								</div>
							</div>
						    <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label> Batch No </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ejab_batch_no" value="{{old('ejab_batch_no')}}">
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

@push('script')
	<script src="{{asset('public/assets/js/chosen.jquery.min.js')}}"></script>
	<script>
		//$('.chosen-select').chosen({allow_single_deselect:true}); 
	</script>
@endpush
