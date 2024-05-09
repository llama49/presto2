<div>
    <div class="container my-5">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-8">

                @if (session('message'))
                    <div class="alert rounded-3  alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <form class="shadow rounded-5 p-5 bg-dark-subtle"
                wire:submit="store" {{-- con questa sintassi vado a richiamare la funzione store al submit del bottone del form --}}
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
                        <label for="price" class="form-label">Prezzo articolo</label>
                        <input wire:model.blur="price" type="number" class="form-control" id="price">
                        <div class="text-danger">@error('price') {{ $message }} @enderror</div>{{-- nuovo metodo di gestione degli errori per il client --}}
                    </div>

                    <button type="submit" class="btn btn-primary">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>
</div>
