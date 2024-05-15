<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="shadow rounded-5 p-5 bg-dark-subtle"
                action="{{route('work.revisor')}}"
                method="POST"
                >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input name="name" value="{{Auth::user()->name}}" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Inserisci Email</label>
                    <input name="email"  value="{{Auth::user()->email}}" type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Perchè vuoi lavorare con noi?</label>
                    <textarea name="body" class="form-control" id="body" cols="30" rows="8"></textarea>
                </div>
                    <button type="submit" class="btn bottone_annuncio">Invia domanda</button>
            </form>
            </div>
        </div>
    </div>


</x-layout>
