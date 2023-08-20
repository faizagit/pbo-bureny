<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusans')->delete();

        $jurusans = [
            ['id' => 1, 'nm_jurusan' => 'RPL'],
            ['id' => 2, 'nm_jurusan' => 'MM'],
            ['id' => 3, 'nm_jurusan' => 'AKL'],
            ['id' => 4, 'nm_jurusan' => 'PSPT'],
            ['id' => 5, 'nm_jurusan' => 'DKV'],
        ];

        foreach($jurusans as $jurusan){
            Jurusan::create($jurusan);
        }

    }
}
