<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil Garasi Kampus</title>
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F0F0F5;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #39508E;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }
        .header img {
            height: 50px;
            margin: 0 20px;
            vertical-align: middle;
        }
        .header .contact {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }
        .header .contact span {
            margin-left: 10px;
        }
        .header .login-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #F0F0F5;
            border: none;
            color: #39508E;
            padding: 5px 10px;
            cursor: pointer;
        }
        .header h1 {
            margin: 0;
            display: inline-block;
            vertical-align: middle;
        }
        .container {
            padding: 20px;
            text-align: center;
        }
        .container h2 {
            margin-bottom: 20px;
            color: #39508E;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            width: 180px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            background-color: white;
            text-align: left;
        }
        .card img {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }
        .card-body {
            padding: 10px;
        }
        .card-body h3 {
            font-size: 14px;
            margin: 0;
            color: #333;
        }
        .card-body p {
            font-size: 12px;
            margin: 5px 0;
            color: #666;
        }
        .detail-button {
            width: 100%;
            text-align: center;
            background-color: #39508E;
            color: white;
            padding: 5px;
            text-decoration: none;
            border: none;
            border-radius: 0 0 8px 8px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>Mobil Garasi Kampus</h1>
        <div class="contact">
            <img src="{{ asset('images/phone_icon.png') }}" alt="Phone Icon">
            <span>085277281998</span>
            <img src="{{ asset('images/instagram_icon.png') }}" alt="Instagram Icon">
            <span>@mobil_garasikampus</span>
        </div>
        <button class="login-button">Login</button>
    </div>
    <div class="container">
        <h2>Temukan Mobil Impian Anda dengan Harga Terjangkau</h2>
        <p>— Pilihan Mobil Bekas Berkualitas di Sini!</p>
        <div class="card-container">
            @foreach ($mobil as $mobil)
                <div class="card">
                    <img src="{{ asset('images/' . $mobil->gambar) }}" alt="{{ $mobil->nama }}">
                    <div class="card-body">
                        <h3>{{ $mobil->nama }}</h3>
                        <p>Tahun: {{ $mobil->tahun }}</p>
                        <p>Transmisi: {{ $mobil->transmisi }}</p>
                    </div>
                    <button class="detail-button" data-toggle="modal" data-target="#detail{{ $mobil->id }}">Detail</button>
                </div>
                <!-- Modal Detail -->
                <div class="modal fade" id="detail{{ $mobil->id }}" tabindex="-1" aria-labelledby="detailLabel{{ $mobil->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="detailLabel{{ $mobil->id }}">Detail {{ $mobil->nama }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nama</td>
                                            <th>{{ $mobil->nama }}</th>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <th>Rp{{ number_format($mobil->harga, 0, ',', '.') }}</th>
                                        </tr>
                                        <tr>
                                            <td>Tahun</td>
                                            <th>{{ $mobil->tahun }}</th>
                                        </tr>
                                        <tr>
                                            <td>Warna</td>
                                            <th>{{ $mobil->warna }}</th>
                                        </tr>
                                        <tr>
                                            <td>Kilometer</td>
                                            <th>{{ $mobil->kilometer }}</th>
                                        </tr>
                                        <tr>
                                            <td>CC Mesin</td>
                                            <th>{{ $mobil->cc_mesin }}</th>
                                        </tr>
                                        <tr>
                                            <td>Transmisi</td>
                                            <th>{{ $mobil->transmisi }}</th>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Seat</td>
                                            <th>{{ $mobil->jumlah_seat }}</th>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <th>{{ $mobil->deskripsi }}</th>
                                        </tr>
                                        <tr>
                                            <td>Gambar</td>
                                            <th><img src="{{ asset('images/' . $mobil->gambar) }}" alt="{{ $mobil->nama }}" style="width: 100%; height: auto;"></th>
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

    <!-- All Jquery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
</body>
</html>
