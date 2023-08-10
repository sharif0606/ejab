@extends('layout.app')
@section('title','ষাঁড়')
@section('content')
<div class="page-header">
    <h1>
		ষাঁড়
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            ষাঁড় তালিকা
        </small>
        <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.bull.create')}}">Add New</a>
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
                        <th>ষাড়ের জাত</th>
                        <th>রক্তের হার</th>
                        <th>ষাঁড়ের নাম্বার</th>
                        <th>ষাঁড়ের নাম</th>
                        <th style="width:140px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($bull)
                        @foreach($bull as $i=>$u)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$u->breed?$u->breed->breed:""}}</td>
                                <td>{{$u->bloodrate?$u->bloodrate->blood_rate:""}}</td>
                                <td>{{$u->bull_number}}</td>
                                <td>{{$u->bull_name}}</td>
                                <td>
                                    <a href="{{route(currentUser().'.bull.edit',$u->id)}}" class="btn btn-sm btn-info" ><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        {{ $bull->links() }}
    </div>
</div>

@endsection
