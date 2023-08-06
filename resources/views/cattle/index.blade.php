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
        <a class="btn btn-primary pull-right" href="{{route(currentUser().'.cattle.create')}}">Add New</a>
        <a class="btn btn-warning pull-right" style="margin-right:5px" href="{{route(currentUser().'.cattle_export')}}">Esport Excel</a>
    </h1>
</div><!-- /.page-header -->

<div class="row">
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
                                    <b>জোন-</b>{{$u->zone?$u->zone->zone:"নেই"}},
                                    <b>গ্রাম/মহল্লা-</b>{{$u->village}},
                                    <b>পোষ্ট অফিস-</b>{{$u->postoffice}},<br>
                                    <b>ইউনিয়ন/পৌরসভা/ওয়ার্ড-</b>{{$u->union}},
                                    <b>উপজেলা/থানা-</b>{{$u->upazilla}},<br>
                                    <b>জেলা-</b>{{$u->district?$u->district->district:"নেই"}},
                                    <b>বিভাগ-</b>{{$u->division?$u->division->division:"নেই"}},
                                    
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
