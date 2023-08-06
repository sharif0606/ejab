<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class ZoneController extends Controller
{
    use ResponseTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zone=Zone::latest()->paginate(10);
        return view('address.zone.index',compact('zone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('address.zone.create');
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
            $data=new Zone;
            $data->zone=$request->zone;
            
            if(!!$data->save()){
                return redirect(route(currentUser().'.zone.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        //$zone=Zone::latest()->paginate(10);
        return view('address.zone.edit',compact('zone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zone)
    {
        try{
            
            $zone->zone=$request->zone;
            
            if(!!$zone->save()){
                return redirect(route(currentUser().'.zone.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        //
    }
}
