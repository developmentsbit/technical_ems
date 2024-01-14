<!DOCTYPE html>
<html lang="en">

<head>
 <!-- Required meta tags-->
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="AuThemes Templates">
 <meta name="author" content="AuCreative">
 <meta name="keywords" content="AuThemes Templates">

 <!-- Title Page-->
 <title>Student Information</title>

 <!-- Icons font CSS-->

 <link href="{{  url("public/studentform") }}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
 <!-- Font special for pages-->
 <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 <!-- Vendor CSS-->

 <!-- Main CSS-->
 <link href="{{  url("public/studentform") }}/css/main.css" rel="stylesheet" media="all">
</head>

<body>


 @php
 $data = DB::table("student_information")->where("id",Auth('student')->user()->id)->first();
 $department = DB::table("add_department")->where('show',1)->get();
 $semester = DB::table("semester_info")->where('status',1)->get();
 $section  = DB::table("section_info")->get();
 
 $division = DB::table('division_information')->where('status',1)->get();
 @endphp




 <div class="container">
  <div class="page-wrapper">
   <div class="wrapper">
    <div class="card p-4">
     <div class="card-heading" style="margin:  0 auto;">
      <center>
       <img src="https://i.ibb.co/RgJJv3C/home-page-2.webp" style="max-height: 100px;"><br>
       <h4 class="title font-weight-bold text-uppercase">My Profile Update</h4></center>
     </div>
     <div class="card-body">
       <form class="wizard-container" method="post" action="{{ url("updatestudentprofile/".$data->id) }}" id="js-wizard-form" enctype="multipart/form-data">
        @csrf
        <div class="progress" id="js-progress">
         <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
          <span class="progress-val">20%</span>
        </div>
      </div>
      <ul class="nav nav-tab">
       <li class="active">
        <a href="#tab1" data-toggle="tab">1</a>
      </li>
      <li>
        <a href="#tab2" data-toggle="tab">1</a>
      </li>
      <li>
        <a href="#tab3" data-toggle="tab">1</a>
      </li>

      <li>
        <a href="#tab4" data-toggle="tab">1</a>
      </li>

      <li>
        <a href="#tab5" data-toggle="tab">1</a>
      </li>
    </ul>
    <div class="tab-content">
     <div class="tab-pane active" id="tab1">
      <h4>Basic Information</h4><br>

      <div class="row">
       <div class="form-group col-md-6">
        <label>Student's Name: ( বাংলায় ইউনিকোডে লিখতে হবে )</label>
        <input type="text"  autocomplete="off"  class="form-control" name="students_name_bn" value="{{ $data->students_name_bn }}">
      </div>

      <div class="form-group col-md-6">
        <label>Student's Name: ( English )</label>
        <input type="text"   autocomplete="off" class="form-control" value="{{ $data->students_name_en }}" name="students_name_en">
      </div>

      <div class="form-group col-md-12">
        <label>Student's Birth Certificate Number:</label>
        <input type="text"   autocomplete="off" class="form-control" value="{{ $data->birth_certificate_no }}" name="birth_certificate_no">
      </div>

      <div class="form-group col-md-6">
        <label>Student's Date of Birth:</label>
        <input type="date"   autocomplete="off" class="form-control" value="{{ $data->date_of_birth }}" name="date_of_birth">
      </div>

      <div class="form-group col-md-6">
        <label>Student's Mobile No:</label>
        <input type="text"   autocomplete="off" class="form-control" value="{{ $data->mobile_no }}" name="mobile_no">
      </div>

      <div class="form-group col-md-4">
        <label>Email Address:</label>
        <input type="email"   autocomplete="off" class="form-control" value="{{ $data->email }}" name="email">
      </div>

      <div class="form-group col-md-4">
        <label>Gender:</label>
        <select class="form-control" name="gender">
         @if($data->gender == "Male")
         <option value="Male">Male</option>
         <option value="Female">Female</option>
         @else
         <option value="Female">Female</option>
         <option value="Male">Male</option>

         @endif
       </select>
     </div>

     <div class="form-group col-md-4">
      <label>Marital Status:</label>
      <select class="form-control" name="maritial_status">
       @if($data->maritial_status == "Married")
       <option value="Married">Married</option>
       <option value="Unmarried">Unmarried</option>
       @else
       <option value="Unmarried">Unmarried</option>
       <option value="Married">Married</option>

       @endif
     </select>
   </div>


   <div class="form-group col-md-6">
    <label>Certificate/Document Attachment:</label>
    <input type="file"   autocomplete="off" class="form-control" name="document" >
    <img src="{{ url($data->document) }}" style="max-height: 100px;">
  </div>


  <div class="form-group col-md-6">
    <label>Student Photo:</label>
    <input type="file" autocomplete="off" class="form-control" name="image">
    <img src="{{ url($data->image) }}" style="max-height: 100px;">
  </div>



