<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class TeacherloginController extends Controller
{
    // public function __construct()
	// {
	// 	$this->middleware('teacher');
		
	// }
    
    public function teacherlogin()
    {
        if (Auth::guard('teacher')->check()) 
        {
            return redirect('teacherdashboard');	
		}
        else
        {
            return view("teacher.teacherlogin");
		}
    }

    public function loginteacherdashboard(Request $request)
    {
        if (Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('teacherdashboard');
		}
        else
        {
			return redirect()->back();
		}
	}
}