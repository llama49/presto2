@if (session('error'))
<div class="alert rounded-3  alert-danger">
    {{ session('error') }}
</div>
@endif