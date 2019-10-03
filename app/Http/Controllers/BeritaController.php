<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){
        
        $listBerita=Berita::all(); 
    
        
        return view('berita.index' ,compact('listBerita'));
    }
    public function show($id){
        $Berita=Berita::find($id);
        return view('berita.show', compact('Berita'));
    }
}
