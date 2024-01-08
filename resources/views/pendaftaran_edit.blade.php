@extends('layouts.sbadmin2')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">Ubah Data Calon Siswa {{ $pendaftaran->nama_calon_siswa }}
                    </div>
                    <div class="card-body">
                        {!! Form::model($pendaftaran, ['route' => $route, 'method' => $method]) !!}
                        <div class="form-group mt-3">
                            <label for="nama_peserta">Nama Peserta</label>
                            <input class="form-control" type="text" name="nama_peserta" value="{{ old('nama_peserta') }}">
                            <span class="text-danger">{{ $errors->first('nama_peserta') }}</span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir') }}">
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
                            <label for="sekolah_asal">Asal Sekolah</label>
                            <input class="form-control" type="text" name="sekolah_asal"
                                value="{{ old('sekolah_asal') }}">
                            <span class="text-danger">{{ $errors->first('sekolah_asal') }}</span>
                        </div>
                        <div class="form-group mt-2">
                            {!! Form::submit($tombol, ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
