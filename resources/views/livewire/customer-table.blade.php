<div class="py-4 space-y-4">
    <!-- Top Bar -->
    <div class="flex justify-between">
        <div class="w-1/2 flex space-x-4">
            <x-input.text wire:model="filters.search" placeholder="Search customers"></x-input.text>
            <x-button.link wire:click="$toggle('showFilters')">@if ($showFilters) Hide @endif Advanced Search...
            </x-button.link>
        </div>
        <div>
            <x-dropdown label="Bulk Actions">
                <x-dropdown.item type="button" wire:click="exportSelected" class="flex items-center space-x-2">
                    <x-icon.download class="text-gray-400 dark:text-gray-600"/><span>Export</span>
                </x-dropdown.item>
                <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                    <x-icon.trash class="text-gray-400 dark:text-gray-600"/><span>Delete</span>
                </x-dropdown.item>
            </x-dropdown>
        </div>
    </div>
    <!-- Advanced Search -->
    <div>
        @if($showFilters)
            <div class="dark:bg-gray-800 bg-gray-200 p-4 rounded shadow-inner flex relative">
                <div class="space-y-4">
                    <x-input.group inline for="filter-overdue-min" label="Minimum Overdue">
                        <x-input.money wire:model.lazy="filters.overdue-min" id="filter-overdue-min"/>
                    </x-input.group>

                    <x-input.group inline for="filter-overdue-max" label="Maximum Overdue">
                        <x-input.money wire:model.lazy="filters.overdue-max" id="filter-overdue-max"/>
                    </x-input.group>
                </div>

                <div class="space-y-4">
                    <x-button.link wire:click="resetFilters" class="absolute right-0 bottom-0 p-4">Reset Filters
                    </x-button.link>
                </div>
            </div>
        @endif
    </div>
    <!-- Customers Table -->
    <div class="flex-col space-y-4">
        <x-table>
            <x-slot name="head">
                <x-table.heading class="pr-0 w-8">
                    <x-input.checkbox wire:model="selectPage"/>
                </x-table.heading>
                <x-table.heading wire:click="sortBy('id')" sortable
                                 :direction="$sortField === 'title' ? $sortDirection: null">ID
                </x-table.heading>
                <x-table.heading wire:click="sortBy('name')" sortable
                                 :direction="$sortField === 'name' ? $sortDirection: null">Name
                </x-table.heading>
                <x-table.heading wire:click="sortBy('current_balance')" sortable
                                 :direction="$sortField === 'current_balance' ? $sortDirection: null">Balance
                </x-table.heading>
                <x-table.heading wire:click="sortBy('overdue_balance')" sortable
                                 :direction="$sortField === 'overdue_balance' ? $sortDirection: null">Overdue
                </x-table.heading>
                <x-table.heading>Actions</x-table.heading>
            </x-slot>
            <x-slot name="body">
                @if($selectPage)
                <x-table.row  wire:key="row-message">
                    <x-table.cell colspan="6" class="dark:bg-gray-600 bg-gray-200">
                        @unless($selectAll)
                            <div>
                                <span>You selected <strong>{{ $customers->count() }}</strong> customers, do you want to select all <strong>{{ $customers->total() }}</strong>?</span>
                                <x-button.link wire:click="selectAll" class="ml-1 dark:text-blue-600">Select All</x-button.link>
                            </div>
                        @else
                            <div>
                                <span>You are currently selecting all <strong>{{ $customers->total() }}</strong> customers</span>
                            </div>
                        @endif
                    </x-table.cell>
                </x-table.row>
                @endif
                @forelse ($customers as $customer)
                    <x-table.row wire:key="row-{{$customer->id }}">
                        <x-table.cell class="pr-0">
                            <x-input.checkbox wire:model="selected" value="{{ $customer->id }}"/>
                        </x-table.cell>
                        <x-table.cell>
                        <span class="font-medium">
                            {{$customer->id}}
                        </span>
                        </x-table.cell>
                        <x-table.cell>
                        <span class="inline-flex space-x-2 truncate text-sm leading-5">
                            <p class="dark:text-gray-400 text-gray-600 truncate">{{ $customer->name }}</p>
                        </span>
                        </x-table.cell>
                        <x-table.cell>
                        <span class="font-medium">
                            {{ $customer->currentBalanceAmount }}
                        </span>
                        </x-table.cell>
                        <x-table.cell>
                        <span class="font-medium">
                            {{ $customer->overdueBalanceAmount }}
                        </span>
                        </x-table.cell>
                        <x-table.cell>
                            <div class="flex justify-center">
                                <a class="hover:underline text-blue-500 mx-1"
                                   href="{{route('admin.customers.show', $customer->id)}}">View</a>
                                <a class="hover:underline text-yellow-500 mx-1"
                                   href="{{route('admin.customers.edit', $customer->id)}}">Edit</a>
                                <a class="hover:underline text-red-500 mx-1"
                                   href="{{route('admin.customers.destroy', $customer->id)}}">Delete</a>
                            </div>
                        </x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row>
                        <x-table.cell colspan="6">
                            <div class="flex justify-center italic text-medium text-gray-400">No records found</div>
                        </x-table.cell>
                    </x-table.row>
                @endforelse
            </x-slot>
        </x-table>
        {{ $customers->links() }}
    </div>

    <!-- Delete Customers Modal -->
    <form wire:submit.prevent="deleteSelected">
        <x-modal.confirmation wire:model.defer="showDeleteModal">
            <x-slot name="title">Delete Customers</x-slot>

            <x-slot name="content">
                Are you sure you want to delete these customers? This action is irreversible.
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showDeleteModal', false)">Cancel</x-button.primary>
                <x-button.primary type="submit">Delete</x-button.primary>
            </x-slot>
        </x-modal.confirmation>
    </form>

</div>
