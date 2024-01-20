<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class IndustrialAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("industry_linkages")->get();
        return view('admin.industry_linkages.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.industry_linkages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['type']      = $request->type;
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $image              = $request->file('image');
        
        if ($image) 
        {
            $image_name= rand(11111,99999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='industry_linkages_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('industry_linkages')->insert($data);
        }
        else
        {
            DB::table('industry_linkages')->insert($data);
        }
    
        Toastr::success(__('Industry Linkages Menu Added Successfully'));
        return redirect()->route('industry_linkages.index');
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
        $data = DB::table("industry_linkages")->where('id',$id)->first();
        return view('admin.industry_linkages.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['type']      = $request->type;
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $image              = $request->file('image');
       
        if ($image) 
        {
            $old_image = DB::table("industry_linkages")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='industry_linkages_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('industry_linkages')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('industry_linkages')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Industry Linkages Menu Update Successfully'));
            return redirect()->route('industry_linkages.index');
        }
        else
        {
            Toastr::error(__('Industry Linkages Menu Update Unsuccessfully'));
            return redirect()->route('industry_linkages.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("industry_linkages")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("industry_linkages")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("industry_linkages")->where("id",$id)->delete();
            Toastr::success(__('Industry Linkages Menu Delete Successfully'));
            return redirect()->route('industry_linkages.index');
        }
        else
        {
            Toastr::error(__('Industry Linkages Menu Delete Unsuccessfully'));
            return redirect()->route('industry_linkages.index');
        }
    }
}
