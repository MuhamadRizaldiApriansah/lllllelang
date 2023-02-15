<?php

namespace App\Http\Controllers;
use App\Models\barang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    public function index()
    {
        $bar = barang::all();
        return view('barang', compact('bar'));
    }

    
}
