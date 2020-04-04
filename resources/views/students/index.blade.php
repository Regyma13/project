@extends('layouts.app')

@section('title','Data Mahasiswa')

@section('content')
<div class="container">

    <h1 style="padding-top:10px">@yield('title')</h1>
    
    <a href="/students/create" class="btn btn-outline-success mb-3">Tambah Data Mahasiswa</a>

    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif

    <table class="table">
        <thead class="thead-dark text-center">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Kelas</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-center">
          @foreach($students as $student)
          <tr>
          <td>{{ $loop->iteration }}</td>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->npm }}</td>
            <td>{{ $student->jurusan }}</td>
            <td>{{ $student->kelas }}</td>
            <td>
              
              <a href="/students/{{ $student->id }}" class="btn btn-success btn-sm">View</a>
              
              <a href="/students/{{ $student->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
              
              <form action="/students/{{ $student->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>
            
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>      
</div>
@endsection