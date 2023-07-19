<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\supir;

class supirseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        supir::create([
            'nama_supir'=>'suparman',
            'alamat'=>'tuntungan'
        ]);
    }
}
