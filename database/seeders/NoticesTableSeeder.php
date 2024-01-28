<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoticesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notices')->delete();
        
        \DB::table('notices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => '1',
                'date' => '2023-05-02',
                'title' => '3rd Phase Midterm Exam-2023 Seat Arrangement',
                'title_bn' => '৩য় পর্ব পর্বমধ্য পরীক্ষা-২০২৩ এর আসনবিন্যাস',
                'details' => '<p><span style="font-size: 14.4px;">3rd Phase Midterm Exam-2023 Seat Arrangement</span><br></p>',
                'details_bn' => '<h5 style="padding: 0px; margin-top: 0px; margin-bottom: 0.5rem; line-height: 1.2;"><span style="font-weight: normal;">৩য় পর্ব পর্বমধ্য পরীক্ষা-২০২৩ এর আসনবিন্যাস</span></h5>',
                'image' => 'notices_image/43574.pdf',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => '1',
                'date' => '2023-05-02',
                'title' => '5th Phase Midterm Exam-2023 Seat Arrangement',
                'title_bn' => '৫ম পর্ব পর্বমধ্য পরীক্ষা-২০২৩ এর আসনবিন্যাস',
                'details' => '<p><span style="font-size: 14.4px;">5th Phase Midterm Exam-2023 Seat Arrangement</span><br></p>',
                'details_bn' => '<p><span style="cursor: pointer;">৫ম পর্ব পর্বমধ্য পরীক্ষা-২০২৩ এর আসনবিন্যাস</span><br></p>',
                'image' => 'notices_image/12350.pdf',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => '1',
                'date' => '2023-05-02',
                'title' => '7th Phase Midterm Exam-2023 Seat Arrangement',
                'title_bn' => '৭ম পর্ব পর্বমধ্য পরীক্ষা-২০২৩ এর আসনবিন্যাস',
                'details' => '<p><span style="font-size: 14.4px;">7th Phase Midterm Exam-2023 Seat Arrangement</span><br></p>',
                'details_bn' => '<p><span style="cursor: pointer;">৭ম পর্ব পর্বমধ্য পরীক্ষা-২০২৩ এর আসনবিন্যাস</span><br></p>',
                'image' => 'notices_image/26788.pdf',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => '1',
                'date' => '2023-05-18',
                'title' => 'Regarding the organization of "Bangabandhu Sheikh Mujibur Rahman National Skill Competition-2023".',
                'title_bn' => '"বঙ্গবন্ধু শেখ মুজিবুর রহমান জাতীয় দক্ষতা প্রতিযোগিতা-২০২৩" আয়োজন প্রসঙ্গে',
                'details' => '<p>Regarding the organization of "Bangabandhu Sheikh Mujibur Rahman National Skill Competition-2023".<br></p>',
                'details_bn' => '<p><span style="cursor: pointer;">"বঙ্গবন্ধু শেখ মুজিবুর রহমান জাতীয় দক্ষতা প্রতিযোগিতা-২০২৩" আয়োজন প্রসঙ্গে</span><br></p>',
                'image' => 'notices_image/97237.pdf',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'type' => '1',
                'date' => '2024-07-31',
                'title' => 'Annual Purchase Plan 2023-2024',
                'title_bn' => 'বার্ষিক ক্রয় পরিকল্পনা ২০২৩-২০২৪',
                'details' => '<p><span style="font-size: 14.4px;">Annual Purchase Plan 2023-2024</span><br></p>',
                'details_bn' => '<p><span style="cursor: pointer;">বার্ষিক ক্রয় পরিকল্পনা ২০২৩-২০২৪</span><br></p>',
                'image' => 'notices_image/40899.pdf',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'type' => '1',
                'date' => '2023-08-01',
                'title' => 'Regarding the approval of the Annual Procurement Plan for the purchase of goods for the financial year 2022-2023',
                'title_bn' => '২০২২-২০২৩ অর্থ বৎসরের মালামাল ক্রয়ের Annual Procurement Plan অনুমোদন প্রসঙ্গে',
                'details' => '<p><span style="font-size: 14.4px;">Regarding the approval of the Annual Procurement Plan for the purchase of goods for the financial year 2022-2023</span><br></p>',
                'details_bn' => '<p><span style="cursor: pointer;">২০২২-২০২৩ অর্থ বৎসরের মালামাল ক্রয়ের Annual Procurement Plan অনুমোদন প্রসঙ্গে</span><br></p>',
                'image' => 'notices_image/33087.pdf',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'type' => '1',
                'date' => '2023-08-14',
                'title' => 'Dengue Fever Alert',
                'title_bn' => 'ডেঙ্গু জ্বর সতর্কতা',
                'details' => '<p><span style="font-size: 14.4px;">Dengue Fever Alert</span><br></p>',
                'details_bn' => '<p><span style="cursor: pointer;">ডেঙ্গু জ্বর সতর্কতা</span><br></p>',
                'image' => 'notices_image/94021.jpeg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'type' => '1',
                'date' => '2023-10-04',
                'title' => 'E-tender notice',
                'title_bn' => 'ই-টেন্ডার বিজ্ঞপ্তি',
                'details' => '<p><span style="cursor: pointer;">E-tender Notice</span><br></p>',
                'details_bn' => '<p>ই-টেন্ডার বিজ্ঞপ্তি<br></p>',
                'image' => 'notices_image/59775.jpeg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'type' => '1',
                'date' => '2023-11-09',
                'title' => 'Bank account opening notification for 8th phase students',
                'title_bn' => '৮ম পর্বের শিক্ষার্থীদের ব্যাংক একাউন্ট খোলার বিজ্ঞপ্তি',
                'details' => '<p><span style="font-size: 14.4px;">Bank account opening notification for 8th phase students</span><br></p>',
                'details_bn' => '<p><span style="cursor: pointer;">৮ম পর্বের শিক্ষার্থীদের ব্যাংক একাউন্ট খোলার বিজ্ঞপ্তি</span><br></p>',
                'image' => 'notices_image/63568.pdf',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'type' => '1',
                'date' => '2023-11-21',
                'title' => 'Notice of emergency meeting',
                'title_bn' => 'জরুরি সভার নোটশ',
                'details' => '<p><span style="font-size: 14.4px;">Notice of emergency meeting</span><br></p>',
                'details_bn' => '<p><span style="cursor: pointer;">জরুরি সভার নোটশ</span><br></p>',
                'image' => 'notices_image/97479.pdf',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}