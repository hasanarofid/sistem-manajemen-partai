<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'Super Admin',
                'rw' => '02',
                'rt' => '05',
                'kelurahan' => 3578120002,
                'kecamatan' => 3578120,
                'kabupaten' => 3578,
                'provinsi' => 35,
                'tps' => 0,
            ],
            [
                'id' => 2,
                'name' => 'Admin TPS 1',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'Admin',
                'rw' => '02',
                'rt' => '05',
                'kelurahan' => 3578120002,
                'kecamatan' => 3578120,
                'kabupaten' => 3578,
                'provinsi' => 35,
                'tps' => 1,

            ],
            [
                'id' => 3,
                'name' => 'Admin TPS 2',
                'email' => 'admin3@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'Admin',
                'rw' => '02',
                'rt' => '08',
                'kelurahan' => 3578120002,
                'kecamatan' => 3578120,
                'kabupaten' => 3578,
                'provinsi' => 35,
                'tps' => 2,

            ],

        ]);
    }
}
