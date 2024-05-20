<x-layout>

    <x-masthead />

    {{-- @dd($category) --}}
    @if ($announcements->isEmpty())
    <div class="messaggio_category">
        <h3 class="text-center mt-5 mb-5">{{__('ui.noCategory')}}</h3>
    </div>
    @else
    <div class="container ">
        <div class="row mt-5 justify-content-center">
            <h2 class="my_title text-center">{{$category->name}}</h2>
            @foreach ($announcements as $announcement)
            <div class="col-8 col-md-5 col-lg-3 my-3">
                <div class="card d-block mx-auto p-3">
                    @if (count($announcement->images))

                    <img src="{{$announcement->images->first()->getUrl(300,300)}}" class="card-img-top shadow" alt="...">

                    @else
                    <img src="{{Storage::url('public/img/default-image.jpg')}}" class="card-img-top shadow" alt="...">

                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text text-truncate">{{$announcement->body}}</p>
                        <p class="card-text">{{$announcement->price}}$</p>
                        <a href="{{route('show.announcements', compact('announcement'))}}" class="btn bottone_annuncio2 d-block mx-auto">{{__('ui.show')}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

</x-layout>