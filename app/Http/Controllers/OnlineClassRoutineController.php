<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class OnlineClassRoutineController extends Controller
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
        $data = DB::table("online_class_routine")
        ->leftjoin("department",'department.id','online_class_routine.department_id')
        ->leftjoin("semesters",'semesters.id','online_class_routine.semester_id')
        ->select("online_class_routine.*",'department.department','semesters.semester_name','department.department_name_bn','semesters.semester_name_bn')
        ->get();
        return view('admin.onlineclassroutine.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.onlineclassroutine.create',compact('department','semester'));
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
            $upload_path='online_class_routine_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('online_class_routine')->insert($data);
        }
        else
        {
            DB::table('online_class_routine')->insert($data);
        }
    
        Toastr::success(__('Online Class Routine Added Successfully'));
        return redirect()->route('onlineclassroutine.index');
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
        $data = DB::table("online_class_routine")->where('id',$id)->first();
        $department = DB::table("department")->get();
        $semester = DB::table("semesters")->get();
        return view('admin.onlineclassroutine.edit',compact('data','department','semester'));
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
            $old_image = DB::table("online_class_routine")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='online_class_routine_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('online_class_routine')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('online_class_routine')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Online Class Routine Update Successfully'));
            return redirect()->route('onlineclassroutine.index');
        }
        else
        {
            Toastr::error(__('Online Class Routine Update Unsuccessfully'));
            return redirect()->route('onlineclassroutine.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("online_class_routine")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("online_class_routine")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("online_class_routine")->where("id",$id)->delete();
            Toastr::success(__('Online Class Routine Delete Successfully'));
            return redirect()->route('onlineclassroutine.index');
        }
        else
        {
            Toastr::error(__('Online Class Routine Delete Unsuccessfully'));
            return redirect()->route('onlineclassroutine.index');
        }
    }
}
