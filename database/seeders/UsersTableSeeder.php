<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "HMJ Teknik Komputer";
        $user->username = "hmjtekom";
        $user->kode = "09";
        $user->level = "1";
        $user->asal = "HMJ Teknik Komputer";
        $user->pekerjaan = "Ketua HMJ Teknik Komputer";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('admin1234'); 
        $user->save();
    }
}
