@extends('user.layouts.base')
@section('title', 'books')

@section('content')
<div class="my-5">
    <h1 class="text-center">The <span class="fw-bold text-warning">best place</span> to find your favourite book 
        <br> with the <span class="fw-bold text-warning ">great price</span> </h1>
</div>

<div class="bg-light p-5 rounded-3 container">
  <div class="row d-flex align-items-center">
    <div class="col my-3 ">
      <h3 class="fw-semibold">Latest release</h3>
    </div>
    <div class="col-2 ">
      <p class="text-center"><a href="{{ route('user.see-all') }}">See All</a></p>
    </div>
  </div>
    
    <div class=" container  horizontal-scrollable">
      <div class="row d-flex  justify-content-between">
        @foreach ($books as $book )
        <div class="col-xs-4 card" style="width: 18rem;">
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
</div>
@endsection


