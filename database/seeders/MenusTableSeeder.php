<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'bn_name' => 'ড্যাশবোর্ড',
                'created_at' => '2023-03-19 14:04:30',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => 'uil-home-alt',
                'id' => 1,
                'is_hidden' => 'No',
                'name' => 'Dashboard',
                'order_by' => 5,
                'parent_id' => NULL,
                'route_name' => 'dashboard',
                'status' => 1,
                'system_name' => 'Dashboard',
                'updated_at' => '2023-06-14 05:56:11',
                'updated_by' => 1,
            ),
            1 => 
            array (
                'bn_name' => 'ইউজার ম্যানেজমেন্ট',
                'created_at' => '2023-03-19 18:06:39',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 2,
                'is_hidden' => 'No',
                'name' => 'User Management',
                'order_by' => 7,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'User Management',
                'updated_at' => '2023-06-14 05:56:11',
                'updated_by' => 1,
            ),
            2 => 
            array (
                'bn_name' => 'ইউজার',
                'created_at' => '2023-03-19 18:08:09',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 3,
                'is_hidden' => 'No',
                'name' => 'User',
                'order_by' => 2,
                'parent_id' => 2,
                'route_name' => 'user.index',
                'status' => 1,
                'system_name' => 'User',
                'updated_at' => '2023-03-31 18:10:57',
                'updated_by' => 1,
            ),
            3 => 
            array (
                'bn_name' => 'রোল',
                'created_at' => '2023-03-19 18:17:21',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 5,
                'is_hidden' => 'No',
                'name' => 'Role',
                'order_by' => 1,
                'parent_id' => 2,
                'route_name' => 'role.index',
                'status' => 1,
                'system_name' => 'Role',
                'updated_at' => '2023-03-31 18:11:32',
                'updated_by' => 1,
            ),
            4 => 
            array (
                'bn_name' => 'মেন্যু ম্যানেজমেন্ট',
                'created_at' => '2023-04-03 10:38:48',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 25,
                'is_hidden' => 'No',
                'name' => 'Menu Management',
                'order_by' => 1,
                'parent_id' => NULL,
                'route_name' => '',
                'status' => 1,
                'system_name' => 'Menu Management',
                'updated_at' => '2023-04-03 10:38:48',
                'updated_by' => 1,
            ),
            5 => 
            array (
                'bn_name' => 'মেন্যু',
                'created_at' => '2023-04-03 10:39:32',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 26,
                'is_hidden' => 'No',
                'name' => 'Menu',
                'order_by' => 1,
                'parent_id' => 25,
                'route_name' => 'menu.index',
                'status' => 1,
                'system_name' => 'Menu',
                'updated_at' => '2023-04-03 10:39:32',
                'updated_by' => 1,
            ),
            6 => 
            array (
                'bn_name' => 'প্রতিষ্ঠান সম্পর্কে',
                'created_at' => '2023-06-11 13:35:23',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 27,
                'is_hidden' => 'No',
                'name' => 'About Institute',
                'order_by' => 12,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'About Institute',
                'updated_at' => '2023-06-14 05:56:11',
                'updated_by' => 1,
            ),
            7 => 
            array (
                'bn_name' => 'পেইজ',
                'created_at' => '2023-06-11 13:35:49',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 28,
                'is_hidden' => 'No',
                'name' => 'Pages',
                'order_by' => 1,
                'parent_id' => 27,
                'route_name' => 'pages.index',
                'status' => 1,
                'system_name' => 'Pages',
                'updated_at' => '2023-06-11 13:36:35',
                'updated_by' => 1,
            ),
            8 => 
            array (
                'bn_name' => 'প্রশাসনিক তথ্য',
                'created_at' => '2023-06-11 13:37:43',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 29,
                'is_hidden' => 'No',
                'name' => 'Administrator Info.',
                'order_by' => 18,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Administrator Info.',
                'updated_at' => '2023-09-14 11:41:31',
                'updated_by' => 1,
            ),
            9 => 
            array (
                'bn_name' => 'অধ্যক্ষ/সভাপতি/প্রধান শিক্ষক',
                'created_at' => '2023-06-11 13:38:49',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 30,
                'is_hidden' => 'No',
                'name' => 'Principal/President/Head Teacher',
                'order_by' => 1,
                'parent_id' => 29,
                'route_name' => 'principle.index',
                'status' => 1,
                'system_name' => 'Principle',
                'updated_at' => '2023-09-14 09:58:29',
                'updated_by' => 1,
            ),
            10 => 
            array (
                'bn_name' => 'গ্যালারি',
                'created_at' => '2023-06-11 13:54:20',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 31,
                'is_hidden' => 'No',
                'name' => 'Gallery',
                'order_by' => 34,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Gallery',
                'updated_at' => '2023-09-23 09:50:25',
                'updated_by' => 1,
            ),
            11 => 
            array (
                'bn_name' => 'ফটো গ্যালারি',
                'created_at' => '2023-06-11 13:54:53',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 32,
                'is_hidden' => 'No',
                'name' => 'Photo Gallary',
                'order_by' => 4,
                'parent_id' => 78,
                'route_name' => 'photogallerys.index',
                'status' => 1,
                'system_name' => 'Photo Gallary',
                'updated_at' => '2023-06-11 13:54:53',
                'updated_by' => 1,
            ),
            12 => 
            array (
                'bn_name' => 'ভিডিও গ্যালারি',
                'created_at' => '2023-06-11 13:55:31',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 33,
                'is_hidden' => 'No',
                'name' => 'Video Gallary',
                'order_by' => 3,
                'parent_id' => 78,
                'route_name' => 'videogallerys.index',
                'status' => 1,
                'system_name' => 'Video Gallary',
                'updated_at' => '2023-06-11 13:55:31',
                'updated_by' => 1,
            ),
            13 => 
            array (
                'bn_name' => 'লিংক',
                'created_at' => '2023-06-11 14:09:21',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 36,
                'is_hidden' => 'No',
                'name' => 'Useful Link',
                'order_by' => 31,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Useful Link',
                'updated_at' => '2023-09-23 09:50:25',
                'updated_by' => 1,
            ),
            14 => 
            array (
                'bn_name' => 'লিংক',
                'created_at' => '2023-06-11 14:09:57',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 37,
                'is_hidden' => 'No',
                'name' => 'Link',
                'order_by' => 2,
                'parent_id' => 78,
                'route_name' => 'usefullink.index',
                'status' => 1,
                'system_name' => 'Link',
                'updated_at' => '2023-06-11 14:09:57',
                'updated_by' => 1,
            ),
            15 => 
            array (
                'bn_name' => 'সদস্য যোগ করুন',
                'created_at' => '2023-06-11 14:28:27',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 38,
                'is_hidden' => 'No',
                'name' => 'Add Members',
                'order_by' => 3,
                'parent_id' => 29,
                'route_name' => 'members.index',
                'status' => 1,
                'system_name' => 'Add Members',
                'updated_at' => '2023-07-16 05:09:11',
                'updated_by' => 1,
            ),
            16 => 
            array (
                'bn_name' => 'একাডেমিক তথ্যসমূহ',
                'created_at' => '2023-06-13 13:34:38',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 39,
                'is_hidden' => 'No',
                'name' => 'Academic Info.',
                'order_by' => 13,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Academic Info.',
                'updated_at' => '2023-06-14 05:56:11',
                'updated_by' => 1,
            ),
            17 => 
            array (
                'bn_name' => 'শিক্ষা বর্ষপঞ্জি',
                'created_at' => '2023-06-13 13:35:34',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 40,
                'is_hidden' => 'No',
                'name' => 'Academic Calender',
                'order_by' => 1,
                'parent_id' => 27,
                'route_name' => 'academiccalender.index',
                'status' => 1,
                'system_name' => 'Academic Calender',
                'updated_at' => '2023-06-13 13:35:34',
                'updated_by' => 1,
            ),
            18 => 
            array (
                'bn_name' => 'ক্লাস রুটিন',
                'created_at' => '2023-06-13 13:36:26',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 41,
                'is_hidden' => 'No',
                'name' => 'Class Routine',
                'order_by' => 2,
                'parent_id' => 27,
                'route_name' => 'classroutine.index',
                'status' => 1,
                'system_name' => 'Class Routine',
                'updated_at' => '2023-06-13 13:36:26',
                'updated_by' => 1,
            ),
            19 => 
            array (
                'bn_name' => 'ছুটির দিন',
                'created_at' => '2023-06-13 13:38:27',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 42,
                'is_hidden' => 'No',
                'name' => 'Holiday List',
                'order_by' => 3,
                'parent_id' => 27,
                'route_name' => 'holidaylist.index',
                'status' => 1,
                'system_name' => 'Holiday List',
                'updated_at' => '2023-06-13 13:38:27',
                'updated_by' => 1,
            ),
            20 => 
            array (
                'bn_name' => 'ভর্তি সংক্রান্ত তথ্য',
                'created_at' => '2023-06-13 14:24:49',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 50,
                'is_hidden' => 'No',
                'name' => 'Admission Info.',
                'order_by' => 5,
                'parent_id' => 29,
                'route_name' => 'admissioninfo.index',
                'status' => 1,
                'system_name' => 'Admission Info.',
                'updated_at' => '2023-06-13 14:24:49',
                'updated_by' => 1,
            ),
            21 => 
            array (
                'bn_name' => 'শ্রেণী সম্পর্কিত তথ্য',
                'created_at' => '2023-06-14 05:54:43',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 51,
                'is_hidden' => 'No',
                'name' => 'Class Info.',
                'order_by' => 20,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Class Info.',
                'updated_at' => '2023-09-14 11:41:31',
                'updated_by' => 1,
            ),
            22 => 
            array (
                'bn_name' => 'শ্রেণী যোগ করুন',
                'created_at' => '2023-06-14 05:55:09',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 52,
                'is_hidden' => 'No',
                'name' => 'Add Class',
                'order_by' => 1,
                'parent_id' => 51,
                'route_name' => 'addclass.index',
                'status' => 1,
                'system_name' => 'Add Class',
                'updated_at' => '2023-06-14 05:55:09',
                'updated_by' => 1,
            ),
            23 => 
            array (
                'bn_name' => 'গ্রুপ যোগ করুন',
                'created_at' => '2023-06-14 05:55:42',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 53,
                'is_hidden' => 'No',
                'name' => 'Add Group',
                'order_by' => 2,
                'parent_id' => 51,
                'route_name' => 'addgroup.index',
                'status' => 1,
                'system_name' => 'Add Group',
                'updated_at' => '2023-06-14 05:55:42',
                'updated_by' => 1,
            ),
            24 => 
            array (
                'bn_name' => 'বিভাগ যোগ করুন',
                'created_at' => '2023-06-14 05:56:11',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 54,
                'is_hidden' => 'No',
                'name' => 'Add Section',
                'order_by' => 1,
                'parent_id' => 51,
                'route_name' => 'addsection.index',
                'status' => 1,
                'system_name' => 'Add Section',
                'updated_at' => '2023-06-14 06:28:09',
                'updated_by' => 1,
            ),
            25 => 
            array (
                'bn_name' => 'পরীক্ষা সংক্রান্ত তথ্য',
                'created_at' => '2023-06-15 05:53:10',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 55,
                'is_hidden' => 'No',
                'name' => 'Exam Info',
                'order_by' => 17,
                'parent_id' => NULL,
                'route_name' => 'examinfo',
                'status' => 1,
                'system_name' => 'Exam Info',
                'updated_at' => '2023-09-14 11:41:31',
                'updated_by' => 1,
            ),
            26 => 
            array (
                'bn_name' => 'পরীক্ষার রুটিন',
                'created_at' => '2023-06-15 05:54:02',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 56,
                'is_hidden' => 'No',
                'name' => 'Exam Routine',
                'order_by' => 1,
                'parent_id' => 55,
                'route_name' => 'examroutine.index',
                'status' => 1,
                'system_name' => 'Exam Routine',
                'updated_at' => '2023-06-15 05:54:02',
                'updated_by' => 1,
            ),
            27 => 
            array (
                'bn_name' => 'সিলেবাস',
                'created_at' => '2023-06-15 05:54:32',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 57,
                'is_hidden' => 'No',
                'name' => 'Syllabus',
                'order_by' => 2,
                'parent_id' => 55,
                'route_name' => 'syllabus.index',
                'status' => 1,
                'system_name' => 'Syllabus',
                'updated_at' => '2023-06-15 05:54:32',
                'updated_by' => 1,
            ),
            28 => 
            array (
                'bn_name' => 'পাঠ পরিকল্পনা',
                'created_at' => '2023-06-15 05:54:59',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 58,
                'is_hidden' => 'No',
                'name' => 'Lesson Plan',
                'order_by' => 3,
                'parent_id' => 55,
                'route_name' => 'lessonplan.index',
                'status' => 1,
                'system_name' => 'Lesson Plan',
                'updated_at' => '2023-06-15 05:54:59',
                'updated_by' => 1,
            ),
            29 => 
            array (
                'bn_name' => 'সাজেশন্স',
                'created_at' => '2023-06-15 05:55:51',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 59,
                'is_hidden' => 'No',
                'name' => 'Suggestion',
                'order_by' => 4,
                'parent_id' => 55,
                'route_name' => 'suggestion.index',
                'status' => 1,
                'system_name' => 'Suggestion',
                'updated_at' => '2023-06-15 05:55:51',
                'updated_by' => 1,
            ),
            30 => 
            array (
                'bn_name' => 'শিক্ষক - কর্মচারীদের তথ্য',
                'created_at' => '2023-06-15 06:30:54',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 60,
                'is_hidden' => 'No',
                'name' => 'Teacher & Staff info.',
                'order_by' => 23,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Teacher & Staff info.',
                'updated_at' => '2023-09-14 11:41:31',
                'updated_by' => 1,
            ),
            31 => 
            array (
                'bn_name' => 'বিভাগ যুক্ত করুন',
                'created_at' => '2023-06-15 06:31:38',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 61,
                'is_hidden' => 'No',
                'name' => 'Department',
                'order_by' => 1,
                'parent_id' => 60,
                'route_name' => 'department.index',
                'status' => 1,
                'system_name' => 'Department',
                'updated_at' => '2023-06-15 06:31:38',
                'updated_by' => 1,
            ),
            32 => 
            array (
                'bn_name' => 'শিক্ষক - কর্মচারী যুক্ত করুন',
                'created_at' => '2023-06-15 06:32:10',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 62,
                'is_hidden' => 'No',
                'name' => 'Teacher & Staff',
                'order_by' => 2,
                'parent_id' => 60,
                'route_name' => 'teacherstaff.index',
                'status' => 1,
                'system_name' => 'Teacher & Staff',
                'updated_at' => '2023-06-15 06:32:10',
                'updated_by' => 1,
            ),
            33 => 
            array (
                'bn_name' => 'সেটিংস',
                'created_at' => '2023-06-18 05:29:49',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 63,
                'is_hidden' => 'No',
                'name' => 'Website Setting',
                'order_by' => 1,
                'parent_id' => 78,
                'route_name' => 'setting.create',
                'status' => 1,
                'system_name' => 'Website Setting',
                'updated_at' => '2023-09-23 09:50:25',
                'updated_by' => 1,
            ),
            34 => 
            array (
                'bn_name' => 'অ্যাডমিশন তথ্য',
                'created_at' => '2023-06-27 09:20:02',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 64,
                'is_hidden' => 'No',
                'name' => 'Registration Info',
                'order_by' => 24,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Admission Info',
                'updated_at' => '2023-09-14 11:41:31',
                'updated_by' => 1,
            ),
            35 => 
            array (
                'bn_name' => 'অ্যাডমিশন তথ্য',
                'created_at' => '2023-06-27 09:20:55',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 65,
                'is_hidden' => 'No',
                'name' => 'View Admission Data',
                'order_by' => 1,
                'parent_id' => 64,
                'route_name' => 'admission_info.index',
                'status' => 1,
                'system_name' => 'View Admission Data',
                'updated_at' => '2023-06-27 09:20:56',
                'updated_by' => 1,
            ),
            36 => 
            array (
                'bn_name' => 'উপাধ্যক্ষ বার্তা',
                'created_at' => '2023-07-16 05:09:11',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 66,
                'is_hidden' => 'No',
                'name' => 'Vice Principal Message',
                'order_by' => 2,
                'parent_id' => 29,
                'route_name' => 'vice_principal_message.index',
                'status' => 1,
                'system_name' => 'Vice Principal Message',
                'updated_at' => '2023-07-16 05:09:12',
                'updated_by' => 1,
            ),
            37 => 
            array (
                'bn_name' => 'পাঠাদানের অনুমতি ও স্বীকৃতি',
                'created_at' => '2023-09-10 09:47:13',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 67,
                'is_hidden' => 'No',
                'name' => 'Teaching permission and recognition',
                'order_by' => 2,
                'parent_id' => 27,
                'route_name' => 'teaching_permission.index',
                'status' => 1,
                'system_name' => 'Teaching permission and recognition',
                'updated_at' => '2023-09-10 09:47:14',
                'updated_by' => 1,
            ),
            38 => 
            array (
                'bn_name' => 'এমপিও/জাতীয়করণ তথ্য',
                'created_at' => '2023-09-10 09:48:59',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 68,
                'is_hidden' => 'No',
                'name' => 'MPO/Nationalization Info',
                'order_by' => 3,
                'parent_id' => 27,
                'route_name' => 'mpo_nationalization.index',
                'status' => 1,
                'system_name' => 'MPO_Nationalization Info',
                'updated_at' => '2023-09-10 09:48:59',
                'updated_by' => 1,
            ),
            39 => 
            array (
                'bn_name' => 'প্রজেক্ট সেটিংস',
                'created_at' => '2023-09-23 09:50:25',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 78,
                'is_hidden' => 'No',
                'name' => 'Project Settings',
                'order_by' => 28,
                'parent_id' => NULL,
                'route_name' => NULL,
                'status' => 1,
                'system_name' => 'Project Settings',
                'updated_at' => '2023-09-23 09:50:25',
                'updated_by' => 1,
            ),
            40 => 
            array (
                'bn_name' => 'ব্যাকআপ',
                'created_at' => '2023-09-23 09:56:24',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 80,
                'is_hidden' => 'No',
                'name' => 'Backup',
                'order_by' => 5,
                'parent_id' => 78,
                'route_name' => 'backup.index',
                'status' => 1,
                'system_name' => 'Backup',
                'updated_at' => '2023-09-23 09:56:24',
                'updated_by' => 1,
            ),
            41 => 
            array (
                'bn_name' => 'নোটিশ',
                'created_at' => '2023-10-04 05:33:50',
                'created_by' => 1,
                'deleted_at' => NULL,
                'deleted_by' => NULL,
                'icon' => NULL,
                'id' => 81,
                'is_hidden' => 'No',
                'name' => 'Notices',
                'order_by' => 4,
                'parent_id' => 29,
                'route_name' => 'notices.index',
                'status' => 1,
                'system_name' => 'Notices',
                'updated_at' => '2023-10-04 05:33:50',
                'updated_by' => 1,
            ),
        ));
        
        
    }
}