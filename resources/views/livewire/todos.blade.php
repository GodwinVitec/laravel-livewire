<div>
    <h1>Todo List</h1>
    <form wire:submit="add">
        <input wire:model="todo" type="text">
        <button type="submit" wire:click="add">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo }}
            </li>
        @endforeach
    </ul>
</div>
