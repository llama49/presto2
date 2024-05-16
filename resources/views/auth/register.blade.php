<x-layout>
  
  
  <div class="container mt-5 form_dati">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <h2 class="my_title text-center mb-3">{{__('ui.register2')}}</h2>
        <form class="p-3 shadow" method="post" action="{{route('register')}}">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">{{__('ui.email')}}*</label>
            <input type="email" name="email" class="form-control shadow form_bordi" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="nome" class="form-label">{{__('ui.name')}}*</label>
            <input type="text" name="name" class="form-control shadow form_bordi" id="nome">
          </div>
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password*</label>
            <input type="password" name="password" class="form-control shadow form_bordi" id="password_confirmation">
          </div>
          <div class="mb-5">
            <label for="password_confirmation" class="form-label">{{__('ui.confirm')}} Password*</label>
            <input type="password" name="password_confirmation" class="form-control shadow form_bordi" id="password_confirmation">
          </div>
          <p>* campi obbligatori</p>
          <button type="submit" class="btn bottone_annuncio2 d-block mx-auto">Registrati</button>
        </form>
      </div>
    </div>
  </div>
  
  
</x-layout>