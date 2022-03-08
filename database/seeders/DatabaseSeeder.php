<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Service::factory(8)->create();
        Testimoni::factory(8)->create();

        $this->call(ChefSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
