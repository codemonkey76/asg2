<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'dark:text-gray-400 dark:focus:text-gray-200 text-gray-700 text-sm leading-5 font-medium focus:outline-none focus:text-gray-800 focus:underline transition duration-150 ease-in-out' . ($attributes->get('disabled') ? ' opacity-75 cursor-not-allowed' : ''),
    ]) }}
>
    {{ $slot }}
</button>