</div>


<div class="btn-next-con">
 <button type="submit" class="btn-last bg-dark">Update</button>
 <a class="btn-next" href="#">Next</a>

</div>



</div>
<div class="tab-pane" id="tab2">

  <h4>Parents Information</h4><br>

  <div class="row">
   <div class="form-group col-md-6">
    <label>Father's Name: ( বাংলায় ইউনিকোডে লিখতে হবে )</label>
    <input type="text"  autocomplete="off"  class="form-control" name="fathers_name_bn"  value="{{ $data->fathers_name_bn }}">
  </div>

  <div class="form-group col-md-6">
    <label>Father's Name in English:</label>
    <input type="text"   autocomplete="off" class="form-control" name="fathers_name_en"  value="{{ $data->fathers_name_en }}">
  </div>

  <div class="form-group col-md-12">
    <label>Father's NID Number: (10 to 17 Digit)</label>
    <input type="text"   autocomplete="off" class="form-control" name="fathers_nid_no"  value="{{ $data->fathers_nid_no }}">
  </div>

  <div class="form-group col-md-6">
    <label>Father's Date of Birth:</label>
    <input type="date"   autocomplete="off" class="form-control" name="fathers_date_of_birth"  value="{{ $data->fathers_date_of_birth }}">
  </div>

  <div class="form-group col-md-6">
    <label>Father's Mobile No:</label>
    <input type="text"   autocomplete="off" class="form-control" name="fathers_mobile_no"  value="{{ $data->fathers_mobile_no }}">
  </div>

  <div class="form-group col-md-6">
    <label>Mother's Name: (বাংলায় ইউনিকোডে লিখতে হবে)</label>
    <input type="text"   autocomplete="off" class="form-control" name="mothers_name_bn"  value="{{ $data->mothers_name_bn }}">
  </div>


  <div class="form-group col-md-6">
    <label>Mother's Name in English:</label>
    <input type="text"   autocomplete="off" class="form-control" name="mothers_name_en"  value="{{ $data->mothers_name_en }}">
  </div>


  <div class="form-group col-md-12">
    <label>Mother's NID Number: (10 to 17 digit)</label>
    <input type="text"   autocomplete="off" class="form-control" name="mothers_nid_no"  value="{{ $data->mothers_nid_no }}">
  </div>


  <div class="form-group col-md-6">
    <label>Mother's Date of Birth:</label>
    <input type="date"   autocomplete="off" class="form-control" name="mothers_date_of_birth"  value="{{ $data->mothers_date_of_birth }}">
  </div>


  <div class="form-group col-md-6">
    <label>Mother's Mobile No:</label>
    <input type="text"   autocomplete="off" class="form-control" name="mothers_mobile_no"  value="{{ $data->mothers_mobile_no }}">
  </div>



</div>

<div class="btn-next-con">
 <button type="submit" class="btn-last bg-dark">Update</button>
 <a class="btn-back" href="#">back</a>
 <a class="btn-next" href="#">Next</a>
</div>
</div>
<div class="tab-pane" id="tab3">

  <h4>Address Information</h4><br>
  <div class="row">

   <div class="form-group col-md-4">
    <label>Division: (Permanent)</label>
    <select class="form-control" name="division_permanent" id="division_permanent">

     @if($division)
     @foreach($division as $viewdivisioin)
     <option value="{{$viewdivisioin->id}}" <?php if ($viewdivisioin->id == $data->division_permanent) {
      echo "selected";
    } ?>>{{$viewdivisioin->division_name}}</option>
    @endforeach
    @endif
  </select>
</div>

@php
$district_permanents =  DB::table("district_information")->get();
$thana =  DB::table("upazila_information")->get();
@endphp

