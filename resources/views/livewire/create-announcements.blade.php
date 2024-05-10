<div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <h3 class="text-center mb-4 my_title">INSERISCI ANNUNCIO</h3>
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
                    <label for="title" class="form-label">Titolo</label>
                    <input wire:model.blur="title" type="text" class="form-control" id="title">
                    <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Descrizione</label>
                    <textarea wire:model.blur="body" class="form-control" id="body" cols="30" rows="8"></textarea>
                    <div class="text-danger">@error('body') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Categorie</label>
                    <select class="form-select" wire:model="category" aria-label="Default select example">
                        <option>Seleziona categoria</option>
                        @foreach ($categories as $category)
                        <option  value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">@error('category') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input wire:model.blur="price" type="number" class="form-control" id="price">
                    <div class="text-danger">@error('price') {{ $message }} @enderror</div>{{-- nuovo metodo di gestione degli errori per il client --}}
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Inserisci l'immagine</label>
                    <input wire:model="img" type="file" class="form-control" id="img">
                </div>
                <button type="submit" class="btn bottone_annuncio">Crea Annuncio</button>
            </form>
        </div>
    </div>
</div>
</div>
