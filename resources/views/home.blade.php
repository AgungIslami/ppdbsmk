@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang di Web PPDB SMK Merlung') }}</div>

                <div class="card-body">
                    <div class="container">
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

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary btn-lg">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
