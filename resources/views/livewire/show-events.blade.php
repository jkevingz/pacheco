<x-page-container>
    <x-table>
        <x-slot name="header">
            <x-table-column>{{ __('Date') }}</x-table-column>
            <x-table-column>{{ __('Title') }}</x-table-column>
            <x-table-column>{{ __('Description') }}</x-table-column>
            <x-table-column>{{ __('Actions') }}</x-table-column>
        </x-slot>

        <x-slot name="body">
            @foreach ($events as $event)
                <tr>
                    <x-table-column>{{ $event->date_from }}</x-table-column>
                    <x-table-column>{{ $event->title }}</x-table-column>
                    <x-table-column>{{ $event->description }}</x-table-column>
                    <x-table-column>
                        <x-button button-style="danger" wire:click="openDeleteEvent({{ $event }})">{{ __('Delete') }}</x-button>
                        <x-button wire:click="openEditEvent({{ $event }})">{{ __('Edit') }}</x-button>
                    </x-table-column>
                </tr>
            @endforeach
        </x-slot>
    </x-table>

    <div class="mt-2">
        {{ $events->links() }}
    </div>

    <x-events.form-modal :selectedEvent="$selectedEvent" />

    <x-events.delete-modal :selectedEvent="$selectedEvent"/>

</x-page-container>
