<div class="flex justify-between">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Events') }}
    </h2>

    <x-button type="button" wire:click="$emit('openNewEventModal')">
        {{ __('Add event') }}
    </x-button>
</div>
