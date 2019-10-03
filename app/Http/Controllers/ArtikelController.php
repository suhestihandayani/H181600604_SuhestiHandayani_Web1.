<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;


class ArtikelController extends Controller
{
    public function index(){
        
        $listArtikel=Artikel::all(); 
    
        
        return view('artikel.index' ,compact('listArtikel'));
    }
    public function show($id){
        $Artikel=Artikel::find($id);
        return view('artikel.show', compact('Artikel'));
    }


}
