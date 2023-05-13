<nav class="navbar navbar-expand-lg bg-body-tertiary rounded-2 sticky-top">
    <div class="container p-3 ">
      <a class="navbar-brand fw-bold fst-italic fs-3" href="/"><span class="text-warning">Book</span>Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  d-flex justify-content-between" id="navbarSupportedContent">
        <div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
        <div class="d-flex col-7 justify-content-between">
          <div>
            <form class="d-flex" role="search" method="GET" action="/">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
          
          <ul class="navbar-nav ms-auto">
            @auth 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <li><form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">log out</button>
                </form>
              </li>
              </ul>
            </li>
            @else
            <div>
              <button class="btn btn-outline-primary ml-2"><a href="/register" class="text-decoration-none ">Sign up</a></button>
              <button class="btn btn-primary"><a href="{{ route('login') }}" class="text-decoration-none text-white">Log in</a></button>
            </div>
            @endauth
        </div>
        </div>
    </div>
  </nav>

  