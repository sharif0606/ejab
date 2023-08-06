@extends('layout.app')
@section('title','Dashboard')
@section('breadcrumb1','Home')
@section('breadcrumb2','Dashboard')
@section('content')
<style>
    .mt-3{
        margin-top:15px;
    }
</style>
<div class="page-header">
    <h1>
        Dashboard
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            overview
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-sm-3 mt-3">
                <a href="#" style="text-decoration:none;">
                    <div class="bg-info" style="border-radius:15px; padding:10px;box-shadow:4px 4px 5px gray;text-align:center">
                        <h3>Total Cattle</h3>
                        <h2 class="text-centrt">{{App\Models\Cattle::count()}}</h2>
                    </div>
                </a>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="bg-primary" style="border-radius:15px; padding:10px;box-shadow:4px 4px 5px gray;text-align:center">
                    <h3>Active Cattle</h3>
                    <h2 class="text-centrt">{{App\Models\Cattle::where('status',1)->count()}}</h2>
                </div>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="bg-success" style="border-radius:15px; padding:10px;box-shadow:4px 4px 5px gray;text-align:center">
                    <h3>Completed Cattle</h3>
                    <h2 class="text-centrt">{{App\Models\Cattle::where('status',0)->count()}}</h2>
                </div>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="bg-danger" style="border-radius:15px; padding:10px;box-shadow:4px 4px 5px gray;text-align:center">
                    <h3> Cattle</h3>
                    <h2 class="text-centrt">{{App\Models\Cattle::where('status',0)->count()}}</h2>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection

@push('script')


@endpush