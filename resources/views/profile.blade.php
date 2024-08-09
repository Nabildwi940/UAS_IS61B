@extends('layouts.app')


@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 65vh;">
    <div class="card shadow" style="width: 100%; max-width: 400px; border: shadow;">
        <div class="card-header text-center" style="background-color: #111A54; color: white; font-weight: bold;">
            Profil
        </div>
        <div class="card-body">
            @if(Auth::check())
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group text-left">
                        <label for="name" class="col-form-label">Nama</label>
                        <input type="text" id="name" value="{{ Auth::user()->name }}" class="form-control" readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group text-left">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" id="email" value="{{ Auth::user()->email }}" class="form-control" readonly>
                    </div>
                </div>
            </div>
            @else
            <p class="text-center">User not authenticated.</p>
            @endif
        </div>
    </div>
</div>
@endsection
