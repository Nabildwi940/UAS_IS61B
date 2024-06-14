@extends('layouts.app')

@section('title', 'Daftar Mobil')

@section('content')
    <h1>Daftar Mobil</h1>

    <a href="{{ route('mobil.create') }}" class="btn btn-primary mb-3">Tambah Mobil</a>

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
                <a href="{{ route('mobil.show', $m->id) }}" class="btn btn-primary">Details</a>
                <a href="{{ route('mobil.edit', $m->id) }}" class="btn btn-success">Edit</a>
                <form action="{{ route('mobil.destroy', $m->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">Hapus</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
