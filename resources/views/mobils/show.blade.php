@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $mobil->nama_mobil }}</h1>

    <div class="row">
        <div class="col-md-6 mb-4">
            @if($mobil->images->count() > 0)
                @foreach($mobil->images as $image)
                    <img src="{{ Storage::url($image->path) }}" alt="{{ $mobil->nama_mobil }}" class="img-thumbnail mb-3">
                @endforeach
            @else
                <p>Tidak ada gambar untuk mobil ini.</p>
            @endif
        </div>
        <div class="col-md-6">
            <p class="font-weight-bold text-primary">Harga: Rp{{ number_format($mobil->harga, 0, ',', '.') }}</p>
            <p class="font-weight-bold">Tahun: {{ $mobil->tahun }}</p>
            <p class="font-weight-bold">Warna: {{ $mobil->warna }}</p>
            <p class="font-weight-bold">Nopol: {{ $mobil->nopol }}</p>
            <p class="font-weight-bold">CC Mesin: {{ $mobil->cc_mesin }}</p>
            <p class="font-weight-bold">Kilometer: {{ $mobil->kilometer }}</p>
            <p class="font-weight-bold">Bahan Bakar: {{ $mobil->bahan_bakar }}</p>
            <p class="font-weight-bold">Transmisi: {{ $mobil->transmisi }}</p>
            <p class="font-weight-bold">Jumlah Seat: {{ $mobil->jumlah_seat }}</p>
            <p class="font-italic">{{ $mobil->deskripsi }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('mobils.index') }}" class="btn btn-secondary">Kembali</a>
        <a href="{{ route('mobils.edit', $mobil->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('mobils.destroy', $mobil->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
</div>
@endsection
