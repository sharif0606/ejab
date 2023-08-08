@extends('layout.app')
@section('title','Union')
@section('content')
<div class="page-header">
    <h1>
        Union
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Union List
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

    <a class="btn btn-primary pull-right" href="{{route(currentUser().'.union.create')}}">Add New</a>
        <!-- PAGE CONTENT BEGINS -->
        <table class="table">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Upazilla</th>
                    <th>Union</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($union)
                    @foreach($union as $i=>$u)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$u->upazilla?$u->upazilla->upazilla:""}}</td>
                            <td>{{$u->union}}</td>
                            <td>
                                <a href="{{route(currentUser().'.union.edit',$u->id)}}" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('script')


@endpush