@extends('layouts.main')

@section('container')
    <div class="text-center mt-5 page-top">
        <a><img src="img/test.jpg" class="img mt-5" alt="" width="100" /></a>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-5">

            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <main class="form-registration">
                <form action="/user" method="post">
                    @csrf
                    <h1 class="h3 mt-2 mb-3 fw-normal d-flex align-items-center justify-content-center text-center h-100">Registrasi</h1>
                    <div class="form-floating mb-1">
                        <input type="string" name="name" class="form-control rounded-top @error('name')is-invalid @enderror()" id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="username" class="form-control rounded-top @error('username')is-invalid @enderror()" id="username" placeholder="username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="email" class="form-control @error('email')is-invalid @enderror()" id="email" placeholder="email" required value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="password" class="form-control" data-toggle="password" @error('password')is-invalid @enderror()" id="password" placeholder="password" required value="{{ old('password') }}" >
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3 mb-4">Sudah ada Akun? <a href="/login">Login Sekarang!</a></small>
            </main>
        </div>
    </div>

<script type="text/javascript">
    $("#password").password('toggle');
</script>

@endsection