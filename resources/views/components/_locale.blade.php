<form class="d-inline" action="{{route('set.locale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}}" width="32" height="32" alt="">
        {{$slot}}
    </button>
</form>