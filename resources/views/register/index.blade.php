@include('partials.head')
@include('partials.navbar')
<div class="container">
    <div class="container">
        <div class="row d-flex justify-content-center bg-light rounded-3 my-2 py-5">
            <div class="col-md-5 ">
                <form action="register/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="name" class="form-control @error('name') is-invalid
                      @enderror" id="exampleInputEmail1" name="name" class="">
                      @error('name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control @error('email') 
                      is-invalid
                      @enderror" id="exampleInputEmail1" name="email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control @error('password') 
                      is-invalid
                      @enderror" id="exampleInputPassword1" name="password">
                      @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    </div>

                    <button type="submit" class="btn btn-primary" value="create">Submit</button>
                  </form>
            </div>
        </div>
    </div>
   
</div>

@include('partials.footer')