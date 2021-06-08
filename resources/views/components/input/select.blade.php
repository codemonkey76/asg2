@props([
'placeholder' => null,
'trailingAddOn' => null,
])

<div class="flex">
    <select {{ $attributes->merge(['class' => "max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md"]) }}>
        @if ($placeholder)
            <option disabled value="">{{ $placeholder }}</option>
        @endif
        {{ $slot }}

    </select>

    @if ($trailingAddOn)
        {{ $trailingAddOn }}
    @endif
</div>
