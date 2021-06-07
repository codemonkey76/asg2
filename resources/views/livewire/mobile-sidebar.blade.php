<div x-data="{ open: @entangle('isOpen') }" x-show="open" class="fixed inset-0 flex z-40 lg:hidden" role="dialog"
     aria-modal="true">
    <div x-show="open"
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

    <div x-show="open"
         x-transition:enter="transition ease-in-out duration-300 transform"
         x-transition:enter-start="-translate-x-full"
         x-transition:enter-end="-translate-x-0"
         x-transition:leave="transition ease-in-out duration-300 transform"
         x-transition:leave-start="-translate-x-0"
         x-transition:leave-end="-translate-x-full"
         class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-cyan-700">

        <div x-show="open"
             x-transition:enter="ease-in-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in-out duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute top-0 right-0 -mr-12 pt-2">
            <button wire:click="toggleSidebar"
                    class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div class="flex-shrink-0 flex items-center px-4">
            <x-application-logo></x-application-logo>
        </div>
        <nav class="mt-5 flex-shrink-0 h-full divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">

            @foreach($menus as $group)
                @if($group->heading)
                    <div class="divide-none text-cyan-300 px-2">{{ $group->name }}</div>
                @endif
                @if(! $loop->first)
                    <div class="mt-6 pt-6">
                @endif
                <div class="px-2 space-y-1">
                    @foreach($group->menus as $menu)
                        <a href="{{route($menu->route)}}"
                           class="@if($this->isRoute($menu->route)) bg-cyan-800 text-white @else hover:bg-cyan-600 hover:text-white text-cyan-100 @endif  group flex items-center px-2 py-2 text-base font-medium rounded-md"
                           @if($this->isRoute($menu->route)) aria-current="page" @endif>
                            <div class="text-cyan-200 mr-4 flex-shrink-0">
                                {!! $menu->icon !!}
                            </div>
                            <span>{{$menu->name}}</span>
                        </a>
                    @endforeach
                </div>
                @if(! $loop->first)
                    </div>
                @endif

            @endforeach
        </nav>
    </div>


    <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
    </div>

</div>
