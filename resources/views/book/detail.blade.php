@extends('layout/main')

@section('title', 'Detail Book')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <h1 class="mt-3">Detail Book</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->judul }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $book->penulis }}</h6>
                    <p class="card-text">Jumlah stok : {{ $book->stok }}</p>
                    <p class="card-text">{{ $book->deskripsi }}</p>

                    <button type="submit" class="btn btn-success">Ubah</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <a href="/books" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
