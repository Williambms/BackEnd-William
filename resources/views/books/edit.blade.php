@extends('layout/app')

@section('title', 'EditBooks')

@section('content')

<div class="container">
    <div class="col-md-5 bg-dark manage-wrapper">
        <h2><i class="uil uil-pen me-1"></i>Edit Books</h2>
        <p>Manage books in this library !</p>
        <hr>
        <form action=" {{ url('books/' . $book->id) }}" method="POST">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <label class="form-label">Judul Buku</label>
    <input type="text" class="form-control" placeholder="Masukkan Judul Buku"
    name="judul" value="{{ $book->judul }}">
    @error('judul') <small="text-danger">{{ $message }}</small>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Nama Penulis</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama Penulis"
    name="penulis"  value="{{ $book->penulis }}">
    @error('penulis') <small="text-danger">{{ $message }}</small>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Jumlah Halaman</label>
    <input type="text" class="form-control" placeholder="Masukkan Jumlah Halaman"
    name="jumlah_halaman"  value="{{ $book->jumlah_halaman }}">
    @error('jumlah_halaman') <small="text-danger">{{ $message }}</small>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Tahun Terbit</label>
    <input type="text" class="form-control" placeholder="Masukkan Tahun Terbit"
    name="tahun_terbit" value="{{ $book->tahun_terbit }}">
    @error('tahun_terbit') <small="text-danger">{{ $message }}</small>@enderror
</div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>

@endsection