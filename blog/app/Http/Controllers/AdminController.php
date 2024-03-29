<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Staffs;

class AdminController extends BaseController
{
    public function sayHello()
    {
        return "Say Hello!";
    }

    public function helloWorld()
    {
        return view("helloWorld");
    }
//
//    public function studentList(){
//        $students = Students::all();
//        return view("studentList", compact("students"));
//    }

    public function showStaffList(){
        $staffs = Staffs::paginate(20);
        return view("StaffList", compact("staffs"));
    }
}
