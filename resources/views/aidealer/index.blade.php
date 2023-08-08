@extends('layout.app')
@section('title','Ai Dealer')
@section('content')
<div class="page-header">
    <h1>
		Ai Dealer
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Ai Dealer List
        </small>
        <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.aidealer.create')}}">Add New</a>
        <a class="btn btn-warning pull-right btn-sm" style="margin-right:5px" href="{{route(currentUser().'.aidealer_export')}}">Export Excel</a>
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
                    <div class="form-group"><br>
                        <button type="submit" class="btn btn-primary btn-sm"> Search</button>
                        <a href="{{route(currentUser().'.aidealer.index')}}" class="btn btn-danger btn-sm"> Clear</a>
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
                        <th>Dealer Name</th>
                        <th>Address</th>
                        <th>Technician Name	</th>
                        <th>Technician ID</th>
                        <th>Technician Contact</th>
                        <th>Training</th>
                        <th>Ejab Batch No</th>
                        <th style="width:140px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($aidealer)
                        @foreach($aidealer as $i=>$u)
                            <tr>
                                <td>{{$u->serial_no}}</td>
                                <td>{{$u->name}}</td>
                                <td>
                                    <b>Union-</b>{{$u->union?->union}},
                                    <b>Upazilla-</b>{{$u->upazilla?$u->upazilla->upazilla:""}},
                                    <b>District-</b>{{$u->district?$u->district->district:""}},
                                    <b>Division-</b>{{$u->division?$u->division->division:""}},
                                    <b>Zone-</b>{{$u->zone?$u->zone->zone:""}}<br>
                                    <b>Contact-</b>{{$u->contact_number}}
                                </td>
                                <td>{{$u->ai_technician_name}}</td>
                                <td>{{$u->ai_technician_id}}</td>
                                <td>{{$u->ai_technician_contact}}</td>
                                <td>{{$u->training}}</td>
                                <td>{{$u->ejab_batch_no}}</td>
                                <td>
                                    <a href="{{route(currentUser().'.aidealer.show',$u->id)}}" class="btn btn-sm btn-primary" ><i class="fa fa-eye"></i></a>
                                    <a href="{{route(currentUser().'.aidealer.edit',$u->id)}}" class="btn btn-sm btn-info" ><i class="fa fa-edit"></i></a>
                                    <form method="POST" style="display:inline" action="{{ route(currentUser().'.aidealer.destroy', $u->id) }}">
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
        {{ $aidealer->links() }}
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
        
	</script>
@endpush