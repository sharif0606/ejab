<?php

namespace App\Http\Controllers;

use App\Models\Upazilla;
use App\Models\Postoffice;
use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class PostofficeController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postoffice=Postoffice::latest()->paginate(10);
        return view('address.postoffice.index',compact('postoffice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allUpazilla = Upazilla::all();
        return view('address.postoffice.create',compact('allUpazilla'));
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
            $data=new Postoffice;
            $data->postoffice=$request->postoffice;
            $data->upazilla_id=$request->upazilla_id;

            
            if(!!$data->save()){
                return redirect(route(currentUser().'.postoffice.index'))->with($this->responseMessage(true,null,"Data successfully created."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postoffice  $postoffice
     * @return \Illuminate\Http\Response
     */
    public function show(Postoffice $postoffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postoffice  $postoffice
     * @return \Illuminate\Http\Response
     */
    public function edit(Postoffice $postoffice)
    {
        $allUpazilla = Upazilla::all();
        return view('address.postoffice.edit',compact('postoffice','allUpazilla'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postoffice  $postoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postoffice $postoffice)
    {
        try{
            
            $postoffice->postoffice=$request->postoffice;
            $postoffice->upazilla_id=$request->upazilla_id;
            
            if(!!$postoffice->save()){
                return redirect(route(currentUser().'.postoffice.index'))->with($this->responseMessage(true,null,"Data successfully Updated."));
            }
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postoffice  $postoffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postoffice $postoffice)
    {
        //
    }
}
