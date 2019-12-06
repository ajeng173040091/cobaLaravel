@extends('layout.main')
@section('tittle', 'web programing Tambah Data')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Tambah Mahasiswa</h1>
                <form method="post" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="masukan nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control" id="nrp" placeholder="masukan nrp" name="nrp">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="masukan email" name="email">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="masukan jurusan" name="nama">
                </div>
                 <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
            </div>
        </div>
    </div>
@endsection