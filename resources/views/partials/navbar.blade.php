<nav class="navbar navbar-expand-lg bg-body-tertiary rounded-2">
    <div class="container-fluid p-3 ">
      <a class="navbar-brand fw-bold fst-italic fs-3" href="/"><span class="text-warning">Book</span>Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create">Add Book</a>
          </li>
        </ul>
        <form class="d-flex" role="search" method="GET" action="/">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div>
            <button class="btn btn-primary ml-2"><a href="login" class="text-decoration-none text-white">Login</a></button>
        </div>
      </div>
    </div>
  </nav>