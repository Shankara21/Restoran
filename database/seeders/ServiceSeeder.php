<?php

namespace Database\Seeders;

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
                'name' => 'Mater Chef',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente totam delectus accusamus eum facilis mollitia dolore odit fugiat voluptatum aut, ducimus reiciendis! Soluta necessitatibus culpa minus. Nostrum a quod cum.'
            ],
            [
                'name' => 'Quality Food',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente totam delectus accusamus eum facilis mollitia dolore odit fugiat voluptatum aut, ducimus reiciendis! Soluta necessitatibus culpa minus. Nostrum a quod cum.'
            ],
            [
                'name' => 'Online Order',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente totam delectus accusamus eum facilis mollitia dolore odit fugiat voluptatum aut, ducimus reiciendis! Soluta necessitatibus culpa minus. Nostrum a quod cum.'
            ],
            [
                'name' => '24/7 Service',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente totam delectus accusamus eum facilis mollitia dolore odit fugiat voluptatum aut, ducimus reiciendis! Soluta necessitatibus culpa minus. Nostrum a quod cum.'
            ]
        ]
        );
    }
}
