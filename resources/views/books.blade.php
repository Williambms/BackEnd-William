@extends('layout/app')

@section('title', 'BooksCollection')

@section('content')

<div class="container mt-5">
    <h1><i class="uil uil-books me-1"></i>Books Collection</h1>
    <hr>
        <div class="row">
            @foreach ($books as $book)
            <div class="col-md-4">
                <div class="col-md-12 bg-light book-content">
                <h1 class="judul">{{ $book->judul }}</h1>
                <h7 class="penulis badge bg-dark">{{ $book->penulis }}</h7>
                <h6 class="jumlah-halaman">Jumlah Halaman: {{ $book->jumlah_halaman }}</h6>
                <h7 class="tahun">Tahun Terbit: {{ $book->tahun_terbit }}</h7>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection