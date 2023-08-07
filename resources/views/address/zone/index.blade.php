@extends('layout.app')
@section('title','Zone')
@section('content')
<div class="page-header">
    <h1>
        Zone
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Zone List
            <a class="btn btn-primary pull-right" href="{{route(currentUser().'.zone.create')}}">Add New</a>
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
                    <th>Country</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($zone)
                    @foreach($zone as $i=>$u)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$u->country?->country}}</td>
                            <td>{{$u->zone}}</td>
                            <td>
                                <a href="{{route(currentUser().'.zone.edit',$u->id)}}" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
		{{ $zone->links() }}
    </div>
</div>

@endsection

@push('script')

@endpush