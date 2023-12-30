@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    Tambah Hasil Seleksi
                </div>
                <div class="card-body">
                    <form action="/seleksi" method="POST">
                        @csrf
                        <div class="form-group mt-1">
                            <label for="kode_seleksi">Kode Seleksi</label>
                            <input class="form-control" type="text" name="kode_seleksi" value="{{ old('kode_seleksi') }}">
                            <span class="text-danger">{{ $errors->first('kode_seleksi') }}</span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="nama_calon_siswa">Nama Calon Siswa</label>
                            <input class="form-control" type="text" name="nama_calon_siswa" value="{{ old('nama_calon_siswa') }}">
                            <span class="text-danger">{{ $errors->first('nama_calon_siswa') }}</span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="hasil">Hasil</label>
                            <select class="form-select" name="hasil" id="hasil">
                                <option value="Diterima" {{ old('hasil') == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                <option value="Ditolak" {{ old('hasil') == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                            </select>
                            <span class="text-danger">{{ $errors->first('hasil') }}</span>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
