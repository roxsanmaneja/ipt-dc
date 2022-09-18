<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;


class Edit extends Component
{
    public $postId;
    public $title, $genre, $writer, $singer;

    
    public function mount(){
        $this->title = $this->post->title;
        $this->genre = $this->post->genre;
        $this->singer = $this->post->singer;
        $this->writer = $this->post->writer;
    }

    public function editPost(){
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'genre' => ['required', 'string', 'max:255'],
            'writer' => ['required', 'string', 'max:255'],
            'singer' => ['required', 'string', 'max:255']
        ]);

        $this->post->update([
            'title' => $this->title,
            'singer' => $this->singer,
            'writer' => $this->writer,
            'genre' => $this->genre,
        ]);

        return redirect('/posts/my-posts')->with('message', 'success');
    }


    public function getPostProperty(){
        return Post::find($this->postId);
    }

    public function render()
    {
        return view('livewire.posts.edit');
    }
}
