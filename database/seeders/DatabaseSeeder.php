<?php

namespace Database\Seeders;

use App\Models\KategoriPaketWisata;
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
        \App\Models\User::factory(10)->create();

        \DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('asdasd'),
            'role' => 0,
            'remember_token' => 'admin'
        ]);

        KategoriPaketWisata::factory()->count(2)->hasPaketWisata(20)->create();
    }
}
