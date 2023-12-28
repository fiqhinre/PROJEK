<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pendaftaran()
    {
        return view('admin.form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function daftarJasa()
    {
        return view('admin.form');
    }

    public function daftarLayanan()
    {
        return view('admin.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telp' => 'required|no_telp|unique:forms',
            'pesan' => 'required|string',
        ]);

        // Simpan data ke database menggunakan model FormPendaftaran
        $forms = formsController::create($request->all());

        // Redirect atau response lainnya setelah penyimpanan
        return redirect()->route('admin.index')->with('success', 'Data pendaftaran berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil data dari database berdasarkan ID
        $forms = formsController::find($id);

        // Tampilkan formulir edit
        return view('admin.edit', compact('formPendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hapus data dari database berdasarkan ID
        formsController::destroy($id);

        // Redirect atau response lainnya setelah penghapusan
        return redirect()->route('admin.table')->with('success', 'Data pendaftaran berhasil dihapus.');
    }

    
}
