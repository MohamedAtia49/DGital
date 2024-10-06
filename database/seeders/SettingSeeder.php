<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $settings = [];
        // $settings[0] = ['key'=>'email' , 'value' => 'test@test.com' , 'type' => 'text'];
        // $settings[1] = ['key'=>'name' , 'value' => 'DGital' , 'type' => 'text'];
        // $settings[2] = ['key'=>'number' , 'value' => '01020659763' , 'type' => 'number'];
        // $settings[3] = ['key'=>'address' , 'value' => 'Mansoura , Egypt' , 'type' => 'text'];

        // foreach ($settings as $setting)
        // {
        //     Setting::updateOrCreate($setting);
        // }

        Setting::updateOrCreate(['email' => 'test@test.com'],
            [
                'name' => 'DGital',
                'phone' => '0120659763',
                'address' => 'Mansoura , Egypt',
            ]
        );
    }
}
