@extends('layouts.app')

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
            <div class="container-fluid" style="padding-left: 0;">

                <div class="row page-titles mb-4">
                    <div class="col-md-6 align-self-center">
                        <h3 class="text-themecolor font-weight-bold">Detail Transaksi</h3>
                    </div>
                </div>

                <div class="card shadow-sm border-0 rounded-lg">
                    <div class="card-body p-4">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><strong>ID Transaksi:</strong> {{ $transaksi->id }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Nama Pembeli:</strong> {{ $transaksi->pembeli->nama }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><strong>Nama Mobil:</strong> {{ $transaksi->mobil->nama_mobil }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Harga Mobil:</strong> Rp{{ number_format($transaksi->mobil->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <p><strong>Jumlah Harga Transaksi:</strong> Rp{{ number_format($transaksi->jumlah_harga_transaksi, 0, ',', '.') }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Status Transaksi:</strong> 
                                    @if($transaksi->status_transaksi == 'lunas')
                                        <span class="badge badge-success">Lunas</span>
                                    @else
                                        <span class="badge badge-warning">Belum Lunas</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('transaksi.index') }}" class="btn btn-primary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
