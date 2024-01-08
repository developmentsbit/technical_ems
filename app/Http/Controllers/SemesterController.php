<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class SemesterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("semesters")->get();
        return view('admin.semester.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.semester.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['semester_name']      = $request->semester_name;
        $data['semester_name_bn']      = $request->semester_name_bn;
        $data['status']         = $request->status;

        DB::table('semesters')->insert($data);

        Toastr::success(__('Semester Added Successfully'));
        return redirect()->route('semester.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table("semesters")->where('id',$id)->first();
        return view('admin.semester.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['semester_name']      = $request->semester_name;
        $data['semester_name_bn']      = $request->semester_name_bn;
        $data['status']    = $request->status;

        $update = DB::table('semesters')->where('id', $id)->update($data);
        
        if ($update) 
        {
            Toastr::success(__('Semester Update Successfully'));
            return redirect()->route('semester.index');
        }
        else
        {
            Toastr::error(__('Semester Update Unsuccessfully'));
            return redirect()->route('semester.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("semesters")->where('id',$id)->first();
        
        if ($data) 
        {
            DB::table("semesters")->where("id",$id)->delete();
            Toastr::success(__('Semester Delete Successfully'));
            return redirect()->route('semester.index');
        }

        else
        {
            Toastr::success(__('Semester Delete Unsuccessfully'));
            return redirect()->route('semester.index');
        }
    }
}
