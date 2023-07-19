<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(){
        return view('/jadwal',[
            'title'=>'Jadwal'
        ]);
    }
}
