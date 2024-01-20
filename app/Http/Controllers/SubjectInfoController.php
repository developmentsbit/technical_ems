<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class SubjectInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("subject_info")
        ->leftjoin("department",'department.id','subject_info.department_id')
        ->leftjoin("semesters",'semesters.id','subject_info.semester_id')
        ->select("subject_info.*",'department.department','semesters.semester_name','department.department_name_bn','semesters.semester_name_bn')
        ->get();

        return view('admin.add_subject.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.add_subject.create',compact('department','semester'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['serial']      = $request->serial;
        $data['department_id']      = $request->department_id;
        $data['semester_id']      = $request->semester_id;
        $data['subject_name']      = $request->subject_name;
        $data['subject_name_bn']  = $request->subject_name_bn;
        $data['subject_code']  = $request->subject_code;
        $data['status']        = $request->status;

        DB::table('subject_info')->insert($data);

        Toastr::success(__('Subject Create Successfully'));
        return redirect()->route('add_subject.index');
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
        $data = DB::table("subject_info")->where('id',$id)->first();
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.add_subject.edit',compact('data','department','semester'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['serial']      = $request->serial;
        $data['department_id']      = $request->department_id;
        $data['semester_id']      = $request->semester_id;
        $data['subject_name']      = $request->subject_name;
        $data['subject_name_bn']  = $request->subject_name_bn;
        $data['subject_code']  = $request->subject_code;
        $data['status']        = $request->status;

        $update = DB::table('subject_info')->where('id', $id)->update($data);
        
        if ($update) 
        {
            Toastr::success(__('Subject Update Successfully'));
            return redirect()->route('add_subject.index');
        }
        else
        {
            Toastr::error(__('Subject Update Unsuccessfully'));
            return redirect()->route('add_subject.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("subject_info")->where('id',$id)->first();
        
        if ($data) 
        {
            DB::table("subject_info")->where("id",$id)->delete();
            Toastr::success(__('Subject Delete Successfully'));
            return redirect()->route('add_subject.index');
        }

        else
        {
            Toastr::success(__('Subject Delete Unsuccessfully'));
            return redirect()->route('add_subject.index');
        }
    }


}
