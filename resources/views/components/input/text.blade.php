@props([
'leadingAddOn' => false,
])

<div class="flex rounded-md shadow-sm">
    @if ($leadingAddOn)
        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 dark:border-gray-600 border-gray-300 dark:bg-gray-900 bg-gray-50 text-gray-500 sm:text-sm">
            {{ $leadingAddOn }}
        </span>
    @endif

    <input type="text" {{ $attributes->merge(['class' => 'flex-1 form-input dark:border-gray-600 dark:bg-gray-900 border-gray-300 dark:text-gray-200 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 rounded-md' . ($leadingAddOn ? ' rounded-none rounded-r-md' : '')]) }}/>
</div>
