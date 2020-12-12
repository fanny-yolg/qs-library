<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', ['categories'=>$categories]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->Save();
        
        return redirect('/categories');
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

   
    public function update(Request $request, Category $category)
    {
        Category::where('id', $category->id)
            ->update([
                'category_name' => $request->category_name,
            ]);

        return redirect("/categories");
    }

    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/categories');
    }
}
