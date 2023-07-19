<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jadwal;

class jadwalseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        jadwal::create([
            'bus_id'=>1,
            'supir_id'=>1,
            'tempat_berangkat'=>'tuntungan',
            'tujuan'=>'Medan Walk'
        ]);
    }
}
