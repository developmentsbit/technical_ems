<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class RecruitmentNoticesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("recruitment_notices")->get();
        return view('admin.recruitment_notices.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.recruitment_notices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $image              = $request->file('image');
        
        if ($image) 
        {
            $image_name= rand(11111,99999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='recruitment_notices_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('recruitment_notices')->insert($data);
        }
        else
        {
            DB::table('recruitment_notices')->insert($data);
        }
    
        Toastr::success(__('Recruitment Notices Added Successfully'));
        return redirect()->route('recruitment_notices.index');
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
        $data = DB::table("recruitment_notices")->where('id',$id)->first();
        return view('admin.recruitment_notices.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $image              = $request->file('image');
       
        if ($image) 
        {
            $old_image = DB::table("recruitment_notices")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='recruitment_notices_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('recruitment_notices')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('recruitment_notices')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Recruitment Notices Update Successfully'));
            return redirect()->route('recruitment_notices.index');
        }
        else
        {
            Toastr::error(__('Recruitment Notices Update Unsuccessfully'));
            return redirect()->route('recruitment_notices.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("recruitment_notices")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("recruitment_notices")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("recruitment_notices")->where("id",$id)->delete();
            Toastr::success(__('Recruitment Notices Delete Successfully'));
            return redirect()->route('recruitment_notices.index');
        }
        else
        {
            Toastr::error(__('Recruitment Notices Result Delete Unsuccessfully'));
            return redirect()->route('recruitment_notices.index');
        }
    }
}
