<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategorihewan;
class kategorihewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kathew = kategorihewan::all();
        return view('kategorihewan.index', compact('kathew')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategorihewan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'NAMA_HEWAN' => 'required|unique:kategorihewan',
        ]);

        $kathewan = new kategorihewan();
        $kathewan->NAMA_HEWAN = $request->input('NAMA_HEWAN');

        $kathewan->save();
        
        return redirect()->route('kategorihewan.index')->with('success', 'kategori berhasil ditambahkan.');

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
        $kathew = kategorihewan::where('id_kategorihewan',$id)->first();
        return view('kategorihewan.edit', compact('kathew'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
             'NAMA_HEWAN' => 'required|unique:kategorihewan,NAMA_HEWAN',  
         ]);
    
         $kathewan = kategorihewan::find($id);


         $kathewan->NAMA_HEWAN = $request->input('NAMA_HEWAN');
         $kathewan->save();
     
     return redirect()->route('kategorihewan.index')->with('success', 'kategori berhasil ditambahkan.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kathewan = kategorihewan::findorfail($id);

        $kathewan->delete();
        return redirect()->route('kategorihewan.index')->with('success', 'kategori berhasil dihapus.');
    }
}
