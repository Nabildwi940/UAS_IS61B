@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="content">
    <h1>Selamat Datang Admin</h1>

    <div class="search-bar">
        <input type="text" placeholder="Cari">
        <button>Cari</button>
    </div>

    <div class="sort-bar">
        <label>Urutkan berdasarkan</label>
        <select>
            <option value="tahun">Tahun</option>
        </select>
        <select>
            <option value="tertinggi">Tertinggi</option>
            <option value="terendah">Terendah</option>
        </select>
        <button>Urutkan</button>
    </div>

    <div class="card-container">
        @foreach($mobil as $m)
            <div class="card">
                <img src="{{ asset('images/' . $m->gambar) }}" alt="{{ $m->nama }}">
                <h3>{{ $m->nama }}</h3>
                <p>Rp{{ number_format($m->harga, 0, ',', '.') }}</p>
                <p>Tahun: {{ $m->tahun }}</p>
                <p>Warna: {{ $m->warna }}</p>
                <p>Nopol: {{ $m->nopol }}</p>
                <button>Details</button>
            </div>
        @endforeach
    </div>
</div>
@endsection
