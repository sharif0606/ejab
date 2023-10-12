<?php

namespace App\Http\Controllers;

use App\Models\AiDealer;
use App\Models\Country;
use App\Models\Division;
use App\Models\District;
use App\Models\Zone;
use App\Models\Upazilla;
use App\Models\Union;
use App\Models\AiDealerMessage;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class AiDealerMessageController extends Controller
{
    use ResponseTrait;
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


        return view('aidealersms.index',compact('zone','division','district','upazilla','union','aidealer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\AiDealerMessage  $aiDealerMessage
     * @return \Illuminate\Http\Response
     */
    public function show(AiDealerMessage $aiDealerMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AiDealerMessage  $aiDealerMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(AiDealerMessage $aiDealerMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AiDealerMessage  $aiDealerMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AiDealerMessage $aiDealerMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AiDealerMessage  $aiDealerMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AiDealerMessage $aiDealerMessage)
    {
        //
    }
}
