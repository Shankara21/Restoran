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
                'name' => 'Gordon Ramsay',
                'position' => 'Head Chef'
            ],
            [
                'name' => 'Thomas Keller',
                'position' => 'Sous Chef'
            ],
            [
                'name' => 'Alain Ducasse',
                'position' => 'Station Chef'
            ],
            [
                'name' => 'Martin Berasategui',
                'position' => 'Saute Chef'
            ],
            [
                'name' => 'Andreas Caminada',
                'position' => 'Butcher'
            ],
            [
                'name' => 'Emeril Lagasse',
                'position' => 'Chef'
            ],
            [
                'name' => 'Wolfgang Puck',
                'position' => 'Chef'
            ],
            [
                'name' => 'Anthony Bordain',
                'position' => 'Chef'
            ],
        ]
        );
    }
}
