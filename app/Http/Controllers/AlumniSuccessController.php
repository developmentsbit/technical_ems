<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class AlumniSuccessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("alumni_success")->get();
        return view('admin.old_student_success.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.old_student_success.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
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
            $upload_path='old_student_success_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('alumni_success')->insert($data);
        }
        else
        {
            DB::table('alumni_success')->insert($data);
        }
    
        Toastr::success(__('Old Student Success Added Successfully'));
        return redirect()->route('old_student_success.index');
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
        $data = DB::table("alumni_success")->where('id',$id)->first();
        return view('admin.old_student_success.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $data['details']      = $request->details;
        $data['details_bn']      = $request->details_bn;
        $data['date']       = $request->date;
        $image              = $request->file('image');
      
        if ($image) 
        {
            $old_image = DB::table("alumni_success")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='old_student_success_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('alumni_success')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('alumni_success')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Old Student Success Update Successfully'));
            return redirect()->route('old_student_success.index');
        }
        else
        {
            Toastr::error(__('Old Student Success Update Unsuccessfully'));
            return redirect()->route('old_student_success.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("alumni_success")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("alumni_success")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("alumni_success")->where("id",$id)->delete();
            Toastr::success(__('Old Student Success Delete Successfully'));
            return redirect()->route('old_student_success.index');
        }
        else
        {
            Toastr::error(__('Old Student Success Result Delete Unsuccessfully'));
            return redirect()->route('old_student_success.index');
        }
    }
}
