<?php

namespace App\Http\Controllers;

use App\Models\Union;
use App\Models\Upazilla;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class UnionController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $union=Union::latest()->paginate(10);
        return view('address.union.index',compact('union'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allUpazilla = Upazilla::all();
        return view('address.union.create',compact('allUpazilla'));
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
            $data=new Union;
            $data->union=$request->union;
            $data->union_en=$request->union_en;
            $data->upazilla_id=$request->upazilla_id;
            if(!!$data->save()){
                return redirect(route(currentUser().'.union.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Union  $union
     * @return \Illuminate\Http\Response
     */
    public function show(Union $union)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Union  $union
     * @return \Illuminate\Http\Response
     */
    public function edit(Union $union)
    {
        $allUpazilla = Upazilla::all();
        return view('address.union.edit',compact('union','allUpazilla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Union  $union
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Union $union)
    {
        try{
            $data=$union;
            $data->union=$request->union;
            $data->union_en=$request->union_en;
            $data->upazilla_id=$request->upazilla_id;
            if(!!$data->save()){
                return redirect(route(currentUser().'.union.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Union  $union
     * @return \Illuminate\Http\Response
     */
    public function destroy(Union $union)
    {
        //
    }
}
