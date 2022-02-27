@extends('layout/app')

@section('title', 'Create Books')

@section('content')

<div class="container">
    <div class="col-md-5 bg-dark manage-wrapper">
        <h2><i class="uil uil-plus-circle me-1"></i>Create Books</h2>
        <p>Manage books in this library !</p>
        <hr>
        <form action=" {{ url('/books/create') }}" method="POST">
        @csrf
  <div class="mb-3">
    <label class="form-label">Judul Buku</label>
    <input type="text" class="form-control" placeholder="Masukkan Judul Buku"
    name="judul" value="{{ old('judul') }}">
    @error('judul') <small="text-danger">{{ $message }}</small>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Nama Penulis</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama Penulis"
    name="penulis"  value="{{ old('penulis') }}">
    @error('penulis') <small="text-danger">{{ $message }}</small>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Jumlah Halaman</label>
    <input type="text" class="form-control" placeholder="Masukkan Jumlah Halaman"
    name="jumlah_halaman"  value="{{ old('jumlah_halaman') }}">
    @error('jumlah_halaman') <small="text-danger">{{ $message }}</small>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Tahun Terbit</label>
    <input type="text" class="form-control" placeholder="Masukkan Tahun Terbit"
    name="tahun_terbit" value="{{ old('tahun_terbit') }}">
    @error('tahun_terbit') <small="text-danger">{{ $message }}</small>@enderror
</div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>

@endsection