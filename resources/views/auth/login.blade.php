<x-layout>
    <div class="container mt-5 form_dati">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-6">
            <h2 class="my_title text-center mb-3">ACCEDI</h2>
            <form class="p-3 shadow" method="post" action="{{route('login')}}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control shadow form_bordi" id="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password</label>
                <input type="password" name="password" class="form-control shadow form_bordi" id="password_confirmation">
              </div>
              <button type="submit" class="btn bottone_annuncio2 d-block mx-auto">Accedi</button>
            </form>
            <div class="my-4 d-flex justify-content-center">
              <a class="tiffany" href="{{route('register')}}">Non hai un account? Registrati!</a>
            </div>
          </div>
        </div>
      </div>
</x-layout>