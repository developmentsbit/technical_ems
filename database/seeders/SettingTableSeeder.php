<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting')->delete();
        
        \DB::table('setting')->insert(array (
            0 => 
            array (
                'id' => 3,
                'type' => 'college',
                'image' => 'setting_image/4265.jpg',
                'name' => 'Sylhet Polytechnic Institute',
                'name_bangla' => 'সিলেট পলিটেকনিক ইনস্টিটিউট',
                'email' => 'info@sbit.com.bd',
                'phone' => '+8801811358602',
                'established' => '1964',
                'established_bangla' => '১৯৬৪',
                'meta' => 'a',
                'meta_title' => 'a',
                'description' => 'a',
            'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7238.807857137757!2d91.858053!3d24.8842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751aacf1e88faff%3A0x236b26b78903a732!2sSylhet%20Polytechnic%20Institute%20(SPI)!5e0!3m2!1sen!2sbd!4v1705832635508!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
                'page' => 'https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsylhetpoly%2F%3Fref%3Dembed_page&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2271894802973425',
                'youtube' => 'https://www.youtube.com/embed/-h8ZHRd_dpM?si=mmt1caR3n9xpfkYM',
                'address' => 'Technical Road, Sylhet-3100',
                'address_bangla' => 'টেকনিক্যাল রোড, সিলেট-৩১০০',
                'scrolling_text' => 'ডেঙ্গু প্রতিরোধে বাড়ির চারপাশ ও জমে থাকা পানি নিয়মিত পরিষ্কার করুন, শরীরের বেশিরভাগ অংশ ঢেকে রাখতে ফুলহাতা কাপড় পরিধান করুন, গর্ভবতী মা ও শিশুদের রক্ষা করতে দিনে এবং রাতে সবসময় মশারি ব্যবহার করুন, জ্বর হলেই দ্রুত ডাক্তারের পরমর্শ নিন, প্রচুর পরিমানে পানি ও তরল খাবার খান। জরুরী পরামর্শের জন্য ১৬২৬৩ নম্বরে কল করুন।',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}