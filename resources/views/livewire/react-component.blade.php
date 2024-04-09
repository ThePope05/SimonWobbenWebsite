<div class="text-gray-900 w-2/4 flex flex-row">
    <button wire:click="checkReact('favorite')" class="{{ $this->isReactType('favorite') ? 'text-pink-700' : '' }}">
        <span class="material-symbols-outlined transition-colors ">
            favorite
        </span>
    </button>
    <button wire:click="checkReact('mood')" class="{{ $this->isReactType('mood') ? 'text-pink-700' : '' }}">
        <span class="material-symbols-outlined transition-colors ">
            mood
        </span>
    </button>
    <button wire:click="checkReact('sentiment_satisfied')" class="{{ $this->isReactType('sentiment_satisfied') ? 'text-pink-700' : '' }}">
        <span class="material-symbols-outlined transition-colors ">
            sentiment_satisfied
        </span>
    </button>
    <button wire:click="checkReact('sentiment_dissatisfied')" class="{{ $this->isReactType('sentiment_dissatisfied') ? 'text-pink-700' : '' }}">
        <span class="material-symbols-outlined transition-colors ">
            sentiment_dissatisfied
        </span>
    </button>
</div>