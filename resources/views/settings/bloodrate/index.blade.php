@extends('layout.app')
@section('title','Blood Rate')
@section('content')
<div class="page-header">
    <h1>
        Blood Rate
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Blood Rate List
        </small>
        <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.bloodrate.create')}}">Add New</a>
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
                    <th>Blood Rate</th>
                    <th>Blood Rate (Bangla)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($bloodrate)
                    @foreach($bloodrate as $i=>$u)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$u->blood_rate_en}}</td>
                            <td>{{$u->blood_rate}}</td>
                            <td>
                                <a href="{{route(currentUser().'.bloodrate.edit',$u->id)}}" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
		{{ $bloodrate->links() }}
    </div>
</div>

@endsection

@push('script')


@endpush