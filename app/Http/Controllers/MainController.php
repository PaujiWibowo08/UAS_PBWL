<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use App\Models\bus;
use App\Models\supir;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $data = Jadwal::count();
        $databus = bus::all();
        $datasupir = supir::all();
        return view('main',[
            'title'=>'Beranda',
            'alldata'=>jadwal::all(),
            'data'=>$data,
            'databus'=>$databus,
            'countbus'=>bus::count(),
            'datasupir' => $datasupir,
            'countsupir'=>supir::count()
        ]);
    }

    public function hapus($id){
        $berangkat = jadwal::where('id',$id)->first();
        $berangkat->delete();
        return redirect('/dashboard');
    }
    public function edit($id){
        $edit = jadwal::where('id',$id)->first();
        $data = Jadwal::count();
        return view('editjadwal',[
            'title'=>'Edit',
            'edit' => $edit,
            'alldata'=>jadwal::all(),
            'data'=> $data
        ]); 
    }
    public function update(request $r){
        $update = jadwal::where('id',$r->id)->first();
        $update->bus_id = $r->merek;
        $update->supir_id = $r->supir;
        $update->tempat_berangkat = $r->tempat_berangkat;
        $update->tujuan = $r->tujuan;
        $update->save();
        return redirect('/dashboard');
    }

    public function input(){
        $data = jadwal::count();
        return view('input',[
            'title'=>'Input Jadwal',
            'data'=>$data,
            'alldata'=> jadwal::all()
        ]);
    }
    
    public function create(request $r){
        jadwal::create([
            'bus_id'=> $r->merek,
            'supir_id'=> $r->supir,
            'tempat_berangkat'=> $r->tempat_berangkat,
            'tujuan'=> $r->tujuan
        ]);
        return redirect('/dashboard');
    }
}
