<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class InternalExamResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("internal_result")
        ->leftjoin("department",'department.id','internal_result.department_id')
        ->select("internal_result.*",'department.department','department.department_name_bn')
        ->get();
        return view('admin.internal_result.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = DB::table("department")->get();
        return view('admin.internal_result.create',compact('department'));
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
            $upload_path='internal_result_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('internal_result')->insert($data);
        }
        else
        {
            DB::table('internal_result')->insert($data);
        }
    
        Toastr::success(__('Internal Exam Result Added Successfully'));
        return redirect()->route('internal_result.index');
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
        $data = DB::table("internal_result")->where('id',$id)->first();
        $department = DB::table("department")->get();
        return view('admin.internal_result.edit',compact('data','department'));
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
            $old_image = DB::table("internal_result")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='internal_result_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('internal_result')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('internal_result')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Internal Exam Result Update Successfully'));
            return redirect()->route('internal_result.index');
        }
        else
        {
            Toastr::error(__('Internal Exam Result Update Unsuccessfully'));
            return redirect()->route('internal_result.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("internal_result")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("internal_result")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("internal_result")->where("id",$id)->delete();
            Toastr::success(__('Internal Exam Result Delete Successfully'));
            return redirect()->route('internal_result.index');
        }
        else
        {
            Toastr::error(__('Internal Exam Result Delete Unsuccessfully'));
            return redirect()->route('internal_result.index');
        }
    }
}
