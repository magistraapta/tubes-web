@extends('admin.layouts.base')

@section('title', 'books')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Books</h3>
        </div>
        
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('admin.books.create') }}" class="btn btn-warning">Create Books</a>
            </div>
          </div>

         
          @if (session()->has('success'))
          <div class="alert alert-success">
            <p>{{ session('success') }}</p>
          </div>
          @endif

          <div class="row">
            <div class="col-md-12">
              <table id="book" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>author</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($books as $book )
                    <tr>
                      <td>{{ $book->id }}</td>
                      <td>{{ $book->title }}</td>
                      <td>{{ $book->author }}</td>
                      <td>{{ $book->price }}</td>
                      <td class="d-flex col-5  justify-content-between">
                        <a href="{{ route('admin.book.edit', $book->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('admin.book.delete', $book->id) }}" method="post">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('js')
  <script>
    $('#book').DataTable();
  </script>
  @endsection