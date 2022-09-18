<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Create extends Component
{
    public $title,$genre, $writer, $singer;

    //return the view file
    public function render()
    {
        return view('livewire.posts.create');
    }

    //cher angel codes
    public function createPost(){
        $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'singer' => ['required', 'string', 'max:255'],
            'genre' => ['required', 'string', 'max:255'],
            'writer' => ['required', 'string', 'max:255']
        ]);

        Post::create([
            'user_id' => auth()->user()->id,
            'title' => $this->title,
            'genre' => $this->genre,
            'singer' => $this->singer,
            'writer' => $this->writer,
        ]);

        return redirect('/posts/my-posts')->with('message', 'Post added');
    }

    //wala pa ni oy need nig mga gmail chuchu for validation kanang 
    //ivalidate real-time

    /*
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            
        ]);
    }
    */
}
