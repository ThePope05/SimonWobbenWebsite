<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Post;

class ReactComponent extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.react-component');
    }

    public function checkReact($type)
    {
        if ($this->post->reactions()->where('user_id', auth()->id())->where('type', $type)->exists()) {
            //if it exists, delete it
            $this->post->reactions()->where('user_id', auth()->id())->where('type', $type)->delete();
        } else if ($this->post->reactions()->where('user_id', auth()->id())->exists()) {
            //if it exists but not the same type, update it
            $this->post->reactions()->where('user_id', auth()->id())->update(['type' => $type]);
        } else {
            //if it doesn't exist, create it
            $this->post->reactions()->create([
                'user_id' => auth()->id(),
                'type' => $type,
            ]);
        }
    }

    public function isReactType($type)
    {
        return $this->post->reactions()->where('user_id', auth()->id())->where('type', $type)->exists();
    }
}
