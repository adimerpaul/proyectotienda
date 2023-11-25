<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->nombre = $request->nombre;
        $category->save();
        return $category;
    }
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->nombre = $request->nombre;
        $category->save();
        return $category;
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return $category;
    }
}
