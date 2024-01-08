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
                        <form action="{{ route('seleksi.store') }}" method="POST">
                            @csrf
                            <div class="form-group mt-1">
                                <label for="id_seleksi">ID Seleksi</label>
                                <input class="form-control" type="text" name="id_seleksi"
                                    value="{{ old('id_seleksi') }}">
                                <span class="text-danger">{{ $errors->first('id_seleksi') }}</span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="id_pendaftaran">Nama Peserta</label>
                                <select class="form-control" name="id_pendaftaran">
                                    @foreach ($pendaftarans as $pendaftaran)
                                        <option value="{{ $pendaftaran->id }}">{{ $pendaftaran->nama_peserta }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('id_pendaftaran') }}</span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="nilai_rata_rata">Nilai Rata-rata</label>
                                <input class="form-control" type="text" name="nilai_rata_rata"
                                    value="{{ old('nilai_rata_rata') }}">
                                <span class="text-danger">{{ $errors->first('nilai_rata_rata') }}</span>
                            </div>
                            <div class="form-group mt-3">
                                <label for="id_status">Status</label>
                                <select class="form-control" name="id_status">
                                </select>
                                <span class="text-danger">{{ $errors->first('id_status') }}</span>
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
