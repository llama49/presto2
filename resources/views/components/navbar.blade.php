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
        <div class="d-flex me-auto ms-md-5">
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
              <a class="nav-link link_custom @if (Route::currentRouteName()== 'index.announcements') link_custom2 @endif" href="{{route('index.announcements')}}">{{__('ui.indexAnnouncements')}}</a>
            </li>
            <li class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle link_custom @if (Route::currentRouteName()== 'index.category') link_custom2 @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('ui.category')}}
              </a>
              <ul class="dropdown-menu">
                @foreach ($categories as $category )
                <li><a class="dropdown-item" href="{{route('index.category', compact('category'))}}">{{__("ui.$category->name")}}</a></li>
                @endforeach
              </ul>
            </li>
          </ul>
        </div>

        <div class="d-flex ms-auto me-5">

          {{-- Dropdown Lingue --}}
          <div class="dropdown">
            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-globe-europe-africa fs-3"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end">
              <li class="dropdown-item">
                <x-_locale lang="it">Italiano</x-_locale>
              </li>
              <li class="dropdown-item">
                <x-_locale lang="es">Español</x-_locale>
              </li>
              <li class="dropdown-item">
                <x-_locale lang="en">English</x-_locale>
              </li>
            </ul>
          </div>

          {{-- Dropdown profilo --}}
          <div class="dropdown">
            <button class="btn position-relative" type="button" data-bs-toggle="dropdown">
              <i class="bi bi-person-circle fs-3"></i>
            </button>
            @if (Auth::user() && Auth::user()->is_revisor)
            @if (App\Models\Announcement::toBeRevisionedCount() > 0)  
            <span class="badge_person translate-middle badge rounded-pill bg-danger">
              {{App\Models\Announcement::toBeRevisionedCount()}}
            </span>
            @endif
            @endif
            <ul class="dropdown-menu dropdown-menu-lg-end">

              @if (Auth::user() && Auth::user()->is_revisor)
              <li class="nav-item ps-4 border-bottom">
                <a class="nav-link my-2 position-relative  link_custom @if (Route::currentRouteName()== 'welcome') link_custom2 @endif" aria-current="page" href="{{route('revisor.index')}}">Dashboard</a>
              </li>
              @endif

              @guest
              <li class="nav-item"><a class="dropdown-item" href="{{route('login')}}">{{__('ui.login')}}</a></li>
              <li class="nav-item"><a class="dropdown-item" href="{{route('register')}}">{{__('ui.register')}}</a></li>
              @endguest

              @auth
              <li class="nav-item"><form
                class="d-flex"
                method="POST"
                action="{{route('logout')}}">
                @csrf
                <i class="bi bi-box-arrow-left fs-3 ms-3 text-danger"></i>
                <button class="dropdown-item text-danger" type="submit">{{__('ui.logout')}}</button>
              </form></li>
              @endauth
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</nav>
