<?php

namespace App\Http\Controllers;

use App\Models\Upazilla;
use App\Models\Thana;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class ThanaController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thana=Thana::latest()->paginate(10);
        return view('address.thana.index',compact('thana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allUpazilla = Upazilla::all();
        return view('address.thana.create',compact('allUpazilla'));
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
            $data=new Thana;
            $data->thana=$request->thana;
            $data->upazilla_id=$request->upazilla_id;

            
            if(!!$data->save()){
                return redirect(route(currentUser().'.thana.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thana  $thana
     * @return \Illuminate\Http\Response
     */
    public function show(Thana $thana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thana  $thana
     * @return \Illuminate\Http\Response
     */
    public function edit(Thana $thana)
    {
        $allUpazilla = Upazilla::all();
        return view('address.thana.edit',compact('thana','allUpazilla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thana  $thana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thana $thana)
    {
        try{
            
            $thana->thana=$request->thana;
            $thana->upazilla_id=$request->upazilla_id;
            
            if(!!$thana->save()){
                return redirect(route(currentUser().'.thana.index'))->with($this->responseMessage(true,null,"Data successfully Updated."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thana  $thana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thana $thana)
    {
        //
    }
}
