@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Siswa - {{ $regis->name }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive col-lg-8">
        <div class="col-md-6">
          <form action="/dashboard/posts/show" class="form-inline">
          </form>
        </div>
      </div>
      <div class="text-center mb-5">
        <img src="{{ asset('storage/' . $regis->foto) }}" alt="{{ $regis->foto }}" class="img-thumbnail" width="200">
      </div>
      <div class="text-center">
        <small>Nama :</small><br>
        <h2>{{  $regis->name  }}</h2>
        <small>Gender :</small><br>
        <h4>{{ $regis->gender }}</h4>
        <small>Tempat Lahir : </small>
        <h5>{{ $regis->tmptlahir }}</h5>
        <small>Alamat Asal :</small>
        <h5>{{ $regis->almtasal }}</h5>
        <small>Tempat Lahir :</small>
        <h5>{{ $regis->tmptlahir }}</h5>
        <small>Bidang yang diambil : </small>
        <h6>{{ $regis->bidang }}</h6><br>
        <div class="text-center mb-5">
          <img src="{{ asset('storage/' . $regis->ijazah) }}" alt="{{ $regis->ijazah }}" class="img-fluid" width="200">
          <img src="{{ asset('storage/' . $regis->kk) }}" alt="{{ $regis->kk }}" class="img-fluid" width="200">
        </div>


      </div>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No Ijazah</th>
              <th scope="col">Alamat asal Sekolah</th>
              <th scope="col">Nama Ayah</th>
              <th scope="col">Nama Ibu</th>
              <th scope="col">Pekerjaan Ayah</th>
              <th scope="col">Pekerjaan Ibu</th>
              <th scope="col">Alamat Ortu</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
                <tr>
                <td>{{ $regis->noijazah }}</td>
                <td>{{ $regis->almtasalsklh }}</td>
                <td>{{ $regis->nmayah }}</td>
                <td>{{ $regis->nmibu }}</td>
                <td>{{ $regis->pkrjayah }}</td>
                <td>{{ $regis->pkrjibu }}</td>
                <td>{{ $regis->almtortu }}</td>
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
          </tbody>
        </table>
        <small class="d-block mt-4 mb-4 text-center">Back? <a href="/dashboard/posts">Kik Disini!</a></small>
      </div>
@endsection