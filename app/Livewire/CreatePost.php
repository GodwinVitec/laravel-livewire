<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Post | Create')]
class CreatePost extends Component
{
    #[Rule('required', message: 'Yo! Give the page a title')]
    #[Rule('min:4', message: 'Yo! Is that supposed to be an acronym?')]
    public string $title = '';

    #[Rule('required', message: 'Yo! At least write something!')]
    #[Rule('min:10', message: 'Yo! Isn\'t that too short?')]
    public string $content = '';

    public function save()
    {
        /*$this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);*/

        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        /*return redirect()->to('/posts');*/
        $this->redirect('/posts');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
