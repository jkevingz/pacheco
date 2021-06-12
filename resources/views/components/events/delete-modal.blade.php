<x-modal wire:model="isDeleteModalOpen" id="event-delete-modal">
  <x-slot name="title">
      {{ __('Are you sure you want to delete this event?') }}
  </x-slot>

  <x-slot name="content">

      <p>
        <strong>{{ __('Title') }}: </strong> {{ isset($selectedEvent) ? $selectedEvent->title : '' }}
        <br>
        <strong>{{ __('Date') }}: </strong> {{ isset($selectedEvent) ? $selectedEvent->date : '' }}
        <br>
        <strong>{{ __('Description') }}: </strong> {{ $selectedEvent ? $selectedEvent->description : '' }}
      </p>

  </x-slot>

  <x-slot name="footer">
      <x-button button-style="secondary" @click="$dispatch('close-modal', 'event-delete-modal')">{{ __('Cancel') }}</x-button>
      <x-button button-style="danger" wire:click="onDelete">{{ __('Delete') }}</x-button>
  </x-slot>
</x-modal>
