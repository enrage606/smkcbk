@extends('layouts.main')

@section('container')
    <div class="text-center mt-5  page-top">
        <a><img src="img/test.jpg" class="img mt-5" alt="" width="100" /></a>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-5">

            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            
            <main class="form-registration">
                <form action="/register" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center mt-4">Registrasi</h1>
                    <h5 class="h5 mb-3 fw-normal text-center">Data Pribadi</h5>
                    <div class="form-floating mb-1">
                        <input type="string" name="name" class="form-control rounded-top @error('name')is-invalid @enderror()" id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name" class="mb-3">Nama Lengkap Calon Siswa</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <label for="gender" class="form-floating mb-1">Jenis Kelamin :</label><br>
                    <div class="form-floating mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Laki-Laki" required @if(old('gender')) checked @endif>
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Perempuan" @if(old('gender')) checked @endif>
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="tmptlahir" class="form-control @error('tmptlahir')is-invalid @enderror()" id="tmptlahir" placeholder="tmptlahir" required value="{{ old('tmptlahir') }}">
                        <label for="tmptlahir">Tempat Lahir</label>
                        @error('tmptlahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="tgllahir" class="form-control @error('tgllahir')is-invalid @enderror()" id="tgllahir" placeholder="tgllahir" required value="{{ old('tgllahir') }}">
                        <label for="tgllahir">Tanggal Lahir (dd/mm/yyyy)</label>
                        @error('tgllahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="agama" class="form-control @error('agama')is-invalid @enderror()" id="agama" placeholder="agama" required value="{{ old('agama') }}">
                        <label for="agama">Agama yang Dianut</label>
                        @error('agama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="almtasal" class="form-control @error('almtasal')is-invalid @enderror()" id="almtasal" placeholder="almtasal" required value="{{ old('almtasal') }}">
                        <label for="almtasal">Alamat Asal</label>
                        @error('almtasal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <h5 class="h5 mt-3 mb-3 fw-normal text-center">Data Sekolah Sebelumnya</h5>
                    <div class="form-floating mb-1">
                        <input type="string" name="asalsklh" class="form-control @error('asalsklh')is-invalid @enderror()" id="asalsklh" placeholder="asalsklh" required value="{{ old('asalsklh') }}">
                        <label for="asalsklh">Sekolah Asal</label>
                        @error('asalsklh')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="noijazah" class="form-control @error('noijazah')is-invalid @enderror()" id="noijazah" placeholder="noijazah" required value="{{ old('noijazah') }}">
                        <label for="noijazah">Nomor Seri Ijazah</label>
                        @error('noijazah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="almtasalsklh" class="form-control @error('almtasalsklh')is-invalid @enderror()" id="almtasalsklh" placeholder="almtasalsklh" required value="{{ old('almtasalsklh') }}">
                        <label for="almtasalsklh">Alamat Sekolah Asal</label>
                        @error('almtasalsklh')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <h5 class="h5 mt-3 mb-3 fw-normal text-center">Data Orang Tua</h5>
                    <div class="form-floating mb-1">
                        <input type="string" name="nmayah" class="form-control @error('nmayah')is-invalid @enderror()" id="nmayah" placeholder="nmayah" required value="{{ old('nmayah') }}">
                        <label for="nmayah">Nama Ayah</label>
                        @error('nmayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="pkrjayah" class="form-control @error('pkrjayah')is-invalid @enderror()" id="pkrjayah" placeholder="pkrjayah" required value="{{ old('pkrjayah') }}">
                        <label for="pkrjayah">Pekerjaan Ayah</label>
                        @error('pkrjayah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="nmibu" class="form-control @error('nmibu')is-invalid @enderror()" id="nmibu" placeholder="nmibu" required value="{{ old('nmibu') }}">
                        <label for="nmibu">Nama Ibu</label>
                        @error('nmibu')
                            <div class="invalid-feedback">{{ $message }}
                        </div>@enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="pkrjibu" class="form-control @error('pkrjibu')is-invalid @enderror()" id="pkrjibu" placeholder="pkrjibu" required value="{{ old('pkrjibu') }}">
                        <label for="pkrjibu">Pekerjaan Ibu</label>
                        @error('pkrjibu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-floating mb-1">
                        <input type="string" name="almtortu" class="form-control @error('almtortu')is-invalid @enderror()" id="almtortu" placeholder="almtortu" required value="{{ old('almtortu') }}">
                        <label for="almtortu">Alamat Orang Tua</label>
                        @error('almtortu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <h5 class="h5 mt-3 mb-3 fw-normal text-center">Dokumen Yang Perlu diupload</h5>
                    <div class="form-group mb-3">
                        <label for="bidang">Progran Keahlian yang diminati (Pilih Satu) :</label>
                        <select class="form-select" id="bidang" name="bidang">
                            @foreach ($bidangs as $bidang)
                                <option value="{{ $bidang->bidang }}" {{ old('bidang') == $bidang->id ? 'selected' : null }}>{{ $bidang->bidang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="foto">Pas Foto</label>
                        <img class="foto-preview img-fluid mb-3 col-sm-4">
                        <input type="file" name="foto" class="form-control mt-1 @error('foto')is-invalid @enderror()" id="foto" placeholder="foto" onchange="previewfoto()" required value="{{ old('foto') }}">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-group mb-3">
                        <label for="ijazah">Ijazah</label>
                        <img class="ijazah-preview img-fluid mb-3 col-sm-4">
                        <input type="file" name="ijazah" class="form-control mt-1 @error('ijazah')is-invalid @enderror()" id="ijazah" placeholder="ijazah" onchange="previewijazah()" required value="{{ old('ijazah') }}">
                        @error('ijazah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <div class="form-group mb-3">
                        <label for="kk">Kartu Keluarga</label>
                        <img class="kk-preview img-fluid mb-3 col-sm-4">
                        <input type="file" name="kk" class="form-control mt-1 @error('kk')is-invalid @enderror()" id="kk" placeholder="kk" onchange="previewkk()" required value="{{ old('kk') }}">
                        @error('kk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror()
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
                </form>
                <small class="d-block text-center mt-3 mb-4">Kembali ke Halaman Utama? <a href="/">Klik Disini!</a></small>
            </main>
        </div>
    </div>
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

@endsection