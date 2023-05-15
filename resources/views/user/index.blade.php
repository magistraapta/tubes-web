@extends('user.layouts.base')
@section('title', 'Home')

@section('content')
<div class="my-5">
    <h1 class="text-center">The <span class="fw-bold text-warning">best place</span> to find your favourite book 
        <br> with the <span class="fw-bold text-warning ">great price</span> </h1>
</div>

<div class="bg-light p-5 rounded-3">
    <div class="my-3">
        <h3 class="fw-semibold">Latest release</h3>
    </div>
    <div class="d-flex  justify-content-between">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/cover/0NM4sbce9crichdad.jpeg') }}" alt="Card image cap" height="400">
            <div class="card-body">
              <h4 class="card-text text-uppercase">Rich Dad Poor dad</h4>
              <p class="card-text text-uppercase">robert kiyosaki</p>
              <h4 class="card-text">Rp.50000</h4>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/cover/0NM4sbce9crichdad.jpeg') }}" alt="Card image cap" height="400">
            <div class="card-body">
              <h4 class="card-text text-uppercase">Rich Dad Poor dad</h4>
              <p class="card-text text-uppercase">robert kiyosaki</p>
              <h4 class="card-text">Rp.50000</h4>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/cover/9LxR6DCenE81LAv8okW8L.jpeg') }}" alt="Card image cap" height="400">
            <div class="card-body">
              <h4 class="card-text text-uppercase">Rich Dad Poor dad</h4>
              <p class="card-text text-uppercase">robert kiyosaki</p>
              <h4 class="card-text">Rp.50000</h4>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/cover/9LxR6DCenE81LAv8okW8L.jpeg') }}" alt="Card image cap" height="400">
            <div class="card-body">
              <h4 class="card-text text-uppercase">Rich Dad Poor dad</h4>
              <p class="card-text text-uppercase">robert kiyosaki</p>
              <h4 class="card-text">Rp.50000</h4>
            </div>
          </div>
    </div>
    
</div>
@endsection

@extends('user.layouts.footer')

