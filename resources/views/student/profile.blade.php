
@extends('student.index')
@section('content')


<div class="content-body">

     <div class="container-fluid mt-3">



          <div class="table-responsive bg-white p-5">
               <table class="table table-bordered">
                    <h3>My Profile</h3><hr>

                    <tr>
                         <td colspan="2">
                              <img src="{{ url($view->image) }}" style="max-height: 200px;">
                        </td>
                  </tr>

                  <tr>
                   <td style="width:300px; color:navy;">Name:</td>
                   <td style="color:#414141;">{{ $view->students_name_bn }} -- {{ $view->students_name_en }}</td>
             </tr>


             <tr>
                   <td style="width:300px; color:navy;">Diploma Board Roll:</td>
                   <td style="color:#414141;">{{ $view->diploma_board_roll }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Diploma Registration No:</td>
                   <td style="color:#414141;">{{ $view->diploma_registration_no }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Session:</td>
                   <td style="color:#414141;">{{ $view->diploma_session }}</td>
             </tr>


             <tr>
                   <td style="width:300px; color:navy;">Department:</td>
                   <td style="color:#414141;">{{ $view->department_name }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Semester:</td>
                   <td style="color:#414141;">{{ $view->semester }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Shift:</td>
                   <td style="color:#414141;">{{ $view->shift }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Group:</td>
                   <td style="color:#414141;">{{ $view->section }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Birth Certification No.:</td>
                   <td style="color:#414141;">{{ $view->birth_certificate_no }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Date Of Birth:</td>
                   <td style="color:#414141;">{{ $view->date_of_birth }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Mobile:</td>
                   <td style="color:#414141;">{{ $view->mobile_no }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Email:</td>
                   <td style="color:#414141;">{{ $view->email }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Gender:</td>
                   <td style="color:#414141;">{{ $view->gender }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Maritial Status:</td>
                   <td style="color:#414141;">{{ $view->maritial_status }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Father's Name:</td>
                   <td style="color:#414141;">{{ $view->fathers_name_en }} -- {{ $view->fathers_name_bn }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Father's NID:</td>
                   <td style="color:#414141;">{{ $view->fathers_nid_no }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Father's Date Of Birth:</td>
                   <td style="color:#414141;">{{ $view->fathers_date_of_birth }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Father's Mobile:</td>
                   <td style="color:#414141;">{{ $view->fathers_mobile_no }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Mother's Name:</td>
                   <td style="color:#414141;">{{ $view->mothers_name_en }} {{ $view->mothers_name_bn }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Mother's NID:</td>
                   <td style="color:#414141;">{{ $view->mothers_nid_no }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Mother's Date Of Birth:</td>
                   <td style="color:#414141;">{{ $view->mothers_date_of_birth }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Mother's Mobile:</td>
                   <td style="color:#414141;">{{ $view->mothers_mobile_no }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Division Permanent:</td>
                   <td style="color:#414141;">{{ $view->division_name }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">District Permanent:</td>
                   <td style="color:#414141;">{{ $view->district_name }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Upazila Permanent:</td>
                   <td style="color:#414141;">{{ $view->upazila_name }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Union Permanent:</td>
                   <td style="color:#414141;">{{ $view->union_permanent }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Post Office Permanent:</td>
                   <td style="color:#414141;">{{ $view->post_office_permanent }}</td>
             </tr>


             <tr>
                   <td style="width:300px; color:navy;">Permanent Post Code:</td>
                   <td style="color:#414141;">{{ $view->post_code }}</td>
             </tr>


             <tr>
                   <td style="width:300px; color:navy;">Permanent Address:</td>
                   <td style="color:#414141;">{{ $view->adress_village_permanent }}</td>
             </tr>

             

             <tr>
                   <td style="width:300px; color:navy;">Division Present:</td>
                   <td style="color:#414141;">{{ $presentdiv->division_name }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">District Present:</td>
                   <td style="color:#414141;">{{ $presentdis->district_name }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Upazila Present:</td>
                   <td style="color:#414141;">{{ $presentupa->upazila_name }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Union Present:</td>
                   <td style="color:#414141;">{{ $view->union_present }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Post Office Present:</td>
                   <td style="color:#414141;">{{ $view->post_office_present }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Post Code Present:</td>
                   <td style="color:#414141;">{{ $view->post_code_present }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">Present Address:</td>
                   <td style="color:#414141;">{{ $view->adress_village_present }}</td>
             </tr>
             
             <tr>
                   <td style="width:300px; color:navy;">SSC/Hsc Roll:</td>
                   <td style="color:#414141;">{{ $view->ssc_hsc_roll }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">SSC/Hsc Registration:</td>
                   <td style="color:#414141;">{{ $view->ssc_hsc_registration_no }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">SSC/Hsc Division:</td>
                   <td style="color:#414141;">{{ $ssdiv->division_name }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">SSC/Hsc District:</td>
                   <td style="color:#414141;">{{ $ssdis->district_name }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">SSC/Hsc Upazila:</td>
                   <td style="color:#414141;">{{ $ssupa->upazila_name }}</td>
             </tr>
             <tr>
                   <td style="width:300px; color:navy;">School/College Name:</td>
                   <td style="color:#414141;">{{ $view->school_college_name }}</td>
             </tr>


             <tr>
                   <td style="width:300px; color:navy;">SSC/Hsc Board:</td>
                   <td style="color:#414141;">{{ $view->ssc_hsc_board }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Previous Exam:</td>
                   <td style="color:#414141;">{{ $view->previous_exam_name }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">SSC/Hsc Group:</td>
                   <td style="color:#414141;">{{ $view->ssc_hsc_group }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Passing Year:</td>
                   <td style="color:#414141;">{{ $view->passing_year }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">SSC/Hsc GPA:</td>
                   <td style="color:#414141;">{{ $view->ssc_hsc_gpa }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Guardian Replation:</td>
                   <td style="color:#414141;">{{ $view->guardian_relation }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Guardian Name:</td>
                   <td style="color:#414141;">{{ $view->guardian_name_en }} -- {{ $view->guardian_name_bn }}</td>
             </tr>


             <tr>
                   <td style="width:300px; color:navy;">Guardian NID:</td>
                   <td style="color:#414141;">{{ $view->guardian_nid_no }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Guardian Date Of Birth:</td>
                   <td style="color:#414141;">{{ $view->guardian_date_of_birth }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Guardian Mobile:</td>
                   <td style="color:#414141;">{{ $view->guardian_mobile_no }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Tuition Cost Bearer:</td>
                   <td style="color:#414141;">{{ $view->tution_cost_bearer }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Small Ethnic Group:</td>
                   <td style="color:#414141;">{{ $view->small_ethnic_group }}</td>
             </tr>


             <tr>
                   <td style="width:300px; color:navy;">Freedom fighter Family:</td>
                   <td style="color:#414141;">{{ $view->freedom_fighter_family }}</td>
             </tr>


             <tr>
                   <td style="width:300px; color:navy;">Scholarship Stipend Source:</td>
                   <td style="color:#414141;">{{ $view->scholarship_stipend_source }}</td>
             </tr>

             <tr>
                   <td style="width:300px; color:navy;">Physical Disability:</td>
                   <td style="color:#414141;">{{ $view->physical_disability }}</td>
             </tr>








             
       </table>
       
 </div>



</div>
<!-- #/ container -->
</div>
        <!--**********************************
            Content body end
            ***********************************-->

            @endsection