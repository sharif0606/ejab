@extends('layout.app')
@section('title','Color')
@section('content')
<div class="page-header">
    <h1>
        Color
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Color List
        </small>
        <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.color.create')}}">Add New</a>
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
                    <th>Color</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($color)
                    @foreach($color as $i=>$u)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$u->color}}</td>
                            <td>
                                <a href="{{route(currentUser().'.color.edit',$u->id)}}" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
		{{ $color->links() }}
    </div>
</div>

@endsection

@push('script')


@endpush