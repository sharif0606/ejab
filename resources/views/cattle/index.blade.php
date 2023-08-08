@extends('layout.app')
@section('title','Cattle')
@section('content')
<div class="page-header">
    <h1>
		Cattle
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Cattle List
        </small>
        <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.cattle.create')}}">Add New</a>
        <a class="btn btn-warning pull-right btn-sm" style="margin-right:5px" href="{{route(currentUser().'.cattle_export')}}">Export Excel</a>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
         <a href="#" class="btn btn-link" onclick="$('.advance_search').toggle();">Advance Search</a>
        <form action="" method="get">
            <div class="row advance_search" style="display: none">
                <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                        <label> জোন </label>
                        <span class="block input-icon input-icon-right">
                            <select class="width-100 chosen-select" name="zone_id" onchange="$('.pdiviop').hide();$('.pdiviop'+this.value).show()">
                                <option value="">জোন নির্বাচন করুন </option>
                                @if($zone)
                                    @foreach($zone as $z)
                                        <option value="{{$z->id}}">{{$z->zone}}</option>
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
                            <select class="width-100 chosen-select" name="division_id" onchange="$('.pdist').hide();$('.pdist'+this.value).show()">
                                <option value="">বিভাগ নির্বাচন করুন</option>
                                @if($division)
                                    @foreach($division as $divi)
                                        <option value="{{$divi->id}}" class="pdiviop pdiviop{{$divi->zone_id}}">{{$divi->division}}</option>
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
                            <select class="width-100 chosen-select" name="district_id" onchange="$('.pupo').hide();$('.pupo'+this.value).show()">
                                <option value="">জেলা নির্বাচন করুন </option>
                                @if($district)
                                    @foreach($district as $dist)
                                        <option value="{{$dist->id}}" class="pdist pdist{{$dist->division_id}}">{{$dist->district}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                        <label>উপজেলা/থানা</label>
                        <span class="block input-icon input-icon-right">
                            <select class="width-100 chosen-select" name="upazilla_id" onchange="$('.puni').hide();$('.puni'+this.value).show()">
                                <option value="">উপজেলা/থানা নির্বাচন করুন </option>
                                @if($upazilla)
                                    @foreach($upazilla as $upo)
                                        <option value="{{$upo->id}}" class="pupo pupo{{$upo->district_id}}">{{$upo->upazilla}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                        <label>ইউনিয়ন/পৌরসভা/ওয়ার্ড </label>
                        <span class="block input-icon input-icon-right">
                            <select class="width-100 chosen-select" name="union_id">
                                <option value="">ইউনিয়ন/পৌরসভা/ওয়ার্ড নির্বাচন করুন </option>
                                @if($union)
                                    @foreach($union as $uni)
                                        <option value="{{$uni->id}}" class="puni puni{{$uni->upazilla_id}}">{{$uni->union}}</option>
                                    @endforeach
                                @endif
                            </select>
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
                                        <option value="{{$br->id}}" >{{$br->breed}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                        <label>রক্তের হার  </label>
                        <span class="block input-icon input-icon-right">
                            <select class="width-100" name="blood_qty">
                                <option value=""> হার  নির্বাচন করুন </option>
                                @if($blood)
                                    @foreach($blood as $bl)
                                        <option value="{{$bl->id}}">{{$bl->blood_rate}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                        <label>সদ্যজাত বাছুরের লিঙ্গ   </label>
                        <span class="block input-icon input-icon-right">
                            <select readonly class="width-100" name="calf_gender">
                                <option value=""> লিঙ্গ নির্বাচন করুন </option>
                                <option value="1"> ষাঁড় </option>
                                <option value="0"> বকনা  </option>
                            </select>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="form-group">
                        <label>বাছুরের রং   </label>
                        <span class="block input-icon input-icon-right">
                            <select readonly class="width-100" name="calf_color">
                                <option value=""> রং নির্বাচন করুন </option>
                                @if($color)
                                    @foreach($color as $co)
                                        <option value="{{$co->id}}">{{$co->color}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="form-group"><br>
                        <button type="submit" class="btn btn-primary btn-sm"> Search</button>
                        <a href="{{route(currentUser().'.cattle.index')}}" class="btn btn-danger btn-sm"> Clear</a>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
    <div class="col-xs-12">
        @if(Session::has('response'))
            <div class="alert alert-{{Session::get('response')['class']}}">
            {{Session::get('response')['message']}}
            </div>
        @endif

        <div class="table-responsive">
            <!-- PAGE CONTENT BEGINS -->
            <table class="table">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>সুবিধা ভোগীর নাম/মোবাইল নাম্বার</th>
                        <th>ঠিকানা</th>
                        <th>প্রজনন করার তারিখ</th>
                        <th>ষাড়ের নাম</th>
                        <th>ষাড়ের নাম্বার</th>
                        <th>ষাড়ের জাত</th>
                        <th>রক্তের হার</th>
                        <th> অবস্থা</th>
                        <th style="width:140px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($cattle)
                        @foreach($cattle as $i=>$u)
                            <tr>
                                <td>{{$u->serial_no}}</td>
                                <td>{{$u->beneficiary_name}} / {{$u->beneficiary_contact}}</td>
                                <td>
                                    <b>গ্রাম/মহল্লা-</b>{{$u->village}},
                                    <b>পোষ্ট অফিস-</b>{{$u->postoffice}},<br>
                                    <b>ইউনিয়ন/পৌরসভা/ওয়ার্ড-</b>{{$u->union?$u->union->union:"নেই"}},
                                    <b>উপজেলা/থানা-</b>{{$u->upazilla?$u->upazilla->upazilla:"নেই"}},<br>
                                    <b>জেলা-</b>{{$u->district?$u->district->district:"নেই"}},
                                    <b>বিভাগ-</b>{{$u->division?$u->division->division:"নেই"}},
                                    <b>জোন-</b>{{$u->zone?$u->zone->zone:"নেই"}}
                                    
                                </td>
                                <td>{{$u->cow_pregnant_date}}</td>
                                <td>{{$u->bull_name}}</td>
                                <td>{{$u->bull_number}}</td>
                                <td>{{$u->breed?$u->breed->breed:"নেই"}}</td>
                                <td>{{$u->blood_rate?$u->blood_rate->blood_rate:"নেই"}}</td>
                                <td>{{$u->status==1?"সক্রিয়":"শেষ"}}</td>
                                <td>
                                    <a href="{{route(currentUser().'.cattle.show',$u->id)}}" class="btn btn-sm btn-primary" ><i class="fa fa-eye"></i></a>
                                    <a href="{{route(currentUser().'.cattle.edit',$u->id)}}" class="btn btn-sm btn-info" ><i class="fa fa-edit"></i></a>
                                    <form method="POST" style="display:inline" action="{{ route(currentUser().'.cattle.destroy', $u->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm" title='Delete'><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        {{ $cattle->links() }}
    </div>
</div>

@endsection

@push('script')
	<script>
		@if(isset($_GET['zone_id'])) 
            $('select[name="zone_id"]').val("{{$_GET['zone_id']}}");
            $('select[name="zone_id"]').change();
        @endif 
        
		@if(isset($_GET['division_id'])) 
            $('select[name="division_id"]').val("{{$_GET['division_id']}}");
            $('select[name="division_id"]').change();
        @endif 
		
        @if(isset($_GET['district_id'])) 
            $('select[name="district_id"]').val("{{$_GET['district_id']}}");
            $('select[name="district_id"]').change();
        @endif 
		
        @if(isset($_GET['upazilla_id'])) 
            $('select[name="upazilla_id"]').val("{{$_GET['upazilla_id']}}");
            $('select[name="upazilla_id"]').change();
        @endif 
        
        @if(isset($_GET['union_id'])) 
            $('select[name="union_id"]').val("{{$_GET['union_id']}}");
        @endif 
        @if(isset($_GET['bull_breed'])) 
            $('select[name="bull_breed"]').val("{{$_GET['bull_breed']}}");
        @endif 
        @if(isset($_GET['blood_qty'])) 
            $('select[name="blood_qty"]').val("{{$_GET['blood_qty']}}");
        @endif 
        @if(isset($_GET['calf_gender'])) 
            $('select[name="calf_gender"]').val("{{$_GET['calf_gender']}}");
        @endif 
        @if(isset($_GET['calf_color'])) 
            $('select[name="calf_color"]').val("{{$_GET['calf_color']}}");
        @endif 
        
	</script>
@endpush