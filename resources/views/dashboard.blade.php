@include('partials.head')
@include('partials.navbar')
        <div class="container mt-5">
            
            <div class="row bg-light p-4 rounded-3">
                <div class="col">
                    <h1>Welcome to Dashboard!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Kategori</th>
                          </tr>
                        </thead>
                        @foreach ( $buku as $b )
                            <tbody>
                          <tr>
                            <td class="text-capitalize">{{ $b->nama }}</td>
                            <td class="text-capitalize">{{ $b->pengarang }}</td>
                            <td class="text-capitalize">{{ $b->kategori }}</td>
                            <td class="d-flex  col-7 justify-content-between">
                                <form action="/detail/{{ $b->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('are you sure?')">delete</button>
                                </form>
                                <div>
                                    <button class="btn btn-warning">
                                        <a href="/detail/{{ $b->id }}/edit" class="text-decoration-none text-white">Edit</a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                         
                        </tbody>
                        @endforeach
                        <button class="btn btn-primary"><a class="nav-link" href="create">Add Book</a></button>
                      </table>
                </div>
            </div>
@include('partials.footer')


        
