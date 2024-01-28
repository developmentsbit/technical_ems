<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_information', function (Blueprint $table) {
            $table->id();
            $table->string('students_name_bn')->nullable();
            $table->string('students_name_en')->nullable();
            $table->string('birth_certificate_no')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('gender')->nullable();
            $table->string('maritial_status')->nullable();
            $table->string('fathers_name_en')->nullable();
            $table->string('fathers_name_bn')->nullable();
            $table->string('fathers_nid_no')->nullable();
            $table->string('fathers_date_of_birth')->nullable();
            $table->string('fathers_mobile_no')->nullable();
            $table->string('mothers_name_en')->nullable();
            $table->string('mothers_name_bn')->nullable();
            $table->string('mothers_nid_no')->nullable();
            $table->string('mothers_date_of_birth')->nullable();
            $table->string('mothers_mobile_no')->nullable();
            $table->string('division_permanent')->nullable();
            $table->string('district_permanent')->nullable();
            $table->string('upazila_permanent')->nullable();
            $table->string('union_permanent')->nullable();
            $table->string('post_office_permanent')->nullable();
            $table->string('post_code')->nullable();
            $table->longText('adress_village_permanent')->nullable();
            $table->string('division_present')->nullable();
            $table->string('district_present')->nullable();
            $table->string('upazila_present')->nullable();
            $table->string('union_present')->nullable();
            $table->string('post_office_present')->nullable();
            $table->string('post_code_present')->nullable();
            $table->longText('adress_village_present')->nullable();
            $table->string('diploma_board_roll')->nullable();
            $table->string('diploma_registration_no')->nullable();
            $table->string('diploma_session')->nullable();
            $table->string('department')->nullable();
            $table->string('semester')->nullable();
            $table->string('shift')->nullable();
            $table->string('group')->nullable();
            $table->string('ssc_hsc_roll')->nullable();
            $table->string('ssc_hsc_registration_no')->nullable();
            $table->string('ssc_hsc_division')->nullable();
            $table->string('ssc_hsc_district')->nullable();
            $table->string('ssc_hsc_upazila')->nullable();
            $table->string('school_college_name')->nullable();
            $table->string('ssc_hsc_board')->nullable();
            $table->string('previous_exam_name')->nullable();
            $table->string('ssc_hsc_group')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('ssc_hsc_gpa')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->string('guardian_name_en')->nullable();
            $table->string('guardian_name_bn')->nullable();
            $table->string('guardian_nid_no')->nullable();
            $table->string('guardian_date_of_birth')->nullable();
            $table->string('guardian_mobile_no')->nullable();
            $table->string('tution_cost_bearer')->nullable();
            $table->string('small_ethnic_group')->nullable();
            $table->string('freedom_fighter_family')->nullable();
            $table->string('scholarship_stipend_source')->nullable();
            $table->string('physical_disability')->nullable();
            $table->string('image',100)->default('0');
            $table->string('document')->nullable();
            $table->string('password',255);
            $table->string('show_password',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_information');
    }
};
