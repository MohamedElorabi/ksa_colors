<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = \App\Models\GenralSetting::create([
            'name_site' => 'المصنع السعودى للالوان والمحسنات الغذائية',
            'address' => 'جدة',
            'phone_1' => '011652626262',
            'phone_2' => '015052662626',
            'phone_3' => '015151516121',
            'phone_4' => '0106269592599',
            'whats_num' => '01162659595',
            'logo' => '304150_0.jpg',
            'face_url' => 'facebook',
            'twitter_url' => 'twitter',
            'snap_url' => 'snapchat',
            'logo_bottom' => '304150_0.jpg',
        ]);
    }
}
