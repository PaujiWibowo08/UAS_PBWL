<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\bus;

class busseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        bus::create([
            'merek' => 'toyota',
            'nostnk' => '9988'
        ]);
    }
}
