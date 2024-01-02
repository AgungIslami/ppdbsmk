<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seleksi;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seleksi = Seleksi::paginate(5); // Ambil semua data seleksi dari model Seleksi
    return view('seleksi_index', ['seleksi' => $seleksi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['$hasil'] = [
            'Diterima' => 'Diterima',
            'Ditolak' => 'Ditolak',
        ];
        $data['pendaftaran'] = \App\Models\Pendaftaran::selectRaw("id, concat(id_pendaftar, ' - ', nama_calon_siswa) as tampil")->pluck('tampil', 'id');
        return view('seleksi_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'kode_seleksi' => 'required|unique:seleksis,kode_seleksi',
            'nama_calon_siswa' => 'required',
            'hasil' => 'required',
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
