@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PELANGGAN DATA DETAILS') }}</div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <tr><th>Nama</th><th>:</th><td>{{ $pelanggans->nama }}</td></tr>
                        <tr><th>Jenis Kelamin</th><th>:</th><td> {{ $pelanggans->jenis_kelamin }}</td></tr>
                        <tr><th>Phone Number</th><th>:</th><td>{{ $pelanggans->phone_number }}</td></tr>
                        <tr><th>Alamat</th><th>:</th><td>{{ $pelanggans->alamat }}</td></tr>
                        <tr><th>Tujuan</th><th>:</th><td>{{ $pelanggans->tourtravels->Tujuan}}</td></tr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection