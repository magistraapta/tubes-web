@include('partials.head')
        <div class="container">
            @include('partials.navbar')
            <div class="container bg-light my-5  p-3 " >
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row rounded-lg">
                    <div class="col">
                        <h1 class="text-center">
                            List of Books
                        </h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($buku as $data )
                        <div class="col-8 p-4 bg-primary text-white rounded-3 d-flex items-center justify-content-between my-2">
                            <div>
                                <h3 class="text-uppercase"><a href="detail/{{ $data["id"]}}" class="text-decoration-none text-white">{{ $data->nama }}</a></h3>
                                <p>{{ $data->pengarang }}</p>
                            </div>
                            <div>
                                <h5>Rp.{{ $data->harga }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col">
                        {{ $buku->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
@include('partials.footer')


        
