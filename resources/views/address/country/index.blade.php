@extends('layout.app')
@section('title','Country')
@section('content')
<div class="page-header">
    <h1>
        Country
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Country List
            <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.country.create')}}">Add New</a>
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
                    <th>Name</th>
                    <th>Name (Bangla)</th>
                    <th>Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($country)
                    @foreach($country as $i=>$u)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$u->country_en}}</td>
                            <td>{{$u->country}}</td>
                            <td>{{$u->code}}</td>
                            <td>
                                <a href="{{route(currentUser().'.country.edit',$u->id)}}" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
		{{ $country->links() }}
    </div>
</div>

@endsection

@push('script')


@endpush