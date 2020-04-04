@extends('layouts.app')

@section('title','Detail Mahasiswa')

@section('content')
<div class="container">

    <h1 style="padding-top:10px;padding-bottom:10px">@yield('title')</h1>

    <div class="card col-4">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-text">{{ $student->nama }}</h3>
          <h4 class="card-text">{{ $student->npm }}</h4>
          <h6 class="card-text">{{ $student->tempatlahir }} {{ $student->tanggallahir }}</h6>
          <h6 class="card-text">{{ $student->jurusan }}</h6>
          <h6 class="card-text">{{ $student->kelas }}</h6>
          <h6 class="card-text">{{ $student->email }}</h6>
          <h6 class="card-text">{{ $student->kelamin }}</h6>
          <p class="card-text">{{ $student->alamat }}</p>
        </div>
        
        <div class="card-body text-right">
          <a href="/students" class="btn btn-primary btn-sm">Kembali</a>
        </div>
      </div>

</div>
@endsection