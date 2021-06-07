<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <div class="flex flex-col flex-grow bg-cyan-700 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <x-application-logo></x-application-logo>
            </div>
            <nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
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
                                       class="@if($this->isRoute($menu->route)) bg-cyan-800 text-white @else hover:bg-cyan-600 hover:text-white text-cyan-100 @endif group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md"
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
    </div>
</div>
