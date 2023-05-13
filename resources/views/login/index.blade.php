@include('partials.head')
@include('partials.navbar')
<div class="container">
    <div class="container">
        <div class="row d-flex justify-content-center bg-light rounded-3 my-2 py-5">
            <div class="col-md-5 ">
                <form action="login" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                      <h1>Please Login</h1>
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control @error('email') 
                      is-invalid
                      @enderror" id="email" name="email" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror 
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') 
                        is-invalid
                        @enderror" id="password" name="password" required>
                        @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
   
</div>

@include('partials.footer')