@include('partials.head')
@include('partials.navbar')
        <div class="container  p-5">
            <div class="row">
                <div class="col">
                    <h1 class="fw-bold text-center">Get your new book with <br> the <span class="text-warning">great price.</span></h1>
                    <p class="mt-3 text-center">Kami menjual buku yang terjamin original dan bekualitas</p>
                </div>
            </div>
            <div class="row  d-flex ">
                <div class="col  d-flex justify-content-between ">
                    
                    @foreach ($buku as $b )
                    
                    <div class=" col-3  p-2">
                        <div class="p-4  d-flex justify-content-center">
                            <img src="{{ asset('cover/' .$b->foto) }}" alt="" width="150">
                        </div>
                        <div class="p-3 ">
                            <h5 class="fw-bold"><a href="detail/{{ $b->id }}">{{ $b->nama }}</a> </h5>
                            <p class="text-capitalize">{{ $b->pengarang }}</p>
                            <h5>Rp.{{ $b->harga }}</h5>
                        </div>
                    </div>
                    
                    @endforeach
                    
                </div>
            </div>
        </div>
@include('partials.footer')


        
