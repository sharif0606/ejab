<?php

namespace App\Http\Middleware;

use Closure;
use Session;

use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class isAdmin
{
    use ResponseTrait;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session::has('user') && Session::get('user') !== null && Session::has('role_id')){
			$user=User::find(Session::get('user'));
			$role=Role::find(Session::get('role_id'));
			if(!!$user && !!$role->identity){
                if($role->identity!=='admin')
				    return redirect(route($role->identity.'.dashboard'))->with($this->responseMessage(false,"error","Access Denied!"));
                else
                    return $next($request);
			}else{
				return redirect(route('logout'))->with($this->responseMessage(false,"error","You have to login first"));
			}
		}else{
            return redirect(route('logout'));
        }
    }
}
