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
              <x-label for="date" :value="__('Date')" />

              <x-input
                  id="date"
                  class="block mt-1 w-full"
                  type="datetime-local"
                  name="date"
                  required
                  wire:model="date"
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
