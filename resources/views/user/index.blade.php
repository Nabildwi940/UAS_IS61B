@extends('layouts.user')

@section('title', 'Khalis Cars')

@section('content')
<div class="container text-center mt-4">
    <h1 class="mb-4" style="font-family: 'Bebas Neue', sans-serif; line-height: 0.0;">Mobil Garasi Kampus</h1>

    <p class="lead text-left" style="font-family: 'Playfair Display', serif; font-size: 1.5rem; line-height: 1.5;">Temukan Mobil Impian Anda dengan Harga Terjangkau</p>

    <p class="text-white mb-5 text-left" style="font-family: 'Caveat', cursive; font-size: 1.4rem;">Pilihan Mobil Bekas Berkualitas di Sini!</p>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach ($mobils as $m)
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ Storage::url($m->images->first()->path) }}" class="card-img-top" alt="{{ $m->nama_mobil }}" style="height: 200px; object-fit: cover;">

                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $m->nama_mobil }}</h5>
                        <p class="card-text">
                            <strong>Tahun:</strong> {{ $m->tahun }}<br>
                            <strong>Harga:</strong> Rp{{ number_format($m->harga, 0, ',', '.') }}<br>
                            <strong>Bahan Bakar:</strong> {{ $m->bahan_bakar }}<br>
                            <strong>Transmisi:</strong> {{ $m->transmisi }}
                        </p>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detail{{ $m->id }}">
                            Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal Detail -->
            <div class="modal fade" id="detail{{ $m->id }}" tabindex="-1" aria-labelledby="detailLabel{{ $m->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="detailLabel{{ $m->id }}">Detail {{ $m->nama_mobil }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center mb-3">
                                <img src="{{ Storage::url($m->images->first()->path) }}" alt="{{ $m->nama_mobil }}" class="img-fluid" style="max-height: 400px; object-fit: cover;">
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td><strong>Nama:</strong></td>
                                        <td>{{ $m->nama_mobil }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Harga:</strong></td>
                                        <td>Rp{{ number_format($m->harga, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tahun:</strong></td>
                                        <td>{{ $m->tahun }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Warna:</strong></td>
                                        <td>{{ $m->warna }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Kilometer:</strong></td>
                                        <td>{{ number_format($m->kilometer, 0, ',', '.') }} km</td>
                                    </tr>
                                    <tr>
                                        <td><strong>CC Mesin:</strong></td>
                                        <td>{{ $m->cc_mesin }} cc</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Bahan Bakar:</strong></td>
                                        <td>{{ $m->bahan_bakar }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Transmisi:</strong></td>
                                        <td>{{ $m->transmisi }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Jumlah Seat:</strong></td>
                                        <td>{{ $m->jumlah_seat }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Deskripsi:</strong></td>
                                        <td>{{ $m->deskripsi }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Detail -->
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
