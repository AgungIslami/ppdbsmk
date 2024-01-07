@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang di Web PPDB SMK Merlung') }}</div>

                <div class="card-body">
                    <div class="container">
                    <div class="text-center mt-3">
                        <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary btn-lg">Daftar Sekarang</a>
                    </div>
                    <br>

                        <div class="row mb-2">
                            <div class="col-md-4 mb-2">
                                <img src="{{ asset('sbadmin2') }}/img/brosur.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                            <div class="col-md-4 mb-2">
                                <img src="{{ asset('sbadmin2') }}/img/brosur.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                            <div class="col-md-4 mb-2">
                                <img src="{{ asset('sbadmin2') }}/img/brosur.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="text-center">Kegiatan Lingkungan Sekolah Kami</div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <img src="{{ asset('sbadmin2') }}/img/image2.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('sbadmin2') }}/img/image3.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                            <div class="col-md-4 mb-2">
                                <img src="{{ asset('sbadmin2') }}/img/image4.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <img src="{{ asset('sbadmin2') }}/img/image5.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('sbadmin2') }}/img/image6.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                            <div class="col-md-4 mb-2">
                                <img src="{{ asset('sbadmin2') }}/img/image7.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <img src="{{ asset('sbadmin2') }}/img/image8.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('sbadmin2') }}/img/image9.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                            <div class="col-md-4 mb-2">
                                <img src="{{ asset('sbadmin2') }}/img/image10.jpg" class="img-fluid" style="max-width: 280px; height: auto">
                            </div>
                        </div>



                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
