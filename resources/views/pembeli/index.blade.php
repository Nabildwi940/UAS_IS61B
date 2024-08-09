@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary font-weight-bold">Daftar Pembeli</h1>
        <a href="{{ route('pembeli.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Pembeli
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">
        @foreach ($pembelis as $p)
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm rounded-lg">
                    <div class="card-body p-4 text-left">
                        <h5 class="card-title font-weight-bold text-dark">{{ $p->nama }}</h5>
                        <p class="card-text mb-2"><i class="fas fa-map-marker-alt text-muted"></i> <strong>Alamat:</strong> {{ $p->alamat }}</p>
                        <p class="card-text mb-2"><i class="fas fa-phone text-muted"></i> <strong>Telepon:</strong> {{ $p->telepon }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#edit{{ $p->id }}">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <form action="{{ route('pembeli.destroy', $p->id) }}" method="POST" class="m-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pembeli ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit -->
                <div class="modal fade" id="edit{{ $p->id }}" tabindex="-1" aria-labelledby="editLabel{{ $p->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editLabel{{ $p->id }}">Edit Pembeli {{ $p->nama }}</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('pembeli.update', $p->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $p->nama) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $p->alamat) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="telepon">Telepon</label>
                                        <input type="text" class="form-control" id="telepon" name="telepon" value="{{ old('telepon', $p->telepon) }}" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Edit -->
            </div>
        @endforeach
    </div>
</div>
@endsection
