<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }


    /** @test */
    public function can_create_post_successfully()
    {
        $title = Str::random(45);
        $content = Str::random(255);

        $post = Post::whereTitle($title)->whereContent($content)->first();

        $this->assertNull($post);

        Livewire::test(CreatePost::class)
            ->set('title', $title)
            ->set('content', $content)
            ->call('save');

        $post = Post::whereTitle($title)->whereContent($content)->first();

        $this->assertNotNull($post);
        $this->assertEquals($title, $post->title);
        $this->assertEquals($content, $post->content);
    }

    /** @test */
    public  function title_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('title', '')
            ->call('save')
            ->assertHasErrors(['title' => 'required']);
    }

    /** @test */
    public function title_must_be_more_than_four_characters()
    {
        Livewire::test(CreatePost::class)
            ->set('title', 'abc')
            ->call('save')
            ->assertHasErrors(['title' => 'min']);
    }

    /** @test */
    public function content_is_required()
    {
        Livewire::test(CreatePost::class)
            ->set('content', '')
            ->call('save')
            ->assertHasErrors(['content' => 'required']);
    }

    /** @test */
    public function content_must_be_more_than_ten_characters()
    {
        Livewire::test(CreatePost::class)
            ->set('content', 'abc')
            ->call('save')
            ->assertHasErrors(['content' => 'min']);
    }
}
