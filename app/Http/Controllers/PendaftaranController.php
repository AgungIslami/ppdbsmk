<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

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
        $data['$jenkel'] = [
            'Laki-laki' => 'Laki-laki',
            'Perempuan' => 'Perempuan',
        ];
        return view('pendaftaran_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'id_pendaftaran' => 'required|unique:pendaftarans,id_pendaftaran',
            'nama_peserta' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'sekolah_asal' => 'required',
            'tanggal_pendaftaran' => 'required',
        ]);
        $pendaftaran = \App\Models\Pendaftaran::create($validasiData);

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
        return view('pendaftaran_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $validasiData = $request->validate([
        'id_pendaftaran' => 'required|unique:pendaftarans,id_pendaftaran',
        'nama_peserta' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'email' => 'required',
        'sekolah_asal' => 'required',
        'tanggal_pendaftaran' => 'required',
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
