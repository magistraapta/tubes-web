@include('partials.head')
<div class="container">
    @include('partials.navbar')
    <div class="container bg-light mt-5 d-flex justify-content-center">
        <form class="col-6 p-5" id="bookForm" method="POST" action="/detail/{{ $buku->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="bookDesc">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $buku->nama }}">
            </div>
            <div class="mb-3">
                <label for="bookDesc">Pengarang</label>
                <input type="text" name="pengarang" class="form-control" value="{{ $buku->pengarang }}">
            </div>
            <div class="mb-3">
                <label for="bookDesc">Kategori</label>
                <input type="text" name="pengarang" class="form-control" value="{{ $buku->kategori }}">
            </div>
            <div class="mb-3">
                <label for="bookDesc">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{ $buku->harga }}">
            </div>
            <div class="mb-3">
                <label for="bookDesc">Cover buku</label>
                <input type="file" name="foto" class="form-control" value="{{ $buku->foto }}">
            </div>
            <div class="mb-3">
                <label for="bookDesc">Deskripsi</label>
                <textarea name="deskripsi" id="bookDesc" form="bookForm" cols="61" rows="7">{{ $buku->deskripsi}}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" value="create">Submit</button>
          </form>
    </div>
</div>
@include('partials.footer')