<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center ">
          <div class="col-12 col-md-6">
            <form class="p-3 shadow rounded bg-secondary-subtle" method="post" action="{{route('login')}}">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password_confirmation">
              </div>
              <button type="submit" class="btn btn-outline-light">Accedi</button>
            </form>
            <div class=" my-4">
              <a class="text-white" href="{{route('register')}}">Non hai un account? Registrati!</a>
            </div>
          </div>
        </div>
      </div>
</x-layout>