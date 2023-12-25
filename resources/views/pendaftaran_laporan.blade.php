<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan PPDB</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-container">
            <div class="col-md-12">
                <center>
                    <h2>{{ $judul }}</h2>
                </center>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Kode Pendaftaran</td>
                            <td>Nama Calon Siswa</td>
                            <td>Tempat Lahir</td>
                            <td>Alamat</td>
                            <td>Tanggal Lahir</td>
                            <td>Jenis Kelamin</td>
                            <td>Asal Sekolah</td>
                            <td>Nomor HP</td>
                            <td>E-Mail</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendaftaran as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->kode_pendaftaran }}</td>
                            <td>{{ $a->nama_calon_siswa }}</td>
                            <td>{{ $a->tempat_lahir }}</td>
                            <td>{{ $a->alamat }}</td>
                            <td>{{ $a->tanggal_lahir }}</td>
                            <td>{{ $a->jenis_kelamin }}</td>
                            <td>{{ $a->asal_sekolah }}</td>
                            <td>{{ $a->nomor_hp }}</td>
                            <td>{{ $a->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>Mengetahui</h5>
                <br>
                <br>
                <br>
                <br>
                <h5>Kepala Sekolah</h5>
            </div>
        </div>
    </div>
</body>
</html>