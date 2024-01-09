<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class StudentProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("student_project")
        ->leftjoin("department",'department.id','student_project.department_id')
        ->select("student_project.*",'department.department','department.department_name_bn')
        ->get();
        return view('admin.studentproject.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = DB::table("department")->get();
        return view('admin.studentproject.create',compact('department'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['department_id']      = $request->department_id;
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $data['details']      = $request->details;
        $data['details_bn']      = $request->details_bn;
        $data['date']       = $request->date;
        $image              = $request->file('image');
     
        if ($image) 
        {
            $image_name= rand(11111,99999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='student_project_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('student_project')->insert($data);
        }
        else
        {
            DB::table('student_project')->insert($data);
        }
    
        Toastr::success(__('Student Project Added Successfully'));
        return redirect()->route('studentproject.index');
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
        $data = DB::table("student_project")->where('id',$id)->first();
        $department = DB::table("department")->get();
        return view('admin.studentproject.edit',compact('data','department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['department_id']      = $request->department_id;
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $data['details']      = $request->details;
        $data['details_bn']      = $request->details_bn;
        $data['date']       = $request->date;
        $image              = $request->file('image');
      
        if ($image) 
        {
            $old_image = DB::table("student_project")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='student_project_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('student_project')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('student_project')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Student Project Update Successfully'));
            return redirect()->route('studentproject.index');
        }
        else
        {
            Toastr::error(__('Student Project Update Unsuccessfully'));
            return redirect()->route('studentproject.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("student_project")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("student_project")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("student_project")->where("id",$id)->delete();
            Toastr::success(__('Student Project Delete Successfully'));
            return redirect()->route('studentproject.index');
        }
        else
        {
            Toastr::error(__('Student Project Delete Unsuccessfully'));
            return redirect()->route('studentproject.index');
        }
    }
}
