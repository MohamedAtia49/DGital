<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [];
        $messages[1] = ['name' => 'Mohamed Atia' , 'email' => 'test@test.com' , 'subject' => 'Fix error' , 'message' => 'I have error issue in website'];
        $messages[2] = ['name' => 'Mahmoud Atwa' , 'email' => 'test2@test.com' , 'subject' => 'Fix error' , 'message' => 'I have error issue in website'];
        $messages[3] = ['name' => 'Maher Zidan' , 'email' => 'test3@test.com' , 'subject' => 'Fix error' , 'message' => 'I have error issue in website'];
        $messages[4] = ['name' => 'Ahmed Zoz' , 'email' => 'test4@test.com' , 'subject' => 'Fix error' , 'message' => 'I have error issue in website'];

        foreach ($messages as $message => $value){
            Message::create([
                'name' => $value['name'],
                'email' => $value['email'],
                'subject' => $value['subject'],
                'message' => $value['message'],
            ]);
        }
    }
}
