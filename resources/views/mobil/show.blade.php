@extends('layouts.app')

@section('title', 'Detail Mobil')

@section('content')
    <div class="content">
        <h2>Detail Mobil</h2>
        <div class="card">
            <img src="{{ asset('images/' . $mobil->gambar) }}" alt="{{ $mobil->nama }}">
            <h3>{{ $mobil->nama }}</h3>
            <p>Rp{{ number_format($mobil->harga, 0, ',', '.') }}</p>
            <p>Tahun: {{ $mobil->tahun }}</p>
            <p>Warna: {{ $mobil->warna }}</p>
            <p>Nopol: {{ $mobil->nopol }}</p>
        </div>
        <a href="{{ route('mobil.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection