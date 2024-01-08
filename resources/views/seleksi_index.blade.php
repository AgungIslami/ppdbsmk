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
                                    <td>Nama Peserta</td>
                                    <td>Nilai</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($seleksi as $item)
                                    <tr>
                                        <td>{{ $item->id_seleksi }}</td>
                                        <td>
                                            <div>
                                                @if ($item->Pendaftaran)
                                                    {{ $item->Pendaftaran->nama_peserta ?? 'N/A' }}
                                                @else
                                                    N/A
                                                @endif
                                            </div>
                                        </td>
                                        <td>{{ $item->nilai_rata_rata }}</td>
                                        <td>
                                            <div>
                                                @if ($item->Pendaftaran && $item->Pendaftaran->Status)
                                                    {{ $item->Pendaftaran->Status->nama ?? 'N/A' }}
                                                @else
                                                    N/A
                                                @endif
                                            </div>
                                        </td>
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
