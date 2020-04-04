@extends('layouts.app')

@section('title','Form Tambah Data Mahasiswa')

@section('content')
<div class="container">

    <h1 style="padding-top:10px;padding-bottom:10px">@yield('title')</h1>

    <div class="col-6" style="padding-bottom:50px">

        <form method="POST" action="/students">
        @csrf

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama') }}">
          @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="npm">NPM</label>
            <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Masukan NPM" name="npm" value="{{ old('npm') }}">
            @error('npm')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="kelamin">Kelamin</label>
            <input type="text" class="form-control @error('kelamin') is-invalid @enderror" id="kelamin" placeholder="Masukan Jenis kelamin" name="kelamin" value="{{ old('kelamin') }}">
            @error('kelamin')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- <div class="form-group">
            <label for="tempallahir">Kota Kelahiran</label>
            <input type="text" class="form-control" id="tempallahir" placeholder="Masukan Kota Lahir" name="tempallahir">
        </div> --}}

        <div class="form-group">
            <label for="datepicker">Tanggal Lahir</label>
            <input type="text" class="datepicker form-control" name="datepicker">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat" value="{{ old('alamat') }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{ old('jurusan') }}">
            @error('jurusan')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" placeholder="Masukan Kelas" name="kelas" value="{{ old('kelas') }}">
            @error('kelas')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>

</div>
@endsection
