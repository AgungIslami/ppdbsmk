@extends('layouts.sbadmin2')
@section('content')
    
 <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                <div>
            <img class="img-profile rounded-circle" src="{{ asset('sbadmin2') }}/img/undraw_profile.svg" alt="Profile Image " width="100" height="100">
        </div>
        <div>
            <br>
        <a src="profil">
                                    {{ Auth::user()->name }}
                                    <br>
            <a src="email">
                {{ Auth::user()->email }}            <!-- Tambahkan informasi profil lainnya sesuai kebutuhan -->
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


