@extends('layout/main')

@section('title', 'Create new Book')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <h1 class="mt-3">Create new Book</h1>

            <form action="/books" method="post">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul :</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Masukkan Judul" name="judul" value="{{ old('judul') }}">
                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="penulis">Penulis :</label>
                    <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" placeholder="Masukkan Penulis" name="penulis" value="{{ old('penulis') }}">
                    @error('penulis')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" placeholder="Masukkan stok" name="stok"  value="{{ old('stok') }}">
                    @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan deskripsi" name="deskripsi"  value="{{ old('deskripsi') }}"></textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/books" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
