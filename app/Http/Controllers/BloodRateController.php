<?php

namespace App\Http\Controllers;

use App\Models\BloodRate;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class BloodRateController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodrate=BloodRate::latest()->paginate(10);
        return view('settings.bloodrate.index',compact('bloodrate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.bloodrate.create');
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
            $data=new BloodRate;
            $data->blood_rate=$request->blood_rate;
            if(!!$data->save()){
                return redirect(route(currentUser().'.bloodrate.index'))->with($this->responseMessage(true,null,"Data successfully saved."));
            }
        }catch(Exception $e){
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodRate  $bloodRate
     * @return \Illuminate\Http\Response
     */
    public function show(BloodRate $bloodrate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodRate  $bloodRate
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodRate $bloodrate)
    {
        return view('settings.bloodrate.edit',compact('bloodrate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BloodRate  $bloodRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodRate $bloodrate)
    {
        try{
            $data=$bloodrate;
            $data->blood_rate=$request->blood_rate;
            if(!!$data->save()){
                return redirect(route(currentUser().'.bloodrate.index'))->with($this->responseMessage(true,null,"Data successfully saved."));
            }
        }catch(Exception $e){
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodRate  $bloodRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodRate $bloodrate)
    {
        //
    }
}