<div class="form-group col-md-4">
  <label>District (Permanent)</label>
  <select class="form-control" name="district_permanent" id="district_permanent">
   @if($district_permanents)
   @foreach($district_permanents as $viewdivisioin)
   <option value="{{$viewdivisioin->id}}" <?php if ($viewdivisioin->id == $data->district_permanent) {
    echo "selected";
  } ?>>{{$viewdivisioin->district_name}}</option>
  @endforeach
  @endif
</select>
</div>

<div class="form-group col-md-4">
  <label>Thana/ Upazila  (Permanent)</label>
  <select class="form-control" name="upazila_permanent" id="upazila_permanent">
   @if($thana)
   @foreach($thana as $viewdivisioin)
   <option value="{{$viewdivisioin->id}}" <?php if ($viewdivisioin->id == $data->upazila_permanent) {
    echo "selected";
  } ?>>{{$viewdivisioin->upazila_name}}</option>
  @endforeach
  @endif
</select>
</div>

<div class="form-group col-md-4">
  <label>Union/ Ward  (Permanent)</label>
  <input type="text"   autocomplete="off" class="form-control" name="union_permanent" value="{{ $data->union_permanent }}">
</div>

<div class="form-group col-md-4">
  <label>Post Office  (Permanent)</label>
  <input type="text"   autocomplete="off" class="form-control" name="post_office_permanent" value="{{ $data->post_office_permanent }}">
</div>


<div class="form-group col-md-4">
  <label>Post Code:</label>
  <input type="text"   autocomplete="off" class="form-control" name="post_code" value="{{ $data->post_code }}">
</div>

<div class="form-group col-md-12">
  <label>Address/Village (Permanent):</label>
  <input type="text"   autocomplete="off" class="form-control" name="adress_village_permanent" value="{{ $data->adress_village_permanent }}">
</div>


<div class="form-group col-md-4">
  <label>Division: (Present)</label>
  <select class="form-control" name="division_present" id="division_present">
   @if($division)
   @foreach($division as $viewdivisioin)
   <option value="{{$viewdivisioin->id}}" <?php if ($viewdivisioin->id == $data->division_present) {
    echo "selected";
  } ?>>{{$viewdivisioin->division_name}}</option>
  @endforeach
  @endif
</select>
</div>



<div class="form-group col-md-4">
  <label>District (Present)</label>
  <select class="form-control" name="district_present" id="district_present">

   @if($district_permanents)
   @foreach($district_permanents as $viewdivisioin)
   <option value="{{$viewdivisioin->id}}" <?php if ($viewdivisioin->id == $data->district_present) {
    echo "selected";
  } ?>>{{$viewdivisioin->district_name}}</option>
  @endforeach
  @endif

</select>
</div>

<div class="form-group col-md-4">
  <label>Thana/ Upazila  (Present)</label>
  <select class="form-control" name="upazila_present" id="upazila_present">
   @if($thana)
   @foreach($thana as $viewdivisioin)
   <option value="{{$viewdivisioin->id}}" <?php if ($viewdivisioin->id == $data->upazila_present) {
    echo "selected";
  } ?>>{{$viewdivisioin->upazila_name}}</option>
  @endforeach
  @endif
</select>
</div>


<div class="form-group col-md-4">
  <label>Union/ Ward  (Present)</label>
  <input type="text"   autocomplete="off" class="form-control" name="union_present" value="{{ $data->union_present }}">
</div>

<div class="form-group col-md-4">
  <label>Post Office  (Present)</label>
  <input type="text"   autocomplete="off" class="form-control" name="post_office_present" value="{{ $data->post_office_present }}">
</div>


<div class="form-group col-md-4">
  <label>Post Code:</label>
  <input type="text"   autocomplete="off" class="form-control" name="post_code_present" value="{{ $data->post_code_present }}">
</div>

<div class="form-group col-md-12">
  <label>Address/Village (Present):</label>
  <input type="text"   autocomplete="off" class="form-control" name="adress_village_present" value="{{ $data->adress_village_present }}">
</div>


</div>

<div class="btn-next-con">
 <button type="submit" class="btn-last bg-dark">Update</button>
 <a class="btn-back" href="#">back</a>
 <a class="btn-next" href="#">Next</a>
</div>

</div>


