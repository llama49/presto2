<x-layout>

    <x-masthead/>

    @if (session('access.denied'))
    <div class="alert rounded-3  alert-success">
        {{ session('access.denied') }}
    </div>
    @endif

    @if (session('message'))
    <div class="alert rounded-3  alert-success">
        {{ session('message') }}
    </div>
    @endif

    <livewire:index-announcements/>



</x-layout>