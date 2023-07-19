<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supir;

class SupirController extends Controller
{
    public function index(){
        return view('supir',[
            'alldata'=> supir::all(),
            'data'=> supir::count(),
            'title' => 'List Supir'
        ]);
    }
     public function hapussupir($id){
        $berangkat = supir::where('id',$id)->first();
        $berangkat->delete();
        return redirect('/');
    }

    public function edit($id){
        $edit = supir::where('id',$id)->first();
        $data = supir::count();
        return view('editsupir',[
            'title'=>'Edit',
            'edit' => $edit,
            'alldata'=>supir::all(),
            'data'=> $data
        ]);  
    }
    public function update(request $r){
        $update = supir::where('id',$r->id)->first();
        $update->nama_supir = $r->nama_supir;
        $update->alamat = $r->alamat;
        $update->save();
        return redirect('/supir');
    }
    public function input(){
        $data = supir::count();
        return view('inputsupir',[
            'title'=>'Input Jadwal'
        ]);
    }
    public function create(request $r){
        supir::create([
            'nama_supir'=> $r->nama_supir,
            'alamat'=> $r->alamat
        ]);
        return redirect('/supir');
    }
}
