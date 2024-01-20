<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class SubjectPriorityController extends Controller
{
    public function index()
    {
		$department = DB::table("department")->get();
		$semester = DB::table("semesters")->where('status',1)->get();
		$section  = DB::table("addsection")->get();

		return view("admin.subjectpriority.index",compact('department','semester','section'));
	}

	public function store(Request $request)
    {
		$data = array();
		$data['teacher_id']             = $request->teacher_id;
		$data['subject_id']             = $request->subject_id;
		$data['semester_id']            = $request->semester_id;
		$data['shift']                  = $request->shift;
		$data['section_id']             = $request->section_id;
		$data['department_id']          = $request->department_id;

		$insert=DB::table('subject_priority')->insert($data);

        Toastr::success(__('Subject Priority Added Successfully'));
        return redirect()->back();
	}

    public function showsubjectpriority($id)
    {
		$data = DB::table("subject_priority")
		->leftjoin("teacherstaff",'teacherstaff.id','subject_priority.teacher_id')
		->leftjoin("department",'department.id','subject_priority.department_id')
		->leftjoin("addsection",'addsection.id','subject_priority.section_id')
		->leftjoin("semesters",'semesters.id','subject_priority.semester_id')
		->leftjoin("subject_info",'subject_info.id','subject_priority.subject_id')
		->select("subject_priority.*",'department.department','teacherstaff.name','addsection.section_name','semesters.semester_name','subject_info.subject_code','subject_info.subject_name','department.department_name_bn','addsection.section_name_bn','semesters.semester_name_bn','subject_info.subject_name_bn')
		->where("subject_priority.teacher_id",$id)
		->get();

		return view("admin.subjectpriority.showsubjectpriority",compact('data'));
	}

	public function getteacher($id)
    {
		$data = DB::table("teacherstaff")->get();

		return view("admin.subjectpriority.getteacher",compact('data'));
	}

	public function getsubject(Request $r)
    {
		$data = DB::table("subject_info")->get();

		return view("admin.subjectpriority.getsubject",compact('data'));
	}

    public function deletesubjectpriority($id)
    {
		DB::table("subject_priority")->where("id",$id)->delete();
	}
}
