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
        <h3 class="card-title">Edit Book</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form enctype="multipart/form-data" method="POST" action="{{ route('admin.book.update', $books->id) }}">
        @method('put')
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"  value="{{ $books->title }}">
          </div>
          <div class="form-group">
            <label for="trailer">Author</label>
            <input type="text" class="form-control" id="trailer" name="author"  value="{{ $books->author }}">
          </div>
          <div class="form-group">
            <label for="large-thumbnail">Cover</label>
            <input type="file" class="form-control" name="cover" value="{{ old('cover') }}">
          </div>
          <div class="form-group">
            <label for="short-about">About</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10" value="{{ $books->description }}"></textarea>
          </div>
          <div class="form-group">
            <label for="short-about">Price</label>
            <input type="number" class="form-control" id="about" name="price"  value="{{ $books->price}}">
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