<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function index(){

      
        $l=Categoria::get();

        
    
        return View('libros.index',compact('l'));
        
      
    }
}
