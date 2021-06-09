@props(['type' => 'link'])

@if ($type === 'link')
    <a {{ $attributes->merge(['href' => '#', 'class' => 'block px-4 py-2 text-sm leading-5 dark:text-gray-400 text-gray-700 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:outline-none dark:focus:bg-gray-800 dark:focus:text-gray-200 focus:bg-gray-100 focus:text-gray-900']) }} role="menuitem">
        {{ $slot }}
    </a>
@elseif ($type === 'button')
    <button {{ $attributes->merge(['type' => 'button', 'class' => 'block w-full px-4 py-2 text-sm leading-5 dark:text-gray-400 text-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 dark:hover:text-gray-200 hover:text-gray-900 focus:outline-none dark:focus:bg-gray-800 dark:focus:text-gray-200 focus:bg-gray-100 focus:text-gray-900']) }} role="menuitem">
        {{ $slot }}
    </button>
@endif
