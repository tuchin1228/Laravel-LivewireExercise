<div style="text-align: center">
    <h1>{{ $count }}</h1>
    <button wire:click="increment">加一</button>


    @if ($route_id)
        <h2>
            routerId = {{ $route_id }}</h2>
    @endif

    <a href="{{ route('child') }}">Tochild</a>
</div>
