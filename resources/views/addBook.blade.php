@include('partials.head')
<div class="container">
    @include('partials.navbar')
    <div class="container bg-light mt-5 d-flex justify-content-center">
        <form class="col-6 p-5" id="bookForm" method="POST" action="store">
            @csrf
            <div class="mb-3">
                <label for="bookDesc">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="bookDesc">Pengarang</label>
                <input type="text" name="pengarang" class="form-control">
            </div>
            <div class="mb-3">
                <label for="bookDesc">Harga</label>
                <input type="number" name="harga" class="form-control">
            </div>
            <div class="mb-3">
                <label for="bookDesc">Deskripsi</label>
                <textarea name="deskripsi" id="bookDesc" form="bookForm" cols="61" rows="7"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary" value="create">Submit</button>
          </form>
    </div>
</div>
@include('partials.footer')