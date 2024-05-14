<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;


class PenjualanController extends Controller
{
    
    public function index()
    {
    
        return view('index');
    }


    public function create()
    {
        $penjualan = new Penjualan;

        return view('create', compact('penjualan'));
        
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'jumlah' => 'required|numeric',
            'harga_satuan' => 'required|numeric',
        ]);

        $penjualan = new Penjualan($validatedData);
        $penjualan->total_harga = $request->jumlah * $request->harga_satuan;
        $penjualan->save();

        
        return redirect()->route('penjualan.create')->with('penjualan', '$penjualan');
        
    }

    
    public function showStruk($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('struk', compact('penjualan'));
    }

    public function show($id)
    {
        
        $penjualan = Penjualan::findOrFail($id);

        
        return view('show', compact('penjualan'));
    }
    

}