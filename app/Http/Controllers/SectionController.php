<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class SectionController extends Controller
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
        $data = DB::table("addsection")->get();
        return view('admin.addsection.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addsection.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $data = array();
     $data['section_name']  = $request->section_name;
     $data['section_name_bn']  = $request->section_name_bn;
     $data['status']        = $request->status;

     DB::table('addsection')->insert($data);

     Toastr::success(__('Section Added Successfully'));
     return redirect()->route('addsection.index');
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
        $data = DB::table("addsection")->where('id',$id)->first();
        return view('admin.addsection.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = array();
        $data['section_name']  = $request->section_name;
        $data['section_name_bn']  = $request->section_name_bn;
        $data['status']        = $request->status;

        $update = DB::table('addsection')->where('id', $id)->update($data);

        if ($update) {
            Toastr::success(__('Section Update Successfully'));
            return redirect()->route('addsection.index');
        }
        else{
            Toastr::error(__('Section Update Unsuccessfully'));
            return redirect()->route('addsection.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $data = DB::table("addsection")->where('id',$id)->first();

       if ($data) {
           DB::table("addsection")->where("id",$id)->delete();
           Toastr::success(__('Section Delete Successfully'));
           return redirect()->route('addsection.index');
       }
       else{
        Toastr::error(__('Section Delete Unsuccessfully'));
        return redirect()->route('addsection.index');
    }
}


}
