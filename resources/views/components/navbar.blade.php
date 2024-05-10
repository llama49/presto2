<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">
      <img src="/storage/img/Presto.png" width="200" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold link_custom" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold link_custom" href="{{route('index.announcements')}}">Tutti gli annunci</a>
        </li>
      </ul>
      <div class="dropdown d-block ms-auto">
        <button class="btn" type="button" data-bs-toggle="dropdown">
          <i class="bi bi-person-lines-fill fs-2 profilo"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-lg-end">
          @guest
          <li class="nav-item"><a class="dropdown-item fw-bold" href="{{route('login')}}">Accedi</a></li>
          <li class="nav-item"><a class="dropdown-item fw-bold" href="{{route('register')}}">Registrati</a></li>
          @endguest
          @auth
          <li class="nav-item"><form
            class="d-flex"
            method="POST"
            action="{{route('logout')}}">
            @csrf
            <i class="bi bi-box-arrow-left fs-3 ms-3 text-danger"></i>
            <button class="dropdown-item fw-bold text-danger" type="submit">Logout</button>
          </form></li>
          @endauth
        </ul>
      </div>
    </div>
  </div>
</nav>