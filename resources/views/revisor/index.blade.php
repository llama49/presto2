<x-layout>
    
    @if (session('message'))
    <div class="alert rounded-3  alert-success">
        {{ session('message') }}
    </div>
    @endif
    
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                @if ($announcements)
                <h1 class="text-center">Ecco gli annunci da revisionare</h1>
                @else
                <h1 class="text-center">Non ci sono annunci da revisionare</h1>
                @endif
            </div>
        </div>
    </div>
    @if($announcements)
    <div class="container my-5">
        <div class="row">
            @foreach ($announcements as $announcement)
            <div class="col-12 col-lg-4">
                <div class="card shadow d-block mx-auto my-3" >
                    <img src="{{Storage::url($announcement['img'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement['title']}}</h5>
                        <p class="card-text text-truncate">{{$announcement['body']}}</p>
                        <p class="card-text">{{$announcement['price']}}$</p>
                        <a href="" class="btn bottone_annuncio d-block mx-auto">Scopri di piú</a>
                        <form action="{{route('revisor.accept_Announcement', ['announcement' => $announcement['id']])}}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button type="submit" >Accetta</button>
                        </form>
                        <form action="{{route('revisor.refuses_Announcement', ['announcement' => $announcement['id']])}}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button type="submit" >Rifiuta</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($announcements_checked)
                <h1 class="text-center">Ecco gli annunci revisionati</h1>
                @else
                <h1 class="text-center">Non ci sono annunci revisionati</h1>
                @endif
            </div>
        </div>
    </div>
    @if($announcements_checked)
    <div class="container my-5">
        <div class="row">
            @foreach ($announcements_checked as $announcement)
            <div class="col-12 col-lg-4">
                <div class="card shadow d-block mx-auto my-3" >
                    <img src="{{Storage::url($announcement['img'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement['title']}}</h5>
                        <p class="card-text text-truncate">{{$announcement['body']}}</p>
                        <p class="card-text">{{$announcement['price']}}$</p>
                        <a href="" class="btn bottone_annuncio d-block mx-auto">Scopri di piú</a>
                        <form action="{{route('revisor.undo_Announcement', ['announcement' => $announcement['id']])}}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button type="submit" >Annulla revisione</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    
</x-layout>