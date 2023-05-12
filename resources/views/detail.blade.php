@include('partials.head')
@include('partials.navbar')
<div class="container">
    
    <div class="container mt-5 bg-light p-4">
        <div class="row d-flex  ">
            <div class="col-8  p-3">
                <h1 class="text-uppercase">{{ $buku->nama }}</h1>
                <h5 class="text-capitalize">{{ $buku->pengarang }}</h5>
                <div class="col-11 mt-4">
                    <p class="fw-light lh-base">{{ $buku->deskripsi }}</p>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <img src="{{ asset('cover/' .$buku->foto) }}" alt="" width="300" height="500">
            </div>
        </div>
        <div class="row">
            <div class="col mt-2">
                   <button class="btn btn-primary"><a href="/checkout" class="text-decoration-none text-white">Checkout</a></button>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')