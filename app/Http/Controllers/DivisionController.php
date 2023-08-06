<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class DivisionController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $division=Division::latest()->paginate(10);
        return view('address.division.index',compact('division'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCountry = Country::all();
        return view('address.division.create',compact('allCountry'));
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
            $data=new Division;
            $data->division=$request->division;
            $data->country_id=$request->country_id;

            
            if(!!$data->save()){
                return redirect(route(currentUser().'.division.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $division)
    {
         $allCountry = Country::all();
         return view('address.division.edit',compact('division','allCountry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Division $division)
    {
        try{
            
            $division->division=$request->division;
            $division->country_id=$request->country_id;
            
            if(!!$division->save()){
                return redirect(route(currentUser().'.division.index'))->with($this->responseMessage(true,null,"Data successfully Updated."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy(Division $division)
    {
        //
    }
}
