<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            SettingSeeder::class,
            SkillSeeder::class,
            SubscriberSeeder::class,
            CounterSeeder::class,
            ServiceSeeder::class,
            MessageSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
