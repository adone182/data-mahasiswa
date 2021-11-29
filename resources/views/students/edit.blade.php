@extends('layout.main')

@section('title', 'Form Ubah Data Mahasiwa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">FORM UBAH DATA MAHASISWA</h1>
                <form method="POST" action="/students/{{ $student->id }}">
                    @method('patch')
                    @csrf
  <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror"
     id="nama" name="nama" placeholder="Masukan Nama Anda" value="{{ $student->nama }}">
     @error('nama')
    <div class="invalid-feedback">
      {{ $message }}
    </div>       
     @enderror
  </div>
  <div class="form-group">
    <label for="nim">NIM</label>
    <input type="text" class="form-control @error('nim') is-invalid @enderror" 
    id="nim" name="nim" placeholder="Masukan NIM Anda" value="{{ $student->nim }}">
    @error('nim')
    <div class="invalid-feedback">
      {{ $message }}   
    </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" 
    id="email" name="email" placeholder="Masukan Email Anda" value="{{ $student->email }}">
  @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
  @enderror
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror"
     id="jurusan" name="jurusan" placeholder="Masukan Jurusan Anda" value="{{ $student->jurusan }}">
     @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
    @enderror
    </div>
 <button type="submit" class="btn btn-primary mt-3">Update Data</button>
</form>
            </div>
        </div>
    </div>
@endsection