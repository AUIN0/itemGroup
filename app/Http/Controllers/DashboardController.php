<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemgroup;
use App\Models\items;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function logout(){
        Auth::logout();

        return redirect('login'); 
    }

    public function welcomeAdmin(){
        return view('dashboard.admin');
    }
}
