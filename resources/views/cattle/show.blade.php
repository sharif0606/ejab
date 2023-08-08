@extends('layout.app')
@section('title','গবাদি পশু বিস্তারিত')
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
.flex-container{
    margin-bottom:5px;
}
.page-header {
    margin: 0 0 5px;
    border-bottom: 1px dotted #E2E2E2;
    padding-bottom: 2px;
    padding-top: 0px;
}
.box-span {
    color: #000!important;
    background-color: #EEE!important;
    border:1px solid #AAA;
    padding:5px;
    display:inline-block;
}
.mt-2{
    margin-top:10px;
}
.mb-3{
    margin-bottom:15px;
}
.form-inline .form-control {
    display: inline-block;
    width: 98%;
    vertical-align: middle;
}
.flex-container {
  display: flex;
  align-items: stretch;
}
.pl-0{
    padding-left:0;
}
.pr-0{
    padding-right:0;
}
.pl-1{
    padding-left:5px;
}
.pl-2{
    padding-left:15px;
}
.pr-1{
    padding-right:5px;
}
</style>
@endpush
@section('content')
<div class="page-header no-print">
    <h1>
		গবাদি পশু
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            গবাদি পশু বিস্তারিত
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12 pl-0 pr-0">
		@php
            $search_array= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", ":", ",");
            $replace_array= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", ":", ","); 
        @endphp
        <!-- PAGE CONTENT BEGINS -->
        <div class="widget-box">
			<div class="widget-header widget-header-small no-print">
				<h5 class="widget-title lighter">গবাদি পশু বিস্তারিত </h5>
			</div>
			<div class="widget-body">
				<div class="widget-main">
				    <div class="row" style="padding:0">
				        <div class="col-12" style="padding:0">
				            <h3 style="font-size:18px; font-weight:bold" class="text-center">ইজাব এলায়েন্স লিমিটেড</h3>
				            <h3 class="text-center" style="margin-top:5px;font-size:18px; font-weight:bold">সিঙ্গিয়া, জগন্নাথপুর, ঠাকুরগাঁও</h3>
				        </div>
				    </div>
				    <form class="form form-inline" role="form">
						<div class="row mb-3" style="margin-top:25px;">
							<div class="col-xs-3">
								<div class="flex-container">
									<label style="flex-grow: 1" class="pr-1">SL. </label>
									<span style="flex-grow: 9" class="box-span" >{{$cattle->serial_no}}</span>
								</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-xs-12">
								<div class="flex-container">
									<label style="flex: 30%;">কৃত্রিম প্রজনন সুবিধা ভোগীর নাম</label>
									<span style="flex: 70%;" class="box-span">{{$cattle->beneficiary_name}}</span>
								</div>
							</div>
							<div class="col-xs-12 mt-2">
								<div class="flex-container">
									<label style="flex: 15%;">পিতা/স্বামীর নাম</label>
									<span style="flex: 85%;" class="box-span">{{$cattle->f_or_h_name}}</span>
								</div>
							</div>
						</div>
						<div class="row">
					        <div class="col-xs-12 mt-2">
					            <div class="flex-container">
					                <div style="flex:33%">
					                    <div class="flex-container">
        									<label style="flex: 30%" class="pl-1"> জোন </label>
        									<span style="flex: 70%" class="box-span">{{$cattle->zone?$cattle->zone->zone:"নেই"}}</span>
        								</div>
					                </div>
					                <div style="flex:33%">
					                    <div class="flex-container">
        									<label style="flex: 30%" class="pl-2"> বিভাগ </label>
        									<span style="flex: 70%" class="box-span">{{$cattle->division?$cattle->division->division:"নেই"}}</span>
        								</div>
					                </div>
					                <div style="flex:34%">
					                    <div class="flex-container">
        									<label style="flex: 30%" class="pl-2"> জেলা </label>
        									<span style="flex: 70%" class="box-span">{{$cattle->district?$cattle->district->district:"নেই"}}</span>
        								</div>
					                </div>
					            </div>
					        </div>
					        
					                
					        <div class="col-xs-12">
					            <div class="flex-container">
        					        <div style="flex:40%">
            				            <div class="flex-container">
            								<label style="flex: 35%"> উপজেলা/থানা </label>
            								<span style="flex: 65%" class="box-span">{{$cattle->upazilla?$cattle->upazilla->upazilla:"নেই"}}</span>
            							</div>
            				        </div>
					                <div style="flex:60%">
            				            <div class="flex-container">
            								<label style="flex: 40%">ইউনিয়ন/পৌরসভা/ওয়ার্ড </label>
            								<span style="flex: 60%" class="box-span">{{$cattle->union?$cattle->union->union:"নেই"}}</span> 
            							</div>
    				                </div>
            				    </div>
            				</div>
            				<div class="col-xs-12">
					            <div class="flex-container">
        					        <div style="flex:50%">
            				            <div class="flex-container">
            								<label style="flex: 40%" class="pl-2">পোষ্ট অফিস </label>
            								<span style="flex: 60%" class="box-span" >{{$cattle->postoffice}}</span>
            							</div>
            				        </div>
        					        <div style="flex:50%">
            				            <div class="flex-container">
            								<label style="flex: 34%" class="pl-2"> গ্রাম/মহল্লা  </label>
            								<span style="flex: 66%" class="box-span">{{$cattle->village}}</span>
            							</div>
            				        </div>
					            </div>
					        </div>
					    </div>
						<div class="row">
							<div class="col-xs-12 mt-2">
								<div class="flex-container">
									<label style="flex: 40%">কৃত্রিম প্রজনন সুবিধা ভোগীর মোবাইল নাম্বার </label>
									<span style="flex: 60%" class="box-span" >{{$cattle->beneficiary_contact}}</span>
								</div>
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-xs-12">
							    <div class="flex-container">
        					        <div style="flex:33%">
        								<div class="flex-container">
        									<label style="flex: 60%"> বকনা বা গাভীর বয়স </label>
        									<span style="flex: 40%" class="box-span">{{$cattle->cow_age}}</span>
        								</div>
							        </div>
        							<div style="flex:40%">
        								<div class="flex-container">
        									<label style="flex: 40%" class="pl-2"> জাত/রক্তের হার  </label>
        									<span style="flex: 60%" class="box-span">{{$cattle->cow_breed}}</span>
        								</div>
        							</div>
        							<div style="flex:27%">
        								<div class="flex-container">
        									<label style="flex: 40%" class="pl-2"> গায়ের রং </label>
        									<span style="flex: 60%" class="box-span">{{$cattle->cow_color}}</span>
        								</div>
        							</div>
        						</div>
        					</div>
							<div class="col-xs-12">
							    <div class="flex-container">
        					        <div style="flex:23%">
        								<div class="flex-container">
        									<label style="flex: 60%"> ওজন (কেজি)  </label>
        									<span style="flex: 40%" class="box-span">{{$cattle->cow_weight}}</span>
        								</div>
							        </div>
        							<div style="flex:37%">
        								<div class="flex-container">
        									<label style="flex: 70%" class="pl-2"> মোট বাচ্চা দেওয়ার সংখ্যা  </label>
        									<span style="flex: 30%" class="box-span">{{$cattle->cow_number_of_baby}}</span>
        								</div>
        							</div>
        							<div style="flex:40%">
        								<div class="flex-container">
        									<label style="flex: 70%" class="pl-1 pr-1">সর্বশেষ বাচ্চা প্রসবের তারিখ </label>
        									<span style="flex: 30%" class="box-span">{{ $cattle->cow_last_delivery?$cattle->cow_last_delivery!="0000-00-00"?str_replace( $replace_array,$search_array, date('d/m/Y',strtotime($cattle->cow_last_delivery))):"":""}}</span>
        								</div>
        							</div>
        						</div>
        					</div>
							<div class="col-xs-12">
							    <div class="flex-container">
        					        <div style="flex:60%">
        								<div class="flex-container">
        									<label style="flex: 70%">বকনা/গাভীর দুধ উৎপাদন ক্ষমতা/দিন(লিটার)  </label>
        									<span style="flex: 30%" class="box-span">{{$cattle->cow_milking_qty}}</span>
        								</div>
							        </div>
        							<div style="flex:40%">
        								<div class="flex-container">
        									<label style="flex: 70%" class="pl-2">কৃত্রিম প্রজনন করার তারিখ  </label>
        									<span style="flex: 30%" class="box-span">{{ $cattle->cow_pregnant_date?$cattle->cow_pregnant_date!="0000-00-00"?str_replace( $replace_array,$search_array, date('d/m/Y',strtotime($cattle->cow_pregnant_date))):"":""}}</span>
        								</div>
        							</div>
        						</div>
        					</div>
						</div>
						<hr/>
							
						<div class="row">
							<div class="col-xs-12">
							    <div class="flex-container">
        							<div style="flex:35%">
        								<div class="flex-container">
        									<label style="flex: 40%" class="pl-1 pr-1">ষাড়ের নাম </label>
        									<span style="flex: 60%" class="box-span">{{$cattle->bull_name}}</span>
        								</div>
        							</div>
        							<div style="flex:34%">
        								<div class="flex-container">
        									<label style="flex: 40%" class="pl-1 pr-1">ষাড়ের নাম্বার </label>
        									<span style="flex: 60%" class="box-span">{{$cattle->bull_number}}</span>
        								</div>
        							</div>
        							<div style="flex:31%">
        								<div class="flex-container">
        									<label style="flex: 40%" class="pl-1 pr-1">ষাড়ের জাত</label>
        									<span style="flex: 60%" class="box-span">{{$cattle->breed?$cattle->breed->breed:"নেই"}}</span>
        								</div>
        							</div>
        						</div>
        					</div>
        					<div class="col-xs-12">
							    <div class="flex-container">
        							<div style="flex:22%">
        								<div class="flex-container">
        									<label style="flex: 58%" class="pl-1 pr-1">রক্তের হার  </label>
        									<span style="flex: 42%" class="box-span">{{$cattle->blood_rate?$cattle->blood_rate->blood_rate:"নেই"}}</span>
        								</div>
        							</div>
        							<div style="flex:42%">
        								<div class="flex-container">
        									<label style="flex: 68%" class="pl-2 pr-1">বাচ্চা প্রসবের সম্ভাব্য তারিখ </label>
        									<span style="flex: 32%" class="box-span">{{ $cattle->delivery_date_aprox?$cattle->delivery_date_aprox!="0000-00-00"?str_replace( $replace_array,$search_array, date('d/m/Y',strtotime($cattle->delivery_date_aprox))):"":""}}</span>
        								</div>
        							</div>
        							<div style="flex:36%">
        								<div class="flex-container">
        									<label style="flex: 70%" class="pl-1 pr-1">গর্ভপরিক্ষার ফলাফল (+/-)  </label>
        									<span style="flex: 30%" class="box-span">{{$cattle->pregnancy_exam_result?"(+)হ্যাঁ":"(-)না"}}</span>
        								</div>
        							</div>
        						</div>
        					</div>
						</div>
						
						<hr/>
						<div class="row">
						    <div class="col-xs-12">
								<div class="flex-container">
									<label style="flex: 26%"> এআই টেকনিশিয়ানের নাম</label>
									<span style="flex: 74%" class="box-span">{{$cattle->ai_technician_name}}</span>
								</div>
							</div>
						</div>
					    <div class="row">
						    <div class="col-xs-5">
								<div class="flex-container">
									<label style="flex: 45%"> আইডি/রেজিঃ নং </label>
									<span style="flex: 55%" class="box-span">{{$cattle->ai_technician_id}}</span>
								</div>
							</div>
							<div class="col-xs-7">
								<div class="flex-container">
									<label style="flex: 26%"> মোবাইল নাম্বার </label>
									<span style="flex: 74%" class="box-span">{{$cattle->ai_technician_contact}}</span>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-xs-12">
								<div class="flex-container">
									<label style="flex: 10%">মন্তব্য </label>
									<span style="flex: 90%; height:80px" class="box-span">{{old('remarks',$cattle->remarks)}}</span>
								</div>
							</div>
						</div>
						<hr style="border-top: 3px dashed red;"/>
						<div class="row">
							<div class="col-xs-12">
							    <div class="flex-container">
        							<div style="flex:40%">
        								<div class="flex-container">
        									<label style="flex: 62%" class="pl-1 pr-1">বাচ্চা প্রসবের প্রকৃত তারিখ  </label>
        									<span style="flex: 38%" class="box-span">{{ $cattle->delivery_date?$cattle->delivery_date!="0000-00-00"?str_replace( $replace_array,$search_array, date('d/m/Y',strtotime($cattle->delivery_date))):"":""}}</span>
        								</div>
        							</div>
        							<div style="flex:35%">
        								<div class="flex-container">
        									<label style="flex: 68%" class="pl-2 pr-1">সদ্যজাত বাছুরের লিঙ্গ   </label>
        									<span style="flex: 32%" class="box-span">{{$cattle->calf_gender?"ষাঁড়":"বকনা"}}</span>
        								</div>
        							</div>
        							<div style="flex:25%">
        								<div class="flex-container">
        									<label style="flex: 50%" class="pl-1 pr-1">বাছুরের রং </label>
        									<span style="flex: 50%" class="box-span">{{$cattle->color?$cattle->color->color:"নেই"}}</span>
        								</div>
        							</div>
        						</div>
        					</div>
        					<div class="col-xs-5">
							    <div class="flex-container">
        							<div style="flex:40%">
        								<div class="flex-container">
        									<label style="flex: 60%" class="pl-1 pr-1">বাছুরের ওজন (কেজি)  </label>
        									<span style="flex: 40%" class="box-span">{{$cattle->calf_weight}}</span>
        								</div>
        							</div>
        						</div>
        					</div>
						</div>
						
						<div class="row">
							<div class="col-xs-12">
								<div class="flex-container">
									<label style="flex: 10%">মন্তব্য </label>
									<span style="flex: 90%; height:80px" class="box-span">{{old('remarks_final',$cattle->remarks_final)}}</span>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
</div>

@endsection