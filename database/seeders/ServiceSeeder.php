<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $services = [
        //     [1] => [
        //             'name' => 'SEO Optimization' ,
        //             'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
        //             'icon' => 'fa fa-search'
        //             ],
        //     [2] => [
        //             'name' => 'Web Design' ,
        //             'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
        //             'icon' => 'fa fa-laptop-code'
        //             ],
        //     [3] => [
        //             'name' => 'Social Media Marketing' ,
        //             'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
        //             'icon' => 'fab fa-facebook-f'
        //             ],
        //     [4] => [
        //             'name' => 'Email Marketing' ,
        //             'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
        //             'icon' => 'fa fa-mail-bulk'
        //             ],
        //     [5] => [
        //             'name' => 'PPC Advertising' ,
        //             'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
        //             'icon' => 'fa fa-thumbs-up'
        //             ],
        //     [6] => [
        //             'name' => 'App Development' ,
        //             'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
        //             'icon' => 'fab fa-android'
        //             ],
        // ];

        $services = [];
        $services[1] = [
            'name' => 'SEO Optimization' ,
            'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
            'icon' => 'fa fa-search'
        ];
        $services[2] = [
            'name' => 'Web Design' ,
            'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
            'icon' => 'fa fa-laptop-code'
        ];
        $services[3] = [
            'name' => 'Email Marketing' ,
            'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
            'icon' => 'fa fa-mail-bulk'
        ];
        $services[4] = [
            'name' => 'Social Media Marketing' ,
            'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
            'icon' => 'fab fa-facebook-f'
        ];
        $services[5] = [
            'name' => 'PPC Advertising' ,
            'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
            'icon' => 'fa fa-thumbs-up'
        ];
        $services[6] = [
            'name' => 'App Development' ,
            'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
            'icon' => 'fab fa-android'
        ];

        foreach ($services as $key => $value){
                Service::create([
                    'name' => $value['name'],
                    'description' => $value['description'],
                    'icon' => $value['icon'],
                ]);
        }

    }
}
