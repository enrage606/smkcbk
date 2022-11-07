<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
    table.static{
      position: relative;
      border: 1px solid #543535;
    }
    .aligncenter {
        text-align: center;
    }
  </style>
  <div class="aligncenter">
    <img src="{{ asset('img/test.jpg') }}" width="100">
    <title>Cetak Data Siswa</title>
  </div>
  
  
</head>
<body>
  
  <div class="table-responsive col-lg-8 justify-content-between">
    <div class="row">
      <div class="col-md-6"></div>
      
    </div>
      <table class="static" align="center" rules="all" border="1px" style="width:100%">        
        <h1 align="center"><b>Laporan Data Siswa</b></h1>
        <thead align="center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Alamat asal</th>
            <th scope="col">Bidang</th>
            <th scope="col">No Ijazah</th>
            <th scope="col">Alamat asal Sekolah</th>
            <th scope="col">Nama Ayah</th>
            <th scope="col">Nama Ibu</th>
            <th scope="col">Pekerjaan Ayah</th>
            <th scope="col">Pekerjaan Ibu</th>
            <th scope="col">Alamat Ortu</th>
            <th scope="col">Ijazah</th>
            <th scope="col">KK</th>
          </tr>
        </thead>
        <tbody align="center">
          @foreach ($registrasi as $regis)
              <tr>
              <td>{{ $loop->iteration }}</td>
              <td><img src="{{ asset('storage/' . $regis->foto) }}" alt="{{ $regis->foto }}" class="img-fluid" style="max-height: 80px"></td>
              <td>{{ $regis->name }}</td>
              <td>{{ $regis->tmptlahir }}</td>
              <td>{{ $regis->almtasal }}</td>
              <td>{{ $regis->bidang }}</td>
              <td>{{ $regis->noijazah }}</td>
              <td>{{ $regis->almtasalsklh }}</td>
              <td>{{ $regis->nmayah }}</td>
              <td>{{ $regis->nmibu }}</td>
              <td>{{ $regis->pkrjayah }}</td>
              <td>{{ $regis->pkrjibu }}</td>
              <td>{{ $regis->almtortu }}</td>
              <td><img src="{{ asset('storage/' . $regis->ijazah) }}" alt="{{ $regis->ijazah }}" class="img-fluid" style="max-height: 80px"></td>
              <td><img src="{{ asset('storage/' . $regis->kk) }}" alt="{{ $regis->kk }}" class="img-fluid" style="max-height: 80px"></td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script type="text/javascript">
      window.print();
    </script>
</body>
</html>