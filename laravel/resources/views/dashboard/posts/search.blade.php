@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Calon Siswa</h1>
    </div>
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Foto</th>
              <th scope="col">Nama</th>
              <th scope="col">Tempat Lahir</th>
              <th scope="col">Alamat asal</th>
              <th scope="col">Bidang</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>{{ $regis->id }}</td>
                <td><img src="{{ asset('storage/' . $regis->foto) }}" alt="{{ $regis->foto }}" class="img-fluid" style="max-height: 80px"></td>
                <td>{{ $regis->name }}</td>
                <td>{{ $regis->tmptlahir }}</td>
                <td>{{ $regis->almtasal }}</td>
                <td>{{ $regis->bidang }}</td>
              <td>
                  <a href="/dashboard/posts/{{ $regis->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/posts/{{ $regis->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <a href="/dashboard/posts/{{ $regis->id }}" class="badge bg-danger"><span data-feather="x-circle"></span></a>
              </td>
              </tr>
          </tbody>
        </table>
      </div>
@endsection