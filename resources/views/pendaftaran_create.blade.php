@extends('layouts.sbadmin2')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        @auth
                            Semoga Sukses {{ Auth::user()->name }}
                        @else
                            Semoga Sukses
                        @endauth

                    </div>
                    <div class="card-body">
                        {!! Form::model($pendaftaran, ['route' => $route, 'method' => $method]) !!}
                        <div class="form-group">
                            <label for="my-input">Nama Peserta</label>
                            {!! Form::text('nama_peserta', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('nama_peserta') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="my-input">Tanggal Lahir</label>
                            {!! Form::date('tanggal_lahir', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-input">Alamat</label>
                            {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-input">Telepon</label>
                            {!! Form::text('telepon', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('telepon') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="my-input">e-mail</label>
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="my-input">Sekolah Asal</label>
                            {!! Form::text('sekolah_asal', null, ['class' => 'form-control']) !!}
                            <span class="text-danger">{{ $errors->first('sekolah_asal') }}</span>
                        </div>
                        


                        <div class="form-group mt-2">
                            {!! Form::submit($tombol, ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
