<?php

namespace App\Livewire;

use Livewire\Component;

class ReadOnlyCommentComponent extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.read-only-comment-component');
    }
}
