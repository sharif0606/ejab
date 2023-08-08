<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function superadmin(){
        return view('dashboard.superadmin');
    }
    public function admin(){
        return view('dashboard.admin');
    }
    public function user(){
        return view('dashboard.user');
    }
}
