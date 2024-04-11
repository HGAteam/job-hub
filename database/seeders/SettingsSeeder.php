<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('settings')->insert([
            0 => array ('id' => 1,'key' => 'title', 'value' => 'Website Name'),
            1 => array ('id' => 2,'key' => 'description','value' => 'Description of the website best suited to your objective'),
            2 => array ('id' => 3,'key' => 'keywords','value' => 'Text separated by commas to be found by search engines'),
            3 => array ('id' => 4,'key' => 'under_maintenance','value' => false),
            4 => array ('id' => 5,'key' => 'blog_active','value' => false),
            5 => array ('id' => 6,'key' => 'logo_light','value' => 'multimedia/logos/logo_default.svg'),
            6 => array ('id' => 7,'key' => 'logo_dark','value' => 'multimedia/logos/logo_dark.svg'),
            7 => array ('id' => 8,'key' => 'favicon','value' => 'multimedia/logos/default.ico'),
            8 => array ('id' => 9,'key' => 'apple_touch_icon','value' => 'multimedia/logos/apple-touch-icon.png'),
            9 => array ('id' =>10,'key' => 'email','value' => 'your_email@domain.com'),
           10 => array ('id' =>11,'key' => 'phone1','value' => '+123 4567 890'),
           11 => array ('id' =>12,'key' => 'phone2','value' => '+098 7654 321'),
           12 => array ('id' =>13,'key' => 'address','value' => '123 Street Name, Los Angeles, CA'),
           13 => array ('id' =>14,'key' => 'facebook','value' => 'https://www.facebook.com'),
           14 => array ('id' =>15,'key' => 'twitter','value' => 'https://www.twitter.com'),
           15 => array ('id' =>16,'key' => 'linkedin','value' => 'https://www.linkedin.com'),
           16 => array ('id' =>17,'key' => 'instagram','value' => 'https://www.instagram.com'),
        ]);
    }
}
