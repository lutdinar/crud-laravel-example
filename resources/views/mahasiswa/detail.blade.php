@extends('layout/main')

@section('title', 'Detail Student')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4">

            <h1 class="my-3">Detail Mahasiswa</h1>
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#student">Identitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#user">Akun</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content card-body">
                    <div id="student" class="tab-pane active">
                        <h5 class="card-title">{{ $student->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
                        <p class="card-text">{{ $student->jurusan }}</p>
                    </div>
                    <div id="user" class="tab-pane">
                        <h6 class="card-subtitle mb-2 text-muted">{{ $student->user->name }}</h6>
                        <p class="card-text">{{ $student->user->email }}</p>
                    </div>
                </div>
            </div>

            <a href="/mahasiswa" class="btn btn-primary mt-3">Kembali</a>

        </div>
    </div>
</div>
@endsection
