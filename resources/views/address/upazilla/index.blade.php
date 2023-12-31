@extends('layout.app')
@section('title','Upazilla')
@section('content')
<div class="page-header">
    <h1>
        Upazilla
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Upazilla List
            <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.upazilla.create')}}">Add New</a>
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
        <table class="table">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>District</th>
                    <th>Upazilla</th>
                    <th>Upazilla (Bangla)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($upazilla)
                    @foreach($upazilla as $i=>$u)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$u->district?$u->district->district:""}}</td>
                            <td>{{$u->upazilla_en}}</td>
                            <td>{{$u->upazilla}}</td>
                            <td>
                                <a href="{{route(currentUser().'.upazilla.edit',$u->id)}}" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
		{{ $upazilla->links() }}
    </div>
</div>

@endsection

@push('script')



@endpush