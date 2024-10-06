<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate(['email' => 'atia@admin.com'],
        [
                'name' => 'Mohamed Atia',
                'password' => bcrypt('2480123m'),
        ],
            );
    }
}
