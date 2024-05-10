<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-6">
            <h2 class="my_title text-center mb-3">REGISTRATI</h2>
            <form class="p-3 shadow rounded bg-secondary-subtle" method="post" action="{{route('register')}}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" id="nome">
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password_confirmation">
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
              </div>
              <button type="submit" class="btn bottone_annuncio d-block mx-auto">Registrati</button>
            </form>
          </div>
        </div>
      </div>
    

</x-layout>