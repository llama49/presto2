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
          <a class="nav-link fw-bold link_custom @if (Route::currentRouteName()== 'welcome') link_custom2 @endif" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold link_custom @if (Route::currentRouteName()== 'index.announcements') link_custom2 @endif" href="{{route('index.announcements')}}">Tutti gli annunci</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle link_custom fw-bold @if (Route::currentRouteName()== 'index.category') link_custom2 @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category )
            <li><a class="dropdown-item" href="{{route('index.category', compact('category'))}}">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </li>
        @if(Auth::user() && Auth::user()->is_revisor)
        <li class="nav-item">
          <a class="nav-link fw-bold link_custom @if (Route::currentRouteName()== 'welcome') link_custom2 @endif" aria-current="page" href="{{route('revisor.index')}}">Lavora con noi
            <span>{{App\Models\Announcement::toBeRevisionedCount()}} <span> messaggi non letti</span>
          </span>
          </a>
        </li>
        @endif
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
        <form action="{{route('search.announcements')}}" method="GET" class="d-flex" role="search">
        <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
    </div>
  </div>
</nav>