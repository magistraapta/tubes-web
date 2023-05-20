@extends('user.layouts.base')
@section('title', 'books')

@section('content')
<div class="container bg-light mt-5 ">
    <div class="row py-5 border  d-flex justify-content-center">
            @foreach ($books as $book )
            <div class="col-xs-3 border m-3  card" style="width: 18rem;">
                <img class="card-img-top p-4" src="{{ asset('storage/thumbnail/'.$book->cover) }}" alt="Card image cap" height="400">
                <div class="card-body">
                    <h4 class="card-text text-uppercase text-truncate"><a href="{{ route('user.detail-book', $book->id) }}" >{{ $book->title }}</a></h4>
                    <p class="card-text text-uppercase">{{ $book->author }}</p>
                    <h4 class="card-text">Rp.{{ $book->price }}</h4>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection


