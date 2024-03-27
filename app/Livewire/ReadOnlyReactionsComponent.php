<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class ReadOnlyReactionsComponent extends Component
{
    public $post;

    public $reactions = [];

    public function render()
    {
        $reactions = $this->post->reactions->groupBy('type')->map(function ($reaction) {
            return (object) [
                'type' => $reaction->first()->type,
                'count' => $reaction->count(),
            ];
        });

        $i = 0;
        foreach ($reactions as $reaction) {
            $this->reactions[$i] = $reaction;
            $i++;
        }

        return view('livewire.read-only-reactions-component');
    }
}
