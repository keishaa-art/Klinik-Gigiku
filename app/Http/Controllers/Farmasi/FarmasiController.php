<?php

namespace App\Http\Controllers\Farmasi;

use App\Models\farmasi;  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FarmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farmasi = Farmasi::get();
        return view('Farmasi.index', compact('farmasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Farmasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate ([
            'nama_obat' => 'required|max:255', 
            'kode_obat' => 'required',  
            'kandungan' => 'required',  
            'bentuk_obat' => 'required',  
            'satuan' => 'required',  
            'pieces' => 'required',  
            'tgl_produksi' => 'required',  
            'tgl_kadaluarsa' => 'required',      
        ]);

        $validated['harga'] = $validated['satuan'] * $validated['pieces'];

        farmasi::create($validated);
        return redirect()->route('farmasi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $farmasi = Farmasi::findOrFail($id);
        return view('Farmasi.edit', compact('farmasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, farmasi $farmasi)
    {
        $validated = $request->validate([
            'nama_obat' => 'required|max:255', 
            'kode_obat' => 'required',  
            'kandungan' => 'required',  
            'bentuk_obat' => 'required',  
            'satuan' => 'required',  
            'pieces' => 'required',  
            'tgl_produksi' => 'required',  
            'tgl_kadaluarsa' => 'required',    
        ]);

        $validated['harga'] = $validated['satuan'] * $validated['pieces'];

        $farmasi->update($validated);

        return redirect()->route('farmasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(farmasi $farmasi)
    {
        $farmasi->delete();
        return redirect()->route('farmasi.index');
    }
}
