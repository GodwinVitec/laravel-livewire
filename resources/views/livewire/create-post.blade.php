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
            @error('content') <em>{{ $message }}</em> @enderror
        </label>
        <button type="submit">Save</button>
    </form>
</div>
