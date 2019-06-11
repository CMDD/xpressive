<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
class ProductsController extends Controller
{
    public function store(Request $request){

      if ($request->file('image')) {
        $product = new Products();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->image = $request->file('image')->store('products');
        $product->save();
        return '200';
      }
      return '400';
    }

    public function getProducts(){
      $products = Products::all();

      return $products;
    }

    public function show($id){

      return Products::where('category_id',$id)->get();
    }

    public function delete($id){
        $product = Products::find($id);
        $product->delete();
        return 'Eliminado';
    }
}
