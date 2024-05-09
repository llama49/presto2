<div>

    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($announcement->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text">{{$announcement->body}}</p>
                        <p class="card-text">{{$announcement->price}}$</p>
                        <a href="{{route('welcome')}}" class="btn btn-primary">Indietro</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>