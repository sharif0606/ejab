<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class DistrictController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $district=District::latest()->paginate(10);
        return view('address.district.index',compact('district'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allDivision = Division::all();
        return view('address.district.create',compact('allDivision'));
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
            $data=new District;
            $data->district=$request->district;
            $data->division_id=$request->division_id;

            
            if(!!$data->save()){
                return redirect(route(currentUser().'.district.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        $allDivision = Division::all();
        return view('address.district.edit',compact('district','allDivision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        try{
            
            $district->district=$request->district;
            $district->division_id=$request->division_id;
            
            if(!!$district->save()){
                return redirect(route(currentUser().'.district.index'))->with($this->responseMessage(true,null,"Data successfully Updated."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        //
    }
}
