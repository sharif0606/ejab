<?php

namespace App\Http\Middleware;

use Closure;
use Session;

use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Traits\ResponseTrait;

class UnknownUser
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
			if(!!$user && $role->identity=='superadmin'){
				return redirect(route('superadmin.dashboard'));
			}elseif(!!$user && $role->identity=='admin'){
				return redirect(route('admin.dashboard'));
			}elseif(!!$user && $role->identity=='user'){
				return redirect(route('user.dashboard'));
			}else{
				return redirect(route('login'))->with($this->responseMessage(false,"error","You have to login first"));
			}
		}
        return $next($request);
    }
}
