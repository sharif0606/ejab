@extends('layout.app')
@section('title','Breed')
@section('content')
<div class="page-header">
    <h1>
        Breed
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Breed List
        </small>
        <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.breed.create')}}">Add New</a>
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
                    <th>Breed</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($breed)
                    @foreach($breed as $i=>$u)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$u->breed}}</td>
                            <td>
                                <a href="{{route(currentUser().'.breed.edit',$u->id)}}" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
		{{ $breed->links() }}
    </div>
</div>

@endsection

@push('script')


@endpush