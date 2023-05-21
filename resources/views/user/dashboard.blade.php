@extends('user.layouts.base')
@section('title', 'detailbooks')
@section('content')
<div class="container bg-light p-5 round-3">
    <div class="row">
        <div class="col">
            <h5 class="text-warning">Dashboard</h5>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>My Recent Transactions</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @foreach ($transactions as $transaction )
                <div class=" my-4 d-flex">
                    <img src="{{ asset('storage/thumbnail/'.$transaction->book->cover) }}" alt="Book cover" height="200">
                    <div class="col-6  p-3">
                        <h3 class="text-capitalize">{{ $transaction->book->title }}</h3>
                        <p>{{ $transaction->created_at->toDateString() }}</p>
                        <h5>Rp.{{ $transaction->book->price }}</h5>
                        <p class="fw-semibold">{{ $transaction->status }}</p>
                    </div>
                </div> 
            @endforeach
        </div>
    </div>
</div>
@endsection