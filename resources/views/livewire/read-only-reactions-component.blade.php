<div class="flex flex-row">
    <div class="flex flex-row space-x-2 text-pink-700 pb-2">
        @foreach ($this->reactions as $reaction)
        <span class="material-symbols-outlined">
            {{ $reaction->type }}
        </span>
        <span class="">
            {{ $reaction->count }}
        </span>
        @endforeach
    </div>
</div>