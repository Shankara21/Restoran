<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'name' => 'Nasi Goreng',
                'description' => 'Nasi Goreng Jawa dengan suwiran ayam dan telur',
                'price' => 20000,
                'category' => 3,
                'image' => 'nasi_goreng.jpg',
            ],
            [
                'name' => 'Mie Goreng',
                'description' => 'Mie Goreng Jawa dengan suwiran ayam dan telur',
                'price' => 15000,
                'category' => 3,
                'image' => 'mie_goreng.jpg',
            ],
            [
                'name' => 'Bakso',
                'description' => 'Bakso komplit',
                'price' => 17500,
                'category' => 3,
                'image' => 'bakso.jpg',
            ],
            [
                'name' => 'Ayam Goreng',
                'description' => 'Ayam Goreng lalapan dengan sambal khas',
                'price' => 25000,
                'category' => 3,
                'image' => 'ayam_goreng.jpg',
            ],
            [
                'name' => 'Siomay',
                'description' => 'Siomay Bandung',
                'price' => 15000,
                'category' => 3,
                'image' => 'siomay.jpg',
            ],
            [
                'name' => 'Gudeg',
                'description' => 'Gudeg dengan cita rasa khas Yogyakarta',
                'price' => 22000,
                'category' => 3,
                'image' => 'gudeg.jpg',
            ],
            [
                'name' => 'Pecel',
                'description' => 'Pecel pincuk dengan sayuran',
                'price' => 12500,
                'category' => 3,
                'image' => 'pecel.jpg',
            ],
            [
                'name' => 'Sate Ayam',
                'description' => 'Sate Ayam dengan saus kacang',
                'price' => 16500,
                'category' => 3,
                'image' => 'sate_ayam.jpg',
            ],
            [
                'name' => 'Dawet',
                'description' => 'Dawet sangat cocok diminum ketika cuaca panas',
                'price' => 9000,
                'category' => 1,
                'image' => 'dawet.jpg',
            ],
            [
                'name' => 'Cendol',
                'description' => 'Cendol sangat cocok diminum ketika cuaca panas',
                'price' => 7500,
                'category' => 1,
                'image' => 'cendol.jpg',
            ],
            [
                'name' => 'Bubur Kacang Ijo',
                'description' => 'Bubur Kacang Ijo ',
                'price' => 10000,
                'category' => 1,
                'image' => 'burjo.jpg',
            ],
            [
                'name' => 'Es Doger',
                'description' => 'Es Doger dengan topping komplit',
                'price' => 8000,
                'category' => 1,
                'image' => 'doger.jpg',
            ],
            [
                'name' => 'Bir Pletok',
                'description' => 'Bir Pletok minuman khas zaman dahulu',
                'price' => 11000,
                'category' => 1,
                'image' => 'bir_pletok.jpg',
            ],
            [
                'name' => 'Wedang Bandrek',
                'description' => 'Wedang Bandrek minuman khas zaman dahulu',
                'price' => 6000,
                'category' => 1,
                'image' => 'bandrek.jpg',
            ],
            [
                'name' => 'Es Campur',
                'description' => 'Es Campur dengan campuran segala macam buah-buahan segar',
                'price' => 12500,
                'category' => 1,
                'image' => 'es_campur.jpg',
            ],
            [
                'name' => 'Es Degan',
                'description' => 'Es Degan diambil dari degan segar',
                'price' => 10000,
                'category' => 1,
                'image' => 'es_degan.jpg',
            ],
            [
                'name' => 'Dadar Gulung',
                'description' => 'Dadar Gulung jajanan khas Bandung',
                'price' => 5000,
                'category' => 2,
                'image' => 'dadar_gulung.jpg',
            ],
            [
                'name' => 'Lumpia',
                'description' => 'Lumpia jajanan khas Semarang',
                'price' => 7500,
                'category' => 2,
                'image' => 'lumpia.jpg',
            ],
            [
                'name' => 'Lemper',
                'description' => 'Lemper jajanan khas Yogyakarta',
                'price' => 3000,
                'category' => 2,
                'image' => 'lemper.jpg',
            ],
            [
                'name' => 'Risoles',
                'description' => 'Risoles jajanan yang cocok untuk makanan penutup',
                'price' => 5500,
                'category' => 2,
                'image' => 'risoles.jpg',
            ],
            [
                'name' => 'Kue Putu',
                'description' => 'Kue Putu jajanan khas Jawa Timur',
                'price' => 7500,
                'category' => 2,
                'image' => 'putu.jpg',
            ],
            [
                'name' => 'Pukis',
                'description' => 'Pukis jajanan yang memiliki cita rasa manis',
                'price' => 8000,
                'category' => 2,
                'image' => 'pukis.jpg',
            ],
            [
                'name' => 'Pastel',
                'description' => 'Pastel jajanan yang memiliki cita rasa gurih',
                'price' => 4000,
                'category' => 2,
                'image' => 'pastel.jpg',
            ],
            [
                'name' => 'Onde-onde',
                'description' => 'Onde-onde makanan yang memiliki cita rasa manis',
                'price' => 5000,
                'category' => 2,
                'image' => 'onde-onde.jpg',
            ],
        ]);
    }
}
