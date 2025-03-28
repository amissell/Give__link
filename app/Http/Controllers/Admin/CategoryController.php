<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    // dd('hhhhh');
    return view('categories.index', compact('categories'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255|unique:categories,name',
    ]);

    Category::create([
      'name' => $request->name,
    ]);

    return redirect()->route('categories.index')->with('success', 'Category created successfully!');
  }

  public function edit($id)
  {
    $category = Category::findOrFail($id);
    return view('categories.edit', compact('category'));
  }

  public function update(Request $request, $id)
  {
    $categories = Category::findOrFail($id);

    $request->validate([
      'name' => 'required|string|max:255|unique:categories,name,' . $categories->id,
    ]);

    $categories->update([
      'name' => $request->name,
    ]);

    return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
  }

  public function destroy($id)
  {
    $categories = Category::findOrFail($id);
    $categories->delete();

    return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
  }
}
