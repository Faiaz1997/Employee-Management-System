<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\attendance;
use App\Models\users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard.dashboard');
    }
    public function addUser(){
        return view('admin.users.add-user');
    }
    public function userAdded(Request $req){
       users::userAdded($req);
       return back()->with('message','User Added Successfully');
    }
    public function employeeDetails(){
        return view('admin.employee.employee-details',[
            'emps' =>users::orderby('id', 'desc')->get(),
        ]);
    }
    public function attendanceDetails(){
        return view('admin.employee.attendance',[
            'items' =>DB::table('attendances')->join('users','attendances.userId','=','users.id')->select('attendances.*','users.name') ->orderby('id', 'desc')
            ->whereDate('attendances.created_at', Carbon::today())->get(),

        ]);
    }
    public function dateSearch(Request $req){
       return view('admin.employee.attendance',[
        'items' =>DB::table('attendances')
        ->join('users','attendances.userId','=','users.id')
        ->select('attendances.*','users.name')
        ->whereDate('attendances.created_at',$req->date)
        ->orderby('id', 'desc')->get(),
    ]);
    }
    public function attendanceReport(Request $req){
        return view('admin.employee.attendancereport',[
         'items' =>DB::table('attendances')
         ->join('users','attendances.userId','=','users.id')
         ->select('attendances.*','users.name')
         ->where('attendances.userId',$req->id)
         ->orderby('id', 'desc')
         ->get(),
     ]);
     }
}
