<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Posts;

class Posts extends Component

{
    public $title = "";
    public $content = "";

    public $allPosts;

    public function save()
    {
        $newPost = new Posts;
        $newPost->title = $this->title;
        $newPost->content = $this->content;
        $newPost->save();
    }

    public function mount()
    {
        $this->allPosts = Posts::all();
    }
    public function render()
    {
        return view('livewire.posts');
    }
}
