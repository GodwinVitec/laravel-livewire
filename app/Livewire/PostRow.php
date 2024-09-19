<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;

    public function archive()
    {
        $this->post->archive();
    }

    public function restore()
    {
        $this->post->restore();
    }
}
