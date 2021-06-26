<x-modal wire:model="isModalOpen" id="event-form-modal">
  <x-slot name="title">
      {{ !empty($selectedEvent) ? __('Edit event') : __('Add new event') }}
  </x-slot>

  <x-slot name="content">
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form wire:submit.prevent="onSubmit">
          @csrf

          <div>
              <x-label for="title" :value="__('Title')" />

              <x-input
                  id="title"
                  class="block mt-1 w-full"
                  type="text"
                  name="title"
                  required
                  autofocus
                  wire:model="title"
              />
          </div>

          <div class="mt-4">
              <x-label for="date_from" :value="__('Date From')" />

              <x-input
                  id="date_from"
                  class="block mt-1 w-full"
                  type="datetime-local"
                  name="date_from"
                  required
                  wire:model="date_from"
              />
          </div>

          <div class="mt-4">
              <x-label for="date_to" :value="__('Date To')" />

              <x-input
                  id="date_to"
                  class="block mt-1 w-full"
                  type="datetime-local"
                  name="date_to"
                  required
                  wire:model="date_to"
              />
          </div>

          <div class="mt-4">
              <x-label for="description" :value="__('Description')" />

              <x-textarea
                  id="description"
                  class="block mt-1 w-full"
                  name="description"
                  wire:model="description"
              />
          </div>

          <button hidden type="submit">Submit</button>
      </form>

  </x-slot>

  <x-slot name="footer">
      <x-button button-style="secondary" @click="$dispatch('close-modal', 'event-form-modal')">{{ __('Cancel') }}</x-button>
      <x-button wire:click="onSubmit">{{ !empty($selectedEvent) ? __('Edit') : __('Add') }}</x-button>
  </x-slot>
</x-modal>
