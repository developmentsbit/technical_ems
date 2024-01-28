<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class FoculPointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("focul_point")->get();
        return view('admin.focul_point.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.focul_point.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['name']           = $request->name;
        $data['father_name']    = $request->father_name;
        $data['mother_name']    = $request->mother_name;
        $data['designation']    = $request->designation;
        $data['duration']       = $request->duration;
        $data['phone']          = $request->phone;
        $data['mobile']         = $request->mobile;
        $data['email']          = $request->email;
        $data['address']        = $request->address;
        $data['status']         = $request->status;
        $image                  = $request->file('image');
   
        if ($image)
        {
            $image_name= rand(11111,99999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='focul_point_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('focul_point')->insert($data);
        }
        else
        {
            DB::table('focul_point')->insert($data);
        }
       
        Toastr::success(__('Focul Point Added Successfully'));
        return redirect()->route('focul_point.index');
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
        $data = DB::table("focul_point")->where('id',$id)->first();
        return view('admin.focul_point.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['name']           = $request->name;
        $data['father_name']    = $request->father_name;
        $data['mother_name']    = $request->mother_name;
        $data['designation']    = $request->designation;
        $data['duration']       = $request->duration;
        $data['phone']          = $request->phone;
        $data['mobile']         = $request->mobile;
        $data['email']          = $request->email;
        $data['address']        = $request->address;
        $data['status']         = $request->status;
        $image                  = $request->file('image');
        
        if ($image) 
        {
            $old_image = DB::table("focul_point")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;
      
            if(file_exists($path))
            {
                unlink($path);
            }
            
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='focul_point_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('focul_point')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('focul_point')->where('id', $id)->update($data);
        }
        if ($update) 
        {
            Toastr::success(__('Focul Point Update Successfully'));
            return redirect()->route('focul_point.index');
        }
        else
        {
            Toastr::error(__('Focul Point Update Unsuccessfully'));
            return redirect()->route('focul_point.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("focul_point")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("focul_point")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;
            
            if(file_exists($path))
            {
                unlink($path);
            }
            DB::table("focul_point")->where("id",$id)->delete();
            Toastr::success(__('Focul Point Delete Successfully'));
            return redirect()->route('focul_point.index');
        }
        else
        {
            Toastr::error(__('Focul Point Delete Unsuccessfully'));
            return redirect()->route('focul_point.index');
        }
    }
}
