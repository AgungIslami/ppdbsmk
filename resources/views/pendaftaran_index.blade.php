@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                <a href="/pendaftaran/create" class="btn btn-primary">Daftar</a>
                <table class="table table-bordered table-hover">
                <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Kode Pendaftaran</td>
                                <td>Nama Calon Siswa</td>
                                <td>Tempat Lahir</td>
                                <td>Alamat</td>
                                <td>Tanggal Lahir</td>
                                <td>Jenis Kelamin</td>
                                <td>Asal Sekolah</td>
                                <td>Nomor Hp</td>
                                <td>Email</td>
                                <td>Created</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftaran as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->kode_pendaftaran}}</td>
                                <td>{{ $item->nama_calon_siswa }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->alamat }}</td> 
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->asal_sekolah }}</td>
                                <td>{{ $item->nomor_hp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="/pendaftaran/{{ $item->id }}/edit" class="btn btn-primary">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                {{ $pendaftaran->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection