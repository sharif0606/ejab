@extends('layout.app')
@section('title','গবাদি পশু হালনাগাদ')
@push('style')
<style>
select {
    padding: 3px 4px;
    height: 34px;
}
hr {
    margin-top: 10px;
    margin-bottom: 10px;
}
.form-group{
    margin-bottom:5px;
}
.page-header {
    margin: 0 0 5px;
    border-bottom: 1px dotted #E2E2E2;
    padding-bottom: 2px;
    padding-top: 0px;
}
</style>
@endpush
@section('content')
<div class="page-header">
    <h1>
		গবাদি পশু
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            গবাদি পশু হালনাগাদ
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
				<h5 class="widget-title lighter">গবাদি পশু হালনাগাদ ফর্ম</h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<form action="{{route(currentUser().'.cattle.update',$cattle->id)}}" method="post" class="form-search" enctype="multipart/form-data">
					@csrf
					@method('PUT')
						<div class="row">
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>#SL No <span class="text-danger">*</span> </label>
									<span class="block input-icon input-icon-right">
										<input type="text" maxlength="8" required class="width-100" name="serial_no" value="{{old('serial_no',$cattle->serial_no)}}">
									</span>
									@if ($errors->has('serial_no'))
        								<span class="text-danger">{{ $errors->first('serial_no') }}</span>
        							@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>কৃত্রিম প্রজনন সুবিধা ভোগীর নাম</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="beneficiary_name" value="{{old('beneficiary_name',$cattle->beneficiary_name)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>কৃত্রিম প্রজনন সুবিধা ভোগীর মোবাইল নাম্বার </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" required name="beneficiary_contact" value="{{old('beneficiary_contact',$cattle->beneficiary_contact)}}">
									</span>
									@if ($errors->has('beneficiary_contact'))
        								<span class="text-danger">{{ $errors->first('beneficiary_contact') }}</span>
        							@endif
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>বাবা/স্বামীর নাম</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="f_or_h_name" value="{{old('f_or_h_name',$cattle->f_or_h_name)}}">
									</span>
								</div>
							</div>
						</div>
						<hr/>
						<div class="row">
					        <div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label> জোন </label>
									<span class="block input-icon input-icon-right">
										<select class="width-100" name="zone_id">
										    <option value="">জোন নির্বাচন করুন </option>
										    @if($zone)
										        @foreach($zone as $z)
										            <option value="{{$z->id}}" @if($z->id==old('zone_id',$cattle->zone_id)) selected @endif >{{$z->zone}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
					        <div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label> বিভাগ	</label>
									<span class="block input-icon input-icon-right">
										<select class="width-100" name="division_id" onchange="$('.pdist').hide();$('.pdist'+this.value).show()">
										    <option value="">বিভাগ নির্বাচন করুন</option>
										    @if($division)
										        @foreach($division as $divi)
										            <option value="{{$divi->id}}" @if($divi->id==old('division_id',$cattle->division_id)) selected @endif class="pdiviop pdiviop{{$divi->country_id}}">{{$divi->division}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
					        <div class="col-xs-12 col-sm-3">
					            <div class="form-group">
									<label>জেলা</label>
									<span class="block input-icon input-icon-right">
										<select class="width-100" name="district_id">
										    <option value="">জেলা নির্বাচন করুন </option>
										    @if($district)
										        @foreach($district as $dist)
										            <option value="{{$dist->id}}"  @if($dist->id==old('par_district',$cattle->par_district)) selected @endif class="pdist pdist{{$dist->division_id}}">{{$dist->district}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
					        </div>
					        <div class="col-xs-12 col-sm-3">
    				            <div class="form-group">
    								<label>উপজেলা/থানা </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="upazilla" value="{{old('upazilla',$cattle->upazilla)}}">
									</span>
    							</div>
    				        </div>
					        <div class="col-xs-12 col-sm-3">
    				            <div class="form-group">
    								<label>ইউনিয়ন/পৌরসভা/ওয়ার্ড </label>
    								<span class="block input-icon input-icon-right">
    									<input type="text" class="width-100" name="union" value="{{old('union',$cattle->union)}}">
    								</span>
    							</div>
    				        </div>
					        <div class="col-xs-12 col-sm-3">
    				            <div class="form-group">
    								<label>পোষ্ট অফিস </label>
    								<span class="block input-icon input-icon-right">
    									<input type="text" class="width-100" name="postoffice" value="{{old('postoffice',$cattle->postoffice)}}">
    								</span>
    							</div>
    				        </div>
					        <div class="col-xs-12 col-sm-3">
    				            <div class="form-group">
    								<label> গ্রাম/মহল্লা  </label>
    								<span class="block input-icon input-icon-right">
    									<input type="text" class="width-100" name="village" value="{{old('village',$cattle->village)}}">
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
										<input type="text" class="width-100" name="cow_age" value="{{old('cow_age',$cattle->cow_age)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> জাত  </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_breed" value="{{old('cow_breed',$cattle->cow_breed)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> রক্তের হার </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_blood_qty" value="{{old('cow_blood_qty',$cattle->cow_blood_qty)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>গায়ের রং </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_color" value="{{old('cow_color',$cattle->cow_color)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>ওজন (কেজি) </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_weight" value="{{old('cow_weight',$cattle->cow_weight)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>মোট বাচ্চা দেওয়ার সংখ্যা  </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_number_of_baby" value="{{old('cow_number_of_baby',$cattle->cow_number_of_baby)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>সর্বশেষ বাচ্চা প্রসবের তারিখ   </label>
									<span class="block input-icon input-icon-right">
										<input type="date" class="width-100" name="cow_last_delivery" value="{{old('cow_last_delivery',$cattle->cow_last_delivery)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>বকনা/গাভীর দুধ উৎপাদন ক্ষমতা/দিন(লিটার)  </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="cow_milking_qty" value="{{old('cow_milking_qty',$cattle->cow_milking_qty)}}">
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
										<input type="date" class="width-100" name="cow_pregnant_date" value="{{old('cow_pregnant_date',$cattle->cow_pregnant_date)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>ষাড়ের নাম   </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="bull_name" value="{{old('bull_name',$cattle->bull_name)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>ষাড়ের নাম্বার   </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="bull_number" value="{{old('bull_number',$cattle->bull_number)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>ষাড়ের জাত  </label>
									<span class="block input-icon input-icon-right">
										<select class="width-100" name="bull_breed">
										    <option value="">জাত নির্বাচন করুন </option>
										    @if($breed)
										        @foreach($breed as $br)
										            <option value="{{$br->id}}" @if($br->id==old('bull_breed',$cattle->bull_breed)) selected @endif >{{$br->breed}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>রক্তের হার  </label>
									<span class="block input-icon input-icon-right">
										<select class="width-100" name="blood_qty">
										    <option value=""> হার  নির্বাচন করুন </option>
										    @if($blood)
										        @foreach($blood as $bl)
										            <option value="{{$bl->id}}" @if($bl->id==old('blood_qty',$cattle->blood_qty)) selected @endif >{{$bl->blood_rate}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>বাচ্চা প্রসবের সম্ভাব্য তারিখ   </label>
									<span class="block input-icon input-icon-right">
										<input type="date" class="width-100" name="delivery_date_aprox" value="{{old('delivery_date_aprox',$cattle->delivery_date_aprox)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> গর্ভপরিক্ষার ফলাফল (+/-)  </label>
									<span class="block input-icon input-icon-right">
										<select class="width-100" name="pregnancy_exam_result">
										    <option value=""> ফলাফল নির্বাচন করুন </option>
										    <option value="1" @if(1==old('pregnancy_exam_result',$cattle->pregnancy_exam_result)) selected @endif> (+)হ্যাঁ </option>
										    <option value="0" @if(0==old('pregnancy_exam_result',$cattle->pregnancy_exam_result)) selected @endif> (-)না </option>
										</select>
									</span>
								</div>
							</div>
						</div>
						
						
						<hr/>
						<div class="row">
						    <div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> এআই টেকনিশিয়ানের নাম</label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ai_technician_name" value="{{old('ai_technician_name',$cattle->ai_technician_name)}}">
									</span>
								</div>
							</div>
						    <div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> আইডি/রেজিঃ নং </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ai_technician_id" value="{{old('ai_technician_id',$cattle->ai_technician_id)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> মোবাইল নাম্বার </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="ai_technician_contact" value="{{old('ai_technician_contact',$cattle->ai_technician_contact)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label> অবস্থা  </label>
									<span class="block input-icon input-icon-right">
										<select class="width-100" name="status" required>
										    <option value=""> অবস্থা নির্বাচন করুন </option>
										    <option value="1" @if(1==old('status',$cattle->status)) selected @endif> সক্রিয় </option>
										    <option value="0" @if(0==old('status',$cattle->status)) selected @endif> শেষ </option>
										</select>
									</span>
									
									@if ($errors->has('status'))
        								<span class="text-danger">{{ $errors->first('status') }}</span>
        							@endif
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<label>মন্তব্য </label>
									<span class="block input-icon input-icon-right">
										<textarea class="width-100" rows="3" name="remarks">{{old('remarks',$cattle->remarks)}}</textarea>
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
										<input type="date" class="width-100" name="delivery_date" value="{{old('delivery_date',$cattle->delivery_date)}}">
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>সদ্যজাত বাছুরের লিঙ্গ   </label>
									<span class="block input-icon input-icon-right">
										<select class="width-100" name="calf_gender">
										    <option value=""> লিঙ্গ নির্বাচন করুন </option>
										    <option value="1" @if(1==old('calf_gender',$cattle->calf_gender)) selected @endif> ষাঁড় </option>
										    <option value="0" @if(0==old('calf_gender',$cattle->calf_gender)) selected @endif> বকনা  </option>
										</select>
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>বাছুরের রং   </label>
									<span class="block input-icon input-icon-right">
									    <select class="width-100" name="calf_color">
										    <option value=""> রং নির্বাচন করুন </option>
										    @if($color)
										        @foreach($color as $co)
										            <option value="{{$co->id}}" @if($co->id==old('calf_color',$cattle->calf_color)) selected @endif >{{$co->color}}</option>
										        @endforeach
										    @endif
										</select>
									</span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label>বাছুরের ওজন (কেজি)  </label>
									<span class="block input-icon input-icon-right">
										<input type="text" class="width-100" name="calf_weight" value="{{old('calf_weight',$cattle->calf_weight)}}">
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<label>মন্তব্য </label>
									<span class="block input-icon input-icon-right">
										<textarea class="width-100" rows="3" name="remarks_final">{{old('remarks_final',$cattle->remarks)}}</textarea>
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