<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;

class TeacherDashboardController extends Controller
{
    public function __construct()
	{
		$this->middleware('teacher');
		
	}

	public function teacherdashboard()
    {
		return view("teacher.teacherdashboard");
	}

	public function teacherlogout(){
		Auth('teacher')->logout();
		return redirect("teacherlogin");
	}

	public function teacherprofile(){
		return view('teacher.teacherprofile');
	}
	
	public function updateteacherdashboard(Request $request,$id)
    {
		$data = array();
		$data['type']     		   	= $request->type;
		$data['name']     			= $request->name;
		$data['designation']       	= $request->designation;
		$data['dob']     			= $request->dob;
		$data['gender']            	= $request->gender;
		$data['religion']          	= $request->religion;
		$data['father_name']      	= $request->father_name;
		$data['mother_name']      	= $request->mother_name;
		$data['mobile']         	= $request->mobile;
		$data['blood']       		= $request->blood;
		$data['email']             	= $request->email;
		$data['present_address']   	= $request->present_address;
		$data['parmanent_address'] 	= $request->parmanent_address;
		$data['password'] 		   	= Hash::make($request->password);
		$data['show_password']     	= $request->password;
		$newsimage                 	= $request->file('image');

		if ($newsimage) {
			$image_name= $id;
			$ext=strtolower($newsimage->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='teacherstaff_image/';
			$image_url=$upload_path.$image_full_name;
			$success=$newsimage->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$data['extension']=$ext;
			$insert=DB::table('teacherstaff')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Teacher update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}
		else{
			$insert=DB::table('teacherstaff')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Teacher update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);   
		}


	}



	public function coursematerials(){
		return view("teacher.coursematerials");
	}


