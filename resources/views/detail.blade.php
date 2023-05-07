@include('partials.head')
<div class="container">
    @include('partials.navbar')
    <div class="container mt-5 bg-light p-4">
        <div class="row d-flex justify-content-between">
            <div class="col-8">
                <h1 class="text-uppercase">{{ $buku->nama }}</h1>
                <h5 class="text-capitalize">{{ $buku->pengarang }}</h5>
                <div class="col-11 mt-4">
                    <p class="fw-light lh-base">{{ $buku->deskripsi }}</p>
                </div>
            </div>
            <div class="col">
                <img src="{{ asset('cover/' .$buku->foto) }}" alt="" width="300" height="500">
            </div>
        </div>
        <div class="row">
            <div class="col-1 mt-2">
                    <form action="/detail/{{ $buku->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('are you sure?')">delete</button>
                    </form>
            </div>
            <div class="col mt-2">
                <button class="btn btn-warning">
                    <a href="/detail/{{ $buku->id }}/edit" class="text-decoration-none text-white">Edit</a>
                </button>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')