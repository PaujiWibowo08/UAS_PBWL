<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus;

class BusController extends Controller
{
    public function index(){
        return view('bus',[
            'alldata'=> bus::all(),
            'data'=> bus::count(),
            'title' => 'List Bus'
        ]);
    }
    public function hapusbus($id){
        $berangkat = bus::where('id',$id)->first();
        $berangkat->delete();
        return redirect('/');
    }

    public function edit($id){
        $edit = bus::where('id',$id)->first();
        $data = bus::count();
        return view('editbus',[
            'title'=>'Edit',
            'edit' => $edit,
            'alldata'=>bus::all(),
            'data'=> $data
        ]);  
    }
    public function update(request $r){
        $update = bus::where('id',$r->id)->first();
        $update->merek = $r->merek;
        $update->nostnk = $r->nostnk;
        $update->save();
        return redirect('/bus');
    }
    public function input(){
        $data = bus::count();
        return view('inputbus',[
            'title'=>'Input Jadwal'
        ]);
    }
    public function create(request $r){
        bus::create([
            'merek'=> $r->merek,
            'nostnk'=> $r->nostnk
        ]);
        return redirect('/bus');
    }
}