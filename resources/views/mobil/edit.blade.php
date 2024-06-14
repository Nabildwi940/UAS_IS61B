@extends('layouts.app')

@section('title', 'Edit Mobil')

@section('content')
<div class="container">
    <h1>Edit Mobil</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $mobil->nama }}">
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $mobil->harga }}">
        </div>

        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $mobil->tahun }}">
        </div>

        <div class="form-group">
            <label for="warna">Warna</label>
            <input type="text" class="form-control" id="warna" name="warna" value="{{ $mobil->warna }}">
        </div>

        <div class="form-group">
            <label for="nopol">Nomor Polisi</label>
            <input type="text" class="form-control" id="nopol" name="nopol" value="{{ $mobil->nopol }}">
        </div>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar">
            <img src="{{ asset('images/' . $mobil->gambar) }}" alt="{{ $mobil->nama }}" style="max-width: 200px; margin-top: 10px;">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
