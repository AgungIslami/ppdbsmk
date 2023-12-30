@extends('layouts.sbadmin2')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang') }}</div>

                <div class="card-body">
                <div class="container">
          <div class="row mb-2">
          <div class="col-md-4 mb-2">
          <img src="{{ asset('sbadmin2') }}/{{ asset('/sbadmin2/img/img2.png') }}" alt="Foto 1" class="img-fluid" style="max-width: 280px; height:auto;">
          </div>
          <div class="col-md-4 mb-2">
          <img src="{{ asset('/img.png') }}" alt="Foto 1" class="img-fluid" style="max-width: 280px; height:auto;">
          </div>
          <div class="col-md-4 mb-2">
          <img src="{{ asset('/img.png') }}" alt="Foto 1" class="img-fluid" style="max-width: 280px; height:auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
