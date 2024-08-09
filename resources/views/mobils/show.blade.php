@extends('layouts.app')

@section('title', 'Detail Mobil')

@section('content')
<div id="main-wrapper">
    <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
        <div class="container-fluid" style="padding-left: 0;">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $mobil->nama_mobil }}</h3>
                </div>
                <div class="card-body">
                    <p>Harga: Rp. {{ number_format($mobil->harga, 0, ',', '.') }}</p>
                    <p>Tahun: {{ $mobil->tahun }}</p>
                    <p>Warna: {{ $mobil->warna }}</p>
                    <p>Nomor Polisi: {{ $mobil->nopol }}</p>
                    <p>Kilometer: {{ $mobil->kilometer }}</p>
                    <p>Bahan Bakar: {{ $mobil->bahan_bakar }}</p>
                    <p>CC Mesin: {{ $mobil->cc_mesin }}</p>
                    <p>Transmisi: {{ $mobil->transmisi }}</p>
                    <p>Jumlah Seat: {{ $mobil->jumlah_seat }}</p>
                    <p>Deskripsi: {{ $mobil->deskripsi }}</p>
                    
                    @if ($mobil->images->count())
                        <div class="row">
                            @foreach ($mobil->images as $image)
                                <div class="col-md-4">
                                    <img src="{{ Storage::url($image->path) }}" class="img-fluid" alt="{{ $mobil->nama_mobil }}">
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <a href="{{ route('mobils.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Mobil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
