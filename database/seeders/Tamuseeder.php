<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tamuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tamu')->insert([
            'nama_tamu' => 'Fahrez',
            'alamat' => 'Cimahi',
            'email' => 'fah1@gmail.com',
            'telepon' => '086152612',
            'tujuan' => 'kunjungan',
            'tanggal' => '2023-06-03',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
