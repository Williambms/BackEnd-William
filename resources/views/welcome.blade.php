@extends('layout/app')

@section('title', 'Library')

@section('content')
    <div class="container banner">
        <h1><center><i class="uil uil-book-reader me-1"></i>Welcome, Readers!<i class="uil uil-book-reader me-1"></i></center></h1>
        <h3><center>Manage the garden of books!</center></h3>
        <a href="{{ url('/books/manage') }}" class="btn btn-light">Manage Books</a>
    </div>

    <div class="container mt-5">
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
    <!-- @foreach ($books as $book)
    <div class="bg-danger mb-5">
        <h1>{{ $book->judul }}</h1>
        <span>{{ $book->penulis }}</span>
        <p>{{ $book->jumlah_halaman }}</p>
        <span>{{ $book->tahun_terbit }}</span>
</div>
    @endforeach -->

@endsection