@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                {{ $judul }}
                </div>
                <div class="card-body">
                <a href="{{ route('pendaftaran.create')}}" class="btn btn-primary">Daftar</a>
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
                                <td>Sekolah Asal</td>
                                <td>Status</td> 
                                <td>Tanggal Pendaftaran</td>
                                @if (auth()->check() && auth()->user()->roles == 'admin')
                                <td>Aksi</td>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftaran as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->nama_peserta }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->alamat }}</td> 
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->sekolah_asal }}</td>
                                <td>
                                    <div>
                                        {{ $item->Status->nama }}
                                    </div>
                                </td>
                                <td>{{ $item->created_at }}</td>
                                @if (auth()->check() && auth()->user()->roles == 'admin')
                                <td>
                                    <a href="{{ route('pendaftaran.edit', $item->id) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <form action="pendaftaran/{{ $item->id }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                                @endif
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