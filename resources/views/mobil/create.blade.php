@extends('layouts.app')

@section('title', 'Tambah Mobil')

@section('content')
<h2>Tambah Mobil Baru</h2>
<form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="harga">Harga:</label>
    <input type="number" name="harga" id="harga" required>
    <br>
    <label for="tahun">Tahun:</label>
    <input type="number" name="tahun" id="tahun" required>
    <br>
    <label for="warna">Warna:</label>
    <input type="text" name="warna" id="warna" required>
    <br>
    <label for="nopol">Nomor Polisi:</label>
    <input type="text" name="nopol" id="nopol" required>
    <br>
    <label for="gambar">Gambar:</label>
    <input type="file" name="gambar" id="gambar" required>
    <br>
    <button type="submit">Tambah Mobil</button>
</form>
@endsection
