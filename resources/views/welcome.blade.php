@include('partials.head')
        <div class="container">
            @include('partials.navbar')
            <div class="container bg-light mt-5 p-3 " >
                <div class="row rounded-lg">
                    <div class="col">
                        <h1 class="text-center">
                            List of Books
                        </h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center border">
                    @foreach ($buku as $data )
                        <div class="col-8 p-4 bg-primary text-white rounded-3 d-flex items-center justify-content-between">
                            <div>
                                <h3>{{ $data->nama }}</h3>
                                <p>{{ $data->pengarang }}</p>
                            </div>
                            <div>
                                <h5>Rp.{{ $data->harga }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@include('partials.footer')


        
