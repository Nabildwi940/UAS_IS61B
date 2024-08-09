@extends('layouts.app')

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
            <div class="container-fluid" style="padding-left: 0;">
                <div class="row page-titles" style="margin-left: -5;">
                    <div class="col-md-6 align-self-center">
                        <h3 class="text-themecolor">Tambah Transaksi</h3>
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

                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="pembeli_id">Nama Pembeli</label>
                        <select name="pembeli_id" id="pembeli_id" class="form-control">
                            @foreach($pembelis as $pembeli)
                                <option value="{{ $pembeli->id }}">{{ $pembeli->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mobil_id">Nama Mobil</label>
                        <select name="mobil_id" id="mobil_id" class="form-control">
                            @foreach($mobils as $mobil)
                                <option value="{{ $mobil->id }}" data-harga="{{ $mobil->harga }}">{{ $mobil->nama_mobil }} ---- {{ $mobil->nopol }}</option>
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
                        <select name="jumlah_harga_transaksi" id="jumlah_harga_transaksi" class="form-control">
                            <!-- Opsi akan diisi oleh JavaScript -->
                        </select>
                        <input type="number" id="custom_harga" name="custom_harga" class="form-control" placeholder="Masukkan nominal lain" style="display: none;">
                    </div>

                    <div class="form-group">
                        <label for="status_transaksi">Status Transaksi</label>
                        <input type="text" class="form-control" id="status_transaksi" name="status_transaksi" value="{{ old('status_transaksi') }}">
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobilSelect = document.getElementById('mobil_id');
        const hargaSelect = document.getElementById('jumlah_harga_transaksi');
        const customHargaInput = document.getElementById('custom_harga');
        const hargaMobilRadio = document.getElementById('harga_mobil');
        const nominalLainRadio = document.getElementById('nominal_lain');

        mobilSelect.addEventListener('change', function() {
            if (hargaMobilRadio.checked) {
                const selectedOption = mobilSelect.options[mobilSelect.selectedIndex];
                const harga = selectedOption.getAttribute('data-harga');

                // Hapus semua opsi harga yang ada
                hargaSelect.innerHTML = '';

                // Tambahkan opsi harga baru
                const option = document.createElement('option');
                option.value = harga;
                option.textContent = harga;
                hargaSelect.appendChild(option);

                // Set nilai harga jika harga mobil dipilih
                customHargaInput.value = '';
            }
        });

        hargaMobilRadio.addEventListener('change', function() {
            hargaSelect.style.display = 'block';
            customHargaInput.style.display = 'none';
        });

        nominalLainRadio.addEventListener('change', function() {
            hargaSelect.style.display = 'none';
            customHargaInput.style.display = 'block';
        });

        // Set default harga saat halaman pertama kali dimuat jika ada mobil yang dipilih
        mobilSelect.dispatchEvent(new Event('change'));
    });
    </script>
@endsection
