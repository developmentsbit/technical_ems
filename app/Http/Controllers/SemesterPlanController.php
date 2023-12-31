<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class SemesterPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("semester_plan")
        ->leftjoin("department",'department.id','semester_plan.department_id')
        ->leftjoin("semesters",'semesters.id','semester_plan.semester_id')
        ->select("semester_plan.*",'department.department','semesters.semester_name','department.department_name_bn','semesters.semester_name_bn')
        ->get();
        return view('admin.semesterplan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.semesterplan.create',compact('department','semester'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['department_id']      = $request->department_id;
        $data['semester_id']      = $request->semester_id;
        $data['shift']      = $request->shift;
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $data['subject']      = $request->subject;
        $data['date']       = $request->date;
        $image              = $request->file('image');
     
        if ($image) 
        {
            $image_name= rand(11111,99999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='semester_plan_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('semester_plan')->insert($data);
        }
        else
        {
            DB::table('semester_plan')->insert($data);
        }
    
        Toastr::success(__('Semester Plan Added Successfully'));
        return redirect()->route('semesterplan.index');
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
        $data = DB::table("semester_plan")->where('id',$id)->first();
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.semesterplan.edit',compact('data','department','semester'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['department_id']      = $request->department_id;
        $data['semester_id']      = $request->semester_id;
        $data['shift']      = $request->shift;
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $data['subject']      = $request->subject;
        $data['date']       = $request->date;
        $image              = $request->file('image');
      
        if ($image) 
        {
            $old_image = DB::table("semester_plan")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='semester_plan_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('semester_plan')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('semester_plan')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Semester Plan Update Successfully'));
            return redirect()->route('semesterplan.index');
        }
        else
        {
            Toastr::error(__('Semester Plan Update Unsuccessfully'));
            return redirect()->route('semesterplan.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("semester_plan")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("semester_plan")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("semester_plan")->where("id",$id)->delete();
            Toastr::success(__('Semester Plan Delete Successfully'));
            return redirect()->route('semesterplan.index');
        }
        else
        {
            Toastr::error(__('Semester Plan Delete Unsuccessfully'));
            return redirect()->route('semesterplan.index');
        }
    }
}
