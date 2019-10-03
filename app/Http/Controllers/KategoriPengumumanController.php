<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listKategoriPengumuman=KategoriPengumuman::all();
           
        //blade
        return view('kategori_pengumuman.index', compact ('listKategoriPengumuman'));
   }

   public function show ($id){
    //$kategoriPengumuman=KategoriPengumuman::where('id,$id')->first();
     $kategoriPengumuman=KategoriPengumuman::find($id);

     return view('kategori_pengumuman.show', compact ('kategoriPengumuman'));

     }

     public function create(){
        return view('kategori_pengumuman.create');
    }

    public function store(Request $request){
        $input=$request->all();

        KategoriPengumuman::create($input);

        return redirect(route('kategori_pengumuman.index'));
    }   
}
