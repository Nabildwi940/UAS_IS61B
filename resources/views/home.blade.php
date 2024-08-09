@extends('layouts.app')

@section('content')
<div id="main-wrapper">
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-themecolor mb-4">Dashboard</h3>
                </div>
            </div>
            <div class="row">
                <!-- Mobil Tersedia -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $mobils->count() }}</h3>
                            <p>Mobil Tersedia</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <a href="{{ route('mobils.index') }}" class="small-box-footer">
                            Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End Mobil Tersedia -->

                <!-- Pembeli -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $jumlahPembeli }}</h3>
                            <p>Pembeli Terdaftar</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('pembeli.index') }}" class="small-box-footer">
                            Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End Pembeli -->
                
                <!-- Transaksi -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $jumlahTransaksi }}</h3>
                            <p>Transaksi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <a href="{{ route('transaksi.index') }}" class="small-box-footer">
                            Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- End Transaksi -->

                <!-- Tambahkan card lainnya di sini sesuai kebutuhan -->

            </div>
        </div>
    </div>
</div>
@endsection
