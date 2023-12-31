<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;


class SyllabusController extends Controller
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
        $data = DB::table("syllabus")
        ->leftjoin("department",'department.id','syllabus.department_id')
        ->leftjoin("semesters",'semesters.id','syllabus.semester_id')
        ->select("syllabus.*",'department.department','semesters.semester_name','department.department_name_bn','semesters.semester_name_bn')
        ->get();
        return view('admin.syllabus.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.syllabus.create',compact('department','semester'));
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
            $upload_path='syllabus_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('syllabus')->insert($data);
        }
        else
        {
            DB::table('syllabus')->insert($data);
        }
    
        Toastr::success(__('Class Routine Added Successfully'));
        return redirect()->route('syllabus.index');
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
        $data = DB::table("syllabus")->where('id',$id)->first();
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.syllabus.edit',compact('data','department','semester'));
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
            $old_image = DB::table("syllabus")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='syllabus_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('syllabus')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('syllabus')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Class Routine Update Successfully'));
            return redirect()->route('syllabus.index');
        }
        else
        {
            Toastr::error(__('Class Routine Update Unsuccessfully'));
            return redirect()->route('syllabus.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("syllabus")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("syllabus")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;
        
            if(file_exists($path))
            {
                unlink($path);
            }
           
            DB::table("syllabus")->where("id",$id)->delete();
            Toastr::success(__('Syllabus Delete Successfully'));
            return redirect()->route('syllabus.index');
        }
        else
        {
            Toastr::error(__('Syllabus Delete Unsuccessfully'));
            return redirect()->route('syllabus.index');
        }
    }
}
