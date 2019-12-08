<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\KategoriBerita;

class BeritaController extends Controller
{
    public function index(){
        
        $listBerita=Berita::all(); 
    
        
        return view('berita.index' ,compact('listBerita'));
    }
    public function show($id){
        $berita=Berita::find($id);
        return view('berita.show', compact('berita'));
    }
    
    public function create(){
       
        $kategoriBerita=KategoriBerita::pluck('nama','id');
        
        return view('berita.create', compact('kategoriBerita'));

    }

    public function store(Request $request){
        $input=$request->all();

        Berita::create($input);

        return redirect(route('berita.index'));
    }   

    public function edit($id){
        $berita=Berita::find($id);
        $kategoriBerita=KategoriBerita::pluck('nama', 'id');


        if (empty($berita)){
            return redirect(route('berita.index'));
        }
        return view ('berita.edit', compact('berita', 'kategoriBerita'));

       }

       public function update($id, Request $request){
           $berita=Berita::find($id);
           $input=$request->all();


           if (empty($berita)){
               return redirect(route('berita.index'));
           }

           $berita->update($input);

           return redirect(route('berita.index'));

       }


    public function destroy($id){
        $berita=Berita::find($id);

         if (empty($berita)){
             return redirect(route('berita.index'));
         } 

         $berita->delete();
         return redirect(route('berita.index'));
        }
}
