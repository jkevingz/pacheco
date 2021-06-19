<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('C. Panel') }}
        </h2>
    </x-slot>
    <x-page-container>
        <livewire:eventos></livewire:eventos>
    </x-page-container>
</x-app-layout>