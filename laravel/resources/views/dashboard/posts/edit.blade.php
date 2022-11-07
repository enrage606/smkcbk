@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Calon Siswa</h1>
</div>

<div class="col-lg-8">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    

        <form method="post" action="/dashboard/posts/{{ $regis->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <h1 class="h3 mb-3 fw-normal mt-4">Ubah Data</h1>
            <h5 class="h5 mb-3 fw-normal">Data Pribadi</h5>
            <div class="form-floating mb-1">
                <input type="string" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $regis->name) }}">
                <label for="name">Nama Lengkap Calon Siswa</label>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" class="form-control rounded-top @error('gender') is-invalid @enderror" id="gender" name="gender" required autofocus value="{{ old('gender', $regis->gender) }}">
                <label for="gender">Jenis Kelamin</label>
                @error('gender')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="tmptlahir" class="form-control @error('tmptlahir')is-invalid @enderror()" id="tmptlahir" placeholder="tmptlahir" required autofocus value="{{ old('tmptlahir', $regis->tmptlahir) }}">
                <label for="tmptlahir">Tempat Lahir</label>
                @error('tmptlahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="tgllahir" class="form-control @error('tgllahir')is-invalid @enderror()" id="tgllahir" placeholder="tgllahir" required autofocus value="{{ old('tgllahir', $regis->tgllahir) }}">
                <label for="tgllahir">Tanggal Lahir</label>
                @error('tgllahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="agama" class="form-control @error('agama')is-invalid @enderror()" id="agama" placeholder="agama" required autofocus value="{{ old('agama', $regis->agama) }}">
                <label for="agama">Agama yang Dianut</label>
                @error('agama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="almtasal" class="form-control @error('almtasal')is-invalid @enderror()" id="almtasal" placeholder="almtasal" required autofocus value="{{ old('almtasal', $regis->almtasal) }}">
                <label for="almtasal">Alamat Asal</label>
                @error('almtasal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <h5 class="h5 mt-3 mb-3 fw-normal">Data Sekolah Sebelumnya</h5>
            <div class="form-floating mb-1">
                <input type="string" name="asalsklh" class="form-control @error('asalsklh')is-invalid @enderror()" id="asalsklh" placeholder="asalsklh" required autofocus value="{{ old('asalsklh', $regis->asalsklh) }}">
                <label for="asalsklh">Sekolah Asal</label>
                @error('asalsklh')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="noijazah" class="form-control @error('noijazah')is-invalid @enderror()" id="noijazah" placeholder="noijazah" required autofocus value="{{ old('noijazah', $regis->noijazah) }}">
                <label for="noijazah">Nomor Seri Ijazah</label>
                @error('noijazah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="almtasalsklh" class="form-control @error('almtasalsklh')is-invalid @enderror()" id="almtasalsklh" placeholder="almtasalsklh" required autofocus value="{{ old('almtasalsklh', $regis->almtasalsklh) }}">
                <label for="almtasalsklh">Alamat Sekolah Asal</label>
                @error('almtasalsklh')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <h5 class="h5 mt-3 mb-3 fw-normal">Data Orang Tua</h5>
            <div class="form-floating mb-1">
                <input type="string" name="nmayah" class="form-control @error('nmayah')is-invalid @enderror()" id="nmayah" placeholder="nmayah" required autofocus value="{{ old('nmayah', $regis->nmayah) }}">
                <label for="nmayah">Nama Ayah</label>
                @error('nmayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="pkrjayah" class="form-control @error('pkrjayah')is-invalid @enderror()" id="pkrjayah" placeholder="pkrjayah" required autofocus value="{{ old('pkrjayah', $regis->pkrjayah) }}">
                <label for="pkrjayah">Pekerjaan Ayah</label>
                @error('pkrjayah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="nmibu" class="form-control @error('nmibu')is-invalid @enderror()" id="nmibu" placeholder="nmibu" required autofocus value="{{ old('nmibu', $regis->nmibu) }}">
                <label for="nmibu">Nama Ibu</label>
                @error('nmibu')
                    <div class="invalid-feedback">{{ $message }}
                </div>@enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="pkrjibu" class="form-control @error('pkrjibu')is-invalid @enderror()" id="pkrjibu" placeholder="pkrjibu" required autofocus value="{{ old('pkrjibu', $regis->pkrjibu) }}">
                <label for="pkrjibu">Pekerjaan Ibu</label>
                @error('pkrjibu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-floating mb-1">
                <input type="string" name="almtortu" class="form-control @error('almtortu')is-invalid @enderror()" id="almtortu" placeholder="almtortu" required autofocus value="{{ old('almtortu', $regis->almtortu) }}">
                <label for="almtortu">Alamat Orang Tua</label>
                @error('almtortu')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <h5 class="h5 mt-3 mb-3 fw-normal">Dokumen Yang Perlu diupload</h5>
            <div class="form-group mb-3">
                <label for="bidang">Progran Keahlian yang diminati (Pilih Satu) :</label>
                <select class="form-select" id="bidang" name="bidang">
                    @foreach ($bidangs as $bidang)
                    @if (old('bidang', $regis->bidang) == $bidang->bidang)
                        <option value="{{ $bidang->bidang }}" selected>{{ $bidang->bidang }}</option>
                    @endif
                        <option value="{{ $bidang->bidang }}">{{ $bidang->bidang }}</option>
                        
                    @endforeach
                </select>
            </div>
              <div class="form-group mb-3">
                <label for="foto" class="mb-1">Pas Foto</label>
                <input type="hidden" name="oldFoto" value="{{ $regis->foto }}">
                @if($regis->foto)
                    <img src="{{ asset('storage/' . $regis->foto) }}" class="foto-preview img-fluid mb-3 col-sm-4 d-block">
                @else
                    <img class="foto-preview img-fluid mb-3 col-sm-4">
                @endif
                <input type="file" name="foto" class="form-control mt-1 @error('foto')is-invalid @enderror()" id="foto" placeholder="foto" onchange="previewfoto()" value="{{ old('foto', $regis->foto) }}">
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-group mb-3">
                <label for="ijazah" class="mb-1">Ijazah</label>
                <input type="hidden" name="oldIjazah" value="{{ $regis->ijazah }}">
                @if($regis->ijazah)
                    <img src="{{ asset('storage/' . $regis->ijazah) }}" class="ijazah-preview img-fluid mb-3 col-sm-4 d-block">
                @else
                    <img class="ijazah-preview img-fluid mb-3 col-sm-4">
                @endif
                <input type="file" name="ijazah" class="form-control mt-1 @error('ijazah')is-invalid @enderror()" id="ijazah" placeholder="ijazah" onchange="previewijazah()" value="{{ old('ijazah', $regis->ijazah) }}">
                @error('ijazah')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <div class="form-group mb-3">
                <label for="kk" class="mb-1">Kartu Keluarga</label>
                <input type="hidden" name="oldKk" value="{{ $regis->kk }}">
                @if($regis->kk)
                    <img src="{{ asset('storage/' . $regis->kk) }}" class="kk-preview img-fluid mb-3 col-sm-4 d-block">
                @else
                    <img class="kk-preview img-fluid mb-3 col-sm-4">
                @endif
                
                <input type="file" name="kk" class="form-control mt-1 @error('kk')is-invalid @enderror()" id="kk" placeholder="kk" onchange="previewkk()" value="{{ old('kk', $regis->kk) }}">
                @error('kk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror()
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Ubah Data</button>
        </form>
        <small class="d-block mt-3 mb-4">Kembali? <a href="/dashboard/posts">Klik Disini!</a></small>
        <script>
            function previewfoto(){
                const foto = document.querySelector('#foto');
                const fotopreview = document.querySelector('.foto-preview');            
                fotopreview.style.display = 'block';
    
                const oFReader = new FileReader();
                oFReader.readAsDataURL(foto.files[0]);
                oFReader.onload = function(oFEvent){
                    fotopreview.src = oFEvent.target.result;
                }
            }
            function previewijazah(){
                const ijazah = document.querySelector('#ijazah');
                const ijazahpreview = document.querySelector('.ijazah-preview');
                ijazahpreview.style.display = 'block';
    
                const oFReader = new FileReader();
                oFReader.readAsDataURL(ijazah.files[0]);
                oFReader.onload = function(oFEvent){
                    ijazahpreview.src = oFEvent.target.result;
                }
            }
            function previewkk(){
                const kk = document.querySelector('#kk');
                const kkpreview = document.querySelector('.kk-preview');
                kkpreview.style.display = 'block';
    
                const oFReader = new FileReader();
                oFReader.readAsDataURL(kk.files[0]);
                oFReader.onload = function(oFEvent){
                    kkpreview.src = oFEvent.target.result;
                }
            }
        </script>
</div>


@endsection