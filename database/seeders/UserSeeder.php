<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            ['id' => 1, 'nama' => 'Admin', 'kelas' => '10', 'jurusan_id' => 1, 'ekskul1' => 1,'ekskul2' => 2, 'ekskul3' => 3, 'username' => 'Admin123', 'password' => bcrypt('Admin123'), 'role' => 'admin'],
            ['id' => 2, 'nama' => 'User', 'kelas' => '10', 'jurusan_id' => 1, 'ekskul1' => 1,'ekskul2' => 2, 'ekskul3' => 3, 'username' => 'User123', 'password' => bcrypt('User123'), 'role' => 'user'],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
