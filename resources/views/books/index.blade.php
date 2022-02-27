@extends('layout/app')

@section('title', 'Manage Books')

@section('content')

<div class="container">
    <div class="col-md-5 bg-dark manage-wrapper">
        <h2><i class="uil uil-edit me-1"></i>Manage Books</h2>
        <p>Manage books in this library !</p>
        <hr>
        <a href="{{( url('/books/create'))}}" class="btn btn-light btn-sm btn-mb-2 buttonB"><i class="uil uil-plus-circle me-1"></i>Create Books</a>
        @if (session('success_status'))
        <div class="alert alert-success" role="alert">
        <i class="uil uil-thumbs-up me-1"></i>{{ session('success_status') }}<i class="uil uil-thumbs-up me-1"></i>
        </div>
        @endif
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Jumlah Halaman</th>
      <th>Tahun Terbit</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @php $num = 1; @endphp
    @foreach ($books as $book)
    <tr>
        <td>{{ ($num++) }}</td>
        <td>{{ ($book->judul) }}</td>
        <td>{{( $book->penulis) }}</td>
        <td>{{( $book->jumlah_halaman) }}</td>
        <td>{{( $book->tahun_terbit) }}</td>
        <td>
          <a href="{{ url('books/' . $book->id) }}" class="text-primary"><i class="uil uil-pen me-1"></i></a>
          <a href="#" class="text-danger"
          onclick="event.preventDefault();document.getElementById
          ('delete-form-{{ $book->id }}').submit();">
          <i class="uil uil-trash me-1"></i></a>
          <form id="delete-form-{{ $book->id }}"
          action="{{ url('books/' . $book->id) }}"
          method="POST"
          style="display: none;">
        @csrf
        @method('DELETE')
      </form>
        </td>
    </tr> 
    @endforeach  
  </tbody>
</table>
    </div>
</div>

@endsection