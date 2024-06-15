@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5 offset-md-7">
            <div class="card">
                     </center>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material">
                        <div class="form-group">
                            <label class="col-md-12">Nama</label>
                            <div class="col-md-12">
                                <input type="text" value="{{ Auth::user()->name }}" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" value="{{ Auth::user()->email }}" class="form-control form-control-line" name="example-email" id="example-email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="password" value="password" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">No Hp</label>
                            <div class="col-md-12">
                                <input type="text" value="{{ Auth::user()->phone }}" class="form-control form-control-line">
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
</div>
@endsection
 