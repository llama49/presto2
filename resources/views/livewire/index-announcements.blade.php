<div>
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="my_title text-center mb-4 mt-5">{{__('ui.latestAnnouncements')}}</h2>
            @foreach ($announcements as $announcement)
            <div class="col-8 col-md-5 col-lg-3 my-3 p-3">
                <div class="card d-block mx-auto border-none position-relative">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill colore_badge">
                        NEW
                      </span>
                    @if (count($announcement->images))
                    
                    <img src="{{$announcement->images->first()->getUrl(300,300)}}" class="card-img-top shadow" alt="...">
                    
                    @else
                    <img src="{{Storage::url('public/img/default-image.jpg')}}" class="card-img-top shadow" alt="...">
                    
                    @endif
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title mb-1">{{$announcement->title}}</h5>
                        </div>
                        <div>
                            <p class="card-text text-truncate">{{$announcement->body}}</p>
                            <p class="card-text">{{$announcement->price}}$</p>
                            <a href="{{route('show.announcements', compact('announcement'))}}" class="btn bottone_annuncio2 d-block mx-auto">{{__('ui.show')}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</div>