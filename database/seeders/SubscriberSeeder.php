<?php

namespace Database\Seeders;

use App\Models\Subscriber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $emails = ['test@test.com','test2@test.com','test3@test.com','test4@test.com','test5@test.com'];
        foreach ($emails as $email){
            Subscriber::create(['email' => $email]);
        }
    }
}
