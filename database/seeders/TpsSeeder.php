<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tps')->insert([
            [
                'id' => 1,
                'no_tps' => 'No 1',
                'rw' => '01',
                'rt' => '02',
                'kelurahan' => 3578120002,
                'kecamatan' => 3578120,
                'kabupaten' => 3578,
                'provinsi' => 35,
            ],
            [
                'id' => 2,
                'no_tps' => 'No 2',
                'rw' => '02',
                'rt' => '05',
                'kelurahan' => 3578120002,
                'kecamatan' => 3578120,
                'kabupaten' => 3578,
                'provinsi' => 35,
            ],

        ]);
    }
}
