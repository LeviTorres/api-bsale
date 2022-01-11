<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function obtenerProductos(){
        
       return Product::all();
    }

    public function obtenerCategorias(){
        return Category::with('categorias')->get(); 
    }


    public function show(Category $category){
      
      return Category::find($category);
    }
    
}
