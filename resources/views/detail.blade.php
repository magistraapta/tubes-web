@include('partials.head')
<div class="container">
    @include('partials.navbar')
    <div class="container mt-5 bg-light p-4">
        <div class="row">
            <div class="col ">
                <h1 class="text-uppercase">{{ $buku->nama }}</h1>
                <p>{{ $buku->pengarang }}</p>
                <h4>{{ $buku->deskripsi }}</h4>
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