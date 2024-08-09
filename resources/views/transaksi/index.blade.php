@extends('layouts.app')

@section('content')
<div id="main-wrapper">
    <div class="page-wrapper" style="margin-left: 0; padding-top: 10px;">
        <div class="container-fluid" style="padding-left: 0;">

            <div class="row page-titles mb-4">
                <div class="col-md-6 align-self-center">
                    <h3 class="text-themecolor font-weight-bold">Daftar Transaksi</h3>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Transaksi Baru
            </a>

            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pembeli</th>
                                    <th>Nama Mobil</th>
                                    <th>Jumlah Harga Transaksi</th>
                                    <th>Status Transaksi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transaksi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->pembeli->nama }}</td>
                                        <td>{{ $item->mobil->nama_mobil }}</td>
                                        <td>Rp{{ number_format($item->jumlah_harga_transaksi, 0, ',', '.') }}</td>
                                        <td>
                                            @if($item->status_transaksi == 'lunas')
                                                <span class="badge badge-success">Lunas</span>
                                            @else
                                                <span class="badge badge-warning">Belum Lunas</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('transaksi.show', $item->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i> Detail
                                                </a>
                                                <a href="{{ route('transaksi.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus transaksi ini?')">
                                                        <i class="fas fa-trash-alt"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
