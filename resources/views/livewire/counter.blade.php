<div>
    <h1>Count: {{ $count }}</h1>

    <button wire:click.throttle.1000ms="increment">+</button>

    <button wire:click="decrement">-</button>
</div>
