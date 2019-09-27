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
}
