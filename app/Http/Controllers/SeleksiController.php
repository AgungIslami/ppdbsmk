<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seleksi;
use App\Models\Pendaftaran;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['seleksi'] = Seleksi::paginate(5); // Ambil semua data seleksi dari model Seleksi
        return view('seleksi_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendaftarans = Pendaftaran::all(); // Replace with your actual query to get the pendaftarans
    
        return view('seleksi_create', ['pendaftarans' => $pendaftarans]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'id_seleksi' => 'required|unique:seleksis,id_seleksi',
            'id_pendaftaran' => 'required',
            'nilai_rata_rata' => 'required',
        ]);
        $seleksi = \App\Models\Seleksi::create($validasiData);

        flash('Selesai')->success();
        return back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
