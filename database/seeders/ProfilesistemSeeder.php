<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesistemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profilesistem')->insert([
            [
                'id' => 1,
                'title' => 'Sistem Lis',
                'diskripsi' => 'by Hasanarofid',
                'address' => 'dukuh pakis,surabaya',
                'zipcode' => 3055,
                'email' => 'hasanarofid@gmail.com',
                'telpon' => '0813242424',
                'social1' => 'facebok.com/hasanarofid',
                'social2' => 'instagram.com/hasanarofid',
                'social3' => 'theards.com/hasanarofid',
                'social4' => 'twitter.com/hasanarofid',
                'logo' => 'logo teknisi.jpeg',
                'favicon' => 'logo teknisi.jpeg',
                'kota' => 'Surabaya'



            ],


        ]);
    }
}
