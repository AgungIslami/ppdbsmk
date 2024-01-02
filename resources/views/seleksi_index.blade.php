@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Hasil Seleksi PPDB
                </div>
                <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Kode Seleksi</td>
                                <td>Nama Calon Siswa</td>
                                <td>Hasil</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seleksi as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->kode_seleksi}}</td>
                                <td>{{ $item->nama_calon_siswa }}</td>
                                <td>{{ $item->hasil }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                {{ $seleksi->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection