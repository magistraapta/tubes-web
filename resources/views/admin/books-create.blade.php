@extends('admin.layouts.base')

@section('title', 'books')

@section('content')
<div class="row">
  <div class="col-md-12">

    {{-- Alert Here --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Create Movie</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form enctype="multipart/form-data" method="POST" action="{{ route('admin.books.store') }}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="e.g Guardian of The Galaxy" value="{{ old('title') }}">
          </div>
          <div class="form-group">
            <label for="trailer">Author</label>
            <input type="text" class="form-control" id="trailer" name="author" placeholder="Video url" value="{{ old('author') }}">
          </div>
          <div class="form-group">
            <label for="large-thumbnail">Cover</label>
            <input type="file" class="form-control" name="cover" value="{{ old('cover') }}">
          </div>
          <div class="form-group">
            <label for="short-about">About</label>
            <input type="text" class="form-control" id="about" name="description" placeholder="Awesome Movie" value="{{ old('description') }}">
          </div>
          <div class="form-group">
            <label for="short-about">Price</label>
            <input type="number" class="form-control" id="about" name="price" placeholder="Awesome Movie" value="{{ old('price') }}">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection