<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Upazilla;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class UpazillaController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upazilla=Upazilla::latest()->paginate(10);
        return view('address.upazilla.index',compact('upazilla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allDistrict = District::all();
        return view('address.upazilla.create',compact('allDistrict'));
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
            $data=new Upazilla;
            $data->upazilla=$request->upazilla;
            $data->upazilla_en=$request->upazilla_en;
            $data->district_id=$request->district_id;

            
            if(!!$data->save()){
                return redirect(route(currentUser().'.upazilla.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upazilla  $upazilla
     * @return \Illuminate\Http\Response
     */
    public function show(Upazilla $upazilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upazilla  $upazilla
     * @return \Illuminate\Http\Response
     */
    public function edit(Upazilla $upazilla)
    {
        $allDistrict = District::all();
        return view('address.upazilla.edit',compact('upazilla','allDistrict'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upazilla  $upazilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upazilla $upazilla)
    {
        try{
            
            $upazilla->upazilla=$request->upazilla;
            $upazilla->upazilla_en=$request->upazilla_en;
            $upazilla->district_id=$request->district_id;
            
            if(!!$upazilla->save()){
                return redirect(route(currentUser().'.upazilla.index'))->with($this->responseMessage(true,null,"Data successfully Updated."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upazilla  $upazilla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upazilla $upazilla)
    {
        //
    }
}
