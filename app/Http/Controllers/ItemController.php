<?php


namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('item.index', compact('barangs'));
    }

    public function create()
    {
        $categories = KategoriBarang::all(); // Retrieve all categories
        return view('item.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:barang',
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);


    Barang::create([
        'kode' => $request->kode,
        'nama' => $request->nama,
        'kategori_id' => $request->kategori, // Save the selected kategori ID
        'harga' => $request->harga,
        'stok' => $request->stok,
    ]);

        return redirect()->route('items.index')->with('success', 'Barang created successfully.');
    }

    public function edit(Barang $item)
    {
        // Fetch all categories from the KategoriBarang model
        $categories = KategoriBarang::all();
        return view('item.edit', compact('item', 'categories'));

    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $barang->update($request->all());
        return redirect()->route('items.index')->with('success', 'Barang updated successfully.');
    }

    public function destroy(Barang $item)
    {

        $item->delete();
        return redirect()->route('items.index')->with('success', 'Barang deleted successfully.');
    }
}

