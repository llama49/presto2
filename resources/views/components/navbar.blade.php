<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid p-0 d-flex flex-column">
    <div class="col-12 d-flex justify-content-between">
      <div class="ms-3 d-lg-inline mx-lg-auto">
        <a class="navbar-brand d-block my-4 mx-auto" href="{{route('welcome')}}">
          <img src="/storage/img/Presto.png" width="200" alt="">
        </a>
      </div>
      <div class="me-3 d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
    <div class="col-12">
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="d-flex me-auto">
          <form action="{{route('search.announcements')}}" method="GET" class="d-flex" role="search">
            <button class="btn" type="submit"><i class="bi bi-search"></i></button>
            <input name="searched" class="form-control" type="search" placeholder="Search" aria-label="Search">
          </form>
        </div>
        <div class="navbar-nav justify-content-center">
          <ul class="navbar-nav posizione_link">
            <li class="nav-item mx-3">
              <a class="nav-link link_custom @if (Route::currentRouteName()== 'welcome') link_custom2 @endif" aria-current="page" href="{{route('welcome')}}">Home</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link link_custom @if (Route::currentRouteName()== 'index.announcements') link_custom2 @endif" href="{{route('index.announcements')}}">Tutti gli annunci</a>
            </li>
            <li class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle link_custom @if (Route::currentRouteName()== 'index.category') link_custom2 @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>
              <ul class="dropdown-menu">
                @foreach ($categories as $category )
                <li><a class="dropdown-item" href="{{route('index.category', compact('category'))}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
          </ul>
        </div>
        <div>

          <ul>
            <li class="nav-item">
              <x-_locale lang="it" />
            </li>
            <li class="nav-item">
              <x-_locale lang="es" />
            </li>
            <li class="nav-item">
              <x-_locale lang="en" />
            </li>
          </ul>
        </div>
        <div class="dropdown d-flex ms-auto">
          <button class="btn" type="button" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle fs-2"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            
            @if (Auth::user() && Auth::user()->is_revisor)
            <li class="nav-item ps-4 border-bottom">
              <a class="nav-link my-2 position-relative  link_custom @if (Route::currentRouteName()== 'welcome') link_custom2 @endif" aria-current="page" href="{{route('revisor.index')}}">Richieste
                <span class="translate-middle badge rounded-pill bg-danger">
                  {{App\Models\Announcement::toBeRevisionedCount()}}
                  <span class="visually-hidden">unread messages</span>
                </span>
              </a>
            </li>
            @endif
            
            @guest
            <li class="nav-item"><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
            <li class="nav-item"><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            @endguest
            
            @auth
            <li class="nav-item"><form
              class="d-flex"
              method="POST"
              action="{{route('logout')}}">
              @csrf
              <i class="bi bi-box-arrow-left fs-3 ms-3 text-danger"></i>
              <button class="dropdown-item text-danger" type="submit">Logout</button>
            </form></li>
            @endauth
          </ul>
        </div>
      </div>
    </div>
    
  </div>
</nav>



{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
      </ul>
      <div class="dropdown d-block ms-auto">
        <button class="btn" type="button" data-bs-toggle="dropdown">
          <i class="bi bi-person-lines-fill fs-2 profilo"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-lg-end">
          
          @if (Auth::user() && Auth::user()->is_revisor)
          <li class="nav-item">
            <a class="nav-link fw-bold link_custom @if (Route::currentRouteName()== 'welcome') link_custom2 @endif" aria-current="page" href="{{route('revisor.index')}}">Lavora con noi
              <span>{{App\Models\Announcement::toBeRevisionedCount()}} <span> messaggi non letti</span>
            </span>
          </a>
        </li>
        @endif
        
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
</nav> --}}