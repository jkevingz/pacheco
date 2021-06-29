<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create new article') }}
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

        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
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
                />
            </div>

            <div>
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

            <!-- <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                Profile Photo File Input
                <input type="file" class="hidden"
                            x-ref="image"
                            x-on:change="
                                    photoName = $refs.image.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.image.files[0]);
                            " />

                <x-label for="image" value="{{ __('Image') }}" />

                Current Profile Photo
                <div class="mt-2" x-show="!photoPreview">
                    <img src="" alt="" class="rounded-full h-20 w-20 object-cover">
                </div>

                New Profile Photo Preview
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </jet-secondary-button>

                @if (false)
                    <jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </jet-secondary-button>
                @endif

                <jet-input-error for="photo" class="mt-2" />
            </div> -->

            <div class="mt-4">
                <x-label for="body" :value="__('Body')" />

                <x-textarea
                    id="body"
                    class="block mt-1 w-full"
                    name="body"
                    rows="20"
                />
            </div>

            <div class="mt-4">
                <a href="{{ route('article.index') }}">
                    <x-button type="button" button-style="secondary">
                        {{ __('Cancel') }}
                    </x-button>
                </a>

                <x-button type="submit">
                    {{ __('Add')}}
                </x-button>
            </div>
        </form>
    </x-page-container>
</x-app-layout>
