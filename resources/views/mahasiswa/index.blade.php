@extends('layout/main')

@section('title', 'Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1 class="mt-3">List of Student</h1>

            <a href="/mahasiswa/create" class="btn btn-primary mb-3">Add new Student</a>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Username</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nrp }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>{{ $mhs->user->name }}</td>
                        <td>
                            <a href="/mahasiswa/{{ $mhs->id }}" class="badge badge-success">Lihat</a>
                            <a href="/mahasiswa/{{ $mhs->id }}" class="badge badge-warning">Ubah</a>
                            <a href="/mahasiswa/{{ $mhs->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