<div class="tab-pane" id="tab4">


  <h4>Academic Information</h4><br>
  <div class="row">


   <div class="form-group col-md-4">
    <label>Diploma Board Roll:</label>
    <input type="text"   autocomplete="off" class="form-control"  readonly="" value="{{ $data->diploma_board_roll }}">
  </div>

  <div class="form-group col-md-4">
    <label>Diploma Registration No:</label>
    <input type="text"   autocomplete="off" class="form-control"  readonly="" value="{{ $data->diploma_registration_no }}">
  </div>

  <div class="form-group col-md-4">
    <label>Diploma Session:</label>
    <input type="text"   autocomplete="off" class="form-control" readonly="" value="{{ $data->diploma_session }}">
  </div>

  <div class="form-group col-md-4">
    <label>Department:</label>
    <select class="form-control" disabled="" id="dpt_id" required="">
     @if(isset($department))
     @foreach($department as $d)
     <option value="{{ $d->dpt_id }}" <?php if ($d->dpt_id == $data->department) {
      echo "selected";
    } ?>>{{ $d->department_name }}</option>
    @endforeach
    @endif
  </select>
</div>

<div class="form-group col-md-4">
  <label>Semester:</label>
  <select class="form-control" disabled="" id="semester" required="">
   @if(isset($semester))
   @foreach($semester as $d)
   <option value="{{ $d->id }}" <?php if ($d->id == $data->semester) {
    echo "selected";
  } ?>>{{ $d->semester }}</option>
  @endforeach
  @endif
</select>
</div>

<div class="form-group col-md-4">
  <label>Shift:</label>
  <select class="form-control" disabled="" required="">
   @if($data->shift == "1st Shift")
   <option value="1st Shift">First Shift</option>
   <option value="2nd Shift">Second Shift</option>
   @else
   <option value="2nd Shift">Second Shift</option>
   <option value="1st Shift">First Shift</option>

   @endif
 </select>
</div>


<div class="form-group col-md-4">
  <label>Group:</label>
  <select class="form-control"  disabled="" id="group" required="">
   @if(isset($section))
   @foreach($section as $d)
   <option value="{{ $d->section_id }}" <?php if ($d->section_id == $data->group) {
    echo "selected";
  } ?>>{{ $d->section }}</option>
  @endforeach
  @endif
</select>
</div>

</div>

<div class="row">


 <div class="form-group col-md-4">
  <label>SSC/HSC Roll No.:</label>
  <input type="text"   autocomplete="off" class="form-control" name="ssc_hsc_roll" value="{{ $data->ssc_hsc_roll }}">
</div>


<div class="form-group col-md-4">
  <label>SSC/HSC Registration No.:</label>
  <input type="text"   autocomplete="off" class="form-control" name="ssc_hsc_registration_no" value="{{ $data->ssc_hsc_registration_no }}">
</div>

<div class="form-group col-md-4">
  <label>SSC/HSC Division:</label>
  <select class="form-control" name="ssc_hsc_division" id="ssc_hsc_division">
   @if($division)
   @foreach($division as $viewdivisioin)
   <option value="{{$viewdivisioin->id}}" <?php if ($viewdivisioin->id == $data->ssc_hsc_division) {
    echo "selected";
  } ?>>{{$viewdivisioin->division_name}}</option>
  @endforeach
  @endif
</select>

</div>

<div class="form-group col-md-4">
  <label>SSC/HSC District:</label>
  <select class="form-control" name="ssc_hsc_district" id="ssc_hsc_district">
   @if($district_permanents)
   @foreach($district_permanents as $viewdivisioin)
   <option value="{{$viewdivisioin->id}}" <?php if ($viewdivisioin->id == $data->ssc_hsc_district) {
    echo "selected";
  } ?>>{{$viewdivisioin->district_name}}</option>
  @endforeach
  @endif
</select>

</div>

<div class="form-group col-md-4">
  <label>SSC/HSC Thana/ Upazila:</label>
  <select class="form-control" name="ssc_hsc_upazila" id="ssc_hsc_upazila">
   @if($thana)
   @foreach($thana as $viewdivisioin)
   <option value="{{$viewdivisioin->id}}" <?php if ($viewdivisioin->id == $data->ssc_hsc_upazila) {
    echo "selected";
  } ?>>{{$viewdivisioin->upazila_name}}</option>
  @endforeach
  @endif
</select>

</div>

<div class="form-group col-md-4">
  <label>School/Collage/Institute Name:</label>
  <input type="text"   autocomplete="off" class="form-control" name="school_college_name" value="{{ $data->school_college_name }}">
