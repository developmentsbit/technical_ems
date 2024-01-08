<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class DigitalClassContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("digital_class_content")
        ->leftjoin("department",'department.id','digital_class_content.department_id')
        ->leftjoin("semesters",'semesters.id','digital_class_content.semester_id')
        ->select("digital_class_content.*",'department.department','semesters.semester_name','department.department_name_bn','semesters.semester_name_bn')
        ->get();
        return view('admin.digitalclasscontent.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.digitalclasscontent.create',compact('department','semester'));
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
        $data['date']       = $request->date;
        $image              = $request->file('image');
     
        if ($image) 
        {
            $image_name= rand(11111,99999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='digital_class_content_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('digital_class_content')->insert($data);
        }
        else
        {
            DB::table('digital_class_content')->insert($data);
        }
    
        Toastr::success(__('Digital Class Content Added Successfully'));
        return redirect()->route('digitalclasscontent.index');
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
        $data = DB::table("digital_class_content")->where('id',$id)->first();
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.digitalclasscontent.edit',compact('data','department','semester'));
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
        $data['date']       = $request->date;
        $image              = $request->file('image');
      
        if ($image) 
        {
            $old_image = DB::table("digital_class_content")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='digital_class_content_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('digital_class_content')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('digital_class_content')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Digital Class Content Update Successfully'));
            return redirect()->route('digitalclasscontent.index');
        }
        else
        {
            Toastr::error(__('Digital Class Content Update Unsuccessfully'));
            return redirect()->route('digitalclasscontent.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("digital_class_content")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("digital_class_content")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("digital_class_content")->where("id",$id)->delete();
            Toastr::success(__('Digital Class Content Delete Successfully'));
            return redirect()->route('digitalclasscontent.index');
        }
        else
        {
            Toastr::error(__('Digital Class Content Delete Unsuccessfully'));
            return redirect()->route('digitalclasscontent.index');
        }
    }
}
