<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function store(Request $request){

      $categori = new Category();
      $categori->name = $request->name;
      $categori->description = $request->description;
      $categori->status = true;
      $categori->save();

      return 200;
    }

    public function getCategories(){
      $categories = Category::all();
      return $categories;
    }
}
