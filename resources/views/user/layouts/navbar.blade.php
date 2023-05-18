<nav class="navbar navbar-expand-lg  p-4">
    <div class="container d-flex justify-content-between    ">
        <div class="">
            <a class="navbar-brand fs-3 fw-bold" href="#">Book<span class="text-warning fst-italic">Store</span></a>
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
                <button type="submit" class="dropdown-item"><a href="{{ route('user.logout') }}">Log Out</a></button>
                </form>
              </li>
              </ul>
            </li>
            </ul>
            @else
            <div class="    d-flex justify-content-between " style="width: 180px">
                <button class="btn btn-warning fw-semibold"><a href="{{ route('user.register') }}">Sign Up</a></button>
                <button class="btn btn-primary fw-semibold"><a href="{{ route('user.login') }}" class="text-white">Log In</a></button>
            </div>
            @endauth
    </div>
  </nav>