</div>



<div class="form-group col-md-4">
  <label>SSC/HSC Board:</label>
  <input type="text"   autocomplete="off" class="form-control" name="ssc_hsc_board" value="{{ $data->ssc_hsc_board }}">
</div>
<div class="form-group col-md-4">
  <label>Previous Exam Name:</label>
  <input type="text"   autocomplete="off" class="form-control" name="previous_exam_name" value="{{ $data->previous_exam_name }}">
</div>

<div class="form-group col-md-4">
  <label>SSC/HSC Group:</label>
  <input type="text"   autocomplete="off" class="form-control" name="ssc_hsc_group" value="{{ $data->ssc_hsc_group }}">
</div>

<div class="form-group col-md-4">
  <label>Passing Year:</label>
  <select class="form-control" name="passing_year">
   <option value="2022">2022</option>
 </select>
</div>

<div class="form-group col-md-4">
  <label>SSC/HSC GPA:</label>
  <input type="text"  autocomplete="off" class="form-control" name="ssc_hsc_gpa" value="{{ $data->ssc_hsc_gpa }}">
</div>





</div>



<div class="btn-next-con">
 <button type="submit" class="btn-last bg-dark">Update</button>
 <a class="btn-back" href="#">back</a>
 <a class="btn-next" href="#">Next</a>
</div>

</div>



<div class="tab-pane" id="tab5">

  <h4>Guardian Information:</h4><br>
  <div class="row">


   <div class="form-group col-md-12">
    <label>Relation with Guardian  ( অভিভাবক এর সাথে সম্পর্ক ) :</label>
    <input type="text"   autocomplete="off" class="form-control" name="guardian_relation" value="{{ $data->guardian_relation }}">
  </div>

  <div class="form-group col-md-6">
    <label>Guardian's Name: ( অভিভাবক এর নাম (বাংলায় ইউনিকোডে লিখতে হবে )</label>
    <input type="text"   autocomplete="off" class="form-control" name="guardian_name_bn" value="{{ $data->guardian_name_bn }}">
  </div>

  <div class="form-group col-md-6">
    <label>Guardian's Name in English:</label>
    <input type="text"   autocomplete="off" class="form-control" name="guardian_name_en" value="{{ $data->guardian_name_en }}">
  </div>

  <div class="form-group col-md-4">
    <label>Guardian's NID Number (10 to 17 Digit):</label>
    <input type="text"   autocomplete="off" class="form-control" name="guardian_nid_no" value="{{ $data->guardian_nid_no }}">
  </div>

  <div class="form-group col-md-4">
    <label>Guardian's Date of Birth:</label>
    <input type="date"   autocomplete="off" class="form-control" name="guardian_date_of_birth" value="{{ $data->guardian_date_of_birth }}">
  </div>

  <div class="form-group col-md-4">
    <label>Guardian's Mobile No.:</label>
    <input type="text"   autocomplete="off" class="form-control" name="guardian_mobile_no" value="{{ $data->guardian_mobile_no }}">
  </div>

  <div class="form-group col-md-12">
    <label>Who will bear the cost of tuition? [শিক্ষার ব্যয় কে বহন করবে ?]:</label>
    <input type="text"   autocomplete="off" class="form-control" name="tution_cost_bearer" value="{{ $data->tution_cost_bearer }}">
  </div>

  <div class="form-group col-md-12">
    <label>Does the applicant belong to any small ethnic group of Bangladesh? [আদিবাসী কোটা আছে কি না ?]:</label>
    <select class="form-control" name="small_ethnic_group">
     @if($data->small_ethnic_group == "Yes")
     <option value="Yes">Yes</option>
     <option value="No">No</option>
     @else
     <option value="No">No</option>
     <option value="Yes">Yes</option>

     @endif
   </select>
 </div>

 <div class="form-group col-md-12">
  <label>Is the applicant a child of Freedom Fighter family ? [মুক্তিযোদ্ধা কোটা আছে কি না ?]:</label>

  <select class="form-control" name="freedom_fighter_family">
   @if($data->freedom_fighter_family == "Yes")
   <option value="Yes">Yes</option>
   <option value="No">No</option>
   @else
   <option value="No">No</option>
   <option value="Yes">Yes</option>

   @endif
 </select>
</div>

