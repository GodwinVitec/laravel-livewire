<tr @class(['archived' => $post->is_archived])>
    <td>{{ str($post->title)->limit(20) }}</td>
    <td>{{ str($post->content)->limit(28) }}</td>
    <td>
        @unless($post->is_archived)
            <button
                type="button"
                wire:click="archive"
                wire:confirm="Are you sure you want to archive this post?"
            >Archive</button>
        @endunless

        @unless(!$post->is_archived)
            <button
                type="button"
                wire:click="restore"
                wire:confirm="Are you sure you want to restore this post from archives?"
            >Restore</button>
        @endunless

        <button
            type="button"
            wire:click="$parent.delete({{ $post->id }})"
            wire:confirm="Are you sure you want to delete this post?"
        >Delete</button>
    </td>
</tr>
