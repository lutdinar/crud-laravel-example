@extends('layout/main')

@section('title', 'List of Books')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-3">List of Books</h1>

            <a href="books/create" class="btn btn-primary">Add new book</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->penulis }}</td>
                        <td>{{ $book->stok }}</td>
                        <td>{{ $book->deskripsi }}</td>
                        <td>
                            <a href="/books/{{ $book->id }}" class="badge badge-success">Ubah</a>
                            <a href="/books/delete?id={{ $book->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
