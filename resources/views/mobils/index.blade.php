@extends('layouts.app')

@section('title', 'Daftar Mobil')

@section('content')
<div id="main-wrapper">
    <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
        <div class="container-fluid" style="padding-left: 0;">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('mobils.create') }}" class="btn btn-primary mb-2">Tambah Mobil</a>

            <div class="row">
                @foreach($mobils as $mobil)
                    <div class="col-md-4">
                        <div class="card">
                            @if ($mobil->images->count())
                                <img src="{{ Storage::url($mobil->images->first()->path) }}" class="card-img-top" alt="{{ $mobil->nama_mobil }}">
                            @else
                                <img src="https://via.placeholder.com/300" class="card-img-top" alt="No image available">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{ $mobil->nama_mobil }}</h5>
                                <p class="card-text">{{ $mobil->tahun }} | Rp. {{ number_format($mobil->harga, 0, ',', '.') }}</p>
                                <p class="card-text">{{ $mobil->nopol }} | {{ $mobil->bahan_bakar }}</p>
                                <p class="card-text">{{ $mobil->transmisi }}</p>
                                <a href="{{ route('mobils.show', $mobil->id) }}" class="btn btn-primary">Lihat Detail</a>
                                <a href="{{ route('mobils.edit', $mobil->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('mobils.destroy', $mobil->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
