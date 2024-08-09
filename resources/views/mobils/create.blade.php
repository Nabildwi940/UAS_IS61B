@extends('layouts.app')

@section('title', 'Tambah Mobil')

@section('content')
<div id="main-wrapper">
    <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
        <div class="container-fluid" style="padding-left: 0;">

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Perhatikan!</strong> Ada beberapa masalah dengan input Anda.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Tambah Mobil Baru</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('mobils.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nama_mobil">Nama Mobil</label>
                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="{{ old('nama_mobil') }}" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="harga">Harga</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">RP</span>
                                    </div>
                                    <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="tahun">Tahun</label>
                                <input type="number" class="form-control" id="tahun" name="tahun" value="{{ old('tahun') }}" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="warna">Warna</label>
                                <input type="text" class="form-control" id="warna" name="warna" value="{{ old('warna') }}" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="nopol">Nomor Polisi</label>
                                <input type="text" class="form-control" id="nopol" name="nopol" value="{{ old('nopol') }}" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="kilometer">Kilometer</label>
                                <input type="number" class="form-control" id="kilometer" name="kilometer" value="{{ old('kilometer') }}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="bahan_bakar">Bahan Bakar</label>
                                <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" value="{{ old('bahan_bakar') }}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="cc_mesin">CC Mesin</label>
                                <input type="number" class="form-control" id="cc_mesin" name="cc_mesin" value="{{ old('cc_mesin') }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="transmisi">Transmisi</label>
                                <input type="text" class="form-control" id="transmisi" name="transmisi" value="{{ old('transmisi') }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="jumlah_seat">Jumlah Seat</label>
                                <input type="number" class="form-control" id="jumlah_seat" name="jumlah_seat" value="{{ old('jumlah_seat') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="images">Gambar Mobil</label>
                            <input type="file" class="form-control" id="images" name="images[]" multiple>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
