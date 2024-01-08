@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">

    <div class="card">
        <div class="card-header">            
            @auth
                Semoga Sukses {{ Auth::user()->name }}
            @else
            Semoga Sukses
            @endauth

        </div>
            <div class="card-body">
                <form action="/pendaftaran" method="POST">
                    @method('POST')
                    @csrf
                    <div class="form-group mt-1">
                        <label for="id_pendaftaran">Kode Pendaftaran</label>
                        <input class="form-control" type="text" name="id" value="{{ old('id_pendaftaran') }}">
                        <span class="text-danger">{{ $errors->first('id_pendaftaran') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama_peserta">Nama Peserta</label>
                        <input class="form-control" type="text" name="nama_peserta" value="{{ old('nama_peserta') }}">
                        <span class="text-danger">{{ $errors->first('nama_peserta') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}">
                        <span class="text-danger">{{ $errors->first('alamat') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="telepon">Telepon</label>
                        <input class="form-control" type="text" name="telepon" value="{{ old('telepon') }}">
                        <span class="text-danger">{{ $errors->first('telepon') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">E-Mail</label>
                        <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group mt-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select custom-select" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="sekolah_asal">Asal Sekolah</label>
                        <input class="form-control" type="text" name="sekolah_asal" value="{{ old('sekolah_asal') }}">
                        <span class="text-danger">{{ $errors->first('sekolah_asal') }}</span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="tanggal_pendaftaran">Tanggal Pendaftaran</label>
                        <input class="form-control" type="date" name="tanggal_pendaftaran" value="{{ old('tanggal_pendaftaran') }}">
                        <span class="text-danger">{{ $errors->first('tanggal_pendaftaran') }}</span>
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