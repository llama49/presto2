<x-layout>

    <x-masthead/>

    @if (session('access.denied'))
    <div class="alert rounded-3  alert-success">
        {{ session('access.denied') }}
    </div>
    @endif

    <x-message/>

    <livewire:index-announcements/>



</x-layout>