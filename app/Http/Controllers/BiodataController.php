<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
  
         // menampilkan data biodata
        $data = Biodata::all();
        // dd($data);
        return view('Biodata.show', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // menyimpan data dari form biodata
        // dd($request->all());
        // Validasi input
        $validasi = $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'umur' => 'required|string',
            'alamat' => 'required|string',
        ]);        

        // simpan data ke database
        Biodata::create($validasi);
        return redirect()->route('cv.show');


    }

    /**
     * Display the specified resource.
     */
    public function show(biodata $biodata)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(biodata $biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, biodata $biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(biodata $biodata)
    {
        //
    }
}
