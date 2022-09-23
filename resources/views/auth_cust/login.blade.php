@extends('layout.auth_main')

@section('container')
<div class="content-wrapper d-flex align-items-center mt-5 auth px-2 pt-4">  
    <div class="row w-100 mx-0 justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="px-4 ms-0">
                <img src="{{ asset('img/log.png') }}" alt="logo" class="img-fluid" width="660">
            </div>
        </div> 
        <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="border-radius: 5px; box-shadow: 0px 1px 7px #7f8c8d;"> 
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                @endif 
                <h5 class="fw-bolder">Hi, Welcome back</h5>
                <small class="fw-light">Login to continue.</small>
                @if (session()->has('LoginError'))
                <div class="alert alert-danger alert-dismissible py-1 fade show" role="alert">
                    {{ session('LoginError') }}
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div> 
                @endif  
                <form class="pt-1" action="/loginMe" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('username')is-invalid @enderror" id="username" name="username" placeholder="Username">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-block btn-primary btn-sm font-weight-medium py-1 px-4"> LOGIN</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <label class="form-check-label text-muted">
                                <input type="checkbox" class="form-check-input">
                                Keep me signed in
                            </label>
                        </div>
                        <a href="#" class="auth-link text-black">Forgot password?</a>
                    </div>
                    <div class="text-center mt-4 fw-light">
                        <!-- Don't have an account? <a href="/register" class="text-primary">Create</a> -->
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>
<!-- content-wrapper ends -->
@endsection