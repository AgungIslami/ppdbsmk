<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data['pendaftaran'] = \App\Models\Pendaftaran::paginate(3);
        $data['judul'] = 'Data-data Pendaftaran';
        return view('pendaftaran_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pendaftaran'] = new \App\Models\Pendaftaran();
        $data['route'] = 'pendaftaran.store';
        $data['method'] = 'POST';
        $data['tombol'] = 'SIMPAN';
        

        return view('pendaftaran_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'nama_peserta' => 'required ',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'sekolah_asal' => 'required',            
        ]);
       $pendaftaran = new \App\Models\Pendaftaran();
    $pendaftaran->fill($validasiData);
    $pendaftaran->status = '1';
    $pendaftaran->save();

    flash('Anda sudah terdaftar')->success();
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
        $data['pendaftaran'] = \App\Models\Pendaftaran::findOrFail($id);
        $data['route'] = ['pendaftaran.update',$id];
        $data['method'] = 'PUT';
        $data['tombol'] = 'SIMPAN';
        return view('pendaftaran_create', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $validasiData = $request->validate([
        'nama_peserta' => 'required|unique:pendaftarans,nama_peserta,' . $id,
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'email' => 'required',
        'sekolah_asal' => 'required',
]);

    $pendaftaran = \App\Models\Pendaftaran::findOrFail($id);
    $pendaftaran->fill($validasiData);
    $pendaftaran->save();

    flash('Data berhasil diperbarui')->success();
    return back();
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendaftaran = \App\Models\Pendaftaran::findOrFail($id);
        $pendaftaran->delete();
        flash('Data telah dihapus');
        return back();
    }

    public function laporan()
    {
        $data['pendaftaran'] = \App\Models\Pendaftaran::all();
        $data['judul'] = 'Laporan PPDB';
        return view('pendaftaran_laporan',$data);
    }
}
