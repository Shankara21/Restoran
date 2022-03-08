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
                'description' => 'Nasi Goreng Jawa',
                'price' => 20000,
                'category' => 3,
                'image' => 'nasi_goreng.jpg',
            ],
            [
                'name' => 'Mie Goreng',
                'description' => 'Mie Goreng Jawa',
                'price' => 20000,
                'category' => 3,
                'image' => 'mie_goreng.jpg',
            ],
            [
                'name' => 'Bakso',
                'description' => 'Bakso',
                'price' => 20000,
                'category' => 3,
                'image' => 'bakso.jpg',
            ],
            [
                'name' => 'Ayam Goreng',
                'description' => 'Ayam Goreng ',
                'price' => 20000,
                'category' => 3,
                'image' => 'ayam_goreng.jpg',
            ],
            [
                'name' => 'Siomay',
                'description' => 'Siomay ',
                'price' => 20000,
                'category' => 3,
                'image' => 'siomay.jpg',
            ],
            [
                'name' => 'Gudeg',
                'description' => 'Gudeg ',
                'price' => 20000,
                'category' => 3,
                'image' => 'gudeg.jpg',
            ],
            [
                'name' => 'Pecel',
                'description' => 'Pecel ',
                'price' => 20000,
                'category' => 3,
                'image' => 'pecel.jpg',
            ],
            [
                'name' => 'Sate Ayam',
                'description' => 'Sate Ayam ',
                'price' => 20000,
                'category' => 3,
                'image' => 'sate_ayam.jpg',
            ],
            [
                'name' => 'Dawet',
                'description' => 'Dawet ',
                'price' => 20000,
                'category' => 1,
                'image' => 'dawet.jpg',
            ],
            [
                'name' => 'Cendol',
                'description' => 'Cendol ',
                'price' => 20000,
                'category' => 1,
                'image' => 'cendol.jpg',
            ],
            [
                'name' => 'Bubur Kacang Ijo',
                'description' => 'Bubur Kacang Ijo ',
                'price' => 20000,
                'category' => 1,
                'image' => 'burjo.jpg',
            ],
            [
                'name' => 'Es Doger',
                'description' => 'Es Doger ',
                'price' => 20000,
                'category' => 1,
                'image' => 'doger.jpg',
            ],
            [
                'name' => 'Bir Pletok',
                'description' => 'Bir Pletok ',
                'price' => 20000,
                'category' => 1,
                'image' => 'bir_pletok.jpg',
            ],
            [
                'name' => 'Wedang Bandrek',
                'description' => 'Wedang Bandrek ',
                'price' => 20000,
                'category' => 1,
                'image' => 'bandrek.jpg',
            ],
            [
                'name' => 'Es Campur',
                'description' => 'Es Campur ',
                'price' => 20000,
                'category' => 1,
                'image' => 'es_campur.jpg',
            ],
            [
                'name' => 'Es Degan',
                'description' => 'Es Degan ',
                'price' => 20000,
                'category' => 1,
                'image' => 'es_degan.jpg',
            ],
            [
                'name' => 'Dadar Gulung',
                'description' => 'Dadar Gulung ',
                'price' => 20000,
                'category' => 2,
                'image' => 'dadar_gulung.jpg',
            ],
            [
                'name' => 'Lumpia',
                'description' => 'Lumpia ',
                'price' => 20000,
                'category' => 2,
                'image' => 'lumpia.jpg',
            ],
            [
                'name' => 'Lemper',
                'description' => 'Lemper ',
                'price' => 20000,
                'category' => 2,
                'image' => 'lemper.jpg',
            ],
            [
                'name' => 'Risoles',
                'description' => 'Risoles ',
                'price' => 20000,
                'category' => 2,
                'image' => 'risoles.jpg',
            ],
            [
                'name' => 'Kue Putu',
                'description' => 'Kue Putu ',
                'price' => 20000,
                'category' => 2,
                'image' => 'putu.jpg',
            ],
            [
                'name' => 'Pukis',
                'description' => 'Pukis ',
                'price' => 20000,
                'category' => 2,
                'image' => 'pukis.jpg',
            ],
            [
                'name' => 'Pastel',
                'description' => 'Pastel ',
                'price' => 20000,
                'category' => 2,
                'image' => 'pastel.jpg',
            ],
            [
                'name' => 'Onde-onde',
                'description' => 'Onde-onde ',
                'price' => 20000,
                'category' => 2,
                'image' => 'onde-onde.jpg',
            ],
        ]);
    }
}
