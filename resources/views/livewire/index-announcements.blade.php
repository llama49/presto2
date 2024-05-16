<div>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <h2 class="my_title text-center mb-4">{{__('ui.latestAnnouncements')}}</h2>
            @foreach ($announcements as $announcement)
            <div class="col-8 col-md-5 col-lg-3 my-3 p-3">
                <div class="card d-block mx-auto border-none">
                    <img src="{{Storage::url($announcement->img)}}" class="card-img-top shadow" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text text-truncate">{{$announcement->body}}</p>
                        <p class="card-text">{{$announcement->price}}$</p>
                        <a href="{{route('show.announcements', compact('announcement'))}}" class="btn bottone_annuncio2 d-block mx-auto">{{__('ui.show')}}</a>
                        {{-- Perchè non funziona? --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>