<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class AboutDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("about_departments")
        ->leftjoin('department','department.id','about_departments.department_id')
        ->select("about_departments.*",'department.department','department.department_name_bn')
        ->get();
        return view('admin.about_department.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = DB::table("department")->get();
        return view('admin.about_department.create',compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
       $data['department_id']    = $request->department_id;
       $data['details']          = $request->details;
       $data['details_bn']       = $request->details_bn;

       DB::table('about_departments')->insert($data);

        Toastr::success(__('Shop Info Added Successfully'));
        return redirect(route('about_department.index'));
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
        
        $data = DB::table("about_departments")->where('id',$id)->first();
        $department = DB::table("department")->get();
        return view('admin.about_department.edit',compact('data','department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['department_id']    = $request->department_id;
        $data['details']          = $request->details;
        $data['details_bn']       = $request->details_bn;

        $update = DB::table('about_departments')->where('id', $id)->update($data);

        if ($update) {
            Toastr::success(__('About Department Update Successfully'));
            return redirect()->route('about_department.index');
        }
        else{
            Toastr::error(__('About Department Update Unsuccessfully'));
            return redirect()->route('about_department.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("about_departments")->where('id',$id)->first();
        if ($data)
        {
            DB::table("about_departments")->where("id",$id)->delete();
            Toastr::success(__('About Department Delete Successfully'));
            return redirect()->route('about_department.index');
        }
        else
        {
            Toastr::success(__('About Department Delete Unsuccessfully'));
            return redirect()->route('about_department.index');
        }
    }
}
