@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-4">
        <div class="col-md-4 text-center mt-2 mb-2">
            <a><img src="img/test.jpg" class="img mt-5 mb-2" alt="" width="100" /></a>

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin">
                <h1 class="h3 mt-2 mb-3 fw-normal d-flex align-items-center justify-content-center text-center h-100">Login</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating mb-1">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-floating mb-1">
                    <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                    <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered? <a href="/user">Register Now!</a></small>
            </main>
        </div>
    </div>

@endsection