@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center text-primary font-weight-bold">Daftar Mobil</h1>

    <a href="{{ route('mobils.create') }}" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Tambah Mobil
    </a>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        @foreach ($mobils as $mobil)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 rounded-lg h-100">
                    <img src="{{ Storage::url($mobil->images->first()->path) }}" class="card-img-top" alt="{{ $mobil->nama_mobil }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title font-weight-bold text-dark mb-4">{{ $mobil->nama_mobil }}</h5>
                        <div class="card-text flex-grow-1">
                            <p class="mb-2"><i class="fas fa-calendar-alt text-muted"></i> <strong>Tahun:</strong> {{ $mobil->tahun }}</p>
                            <p class="mb-2"><i class="fas fa-dollar-sign text-muted"></i> <strong>Harga:</strong> <span class="text-success">Rp{{ number_format($mobil->harga, 0, ',', '.') }}</span></p>
                            <p class="mb-2"><i class="fas fa-car text-muted"></i> <strong>Nopol:</strong> {{ $mobil->nopol }}</p>
                            <p class="mb-2"><i class="fas fa-gas-pump text-muted"></i> <strong>Bahan Bakar:</strong> {{ $mobil->bahan_bakar }}</p>
                            <p class="mb-2"><i class="fas fa-cogs text-muted"></i> <strong>Transmisi:</strong> {{ $mobil->transmisi }}</p>
                        </div>
                        <div class="d-flex justify-content-around mt-auto">
                            <a href="{{ route('mobils.show', $mobil->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> Detail
                            </a>
                            <a href="{{ route('mobils.edit', $mobil->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('mobils.destroy', $mobil->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
