@extends('user.layouts.base')
@section('title', 'Landing page')

@section('content')

<div class="container mt-5">
  <div class="row d-flex align-items-center">
    <div class="col-lg-6 col-12">
      <h1 class="fw-bold">Shop Now and Find the <br> <span class="text-warning">Perfect Book</span> for You!</h1>
      <p class="col-9 text-body-secondary">
        Looking for a great book to read? You've come to the right place! Our website has a wide selection of books to choose from, including fiction, nonfiction, children's books, and more. Whether you're looking for a new favorite author or a book to help you learn something new, we have something for everyone.
      </p>
      <a href="#books" class="btn btn-warning fw-semibold">Get Started</a>
    </div>
    <div class="col-lg-6 col-12">
      <img src="{{ asset('storage/thumbnail/banner.svg') }}" alt="">
    </div>
  </div>
</div>
<div class="my-5">
    <h1 class="text-center">The <span class="fw-bold text-warning">best place</span> to find your favourite book 
        <br> with the <span class="fw-bold text-warning ">great price</span> </h1>
</div>

<div class="bg-light p-5 rounded-3 container" id="books">
  <div class="row d-flex align-items-center">
    <div class="col my-3 ">
      <h3 class="fw-semibold" >Best Seller</h3>
    </div>
    <div class="col-2 ">
      <p class="text-center"><a href="{{ route('user.see-all') }}">See All</a></p>
    </div>
  </div>
    
    <div class=" container  horizontal-scrollable">
      <div class="row d-flex  justify-content-between">
        @foreach ($books as $book )
        <div class="col-xs-4 card my-2" style="width: 18rem;">
          <img class="card-img-top p-4" src="{{ asset('storage/thumbnail/'.$book->cover) }}" alt="Card image cap" height="400">
          <div class="card-body">
            <h4 class="card-text text-uppercase text-truncate"><a href="{{ route('user.detail-book', $book->id) }}" class="text-black text-decoration-none">{{ $book->title }}</a></h4>
            <p class="card-text text-uppercase">{{ $book->author }}</p>
            <h4 class="card-text">Rp.{{ $book->price }}</h4>
          </div>
        </div>
      @endforeach
      </div>
      
    </div>
</div>

<div class="container my-5">
  <div class="row">
    <div class="col">
      <h4 class="text-center align-center"> <span class="text-warning">Testimonials</span> <br> from our beloved customers</h4>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col d-flex justify-content-around">
      <div class="card" style="width: 20rem;">
        <div class="card-body p-4">
          <h5 class="card-title text-warning fw-bold">Budi H.</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Student</h6>
          <p class="card-text text-body">"I love your website! I was able to find the perfect book for my son in just a few minutes. Thank you!"</p>
        </div>
      </div>
      <div class="card" style="width: 20rem;">
        <div class="card-body p-4">
          <h5 class="card-title text-warning fw-bold">Sarah J.</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Student</h6>
          <p class="card-text text-body">"I've been a customer of yours for years and I've always been happy with your service. Your selection is amazing and your prices are always competitive. Thanks for being my go-to source for books!"</p>
        </div>
      </div>
      <div class="card" style="width: 20rem;">
        <div class="card-body p-4">
          <h5 class="card-title text-warning fw-bold">John J.</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Student</h6>
          <p class="card-text text-body">"I'm so glad I found your website! I was looking for a specific book that I couldn't find anywhere else. You had it in stock and it arrived at my door within a few days. Thanks for making my life easier!"</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


