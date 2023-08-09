<?php

namespace App\Http\Controllers;

use App\Models\Bull;
use App\Models\Breed;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class BullController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bull=Bull::latest()->paginate(10);
        return view('bull.index',compact('bull'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breed=Breed::get();
        return view('bull.create',compact('breed'));
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
            $bull=new Bull;
            $bull->breed_id=$request->breed_id;
            $bull->bull_number=$request->bull_number;
            $bull->bull_name=$request->bull_name;
            if(!!$bull->save()){
                return redirect(route(currentUser().'.bull.index'))->with($this->responseMessage(true,null,"Data successfully saved."));
            }
        }catch(Exception $e){
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bull  $bull
     * @return \Illuminate\Http\Response
     */
    public function show(Bull $bull)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bull  $bull
     * @return \Illuminate\Http\Response
     */
    public function edit(Bull $bull)
    {
        $breed=Breed::get();
        return view('bull.edit',compact('breed','bull'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bull  $bull
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bull $bull)
    {
        try{
            $bull->breed_id=$request->breed_id;
            $bull->bull_number=$request->bull_number;
            $bull->bull_name=$request->bull_name;
            if(!!$bull->save()){
                return redirect(route(currentUser().'.bull.index'))->with($this->responseMessage(true,null,"Data successfully saved."));
            }
        }catch(Exception $e){
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bull  $bull
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bull $bull)
    {
        //
    }
}
