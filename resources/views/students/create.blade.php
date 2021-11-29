@extends('layout.main')

@section('title', 'Form Tambah Data Mahasiwa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">FORM TAMBAH DATA MAHASISWA</h1>
                <form method="POST" action="/students">
                    @csrf
  <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror"
     id="nama" name="nama" placeholder="Masukan Nama Anda" value="{{ old('nama') }}">
     @error('nama')
    <div class="invalid-feedback">
      {{ $message }}
    </div>       
     @enderror
  </div>
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control @error('nim') is-invalid @enderror" 
    id="nim" name="nim" placeholder="Masukan NIM Anda" value="{{ old('nim') }}">
    @error('nim')
    <div class="invalid-feedback">
      {{ $message }}   
    </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" 
    id="email" name="email" placeholder="Masukan Email Anda" value="{{ old('email') }}">
  @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
  @enderror
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror"
     id="jurusan" name="jurusan" placeholder="Masukan Jurusan Anda" value="{{ old('jurusan') }}">
     @error('jurusan')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
 <button type="submit" class="btn btn-primary mt-3">Add Data</button>
</form>
            </div>
        </div>
    </div>
@endsection