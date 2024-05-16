<header class="masthead">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-12 mt-3 text-center">
        <div data-aos="zoom-in" data-aos-duration="2000" class="d-block mx-auto">
          @auth
            <h2 class="my_title fw-light mt-3 fs-3">Ciao {{Auth::user()->name}}!</h2>
          @endauth
          @guest
            <h2 class="my_title fw-light fs-3">{{__('ui.welcome')}}</h2>
          @endguest
            <h1 class="fw-light my_title fs-3">{{__('ui.home')}}<strong class="bordo" >{{__('ui.presto')}}</strong></h1>
          <a href="@if (Auth::user())
            {{route('create.announcements')}}@else{{route('register')}}
            @endif" class="btn bottone_annuncio mt-3">Inserisci annuncio</a>
        </div>
      </div>
    </div>
  </div>
</header>