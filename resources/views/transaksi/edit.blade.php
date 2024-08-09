@extends('layouts.app')

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
            <div class="container-fluid" style="padding-left: 0;">
                <div class="row page-titles" style="margin-left: -5;">
                    <div class="col-md-6 align-self-center">
                        <h3 class="text-themecolor">Edit Transaksi</h3>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="pembeli_id">Nama Pembeli</label>
                        <select name="pembeli_id" id="pembeli_id" class="form-control">
                            @foreach($pembelis as $pembeli)
                                <option value="{{ $pembeli->id }}" {{ $transaksi->pembeli_id == $pembeli->id ? 'selected' : '' }}>{{ $pembeli->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mobil_id">Nama Mobil</label>
                        <select name="mobil_id" id="mobil_id" class="form-control">
                            @foreach($mobils as $mobil)
                                <option value="{{ $mobil->id }}" {{ $transaksi->mobil_id == $mobil->id ? 'selected' : '' }}>{{ $mobil->nama_mobil }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Transaksi</label><br>
                        <input type="radio" id="harga_mobil" name="jenis_harga" value="mobil" checked>
                        <label for="harga_mobil">Lunas Harga</label><br>
                        <input type="radio" id="nominal_lain" name="jenis_harga" value="lainnya">
                        <label for="nominal_lain">Pembayaran DP Atau Harga Lain</label>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_harga_transaksi">Jumlah Harga Transaksi</label>
                        <input type="text" class="form-control" id="jumlah_harga_transaksi" name="jumlah_harga_transaksi" value="{{ old('jumlah_harga_transaksi', $transaksi->jumlah_harga_transaksi) }}">
                    </div>

                    <div class="form-group">
                        <label for="status_transaksi">Status Transaksi</label>
                        <input type="text" class="form-control" id="status_transaksi" name="status_transaksi" value="{{ old('status_transaksi', $transaksi->status_transaksi) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
@endsection
