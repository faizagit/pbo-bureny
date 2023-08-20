<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ekstrakurikulers')->delete();

        $ekstrakurikulers = [
            ['id' => 1, 'nm_ekskul' => 'Futsal', 'deskripsi' => 'Futsal', 'gambar' => 'Futsal.jpg'],
            ['id' => 2, 'nm_ekskul' => 'Basket', 'deskripsi' => 'Basket', 'gambar' => 'Basket.jpg'],
            ['id' => 3, 'nm_ekskul' => 'Voli', 'deskripsi' => 'Voli', 'gambar' => 'Voli.jpg'],
        ];

        foreach($ekstrakurikulers as $ekskul){
            Ekstrakurikuler::create($ekskul);
        }
    }
}
