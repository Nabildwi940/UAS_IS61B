@extends('layouts.app')

@section('title', 'Daftar Mobil')

@section('content')
    <div class="container">
        <h1>Daftar Mobil</h1>

        <button type="button" class="btn btn-primary mb-3" onclick="window.location='{{ route("mobil.create") }}'">Tambah Mobil</button>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card-container">
            @foreach ($mobil as $m)
                <div class="card">
                    <img src="{{ asset('images/' . $m->gambar) }}" alt="{{ $m->nama }}">
                    <h3>{{ $m->nama }}</h3>
                    <p>Rp{{ number_format($m->harga, 0, ',', '.') }}</p>
                    <p>Tahun: {{ $m->tahun }}</p>
                    <p>Warna: {{ $m->warna }}</p>
                    <p>Nopol: {{ $m->nopol }}</p>
                    <div class="button-container">
                        <button type="button" class="btn btn-primary rounded-pill" onclick="window.location='{{ route("mobil.show", $m->id) }}'">Details</button>
                        <button type="button" class="btn btn-success rounded-pill" onclick="window.location='{{ route("mobil.edit", $m->id) }}'">Edit</button>
                        <form action="{{ route('mobil.destroy', $m->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger rounded-pill" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
