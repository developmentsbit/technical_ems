<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class CVAttachementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('cv_attachement')
		->join('department','department.id','cv_attachement.department_id')
		->select('cv_attachement.*','department.department','department.department_name_bn')
		->get();
		return view('admin.cvattached.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table("cv_attachement")->where('id',$id)->first();
        
        if ($data) 
        {
            $old_image = DB::table("cv_attachement")->where('id',$id)->first();
            
            $path = public_path().'/'.$old_image->img;

            if(file_exists($path))
            {
                unlink($path);
            }
            
            DB::table("cv_attachement")->where("id",$id)->delete();
            Toastr::success(__('CV Attachement Data Delete Successfully'));
            return redirect()->back();
        }
        else
        {
            Toastr::error(__('CV Attachement Data Delete Unsuccessfully'));
            return redirect()->back();
        }
    }

    public function Inactivecvattached($id)
    {
		DB::table('cv_attachement')->where('id', $id)->update(['approve' =>0]);
		$notification=array(
			'messege'   =>'Inactive Successfull',
			'alert-type'=>'error'
		);
		return Redirect()->back()->with($notification);
	}

	public function Activecvattached($id)
    {
		DB::table('cv_attachement')->where('id', $id)->update(['approve' =>1]);
		$notification=array(
			'messege'   =>'Active Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);
	}
}
