<div>
    <div class="container my-5">
        <div class="row justify-content-center ">
            <h3>inserisci un annuncio</h3>
            <div class="col-12 col-md-8">

                @if (session('message'))
                    <div class="alert rounded-3  alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <form class="shadow rounded-5 p-5 bg-dark-subtle"
                wire:submit="store"
                enctype="multipart/form-data"
                {{-- con questa sintassi vado a richiamare la funzione store al submit del bottone del form --}}
                >
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo articolo</label>
                        {{-- con wire:model salvo il dato passato dal campo input direttamente nel backend --}}
                        <input wire:model.blur="title" type="text" class="form-control" id="title">
                        <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Descrizione dell'articolo</label>
                        <input wire:model.blur="body" type="text" class="form-control" id="body">{{-- .blur la validazione parte nel moemtno in cui cambio l input che sto digitando --}}
                        <div class="text-danger">@error('body') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" wire:model="category" aria-label="Default select example">
                          <option>Seleziona la categoria</option>
                          @foreach ($categories as $category)
                          <option  value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo articolo</label>
                        <input wire:model.blur="price" type="number" class="form-control" id="price">
                        <div class="text-danger">@error('price') {{ $message }} @enderror</div>{{-- nuovo metodo di gestione degli errori per il client --}}
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci l'immagine</label>
                        <input wire:model="img" type="file" class="form-control" id="img">
                    </div>



                    <button type="submit" class="btn btn-primary">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>
</div>
