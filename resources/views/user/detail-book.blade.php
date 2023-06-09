@extends('user.layouts.base')
@section('title', 'Detail page')

@section('content')
<div class="container bg-light rounded-3 my-5 p-4">
    <div class="row ">
        <div class="col-8">
            <h1 class="text-capitalize fw-bold">{{ $books->title }}</h1>
            <h4 class="text-capitalize">{{ $books->author }}</h4>
            <p class="col-9">{{ $books->description }}</p>
        </div>
        <div class="col">
            <img src="{{ asset('storage/thumbnail/'.$books->cover) }}" alt="" height="500">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Rp.{{ $books->price }}</h3>
            <form action="{{ route('user.checkout') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $books->id }}">
                <button class="btn btn-primary" type="submit">Checkout</button>
            </form>
        </div>
    </div>
</div>
@endsection