<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    
    public function index(){

        $Libros=Libro::all();
        $n=(count($Libros)) ;
        $L=Categoria::get();
        $curso=Curso::get();
        $h=(count($curso)) ;
        
    
        return View('libros.index',compact('Libros','n','L','curso','h'));
        
      
    }
   
   
}
