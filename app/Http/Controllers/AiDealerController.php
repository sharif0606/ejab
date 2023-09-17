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
use App\Http\Traits\ResponseTrait;

use Exception;
use App\Exports\AiDealerExport;
use Excel;
use Carbon\Carbon;

class AiDealerController extends Controller
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
        try{
            $aiDealer=new AiDealer;
            $aiDealer->country_id=1;
            $aiDealer->zone_id=$request->zone_id;
            $aiDealer->division_id=$request->division_id;
            $aiDealer->district_id=$request->district_id;
            $aiDealer->upazilla_id=$request->upazilla_id;
            $aiDealer->union_id=$request->union_id;

            $aiDealer->name=$request->name;
            $aiDealer->contact_number=$request->contact_number;
            $aiDealer->address=$request->address;
            $aiDealer->training_institute=$request->training_institute;
            $aiDealer->ejab_batch_no=$request->ejab_batch_no;

            $aiDealer->ai_technician_name=$request->ai_technician_name;
            $aiDealer->ai_technician_id=$request->ai_technician_id;
            $aiDealer->ai_technician_contact=$request->ai_technician_contact;

            if(!!$aiDealer->save()){
                return redirect(route(currentUser().'.aidealer.index'))->with($this->responseMessage(true,null,"Data successfully saved."));
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AiDealer  $aiDealer
     * @return \Illuminate\Http\Response
     */
    public function show(AiDealer $aidealer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AiDealer  $aiDealer
     * @return \Illuminate\Http\Response
     */
    public function edit(AiDealer $aidealer)
    {
        $zone=Zone::all();
        $division=Division::all();
        $district=District::all();
        $upazilla=Upazilla::all();
        $union=Union::all();
        return view('aidealer.edit',compact('aidealer','zone','division','district','union','upazilla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AiDealer  $aiDealer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AiDealer $aidealer)
    {
        try{
            $aidealer->country_id=1;
            $aidealer->zone_id=$request->zone_id;
            $aidealer->division_id=$request->division_id;
            $aidealer->district_id=$request->district_id;
            $aidealer->upazilla_id=$request->upazilla_id;
            $aidealer->union_id=$request->union_id;

            $aidealer->name=$request->name;
            $aidealer->contact_number=$request->contact_number;
            $aidealer->address=$request->address;
            $aidealer->training_institute=$request->training_institute;
            $aidealer->ejab_batch_no=$request->ejab_batch_no;

            $aidealer->ai_technician_name=$request->ai_technician_name;
            $aidealer->ai_technician_id=$request->ai_technician_id;
            $aidealer->ai_technician_contact=$request->ai_technician_contact;

            if(!!$aidealer->save()){
                return redirect(route(currentUser().'.aidealer.index'))->with($this->responseMessage(true,null,"Data successfully saved."));
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AiDealer  $aiDealer
     * @return \Illuminate\Http\Response
     */
    public function destroy(AiDealer $aidealer)
    {
        try{
            if(!!$aidealer->delete()){
                return redirect()->back()->with($this->responseMessage(true,null,"Data successfully deleted."));
            }
        }catch(Exception $e){
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }
}
