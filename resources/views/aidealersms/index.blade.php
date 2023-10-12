@extends('layout.app')
@section('title','Message to Ai Dealer & Technician')
@section('content')
<style>
.scroll{
    overflow-y:auto;
    max-height:450px;
}
.scroll::-webkit-scrollbar {
    width: 6px;
}

.scroll::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); 
    border-radius: 10px;
}

.scroll::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.5); 
}
</style>
<div class="page-header">
    <h1>
        Message to Ai Dealer & Technician
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Ai Dealer & Technician List
        </small>
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
                            <select class="width-100 chosen-select" name="zone_id">
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
        <form action="" method="get" onsubmit="return confirm('Are you sure you want to send this message?')">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea name="message" id="" onkeyup="wordcount(this.value)" class="form-control" cols="30" rows="10"></textarea>
                        <span class="mword"></span>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
                <div class="form-group col-sm-6 col-md-8 scroll">
                    <div class="table-responsive">
                        <!-- PAGE CONTENT BEGINS -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" onchange="checkall(this)" value="1"></th>
                                    <th>Dealer Name</th>
                                    <th>Address</th>
                                    <th>Technician Name	</th>
                                    <th>Technician Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($aidealer)
                                    @foreach($aidealer as $i=>$u)
                                        <tr>
                                            <td><input type="checkbox" value="1" class="checkall" name="ai_id[]"></td>
                                            <td>{{$u->name}}</td>
                                            <td>
                                                <b>Union-</b>{{$u->union?$u->union->union_en:""}},
                                                <b>Upazilla-</b>{{$u->upazilla?$u->upazilla->upazilla_en:""}},
                                                <b>District-</b>{{$u->district?$u->district->district_en:""}},
                                                <b>Division-</b>{{$u->division?$u->division->division_en:""}},
                                                <b>Zone-</b>{{$u->zone?$u->zone->zone_en:""}}<br>
                                                <b>Contact-</b>{{$u->contact_number}}
                                            </td>
                                            <td>{{$u->ai_technician_id}} - {{$u->ai_technician_name}}</td>
                                            <td>{{$u->ai_technician_contact}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
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

        function checkall(e){
            if($(e).prop('checked')){
                $(".checkall").prop('checked',true)
            }else{
                $(".checkall").prop('checked',false)
            }
        }
        function wordcount(words){
            // 1. Remove all empty space
            words = words.replace(/\s+/, ' ');
            // 2. Remove all punctuation
            words = words.replace('”', '').replace('“', '');
            // 3. Build regular expression based on Unicode range
            const reg = new RegExp("\u2E80-\u2EFF\u2F00-\u2FDF\u3000-\u303F\u31C0-\u31EF\u3200-\u32FF\u3300-\u33FF\u3400-\u3FFF\u4000-\u4DBF\u4E00-\u4FFF\u5000-\u5FFF\u6000-\u6FFF\u7000-\u7FFF\u8000-\u8FFF\u9000-\u9FFF\uF900-\uFAFF", "g");
            // 4. Split words by empty space first
            words = words.split('');
            // 5. Loop words array and execute regular expression
            let total = 0;
            words.forEach(function(word) {
            let carry = 0;
            while (m = reg.exec(word)) { 
                carry++;
            }
            total = carry === 0 ? total + 1 : total + carry; 
            }
            )
            // 6. We done here
             $('.mword').text(total);
        }
	</script>
@endpush