<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{$announcement_to_check ? `Ecco l'annuncio da revisionare` : `Non ci sono annunci da revisionare`}}</h1>
            </div>
        </div>
    </div>
    @if($announcement_to_check)
    <div class="container my-5">
        <div class="row">
            <div class="col-4">
                <div class="card shadow d-block mx-auto" >
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement_to_check->title}}</h5>
                        <p class="card-text text-truncate">{{$announcement_to_check->body}}</p>
                        <p class="card-text">{{$announcement_to_check->price}}$</p>
                        <a href="" class="btn bottone_annuncio d-block mx-auto">Scopri di piú</a>
                        <form action="{{route('revisor.accept_Announcement', ['announcement' =>$announcement_to_check])}}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button type="submit" >Accetta</button>
                        </form>
                        <form action="{{route('revisor.refuses_Announcement', ['announcement' =>$announcement_to_check])}}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button type="submit" >Rifiuta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    </x-layout>