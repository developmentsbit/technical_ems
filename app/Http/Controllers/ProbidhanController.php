<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class ProbidhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("probidhan")->get();
        return view('admin.probidhan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.probidhan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $data['year']    = $request->year;
        $image              = $request->file('image');
        
        if ($image) 
        {
            $image_name= rand(11111,99999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='probidhan_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('probidhan')->insert($data);
        }
        else
        {
            DB::table('probidhan')->insert($data);
        }
    
        Toastr::success(__('Probidhan Added Successfully'));
        return redirect()->route('probidhan.index');
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
        $data = DB::table("probidhan")->where('id',$id)->first();
        return view('admin.probidhan.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $data['year']    = $request->year;
        $image              = $request->file('image');
       
        if ($image) 
        {
            $old_image = DB::table("probidhan")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='probidhan_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('probidhan')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('probidhan')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Probidhan Update Successfully'));
            return redirect()->route('probidhan.index');
        }
        else
        {
            Toastr::error(__('Probidhan Update Unsuccessfully'));
            return redirect()->route('probidhan.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("probidhan")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("probidhan")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("probidhan")->where("id",$id)->delete();
            Toastr::success(__('Probidhan Delete Successfully'));
            return redirect()->route('probidhan.index');
        }
        else
        {
            Toastr::error(__('Probidhan Delete Unsuccessfully'));
            return redirect()->route('probidhan.index');
        }
    }
}
