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
                    <div class="card card-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="stat">
                                    <h3 class="card-title">{{ $mobils->count() }}</h3>
                                    <p class="card-text">Mobil Tersedia</p>
                                </div>
                                <div class="ml-auto">
                                    <i class="fas fa-car fa-3x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('mobil.index') }}" class="btn btn-primary btn-sm">Lihat Detail <i class="fas fa-arrow-circle-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Mobil Tersedia -->
                
                <!-- Tambahkan card lainnya di sini sesuai kebutuhan -->
                
            </div>
        </div>
    </div>
</div>
@endsection
