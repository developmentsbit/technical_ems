<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class BoardResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table("board_result")->get();
        return view('admin.board_result.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.board_result.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $data['date']    = $request->date;
        $image              = $request->file('image');
        
        if ($image) 
        {
            $image_name= rand(11111,99999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='board_result_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('board_result')->insert($data);
        }
        else
        {
            DB::table('board_result')->insert($data);
        }
    
        Toastr::success(__('Board Exam Result Added Successfully'));
        return redirect()->route('board_result.index');
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
        $data = DB::table("board_result")->where('id',$id)->first();
        return view('admin.board_result.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['title']      = $request->title;
        $data['title_bn']      = $request->title_bn;
        $data['date']    = $request->date;
        $image              = $request->file('image');
       
        if ($image) 
        {
            $old_image = DB::table("board_result")->where('id',$id)->first();
        
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
        
            $image_name= rand(1111,9999);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='board_result_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            $update = DB::table('board_result')->where('id', $id)->update($data);
        }
        else
        {
            $update = DB::table('board_result')->where('id', $id)->update($data);
        }

        if ($update) 
        {
            Toastr::success(__('Board Exam Result Update Successfully'));
            return redirect()->route('board_result.index');
        }
        else
        {
            Toastr::error(__('Board Exam Result Update Unsuccessfully'));
            return redirect()->route('board_result.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("board_result")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("board_result")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->image;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("board_result")->where("id",$id)->delete();
            Toastr::success(__('Board Exam Result Delete Successfully'));
            return redirect()->route('board_result.index');
        }
        else
        {
            Toastr::error(__('Board Exam Result Delete Unsuccessfully'));
            return redirect()->route('board_result.index');
        }
    }
}
