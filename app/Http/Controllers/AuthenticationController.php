<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Traits\ResponseTrait;

use Exception;

class AuthenticationController extends Controller
{
    use ResponseTrait;

    public function signInForm(){
        return view('auth.login');
    }
    public function signIn(LoginRequest $r){
        $user=User::where('username',$r->username)->where('password',sha1(md5($r->password)))->first();
        if($user){
            $status=array('Inactive','active','Pending','Freez','Block');
            if($user->status==1){
                $this->setSession($user);
                return redirect(route($user->role->identity.'.dashboard'));
            }else{
                return redirect(route('login'))->with($this->responseMessage(false,"error","You are ".$status[$user->status]."! Please contact to admin"));
            }
        }else{
            return redirect(route('login'))->with($this->responseMessage(false,"error","You are username or password is not correct"));
        }
        
    }

    protected function setSession($user){
        return request()->session()->put([
            'user'=>$user->id,
            'username'=>$user->username,
            'name'=>$user->name,
            'email'=>$user->email,
            'role_id'=>$user->role_id,
            'identity'=>$user->role->identity,
            'company_id'=>$user->company_id
        ]);
    }

    public function signUpForm(){
        return view('auth.register');
    }

    public function signUpStore(RegisterRequest $r){
        try{
            $user=new User;
            $user->name=$r->name;
            $user->email=$r->email;
            $user->contact=$r->contact;
            $user->username=$r->username;
            $user->password=sha1(md5($r->password));
            $user->role_id=3;
            $user->status=1;
            if(!!$user->save()){
                return redirect(route('login'))->with($this->responseMessage(true,null,"You have successfully registered."));
            }
        }catch(Exception $e){
            return redirect(route('signup'))->with($this->responseMessage(false,"error","Please try again!"));
        }
    }
    
    public function forgetForm(){
        return view('auth.forget');
    }

    public function logout(){
        request()->session()->flush();
        return redirect(route('login'));
    }


}