	public function insertcoursematerials(Request $request){

		$data = array();
		$data['department_id']     = $request->department_id;
		$data['date']       		= $request->date;
		$data['type']             = $request->type;
		$data['semester_id']       = $request->semester_id;
		$data['section_id']        = $request->section_id;
		$data['subject_id']        = $request->subject_id;
		$data['title']             = $request->title;
		$data['title_bn']             = $request->title_bn;
		$data['details']           = $request->details;
		$data['details_bn']           = $request->details_bn;
		$data['teacher_id']        = Auth('teacher')->user()->id;
		$newsimage                 = $request->file('image');

		if ($newsimage) {
			$image_name= rand(1111,9999);
			$ext=strtolower($newsimage->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='teacherstaff_image/';
			$image_url=$upload_path.$image_full_name;
			$success=$newsimage->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('t_coursematerial')
			->insert($data);
			$notification=array(
				'messege'=>'Material Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}
		else{
			$insert=DB::table('t_coursematerial')
			->insert($data);
			$notification=array(
				'messege'=>'Material Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);   
		}

	}


	public function managecoursematerials(){

		$data = DB::table("t_coursematerial")
		->join('department','department.id','t_coursematerial.department_id')
		->join('semesters','semesters.id','t_coursematerial.semester_id')
		->join('addsection','addsection.id','t_coursematerial.section_id')
		->join('subject_info','subject_info.id','t_coursematerial.subject_id')
		->select("t_coursematerial.*",'department.department','addsection.section_name','semesters.semester_name','subject_info.subject_code','subject_info.subject_name','department.department_name_bn','addsection.section_name_bn','semesters.semester_name_bn','subject_info.subject_name_bn')
		->where("t_coursematerial.teacher_id",Auth('teacher')->user()->id)
		->get();

		return view("teacher.managecoursematerials",compact('data'));


	}

	public function deletecoursematerials($id){

		$check = DB::table("t_coursematerial")->where("id",$id)->first();

		if ($check->image != Null) {
			unlink($check->image);
			DB::table("t_coursematerial")->where("id",$id)->delete();
		}
		else{
			DB::table("t_coursematerial")->where("id",$id)->delete();
		}

		

		$notification=array(
			'messege'=>'Material Delete Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);   

	}


	public function editcoursematerials($id){

		$data = DB::table("t_coursematerial")->where("id",$id)->first();
		return view("teacher.editcoursematerials",compact('data'));
	}

	public function updatcoursematerials(Request $request,$id){

		$data = array();
		$data['department_id']     = $request->department_id;
		$data['date']       		= $request->date;
		$data['type']             = $request->type;
		$data['semester_id']       = $request->semester_id;
		$data['section_id']        = $request->section_id;
		$data['subject_id']        = $request->subject_id;
		$data['title']             = $request->title;
		$data['title_bn']             = $request->title_bn;
		$data['details']           = $request->details;
		$data['details_bn']           = $request->details_bn;
		$data['teacher_id']        = Auth('teacher')->user()->id;
		$newsimage                	= $request->file('image');
		$old_image                 	= $request->old_image;

		if ($newsimage) {

			if ($old_image != Null) {
				unlink($old_image);
			}

			$image_name= rand(1111,9999);
			$ext=strtolower($newsimage->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='teacherstaff_image/';
			$image_url=$upload_path.$image_full_name;
			$success=$newsimage->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('t_coursematerial')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Material Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->route('managecoursematerials.index')->with($notification);                      
		}
		else
		{
			$insert=DB::table('t_coursematerial')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Material Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->route('managecoursematerials.index')->with($notification);  
		}

	}

	public function t_notice(){
		return view("teacher.t_notice");
	}


	public function insertt_notice(Request $request){

		$data = array();
		$data['department_id']     	= $request->department_id;
		$data['date']       		= $request->date;
		$data['type']             	= $request->type;
		$data['semester_id']       	= $request->semester_id;
		$data['section_id']        	= $request->section_id;
		$data['subject_id']        	= $request->subject_id;
		$data['title']             	= $request->title;
		$data['title_bn']           = $request->title_bn;
		$data['details']           	= $request->details;
		$data['details_bn']         = $request->details_bn;
		$data['teacher_id']        	= Auth('teacher')->user()->id;
		$newsimage                 	= $request->file('image');

		if ($newsimage) {
			$image_name= rand(1111,9999);
			$ext=strtolower($newsimage->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='teacherstaff_image/';
			$image_url=$upload_path.$image_full_name;
			$success=$newsimage->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('t_notices')
			->insert($data);
			$notification=array(
				'messege'=>'Notice Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->route('t_managenotice.index')->with($notification);                       
		}
		else{
			$insert=DB::table('t_notices')
			->insert($data);
			$notification=array(
				'messege'=>'Notice Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->route('t_managenotice.index')->with($notification);    
		}

	}


	public function t_managenotice(){

		$data = DB::table("t_notices")
		->join('department','department.id','t_notices.department_id')
		->join('semesters','semesters.id','t_notices.semester_id')
		->join('addsection','addsection.id','t_notices.section_id')
		->join('subject_info','subject_info.id','t_notices.subject_id')
		->select("t_notices.*",'department.department','addsection.section_name','semesters.semester_name','subject_info.subject_code','subject_info.subject_name','department.department_name_bn','addsection.section_name_bn','semesters.semester_name_bn','subject_info.subject_name_bn')
		->where("t_notices.teacher_id",Auth('teacher')->user()->id)
		->get();

		return view("teacher.t_managenotice",compact('data'));
	}

	public function deletet_notice($id){

		$check = DB::table("t_notices")->where("id",$id)->first();

		if ($check->image != Null) {
			unlink($check->image);
			DB::table("t_notices")->where("id",$id)->delete();
		}
		else{
			DB::table("t_notices")->where("id",$id)->delete();
		}

		

		$notification=array(
			'messege'=>'Notice Delete Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);   

	}


	public function editt_notice($id){

		$data = DB::table("t_notices")->where("id",$id)->first();

		return view("teacher.editt_notice",compact('data'));
	}



	public function updatet_notice(Request $request,$id){


		$data = array();
		$data['department_id']     	= $request->department_id;
		$data['date']       		= $request->date;
		$data['type']             	= $request->type;
		$data['semester_id']       	= $request->semester_id;
		$data['section_id']        	= $request->section_id;
		$data['subject_id']        	= $request->subject_id;
		$data['title']             	= $request->title;
		$data['title_bn']           = $request->title_bn;
		$data['details']           	= $request->details;
		$data['details_bn']         = $request->details_bn;
		$data['teacher_id']        	= Auth('teacher')->user()->id;
		$newsimage                 	= $request->file('image');
		$old_image                 	= $request->old_image;

		if ($newsimage) {

			if ($old_image != Null) {
				unlink($old_image);
			}

			$image_name= rand(1111,9999);
			$ext=strtolower($newsimage->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='teacherstaff_image/';
			$image_url=$upload_path.$image_full_name;
			$success=$newsimage->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('t_notices')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Notices Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->route('t_managenotice.index')->with($notification);                      
		}
		else{
			$insert=DB::table('t_notices')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Notices Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->route('t_managenotice.index')->with($notification);   
		}

	}

	public function t_results(){
		return view("teacher.t_results");
	}


	public function insertt_results(Request $request){

		$data = array();
		$data['department_id']     = $request->department_id;
		$data['date']       		= $request->date;
		$data['type']             = $request->type;
		$data['semester_id']       = $request->semester_id;
		$data['section_id']        = $request->section_id;
		$data['subject_id']        = $request->subject_id;
		$data['title']             = $request->title;
		$data['details']           = $request->details;
		$data['teacher_id']        = Auth('teacher')->user()->id;
		$newsimage                 = $request->file('image');

		if ($newsimage) {
			$image_name= rand(1111,9999);
			$ext=strtolower($newsimage->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='teacherstaff_image/';
			$image_url=$upload_path.$image_full_name;
			$success=$newsimage->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('t_result')
			->insert($data);
			$notification=array(
				'messege'=>'Result Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}
		else{
			$insert=DB::table('t_result')
			->insert($data);
			$notification=array(
				'messege'=>'Result Added Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);   
		}

	}


	public function t_manageresults(){

		$data = DB::table("t_result")
		->join('department','department.id','t_result.department_id')
		->join('semesters','semesters.id','t_result.semester_id')
		->join('addsection','addsection.id','t_result.section_id')
		->join('subject_info','subject_info.id','t_result.subject_id')
		->select("t_result.*",'department.department','teacherstaff.name','addsection.section_name','semesters.semester_name','subject_info.subject_code','subject_info.subject_name','department.department_name_bn','addsection.section_name_bn','semesters.semester_name_bn','subject_info.subject_name_bn')
		->where("t_result.teacher_id",Auth('teacher')->user()->id)
		->get();

		return view("teacher.t_manageresults",compact('data'));


	}

	public function deletet_results($id){

		$check = DB::table("t_result")->where("id",$id)->first();

		if ($check->image != Null) {
			unlink($check->image);
			DB::table("t_result")->where("id",$id)->delete();
		}
		else{
			DB::table("t_result")->where("id",$id)->delete();
		}

		

		$notification=array(
			'messege'=>'Result Delete Successfull',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification);   

	}


	public function editt_results($id){

		$data = DB::table("t_result")->where("id",$id)->first();

		return view("teacher.editt_results",compact('data'));
	}



	public function updatet_results(Request $request,$id){


		$data = array();
		$data['department_id']     = $request->department_id;
		$data['date']       		= $request->date;
		$data['type']             = $request->type;
		$data['semester_id']       = $request->semester_id;
		$data['section_id']        = $request->section_id;
		$data['subject_id']        = $request->subject_id;
		$data['title']             = $request->title;
		$data['details']           = $request->details;
		$data['teacher_id']        = Auth('teacher')->user()->id;
		$newsimage                 = $request->file('image');
		$old_image                 = $request->old_image;

		if ($newsimage) {

			if ($old_image != Null) {
				unlink($old_image);
			}

			$image_name= rand(1111,9999);
			$ext=strtolower($newsimage->getClientOriginalExtension());
			$image_full_name=$image_name.'.'.$ext;
			$upload_path='teacherstaff_image/';
			$image_url=$upload_path.$image_full_name;
			$success=$newsimage->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			$insert=DB::table('t_result')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Result Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);                      
		}
		else{
			$insert=DB::table('t_result')
			->where('id',$id)
			->update($data);
			$notification=array(
				'messege'=>'Result Update Successfull',
				'alert-type'=>'success'
			);
			return Redirect()->back()->with($notification);   
		}

	}


	
	public function inboxmessageteacher(){

		$data = DB::table("chats")
		->where("chats.to",Auth('teacher')->user()->id)
		->join('student_information','student_information.id','chats.from')
		->join('department','department.id','student_information.department')
		->join('semesters','semesters.id','student_information.semester')
		->join('addsection','addsection.section_id','student_information.group')
		->select("chats.*",'student_information.students_name_en','student_information.type','department.department','semesters.semester_name','addsection.section_name')
		->get();



		return view("teacher.inboxmessageteacher",compact('data'));
	}


	public function replyteachermessage(Request $r){
		DB::table("chats")->insert([
			'from'    => Auth('teacher')->user()->id,
			'to'      => $r->to,
			'message' => $r->message,
		]);

		$notification=array(
			'messege'=>'Message Send Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}


public function studentsmssend(){
    
    
    return view("teacher.studentsmssend");
    
}


public function searchstudentdata(Request $r){
    
    $data = DB::table("student_information")
    ->where("department",$r->department_id)
    ->where("semester",$r->semester_id)
    ->where("type",$r->type)
    ->where("group",$r->section_id)
    ->get();
    
    
    return view("teacher.searchstudentdata",compact('data'));
    
}


public function guardiansmssend(){
    
    
    return view("teacher.guardiansmssend");
    
}



public function searchguardiandata(Request $r){
    
    $data = DB::table("student_information")
    ->where("department",$r->department_id)
    ->where("semester",$r->semester_id)
    ->where("type",$r->type)
    ->where("group",$r->section_id)
    ->get();
    
    
    return view("teacher.searchguardiandata",compact('data'));
    
}


	
		public function changepasswordteacher(){
		return view("teacher.changepasswordteacher");
	}



	public function upchangepasswordteacher(Request $r){
		DB::table("teacherstaff")->where('id',Auth('teacher')->user()->id)->update([
			'password'      => Hash::make($r->password),
			'show_password' => $r->password,
		]);

		$notification=array(
			'messege'=>'Password Update Successfully',
			'alert-type'=>'success'
		);
		return Redirect()->back()->with($notification); 
	}
}
