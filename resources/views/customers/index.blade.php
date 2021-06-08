<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 py-6">
        @livewire('customer-table')
    </div>
</x-app-layout>
