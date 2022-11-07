@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Calon Siswa</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive col-lg-8">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-3"><span data-feather="user-plus"></span></a>
      <a href="/dashboard/posts/print" class="btn btn-danger mb-3" method="POST"><span data-feather="printer"></span></a>
        <div class="col-md-6">
          <form action="/dashboard/posts/search" class="form-inline">
            <div class="input-group mb-3 ">
              <input type="search" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
              <button class="btn btn-success" type="submit"><span data-feather="search"></span></button>
            </div>
          </form>
        </div>
      </div>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Foto</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Alamat asal</th>
              <th scope="col">Bidang</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($registrasi as $regis)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td><img src="{{ asset('storage/' . $regis->foto) }}" alt="{{ $regis->foto }}" class="img-fluid" style="max-height: 80px"></td>
                <td>{{ $regis->name }}</td>
                <td>{{ $regis->gender }}</td>
                <td>{{ $regis->tmptlahir }}</td>
                <td>{{ $regis->almtasal }}</td>
                <td>{{ $regis->bidang }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $regis->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/posts/{{ $regis->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/posts/{{ $regis->id }}" method="POST" class="d-inline" onclick="return confirm('Are U Sure')">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0">
                        <span data-feather="x-circle"></span>
                      </button>
                    </form>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection