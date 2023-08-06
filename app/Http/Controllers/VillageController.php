<?php

namespace App\Http\Controllers;

use App\Models\Thana;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class VillageController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $village=Village::latest()->paginate(10);
        return view('address.village.index',compact('village'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allThana = Thana::all();
        return view('address.village.create',compact('allThana'));
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
            $data=new Village;
            $data->village=$request->village;
            $data->thana_id=$request->thana_id;

            
            if(!!$data->save()){
                return redirect(route(currentUser().'.village.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function show(Village $village)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function edit(Village $village)
    {
        $allThana = Thana::all();
        return view('address.village.edit',compact('village','allThana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Village $village)
    {
        try{
            
            $village->village=$request->village;
            $village->thana_id=$request->thana_id;
            
            if(!!$village->save()){
                return redirect(route(currentUser().'.village.index'))->with($this->responseMessage(true,null,"Data successfully Updated."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function destroy(Village $village)
    {
        //
    }
}
