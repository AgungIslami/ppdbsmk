@extends('layouts.sbadmin2')
@section('content')
    <div class="container-fluid">
        <div class="row justify-container">
            <div class="col-md-12">
                <center>
                    <h2>{{ $judul }}</h2>
                </center>

                <table class="table table-bordered">
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftaran as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->nama_peserta }}</td>
                                <td>{{ $a->tanggal_lahir }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>{{ $a->telepon }}</td>
                                <td>{{ $a->email }}</td>
                                <td>{{ $a->sekolah_asal }}</td>
                                <td>
                                    <div>
                                        {{ $a->Status->nama }}
                                    </div>
                                </td>
                                <td>{{ $a->created_at }}</td>
                                <td>{{ $a->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>Mengetahui</h5>
                <br>
                <br>
                <br>
                <h5>Kepala Sekolah</h5>
            </div>
        </div>
    </div>
@endsection
