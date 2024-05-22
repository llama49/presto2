<header class="masthead position-relative ">
  <div class="container-fluid" >
    <div class="row">
      <div class="col-12 text-center p-0 video_cont">
        <video class="video_masthead" autoplay loop muted src="/storage/video/video_masthead.mp4"></video>
        <div data-aos="zoom-in" data-aos-duration="2000" class="d-block mx-auto scritta_benvenuto mt-2">
          @auth
            <h2 class="my_title fw-light mt-3 fs-3">{{__('ui.greeting')}} {{Auth::user()->name}}!</h2>
          @endauth
          @guest
            <h2 class="my_title fw-light fs-3">{{__('ui.welcome')}}</h2>
          @endguest
            <h1 class="fw-light my_title fs-3">{{__('ui.home')}}<strong class="bordo" >Presto.it</strong></h1>
          <a href="@if (Auth::user())
            {{route('create.announcements')}}@else{{route('login')}}
            @endif" class="btn bottone_annuncio mt-3 mx-auto">{{__('ui.createAnnouncement')}}</a>
        </div>
      </div>
    </div>
  </div>
</header>