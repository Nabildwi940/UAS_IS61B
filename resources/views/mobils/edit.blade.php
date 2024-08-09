@extends('layouts.app')

@section('title', 'Edit Mobil')

@section('content')
<div id="main-wrapper">
    <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
        <div class="container-fluid" style="padding-left: 0;">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('mobils.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Sama seperti create.blade.php tetapi tambahkan value untuk input -->
                <div class="form-group">
                    <label for="nama_mobil">Nama Mobil</label>
                    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="{{ $mobil->nama_mobil }}" required>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $mobil->harga }}" required>
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" class="form-control" id="tahun" name="tahun" value="{{ $mobil->tahun }}" required>
                </div>

                <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" class="form-control" id="warna" name="warna" value="{{ $mobil->warna }}" required>
                </div>

                <div class="form-group">
                    <label for="nopol">Nomor Polisi</label>
                    <input type="text" class="form-control" id="nopol" name="nopol" value="{{ $mobil->nopol }}" required>
                </div>

                <div class="form-group">
                    <label for="kilometer">Kilometer</label>
                    <input type="number" class="form-control" id="kilometer" name="kilometer" value="{{ $mobil->kilometer }}">
                </div>

                <div class="form-group">
                    <label for="bahan_bakar">Bahan Bakar</label>
                    <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" value="{{ $mobil->bahan_bakar }}">
                </div>

                <div class="form-group">
                    <label for="cc_mesin">CC Mesin</label>
                    <input type="number" class="form-control" id="cc_mesin" name="cc_mesin" value="{{ $mobil->cc_mesin }}">
                </div>

                <div class="form-group">
                    <label for="transmisi">Transmisi</label>
                    <input type="text" class="form-control" id="transmisi" name="transmisi" value="{{ $mobil->transmisi }}">
                </div>

                <div class="form-group">
                    <label for="jumlah_seat">Jumlah Seat</label>
                    <input type="number" class="form-control" id="jumlah_seat" name="jumlah_seat" value="{{ $mobil->jumlah_seat }}">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $mobil->deskripsi }}</textarea>
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
@endsection
