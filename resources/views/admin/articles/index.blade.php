<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Articles') }}
            </h2>

            <a href="{{ route('article.create') }}">
                <x-button type="button">
                    {{ __('Add article') }}
                </x-button>
            </a>
        </div>
    </x-slot>

    <x-page-container>
        <x-auth-session-status :status="session('status')"/>
        <x-table>
            <x-slot name="header">
                <x-table-column>{{ __('Title') }}</x-table-column>
                <x-table-column>{{ __('Slug') }}</x-table-column>
                <x-table-column>{{ __('Image') }}</x-table-column>
                <x-table-column>{{ __('Actions') }}</x-table-column>
            </x-slot>

            <x-slot name="body">
                @foreach ($articles as $article)
                    <tr>
                        <x-table-column>{{ $article->title }}</x-table-column>
                        <x-table-column>{{ $article->slug }}</x-table-column>
                        <x-table-column>
                            @if ($article->imageUrl)
                                <a href="{{ $article->imageUrl }}" target="_blank">
                                    {{ __('See image') }}
                                </a>
                            @else
                                {{ __('No image') }}
                            @endif
                        </x-table-column>
                        <x-table-column class="d-flex">
                            <a href="{{ route('article.edit', ['article' => $article->id]) }}">
                                <x-button type="button">{{ __('Edit') }}</x-button>
                            </a>

                            <form action="{{ route('article.destroy', ['article' => $article->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-button type="submit" button-style="danger">{{ __('Delete') }}</x-button>
                            </form>
                        </x-table-column>
                    </tr>
                @endforeach
            </x-slot>
        </x-table>
    </x-page-container>
</x-app-layout>
