@extends('layout.app')
@section('title','Division')
@section('content')
<div class="page-header">
    <h1>
        Division
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Division List
            <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.division.create')}}">Add New</a>
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
                    <th>Division</th>
                    <th>Division (Bangla)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($division)
                    @foreach($division as $i=>$u)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$u->division_en}}</td>
                            <td>{{$u->division}}</td>
                            <td>
                                <a href="{{route(currentUser().'.division.edit',$u->id)}}" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
		{{ $division->links() }}
    </div>
</div>

@endsection

@push('script')


@endpush