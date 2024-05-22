<x-layout>
    
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-lg-8 vh-100">
                @if (Auth::user()->is_revisor === null)
                    <h1 class="mt-5 text-center">{{__('ui.requested')}}</h1>
                @else
                
                <form class="shadow p-5 bg-trasparent"
                action="{{route('work.revisor')}}"
                method="POST"
                >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{__('ui.name')}}</label>
                    <input name="name" value="{{Auth::user()->name}}" type="text" class="form-control shadow form_bordi" id="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{__('ui.insert')}} Email</label>
                    <input name="email"  value="{{Auth::user()->email}}" type="email" class="form-control shadow form_bordi" id="email">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">{{__('ui.workWithUs')}}</label>
                    <textarea name="body" class="form-control shadow form_bordi" id="body" cols="30" rows="8"></textarea>
                </div>
                <button type="submit" class="btn bottone_annuncio2">{{__('ui.send')}}</button>
                </form>
                @endif
            </div>
        </div>
    </div>


</x-layout>
