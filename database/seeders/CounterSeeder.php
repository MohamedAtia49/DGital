<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counters = [];
        $counters[1] = ['name' => 'Years Experience' , 'count' => 10 , 'icon' => 'fa fa-certificate'];
        $counters[2] = ['name' => 'Team Members' , 'count' => 20 , 'icon' => 'fa fa-users-cog'];
        $counters[3] = ['name' => 'Satisfied Clients' , 'count' => 200 , 'icon' => 'fa fa-users'];
        $counters[4] = ['name' => 'Compleate Projects' , 'count' => 400 , 'icon' => 'fa fa-check'];

        foreach ($counters as $key => $value){
            Counter::create([
                'name' => $value['name'],
                'count' => $value['count'],
                'icon' => $value['icon'],
            ]);
        }
    }
}
