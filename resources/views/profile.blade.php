@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(Auth::check())
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ Auth::user()->profile_picture }}" class="rounded-circle mb-3" width="150" />
                    <h4 class="card-title">{{ Auth::user()->name }}</h4>
                    <h6 class="card-subtitle text-muted">{{ Auth::user()->job_title }}</h6>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nama</label>
                            <input type="text" id="name" value="{{ Auth::user()->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" id="email" value="{{ Auth::user()->email }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" id="password" value="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">No Hp</label>
                            <input type="text" id="phone" value="{{ Auth::user()->phone }}" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @else
        <p class="text-center">User not authenticated.</p>
        @endif
    </div>
</div>
@endsection
