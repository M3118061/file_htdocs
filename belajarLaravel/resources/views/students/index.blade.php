@extends('layout/main')

@section('title', 'Data Mahasiswa')
    
@section('container')

<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-3">Data Mahasiswa</h1>

      <a href="/students/create" class="btn btn-primary my-2">Tambah Data</a>

      @if (session('pesan'))
        <div class="alert alert-success">
          {{ session('pesan') }}
        </div>   
      @endif

      <ul class="list-group">
        @foreach ($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          {{ $student->nama }}
          <a href="/students/{{ $student->id }}" class="btn btn-info">Detail</a>
        </li>
        @endforeach
      </ul>

    </div>
  </div>
</div>

@endsection
