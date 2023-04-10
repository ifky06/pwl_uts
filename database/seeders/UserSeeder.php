<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'rifki06',
                'name' => 'Ahmad Rifki Fauzi',
                'email' => 'ahmadrifki3403@gmail.com',
                'password' => Hash::make('1234'),
            ],
            [
                'username' => 'mahardhika',
                'name' => 'Mahardhika Bredy',
                'email' => 'bredymahardhika@gmail.com',
                'password' => Hash::make("1234"),
            ],
        ]);
    }
}
