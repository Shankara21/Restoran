<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Master Chefs',
                'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
                'image' => 'fa fa-3x fa-user-tie text-primary mb-4',
            ],
            [
                'name' => 'Quality Food',
                'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
                'image' => 'fa fa-3x fa-utensils text-primary mb-4',
            ],
            [
                'name' => 'Online Order',
                'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
                'image' => 'fa fa-3x fa-cart-plus text-primary mb-4',
            ],
            [
                'name' => '24/7 Service',
                'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
                'image' => 'fa fa-3x fa-headset text-primary mb-4',
            ],
            [
                'name' => 'Master Chefs',
                'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
                'image' => 'fa fa-3x fa-user-tie text-primary mb-4',
            ],
            [
                'name' => 'Quality Food',
                'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
                'image' => 'fa fa-3x fa-utensils text-primary mb-4',
            ],
            [
                'name' => 'Online Order',
                'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
                'image' => 'fa fa-3x fa-cart-plus text-primary mb-4',
            ],
            [
                'name' => '24/7 Service',
                'description' => 'Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam',
                'image' => 'fa fa-3x fa-headset text-primary mb-4',
            ],


        ]);
    }
}
