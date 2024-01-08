@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-18">
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
                                <td>Nama Peserta</td>
                                <td>Tanggal Lahir</td>
                                <td>Alamat</td>
                                <td>Telepon</td>
                                <td>Email</td>
                                <td>Tanggal Pendaftaran</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftaran as $item)
                            <tr>
                                <td>{{ $item->id_pendaftaran}}</td>
                                <td>{{ $item->nama_peserta }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->alamat }}</td> 
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->sekolah_asal }}</td>
                                <td>{{ $item->tanggal_pendaftaran }}</td>
                                <td>
                                    <a href="/pendaftaran/{{ $item->id }}/edit" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form action="pendaftaran/{{ $item->id }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
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