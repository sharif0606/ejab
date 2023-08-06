<?php

namespace App\Http\Controllers;

use App\Models\Cattle;
use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\Division;
use App\Models\District;
use App\Models\Zone;

use App\Models\BloodRate;
use App\Models\Breed;
use App\Models\Color;
//use App\Models\Upazilla;
//use App\Models\Thana;
//use App\Models\Village;
//use App\Models\Postoffice;

use App\Http\Requests\Cattle\CreateCattle;
use App\Http\Requests\Cattle\UpdateCattle;

use App\Http\Traits\ResponseTrait;

use Exception;
use App\Exports\CattleExport;
use Excel;
use Carbon\Carbon;

class CattleController extends Controller
{
    use ResponseTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cattle=Cattle::paginate(15);
        return view('cattle.index',compact('cattle'));
    }
    
    /**
     * Export data from export as excel
     */
    public function cattle_export(Request $request)
    {
        return Excel::download(new CattleExport($_GET), 'cattle.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zone=Zone::all();
        $color=Color::all();
        $blood=BloodRate::all();
        $breed=Breed::all();
        $division=Division::all();
        $district=District::all();
        //$upazilla=Upazilla::all();
        //$thana=Thana::all();
        //$village=Village::all();
        //$postoffice=Postoffice::all();
        return view('cattle.create',compact('zone','division','district','breed','blood','color'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request CreateCattle
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCattle $request)
    {
        try{
            $cattle=new Cattle;
            $cattle->serial_no=$request->serial_no;
            $cattle->beneficiary_name=$request->beneficiary_name;
            $cattle->f_or_h_name=$request->f_or_h_name;
            $cattle->zone_id=$request->zone_id;
            $cattle->country_id=1;
            $cattle->division_id=$request->division_id;
            $cattle->district_id=$request->district_id;
            $cattle->upazilla=$request->upazilla;
            $cattle->union=$request->union;
            $cattle->postoffice=$request->postoffice;
            $cattle->village=$request->village;
            $cattle->beneficiary_contact=$request->beneficiary_contact;
            $cattle->cow_age=$request->cow_age;
            $cattle->cow_breed=$request->cow_breed;
            $cattle->cow_color=$request->cow_color;
            $cattle->cow_weight=$request->cow_weight;
            $cattle->cow_number_of_baby=$request->cow_number_of_baby;
            $cattle->cow_last_delivery=$request->cow_last_delivery;
            $cattle->cow_milking_qty=$request->cow_milking_qty;
            $cattle->cow_pregnant_date=$request->cow_pregnant_date;
            $cattle->bull_name=$request->bull_name;
            $cattle->bull_number=$request->bull_number;
            $cattle->bull_breed=$request->bull_breed;
            $cattle->blood_qty=$request->blood_qty;
            $cattle->delivery_date_aprox=$request->delivery_date_aprox;
            $cattle->pregnancy_exam_result=$request->pregnancy_exam_result;
            $cattle->delivery_date=$request->delivery_date;
            $cattle->calf_gender=$request->calf_gender;
            $cattle->calf_weight=$request->calf_weight;
            $cattle->calf_color=$request->calf_color;
            $cattle->ai_technician_name=$request->ai_technician_name;
            $cattle->ai_technician_id=$request->ai_technician_id;
            $cattle->ai_technician_contact=$request->ai_technician_contact;
            $cattle->remarks=$request->remarks;
            $cattle->remarks_final=$request->remarks_final;
            
            if($request->cow_pregnant_date){
                // get the current time
                $preg = Carbon::create($request->cow_pregnant_date);
                // add 9 month and 20 days to the current time
                $delvdate = $preg->addDays(290);
                
                $cattle->notification_date= $delvdate->toDateString();
            }
            $cattle->notification_status=0;
            $cattle->status=1;

            if(!!$cattle->save()){
                return redirect(route(currentUser().'.cattle.index'))->with($this->responseMessage(true,null,"Cattle successfully created."));
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cattle  $cattle
     * @return \Illuminate\Http\Response
     */
    public function show(Cattle $cattle)
    {
        return view('cattle.show',compact('cattle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cattle  $cattle
     * @return \Illuminate\Http\Response
     */
    public function edit(Cattle $cattle)
    {
        $zone=Zone::all();
        $color=Color::all();
        $blood=BloodRate::all();
        $breed=Breed::all();
        $division=Division::all();
        $district=District::all();
        //$upazilla=Upazilla::all();
        //$thana=Thana::all();
        //$village=Village::all();
        //$postoffice=Postoffice::all();
        return view('cattle.edit',compact('cattle','zone','division','district','breed','blood','color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cattle  $cattle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCattle $request, Cattle $cattle)
    {
        try{
            $cattle->serial_no=$request->serial_no;
            $cattle->beneficiary_name=$request->beneficiary_name;
            $cattle->f_or_h_name=$request->f_or_h_name;
            $cattle->zone_id=$request->zone_id;
            $cattle->division_id=$request->division_id;
            $cattle->district_id=$request->district_id;
            $cattle->upazilla=$request->upazilla;
            $cattle->union=$request->union;
            $cattle->postoffice=$request->postoffice;
            $cattle->village=$request->village;
            $cattle->beneficiary_contact=$request->beneficiary_contact;
            $cattle->cow_age=$request->cow_age;
            $cattle->cow_breed=$request->cow_breed;
            $cattle->cow_color=$request->cow_color;
            $cattle->cow_weight=$request->cow_weight;
            $cattle->cow_number_of_baby=$request->cow_number_of_baby;
            $cattle->cow_last_delivery=$request->cow_last_delivery;
            $cattle->cow_milking_qty=$request->cow_milking_qty;
            $cattle->cow_pregnant_date=$request->cow_pregnant_date;
            $cattle->bull_name=$request->bull_name;
            $cattle->bull_number=$request->bull_number;
            $cattle->bull_breed=$request->bull_breed;
            $cattle->blood_qty=$request->blood_qty;
            $cattle->delivery_date_aprox=$request->delivery_date_aprox;
            $cattle->pregnancy_exam_result=$request->pregnancy_exam_result;
            $cattle->delivery_date=$request->delivery_date;
            $cattle->calf_gender=$request->calf_gender;
            $cattle->calf_weight=$request->calf_weight;
            $cattle->calf_color=$request->calf_color;
            $cattle->ai_technician_name=$request->ai_technician_name;
            $cattle->ai_technician_id=$request->ai_technician_id;
            $cattle->ai_technician_contact=$request->ai_technician_contact;
            $cattle->remarks=$request->remarks;
            $cattle->remarks_final=$request->remarks_final;
            
            if($request->cow_pregnant_date){
                // get the current time
                $preg = Carbon::create($request->cow_pregnant_date);
                // add 9 month and 20 days to the current time
                $delvdate = $preg->addDays(290);
                
                $cattle->notification_date= $delvdate->toDateString();
            }
            $cattle->status=$request->status;

            if(!!$cattle->save()){
                return redirect(route(currentUser().'.cattle.index'))->with($this->responseMessage(true,null,"Cattle successfully updated."));
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cattle  $cattle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cattle $cattle)
    {
        try{
            if(!!$cattle->delete()){
                return redirect()->back()->with($this->responseMessage(true,null,"Cattle successfully deleted."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }
    
    /**
     * restore specific Cattle
     *
     * @return void
     */
    public function restore($id)
    {
        Cattle::withTrashed()->find($id)->restore();
  
        return redirect()->back();
    }  
  
    /**
     * restore all Cattle
     *
     * @return response()
     */
    public function restoreAll()
    {
        Cattle::onlyTrashed()->restore();
  
        return redirect()->back();
    }
}
