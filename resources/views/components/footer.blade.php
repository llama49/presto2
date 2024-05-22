<div class="container-fluid p-0">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-white">
    <div class="col-12 col-lg-4 ps-2 d-flex flex-column flex-lg-row align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <img src="/storage/img/Presto.png" width="100" alt="">
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Call of Code, Inc</span>
    </div>

    <div class="col-12 col-lg-4 d-flex flex-column align-items-center justify-content-center">
    <a class="btn bottone_annuncio @if (Auth::user() && Auth::user()->is_revisor) d-none @endif" href="{{route('work.withUs')}}">{{__('ui.work')}}</a>
    </div>
    
    <ul class="nav mt-3 mt-lg-0 pe-lg-5 col-12 col-lg-4 justify-content-center  justify-content-lg-end list-unstyled d-md-flex mx-auto me-md-0">
      <li class="mx-3"><a class="text-body-secondary" href="#">
        <i class="bi bi-facebook fs-2 text-primary"></i>
      </a>
      </li>
      <li class="mx-3"><a class="text-body-secondary" href="#">
      <i class="bi bi-instagram fs-2 text-danger"></i>
      </a>
      </li>
      <li class="mx-3"><a class="text-body-secondary" href="#">
      <i class="bi bi-twitter-x fs-2 text-black"></i>
      </a>
      </li>
    </ul>
  </footer>
</div>