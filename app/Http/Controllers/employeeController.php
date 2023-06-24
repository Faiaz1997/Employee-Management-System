<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use session;

class employeeController extends Controller
{
    //
    public function index(){
        return view('employee.dashboard.dashboard');
    }
    public function working(){
        session::put('checkin', Carbon::now());
        return view('employee.dashboard.working')->with('message','checkin');
    }
    public function checkout(Request $req){
      
        attendance::checkOut($req);
        return view('employee.dashboard.dashboard');
    }
}
