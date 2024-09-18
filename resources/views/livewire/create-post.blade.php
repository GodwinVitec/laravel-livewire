<div>
    <h2>New Post:</h2>

    <form wire:submit="save">
        <label for="title">
            <span>Title</span>
            <input wire:model="title" type="text">
            @error('title') <em>{{ $message }}</em> @enderror
        </label>
        <label for="body">
            <span>Content</span>
            <textarea wire:model="content"></textarea>
            <span>Total Characters <small x-text="$wire.content.length"></small></span>
            <span>Total Words <small x-text="$wire.content.length ? $wire.content.split(' ').length : 0"></small></span>
            @error('content') <em>{{ $message }}</em> @enderror
        </label>
        <button type="submit">Save</button>
    </form>
</div>
