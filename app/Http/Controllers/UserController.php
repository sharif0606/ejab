<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;

use App\Http\Requests\Users\UpdateRequest;
use App\Http\Requests\Users\CreateRequest;

use App\Http\Traits\ResponseTrait;

use Exception;

class UserController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderBy('id','desc')->paginate(10);
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $role=Role::all();
        // return view('users.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $r)
    {
        try{
            $user=new User;
            $user->name=$r->name;
            $user->email=$r->email;
            $user->contact=$r->contact;
            $user->username=$r->username;
            $user->password=sha1(md5($r->password));
            $user->role_id=$r->role_id;
            $user->status=$r->status;
            if(!!$user->save()){
                return redirect(route('users.index'))->with($this->responseMessage(true,null,"user successfully created."));
            }
        }catch(Exception $e){
            return redirect(route('users.create'))->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        $role=Role::all();
        return view('users.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $r, $id)
    {
        try{
            $user=User::find($id);
            $user->name=$r->name;
            $user->email=$r->email;
            $user->contact=$r->contact;
            $user->username=$r->username;

            if(trim($r->password))
                $user->password=sha1(md5($r->password));

            $user->role_id=$r->role_id;
            $user->status=$r->status;
            if(!!$user->save()){
                return redirect(route('users.index'))->with($this->responseMessage(true,null,"user successfully updated."));
            }
        }catch(Exception $e){
            //dd($e);
            return redirect(route('users.edit'))->with($this->responseMessage(false,"error","Please try again!"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
