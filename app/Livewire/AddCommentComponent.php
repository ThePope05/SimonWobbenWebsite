<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class AddCommentComponent extends Component
{
    public $comment;
    public $post;

    public function render()
    {
        return view('livewire.add-comment-component');
    }

    public function store()
    {
        $this->validate([
            'comment' => 'required'
        ]);

        $this->post->comments()->create([
            'content' => $this->comment,
            'user_id' => Auth::user()->id
        ]);

        $this->comment = '';
        $this->post = $this->post->fresh();
    }

    public function destroy($commentId)
    {
        $comment = Comment::find($commentId);
        $comment->delete();
        $this->post = $this->post->fresh();
    }
}
