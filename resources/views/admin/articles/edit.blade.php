<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Updated article') }} - {{ $article->title }}
            </h2>

            <a href="{{route('article.index')}}">
                <x-button type="button">
                    {{ __('Go back') }}
                </x-button>
            </a>
        </div>
    </x-slot>

    <x-page-container>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form
            action="{{ route('article.update', ['article' => $article->id]) }}"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PUT')

            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input
                    id="title"
                    class="block mt-1 w-full"
                    type="text"
                    name="title"
                    required
                    autofocus
                    value="{{ $article->title }}"
                />
            </div>

            @if ($article->image)
                <div x-data="{update_image: false}" class="mt-4">
                    <img src="{{ $article->imageUrl }}" width="200" x-show="!update_image"/>
                    <x-label x-show="update_image" for="image" :value="__('Image')" />
                    <x-input
                        x-show="update_image"
                        id="image"
                        class="block mt-1 w-full"
                        type="file"
                        name="image"
                        autofocus
                        accept="image/png, image/jpeg"
                    />

                    <div class="d-flex mt-4">
                        <x-input x-model="update_image" type="checkbox" id="image_flag" name="image_flag" />&nbsp;
                        <x-label :value="__('Upload a different image')" for="image_flag" />
                    </div>
                </div>
            @else
                <div class="mt-4">
                    <x-label for="image" :value="__('Image')" />

                    <x-input
                        id="image"
                        class="block mt-1 w-full"
                        type="file"
                        name="image"
                        autofocus
                        accept="image/png, image/jpeg"
                    />
                </div>
            @endif

            <div class="mt-4">
                <x-label for="body" :value="__('Body')" />

                <x-textarea
                    id="body"
                    class="block mt-1 w-full"
                    name="body"
                    rows="20"
                >
                    {{ $article->body }}
                </x-textarea>
            </div>

            <div class="mt-4">
                <a href="{{ route('article.index') }}">
                    <x-button type="button" button-style="secondary">
                        {{ __('Cancel') }}
                    </x-button>
                </a>

                <x-button type="submit">
                    {{ __('Edit')}}
                </x-button>
            </div>
        </form>
    </x-page-container>
</x-app-layout>
