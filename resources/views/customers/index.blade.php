<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium dark:text-gray-200 text-gray-900 sm:px-6 lg:px-8">
        Recent activity
    </h2>

    <!-- Activity list (smallest breakpoint only) -->
    @livewire('customer-table')
</x-app-layout>
