<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }

    public function store(Request $request){
        $product = new Product();
        $product->nombre=$request->nombre;
        $product->cantidad=$request->cantidad;
        $product->precio=$request->precio;
        $product->fecha_ven=$request->fecha_ven;
        $product->save();
        return $product;
    }
    public function update(Request $request,$id){
        $product =  Product::find($id);
        $product->nombre=$request->nombre;
        $product->cantidad=$request->cantidad;
        $product->precio=$request->precio;
        $product->fecha_ven=$request->fecha_ven;
        $product->save();
        return $product;
    }
    public function destroy($id){
        $product =  Product::find($id);
        $product->delete();
        return $product;
    }
}
