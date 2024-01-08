<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seleksi;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\DB;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['seleksi'] = Seleksi::with('pendaftaran.status')->paginate(5);
        return view('seleksi_index', $data);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendaftarans = Pendaftaran::all();
        $statuses = DB::table('statuses')->get();
    
        return view('seleksi_create', compact('pendaftarans', 'statuses'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'id_seleksi' => 'required|unique:seleksis,id_seleksi',
            'id_pendaftaran' => 'required|exists:pendaftarans,id',
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