<div class="form-group col-md-12">
  <label>Is the applicant getting scholarship / stipend from any other source? [ শিক্ষার্থী অন্য কোন বৃত্তি পায় কি না ?]:</label>

  <select class="form-control" name="scholarship_stipend_source">
   @if($data->scholarship_stipend_source == "Yes")
   <option value="Yes">Yes</option>
   <option value="No">No</option>
   @else
   <option value="No">No</option>
   <option value="Yes">Yes</option>

   @endif
 </select>
</div>

<div class="form-group col-md-12">
  <label>Does the applicant have any physical disability? [ শিক্ষার্থীর প্রতিবন্ধী কোটা আছে কি না ? ]:</label>

  <select class="form-control" name="physical_disability">
   @if($data->physical_disability == "Yes")
   <option value="Yes">Yes</option>
   <option value="No">No</option>
   @else
   <option value="No">No</option>
   <option value="Yes">Yes</option>

   @endif
 </select>

</div>


<div class="form-group col-md-12">
  <label>Change Password:</label>
  <input type="text"   autocomplete="off" class="form-control" name="password" value="{{ $data->show_password }}">
</div>




</div>


<div class="btn-next-con">
 <a class="btn-back" href="#">back</a>
 <button type="submit" class="btn-last">Submit</button>
</div>

</div>




</div>
</form>
</div>
</div>
</div>
</div>
</div>

<!-- Jquery JS-->
<script src="{{  url("public/studentform") }}/vendor/jquery/jquery.min.js"></script>

<script src="{{  url("public/studentform") }}/vendor/bootstrap-wizard/bootstrap.min.js"></script>
<script src="{{  url("public/studentform") }}/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<!-- Main JS-->
<script src="{{  url("public/studentform") }}/js/global.js"></script>

<script>
 $(document).ready(function(){

  $('#division_permanent').on('change',function(){
   var division_id = $(this).val(); 
   if(division_id != ' ')
   {
    $.ajax({
     headers:{
      'X-CSRF-TOKEN' : '{{ csrf_token() }}'
    },

    url : '{{url('getDistrict')}}',

    type : 'POST',

    data : {division_id},

    success : function(data)
    {
      $('#district_permanent').html(data);
    }
  });
  }
});

  $('#ssc_hsc_division').on('change',function(){
   var division_id = $(this).val(); 
   if(division_id != ' ')
   {
    $.ajax({
     headers:{
      'X-CSRF-TOKEN' : '{{ csrf_token() }}'
    },

    url : '{{url('getDistrict')}}',

    type : 'POST',

    data : {division_id},

    success : function(data)
    {
      $('#ssc_hsc_district').html(data);
    }
  });
  }
});



  $('#division_present').on('change',function(){
   var division_id = $(this).val(); 
   if(division_id != ' ')
   {
    $.ajax({
     headers:{
      'X-CSRF-TOKEN' : '{{ csrf_token() }}'
    },

    url : '{{url('getDistrict')}}',

    type : 'POST',

    data : {division_id},

    success : function(data)
    {
      $('#district_present').html(data);
    }
  });
  }
});



  $('#district_permanent').on('change',function(){
   var district_id = $(this).val(); 
   if(district_id != ' ')
   {
    $.ajax({
     headers:{
      'X-CSRF-TOKEN' : '{{ csrf_token() }}'
    },

    url : '{{url('getUpazila')}}',

    type : 'POST',

    data : {district_id},

    success : function(data)
    {
      $('#upazila_permanent').html(data);
    }
  });
  }
});


  $('#ssc_hsc_district').on('change',function(){
   var district_id = $(this).val(); 
   if(district_id != ' ')
   {
    $.ajax({
     headers:{
      'X-CSRF-TOKEN' : '{{ csrf_token() }}'
    },

    url : '{{url('getUpazila')}}',

    type : 'POST',

    data : {district_id},

    success : function(data)
    {
      $('#ssc_hsc_upazila').html(data);
    }
  });
  }
});



  $('#district_present').on('change',function(){
   var district_id = $(this).val(); 
   if(district_id != ' ')
   {
    $.ajax({
     headers:{
      'X-CSRF-TOKEN' : '{{ csrf_token() }}'
    },

    url : '{{url('getUpazila')}}',

    type : 'POST',

    data : {district_id},

    success : function(data)
    {
      $('#upazila_present').html(data);
    }
  });
  }
});

});
</script>

</body>

</html>
<!-- end document-->