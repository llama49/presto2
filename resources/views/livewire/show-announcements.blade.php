<div>
    
    <div class="container">
        <div class="row">
            <div class="col-2 d-none d-lg-inline mt-5 mb-3">
                <a href="{{route('welcome')}}" class="btn bottone_indietro">← Indietro</a>
            </div>
            <div class="col-12 col-lg-8 mt-5 mb-3">
                <h2 class="my_title text-center">DETTAGLI ANNUNCIO</h2>
            </div>
            <div class="col-12 col-lg-8 d-flex justify-content-center mb-5">
                {{-- CAROSELLO --}}
                {{-- <div id="carouselExampleIndicators" class="carousel slide w-100 position-relative mt-3">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/300" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/301" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/302" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <div class="badge_logo">
                        <img class="ms-3 py-2" src="/storage/img/Presto.png" width="100" alt="">
                    </div>
                </div> --}} 
            </div>
            <div class="col-12 col-lg-4 mt-5 d-flex flex-column justify-content-between">
                {{-- NOME E PREZZO --}}
                <div class="p-3">
                    <h4>{{$announcement->category->name}}</h4>
                    <hr>
                    <h2 class="fw-bold mb-5">{{$announcement->title}}</h2>
                    <p class="fs-2 mb-3">{{$announcement->price}}€</p>
                    <p class="">{{$announcement->body}}</p>
                </div>
                <div class="mb-5 p-3">
                    <p>Creato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                    <p>Inserzionista: {{$announcement->user->name}}</p>
                </div>
            </div>
        </div>
    </div>
    
</div>