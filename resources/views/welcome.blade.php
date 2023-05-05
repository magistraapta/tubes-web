@include('partials.head')
        <div class="container">
            @include('partials.navbar')
            <div class="container bg-light mt-5 p-3">
                <div class="row rounded-lg">
                    <div class="col">
                        <h1 class="text-center">
                            List of Books
                        </h1>
                    </div>
                </div>
                <div class="row rounded-lg">
                    <div class="col">
                       @foreach ($buku as $data )
                           <ul>
                                <li>{{ $data->nama }}</li>
                                <li>{{ $data->pengarang }}</li>
                                <li>{{ $data->harga }}</li>
                           </ul>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
@include('partials.footer')


        
