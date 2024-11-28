<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        // Fetching data based on 'kategori' if provided, otherwise get all barang
        $barangs = Barang::get();

        return view('report.index', compact('barangs'));
    }
}
