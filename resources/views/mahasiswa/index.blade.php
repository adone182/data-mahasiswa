@extends('layout.main')

@section('title', 'Data Mahasiwa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">DATA MAHASISWA</h1>
                <table class="table table-bordered">
                    <thead class="table table-dark">
                        <tr>
                           <th scope="col">NO</th>
                           <th scope="col">Nama</th>
                           <th scope="col">NIM</th>
                           <th scope="col">Email</th>
                           <th scope="col">Jurusan</th>
                           <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $mhs)
                            
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->nim }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>{{ $mhs->jurusan }}</td>
                            <td>
                                <a href="" class="badge bg-success">Edit</a>
                                <a href="" class="badge bg-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection