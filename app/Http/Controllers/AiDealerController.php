<?php

namespace App\Http\Controllers;

use App\Models\AiDealer;
use App\Models\Country;
use App\Models\Division;
use App\Models\District;
use App\Models\Zone;
use App\Models\Upazilla;
use App\Models\Union;


use Illuminate\Http\Request;

use App\Http\Requests\Cattle\CreateCattle;
use App\Http\Requests\Cattle\UpdateCattle;

use App\Http\Traits\ResponseTrait;

use Exception;
use App\Exports\AiDealerExport;
use Excel;
use Carbon\Carbon;

class AiDealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $zone=Zone::all();
        $division=Division::all();
        $district=District::all();
        $upazilla=Upazilla::all();
        $union=Union::all();

        $aidealer=AiDealer::latest();
       
        if($request->zone_id)
            $aidealer=$aidealer->where('zone_id',$request->zone_id);
        if($request->division_id)
            $aidealer=$aidealer->where('division_id',$request->division_id);
        if($request->district_id)
            $aidealer=$aidealer->where('district_id',$request->district_id);
        if($request->upazilla_id)
            $aidealer=$aidealer->where('upazilla_id',$request->upazilla_id);
        if($request->union_id)
            $aidealer=$aidealer->where('union_id',$request->union_id);
        
        $aidealer=$aidealer->paginate(15);


        return view('aidealer.index',compact('zone','division','district','upazilla','union','aidealer'));
    }

    /**
     * Export data from export as excel
     */
    public function aidealer_export(Request $request)
    {
        return Excel::download(new AiDealerExport($_GET), 'aidealer.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zone=Zone::all();
        $division=Division::all();
        $district=District::all();
        $upazilla=Upazilla::all();
        $union=Union::all();
        return view('aidealer.create',compact('zone','division','district','upazilla','union'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AiDealer  $aiDealer
     * @return \Illuminate\Http\Response
     */
    public function show(AiDealer $aiDealer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AiDealer  $aiDealer
     * @return \Illuminate\Http\Response
     */
    public function edit(AiDealer $aiDealer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AiDealer  $aiDealer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AiDealer $aiDealer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AiDealer  $aiDealer
     * @return \Illuminate\Http\Response
     */
    public function destroy(AiDealer $aiDealer)
    {
        //
    }
}
