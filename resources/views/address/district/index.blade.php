@extends('layout.app')
@section('title','District')
@section('content')
<div class="page-header">
    <h1>
        District
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            District List
            <a class="btn btn-primary pull-right btn-sm" href="{{route(currentUser().'.district.create')}}">Add New</a>
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
                    <th>District</th>
                    <th>District (Bangla)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($district)
                    @foreach($district as $i=>$u)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$u->division->division}}</td>
                            <td>{{$u->district_en}}</td>
                            <td>{{$u->district}}</td>
                            <td>
                                <a href="{{route(currentUser().'.district.edit',$u->id)}}" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
		{{ $district->links() }}
    </div>
</div>

@endsection

@push('script')


@endpush