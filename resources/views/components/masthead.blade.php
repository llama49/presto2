<header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center mt-3">
            <img class="d-none d-lg-inline" src="/storage/img/aggiungiArticolo.png" width="300" alt="">
            <img src="/storage/img/aggiungiCarrello.png" width="300" alt="">
            <img class="d-none d-lg-inline" src="/storage/img/riceviArticolo.png" width="300" alt="">
          <h1 class="fw-light mt-3 mb-5 my_title">Sei in cerca di un affare? Fai <strong class="bordo">Presto.it</strong></h1>
          <a href="@if (Auth::user())
          {{route('create.announcements')}}@else{{route('register')}}
          @endif" class="btn bottone_annuncio mb-5">Inserisci annuncio</a>
        </div>
      </div>
    </div>
  </header>