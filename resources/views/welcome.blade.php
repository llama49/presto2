<x-layout>
    @auth

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <a href="{{route('create.announcements')}}" class="btn btn-primary ">Insersci annuncio</a>
            </div>
        </div>
    </div>
    @endauth

    <livewire:index-announcements/>

</x-layout>