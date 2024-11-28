<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = KategoriBarang::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:kategori_barang',
        ]);

        KategoriBarang::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(KategoriBarang $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, KategoriBarang $category)
    {
        $request->validate([
            'nama' => 'required|unique:kategori_barang,nama,' . $category->id,
        ]);

        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(KategoriBarang $category)
    {
        // Check if the category is used in any Barang
        if ($category->barang()->count() > 0) {
            // If category is used in any Barang, return with an error message
            return redirect()->route('categories.index')
                             ->with('error', 'This category cannot be deleted because it is being used in some products.');
        }
    
        // If the category is not used, proceed with deletion
        $category->delete();
    
        // Return success message after deletion
        return redirect()->route('categories.index')
                         ->with('success', 'Category deleted successfully.');
    }
    
}
