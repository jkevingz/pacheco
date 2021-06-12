@props(['buttonStyle' => 'primary'])

<button {{ $attributes->class([
        'bg-gray-800 border-transparent hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900 ring-gray-300' => $buttonStyle == 'primary',
        'bg-gray-300 hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900  ring-gray-300' => $buttonStyle == 'secondary',
        'bg-red-800 border-transparent hover:bg-red-700 active:bg-red-900 focus:border-red-900 ring-red-300' => $buttonStyle == 'danger',
    ])->merge([
        'type' => 'submit',
        'class' => 'inline-flex items-center px-4 py-2 border rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring disabled:opacity-25 transition ease-in-out duration-150'
    ])
}}>
    {{ $slot }}
</button>
