<?php

// use DB;

$setting = DB::table('setting')->first();



$array = array(
    'admission_form'=>'ভর্তি ফরম',
    'viewtitle'=>'আবেদনকৃত ছাত্রদের তথ্য দেখুন',
    'result'=>'ফলাফল প্রক্রিয়াকরণ',
    'student_login'=>'শিক্ষার্থী প্যানেল',
    'student_form_title'=>'শিক্ষার্থী ভর্তি ফরম',
    'personal_info'=>'ব্যক্তিগত তথ্য',
    'academic_info'=>'একাডেমিক তথ্য',
    'adress'=>'এড্রেস',
    'guardian_info'=>'অভিভাবক তথ্য',
    'apply_date'=>'আবেদনের তারিখ',
    'name'=>'নাম',
    'designation'=>'পদবী',
    'mobile'=>'মোবাইল',
    'mail'=>'ইমেইল',
    'profession'=>'পেশা',
    'join_date'=>'যোগদানের তারিখ',
    'education'=>'শিক্ষাগত যোগ্যতা',
    'duration'=>'সময়কাল',
    'student_name'=>'শিক্ষার্থীর নাম',
    'father_name'=>'পিতার নাম',
    'mother_name'=>'মাতার নাম',
    'select_one'=>'একটা নির্বাচন করুন',
    'religion'=>'ধর্ম',
    'blood_group'=>'রক্তের গ্রুপ',
    'date_of_birth'=>'জন্ম তারিখ',
    'gender'=>'লিঙ্গ',
    'male'=>'পুরুষ',
    'female'=>'মহিলা',
    'image'=>'ছবি',
    'submit'=>'পরবর্তী ধাপ',
    'class'=>'শ্রেণী',
    'group'=>'গ্রুপ',
    'admission_class'=>'ভর্তি ক্লাস (ইচ্ছা)',
    'year'=>'বছর',
    'present_adress'=>'বর্তমান এড্রেস',
    'house_name'=>'বাড়ির নাম/ নাম্বার',
    'village'=>'গ্রাম',
    'po'=>'পোস্ট অফিস',
    'post_code'=>'পোস্ট কোড',
    'upazila'=>'উপজেলা',
    'district'=>'জেলা',
    'permenant_adress'=>'স্থায়ী এড্রেস',
    'same_as_present'=>'বর্তমান এড্রেস হিসেবে একই',
    'guardian_name'=>'অভিভাবকের নাম',
    'relation'=>'সম্পর্ক',
    'guardian_contact'=>'অভিভাবক যোগাযোগ',
    'guardian_email'=>'অভিভাবকের ইমেইল',
    'father'=>'পিতা',
    'mother'=>'মাতা',
    'elder_brother'=>'বড় ভাই',
    'home'=>'বাড়িতে যেতে',
    'create_new'=>'+ নতুন ডেটা যোগ করুন',
    'institute_name'=>'প্রতিষ্ঠানের নাম',
    'board_roll'=>'বোর্ড রোল',
    'reg_no'=>'রেজিষ্ট্রেশন নম্বর',
    'passing_year'=>'পাসের বছর',
    'view_data'=>'তথ্য দেখুন',
    'delete_data'=>'তথ্য মুছুন',
    'gpa'=>'জিপিএ',
    'select_menu'=>'মেনু নির্বাচন করুন',
    'golden_jubilee_and_bangabandhu_corner'=>'সুবর্ণ জয়ন্তী ও বঙ্গবন্ধু কর্ণার',
    'working_alumni_database'=>'কর্মরত প্রাক্তন ছাত্র-ছাত্রীদের ডাটাবেজ',
    'attached_cv'=>'কর্ম প্রত্যাশীদের বায়োডাটা সংযুক্তকরণ',

    'home'=>'হোম',
    'institute_introduction'=>'প্রতিষ্ঠান পরিচিতি',
    'about_institute'=>'প্রতিষ্ঠান সম্পর্কে',
    'infrastructure'=>'ভৌত অবকাঠামো',
    'position'=>'অবস্থান',
    'contact'=>'যোগাযোগের ঠিকানা',
    'about_us'=>'আমাদের সম্পর্কে',
    'mission_vision'=>'লক্ষ্য এবং উদ্দেশ্য',
    'history'=>'সংক্ষিপ্ত ইতিহাস',
    'citizen_charter'=>'সিটিজেন চার্টার',
    'administrative_information'=>'প্রশাসনিক তথ্য',
    'presidentmessage'=>'সভাপতির বার্তা',
    'structure'=>'প্রাতিষ্ঠানিক লেআউট',
    'info'=>'অর্গানোগ্রাম',
    'integrity'=>'শুদ্ধাচার সংক্রান্ত তথ্য',
    'ongoingeducation'=>'চলমান শিক্ষা',

    // 'principal_messages'=>'প্রধান শিক্ষকের বার্তা',
    'vice_principal_message'=>'উপাধ্যক্ষের বার্তা',
    'managing_comitte'=>'পরিচালনা পর্ষদ তথ্য',
    'presidents'=>'সভাপতির তালিকা',
    'principles'=>'প্রাক্তন অধ্যক্ষবৃন্দের তালিকা',
    'donar'=>'দাতা সদস্যদের তালিকা',
    'ex_member'=>'প্রাক্তন সদস্যদের তালিকা',
    'teachers_and_staff'=>'শিক্ষক এবং কর্মচারী',
    'teacherinfo'=>'শিক্ষকবৃন্দের তথ্য',
    'staffinfo'=>'কর্মচারীদের তথ্য',
    'comitteemembers'=>'কমিটির সদস্যদের তালিকা',
    'councilmembers'=>'কাউন্সিল সদস্যদের তালিকা',

    'academic_information'=>'একাডেমিক তথ্য',
    'rules_regulation'=>'আচরণ বিধি',
    'academiccalenders'=>'একাডেমিক ক্যালেন্ডার',
    'classroutines'=>'ক্লাস রুটিন',
    'onlineclassroutines'=>'অনলাইন ক্লাস রুটিন',
    'digitalclassroomcontent'=>'ডিজিটাল ক্লাস কন্টেন্ট',
    'syllabus'=>'সিলেবাস',
    'semesterplan'=>'সেমিস্টার প্ল্যান',
    'studentprojects'=>'শিক্ষাথীদের প্রজেক্টসমূহ',
    'probidhan'=>'প্রবিধান',

    'holidaylists'=>'ছুটির তালিকা',
    'uniform'=>'ইউনিফর্ম',
    'fees'=>'ফি সমূহ',
    'studentinfochart'=>'ছাত্র/ছাত্রী তথ্য চার্ট',
    'co_curricular'=>'সহপাঠ্যক্রম',
    'sports_activities'=>'ক্রীড়া কার্যক্রম',
    'cultural_activities'=>'সাংস্কৃতিক কার্যক্রম',
    'scouts'=>'স্কাউটস',
    'red_crescent'=>'রেড ক্রিসেন্ট',
    'educational_tour'=>'শিক্ষা সফর',
    'student_cabinet'=>'স্টুডেন্ট ক্যাবিনেট',
    'debating_club'=>'ডিবেটিং ক্লাব',
    'language_club'=>'ল্যাঙ্গুয়েজ ক্লাব',
    'science_fair'=>'বিজ্ঞান মেলা',
    'admission_information'=>'ভর্তি সংক্রান্ত তথ্য',
    'prospectus'=>'প্রসপেক্টাস',
    'admission_rules'=>'ভর্তির নিয়মাবলী',
    'admission_procedure'=>'ভর্তির পদ্ধতি',
    'admission_test_result'=>'ভর্তি পরীক্ষার ফলাফল',
    'admission_test_questions'=>'ভর্তির পরীক্ষার প্রশ্নপত্র',
    'exam_information'=>'পরীক্ষা সংক্রান্ত তথ্য',
    'exam_rules'=>'পরীক্ষার নিয়মাবলী',
    'examroutines'=>'পরীক্ষার সময়সূচী',
    'examsyllabus'=>'পরীক্ষার সিলেবাস',
    'examsuggession'=>'পরীক্ষার সাজেশন্স',
    'result'=>'ফলাফল',
    'internal_results'=>'অভ্যন্তরীণ পরীক্ষা',
    'boardresult'=>'বোর্ড ফাইনাল পরীক্ষা',
    'scholarship'=>'বৃত্তি পরীক্ষার ফলাফল',
    'gallery'=>'গ্যালারি',
    'photogallery'=>'ফটোগ্যালারি',
    'videogallery'=>'ভিডিওগ্যালারি',
    'complainbox'=>'অভিযোগ বাক্স',
    'department_wise'=>'বিভাগ সমূহ',
    'academic_works'=>'একাডেমিক কার্যক্রম',
    'job_placement'=>'জব প্লেসমেন্ট',
    'industries_linkes'=>'ইন্ডাস্ট্রি লিংকেজ',

    'events'=>'ইভেন্টস',
    'library'=>'পাঠাগার তথ্য',
    'dormitory'=>'ছাত্রাবাস তথ্য',
    'others'=>'অন্যান্য',
    'detail'=>'বিস্তারিত দেখুন',
    'useful_link'=>'গুরুত্বপূর্ণ লিংক',
    'map'=>'গুগল ম্যাপ',
    'fan_page'=>'অফিসিয়াল ফ্যান পেইজ',
    'emergency_hotline'=>'জরুরী হটলাইন',
    'national_anthem'=>'জাতীয় সংগীত',
    'crights'=>'কপিরাইট',
    'rights'=>'সমস্ত অধিকার সংরক্ষিত.',
    'drights'=>'ডেভেলপ করেছে',
    'sbit'=>'স্কিল বেসড আইটি',

    'notice_board'=>'নোটিশ বোর্ড',
    'notices'=>'নোটিশ',
    'all'=>'সকল',
    'introduction'=>'পরিচিতি',
    'sl'=>'ক্রমিক',
    'release_date'=>'প্রকাশের তারিখ',
    'title'=>'শিরোনাম',
    'download'=>'ডাউনলোড',
    'established'=>'প্রতিষ্ঠাকাল',

    'calendar'=>'ক্যালেন্ডার',
    'holiday_list'=>'ছুটির তালিকা',
    'department_info'=>'বিভাগের শিক্ষকদের তথ্য',
    'teaching_permission_recognition'=>'পাঠদানের অনুমতি ও স্বীকৃতি',
    'mpo_nationalization_info'=>'এমপিও/জাতীয়করণ তথ্য',

    'student'=>'শিক্ষার্থী',
    'class_gender_based_education'=>'শ্রেণী ও লিংগ ভিত্তিক শিক্ষার্থী তথ্য',
    'section_wise_student'=>'শ্রেণী ভিত্তিক অনুমোদিত শাখার তথ্য',
    'student_attendance'=>'শিক্ষার্থী উপস্থিতি তথ্য',
    'sixth_class_std_info'=>'৬ষ্ঠ শ্রেণী শিক্ষার্থী তথ্য',
    'seventh_class_std_info'=>'৭ম শ্রেণী শিক্ষার্থী তথ্য',
    'eighth_class_std_info'=>'৮ম শ্রেণী শিক্ষার্থী তথ্য',
    'ninth_class_std_info'=>'৯ম শ্রেণী শিক্ষার্থী তথ্য',
    'tenth_class_std_info'=>'১০ম শ্রেণী শিক্ষার্থী তথ্য',
    'gender_wise_student_info'=>'লিঙ্গভিত্তিক শিক্ষার্থীর তথ্য',
    'total'=>'মোট',
    'class_wise_student'=>'শ্রেণী ভিত্তিক শিক্ষার্থীর তথ্য',
    'student_id'=>'ছাত্র/ছাত্রীর আইডি',
    'roll_no'=>'রোল নং',
    'phone'=>'ফোন',
    'details'=>'বিস্তারিত',
    'class'=>'শ্রেণী',
    'total_student'=>'মোট শিক্ষার্থীর সংখ্যা',
    'present'=>'উপস্থিত শিক্ষার্থীর সংখ্যা',
    'absent'=>'উপস্থিত শিক্ষার্থীর সংখ্যা',
    'search'=>'সার্চ করুন',
    'announcement' => 'বিশেষ বিজ্ঞপ্তি',

    'date' => 'তারিখ',
    'departmentname' => 'ডিপার্টমেন্ট',
    'semestername' => 'সেমিষ্টার',
    'shift' => 'শিফট',
    'subject' => 'বিষয়',

    'about' => 'সম্পর্কে',
    'department_head' => 'বিভাগীয় প্রধান পরিচিতি',
    'teacherinfofirst' => 'প্রথম শিফটের শিক্ষকবৃন্দের তথ্য',
    'teacherinfosecond' => 'দ্বিতীয় শিফটের শিক্ষকবৃন্দের তথ্য',
    'student_info'=>'শিক্ষার্থী তথ্য',
    'lab'=>'ল্যাব/ সপ',

    'employment_information'=>'কর্মসংস্থান সংক্রান্ত তথ্যাবলী',
    'recruitment_notices'=>'নিয়োগ বিজ্ঞপ্তিসমূহ',
    'alumni_success'=>'পুরাতন শিক্ষাথীদের সাফল্য',
    'agreement'=>'সম্পাদিত চুক্তিসমূহ',
    'industrial_attachment'=>'ইন্ডাস্ট্রিয়াল এটাচমেন্ট',
    'industries_visit'=>'ইন্ডাস্ট্রি ভিজিট',
    'near_industries'=>'নিকটস্থ ইন্ডাস্ট্রিসমূহ',
    'working_alumni'=>'কর্মরত প্রাক্তন ছাত্র-ছাত্রীদের ডাটাবেজ',
    'cv_attachment'=>'কর্ম প্রত্যাশীদের বায়োডাটা সংযুক্তকরণ',

    //tanim

    'read_more'=>'আরো পড়ুন...',
    'details' => 'বিস্তারিত...',
    'detailss' => 'বিস্তারিত',

);

if($setting->type == 'school')
{

        $array['principal_message'] = 'প্রধান শিক্ষকের বার্তা';

}
else
{
    $array['principal_message'] = 'অধ্যক্ষের বার্তা';
}

return $array;
