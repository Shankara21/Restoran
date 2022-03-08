<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chefs')->insert([
            [
                'name' => 'Malcolm Keebler',
                'position' => 'Executive Chef',
                'image' => 'chef1.jpg',
            ],
            [
                'name' => 'Grill Chef',
                'position' => 'Butcher',
                'image' => 'chef2.jpg',
            ],
            [
                'name' => 'Davion Schmidt ',
                'position' => 'Sous Chef',
                'image' => 'chef3.jpg',
            ],
            [
                'name' => 'Fabian Wiegand',
                'position' => 'Station Chef',
                'image' => 'chef4.jpg',
            ],
            [
                'name' => 'Larue Krajcik',
                'position' => 'Saute Chef',
                'image' => 'chef5.jpg',
            ],
            [
                'name' => 'Jamal Goodwin',
                'position' => 'Fish Chef',
                'image' => 'chef6.jpg',
            ],
            [
                'name' => 'Adelle Little',
                'position' => 'Roast Chef',
                'image' => 'chef7.jpg',
            ],
            [
                'name' => 'Naomi Roob',
                'position' => 'Grill Chef',
                'image' => 'chef8.jpg',
            ],
        ]);
    }
}
