@extends('layouts.app')

@section('content')
    <div id="main-wrapper">
        <!-- Page wrapper -->
        <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
            <div class="container-fluid" style="padding-left: 0;">
                <!-- Page title and button -->
                <div class="row page-titles" style="margin-left: -5;">
                    <div class="col-md-6 align-self-center">
                        <h3 class="text-themecolor">Daftar Mobil</h3>
                    </div>
                    <div class="col-md-6 align-self-center text-right" style="padding-right: 0;">
                        <button type="button" class="btn btn-primary" style="margin-right: 10px;" onclick="window.location='{{ route("mobil.create") }}'">Tambah Mobil</button>
                    </div>
                </div>
                <!-- End Page title and button -->

                <!-- Alert for success -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Card container for cars -->
                <div class="card-container" style="display: flex; flex-wrap: wrap; gap: 10px; padding-left: 0; margin-top: 10px;">
                    @foreach ($mobil as $m)
                        <div class="card" style="width: 200px; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                            <img src="{{ asset('images/' . $m->gambar) }}" alt="{{ $m->nama }}" style="width: 100%; height: 120px; object-fit: cover;">
                            <div class="card-body" style="padding: 10px;">
                                <h3 style="font-size: 16px; margin: 0;">{{ $m->nama }}</h3>
                                <p style="font-size: 14px; margin: 5px 0;">Rp{{ number_format($m->harga, 0, ',', '.') }}</p>
                                <p style="font-size: 12px; margin: 5px 0;">Tahun: {{ $m->tahun }}</p>
                                <p style="font-size: 12px; margin: 5px 0;">Warna: {{ $m->warna }}</p>
                                <p style="font-size: 12px; margin: 5px 0;">Nopol: {{ $m->nopol }}</p>
                                <div class="button-container" style="display: flex; justify-content: space-between;">
                                    <button type="button" class="btn btn-primary btn-sm" onclick="window.location='{{ route("mobil.show", $m->id) }}'">Details</button>
                                    <button type="button" class="btn btn-success btn-sm" onclick="window.location='{{ route("mobil.edit", $m->id) }}'">Edit</button>
                                    <form action="{{ route('mobil.destroy', $m->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End Card container -->
            </div>
            <!-- End Container fluid -->
        </div>
        <!-- End Page wrapper -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
@endsection
