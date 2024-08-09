@extends('layouts.app')

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
            <div class="container-fluid" style="padding-left: 0;">
                <div class="row page-titles" style="margin-left: -5;">
                    <div class="col-md-6 align-self-center">
                        <h3 class="text-themecolor">Detail Transaksi</h3>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ID Transaksi: {{ $transaksi->id }}</h5>
                        <p><strong>Nama Pembeli:</strong> {{ $transaksi->pembeli->nama }}</p>
                        <p><strong>Nama Mobil:</strong> {{ $transaksi->mobil->nama_mobil }}</p>
                        <p><strong>Harga:</strong> {{ number_format($transaksi->jumlah_harga_transaksi, 0, ',', '.') }}</p>
                        <p><strong>Status Transaksi:</strong> {{ $transaksi->status_transaksi }}</p>
                        <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
