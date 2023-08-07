@extends('layout.app')
@section('title','Dealer Add')
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
		Dealer
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Dealer Add
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
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> বকনা বা গাভীর বয়স </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_age" value="{{old('cow_age')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> জাত/রক্তের হার  </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_breed" value="{{old('cow_breed')}}">
									</span>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>গায়ের রং </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_color" value="{{old('cow_color')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>ওজন (কেজি) </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_weight" value="{{old('cow_weight')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>মোট বাচ্চা দেওয়ার সংখ্যা  </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_number_of_baby" value="{{old('cow_number_of_baby')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>সর্বশেষ বাচ্চা প্রসবের তারিখ   </label>
									<span class="block input-icon input-icon-right">
										<input type="date" class="width-100" name="cow_last_delivery" value="{{old('cow_last_delivery')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>বকনা/গাভীর দুধ উৎপাদন ক্ষমতা/দিন(লিটার)  </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_milking_qty" value="{{old('cow_milking_qty')}}">
									</span>
								</div>
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>কৃত্রিম প্রজনন করার তারিখ   </label>
									<span class="block input-icon input-icon-right">
										<input type="date" class="width-100" name="cow_pregnant_date" value="{{old('cow_pregnant_date')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>ষাড়ের নাম   </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="bull_name" value="{{old('bull_name')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>ষাড়ের নাম্বার   </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="bull_number" value="{{old('bull_number')}}">
									</span>
								</div>
							</div>
							
						</div>
						
						<hr/>
						<div class="row">
						    <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label> এআই টেকনিশিয়ানের নাম</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ai_technician_name" value="{{old('ai_technician_name')}}">
									</span>
								</div>
							</div>
						    <div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label> আইডি/রেজিঃ নং </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ai_technician_id" value="{{old('ai_technician_id')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label> মোবাইল নাম্বার </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ai_technician_contact" value="{{old('ai_technician_contact')}}">
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<label>মন্তব্য </label>
									<span class="block input-icon input-icon-right">
										<textarea class="width-100" rows="2" name="remarks">{{old('remarks')}}</textarea>
									</span>
								</div>
							</div>
						</div>
						<hr style="border-top: 3px dashed red;"/>
						<div class="row">
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> বাচ্চা প্রসবের প্রকৃত তারিখ  </label>
									<span class="block input-icon input-icon-right">
										<input readonly type="date" class="width-100" name="delivery_date" value="{{old('delivery_date')}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>সদ্যজাত বাছুরের লিঙ্গ   </label>
									<span class="block input-icon input-icon-right">
										<select readonly class="width-100" name="calf_gender">
										    <option value=""> লিঙ্গ নির্বাচন করুন </option>
										    <option disabled value="1" @if(1==old('calf_gender')) selected @endif> ষাঁড় </option>
										    <option disabled value="0" @if(0==old('calf_gender')) selected @endif> বকনা  </option>
										</select>
									</span>
								</div>
							</div>
							
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>বাছুরের ওজন (কেজি)  </label>
									<span class="block input-icon input-icon-right">
										<input readonly type="text" class="width-100" name="calf_weight" value="{{old('calf_weight')}}">
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<label>মন্তব্য </label>
									<span class="block input-icon input-icon-right">
										<textarea class="width-100" rows="2" name="remarks_final">{{old('remarks_final')}}</textarea>
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
