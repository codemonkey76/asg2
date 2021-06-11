<div>
    <x-button.seconday wire:click="$toggle('showModal')" class="flex items-center space-x-2">
        <x.icon.upload class="text=gray-500" />
        <span>Import</span>
    </x-button.seconday>
    <form wire:submit.prevent="import">
        <x-modal.dialog wire:model="showModal">
            <x-slot name="title">Import Transactions</x-slot>

            <x-slot name="content">
                @unless ($upload)
                    <div class="py-12 flex flex-col items-center justify-center">
                        <div class="flex items-center space-x-2 text-xl">
                            <x-icon.upload class="text-gray-400 h-8 w-8" />
                            <x-input.file-upload wire:model="upload" id="upload">
                                <span class="text-gray-500 font-bold">CSV file</span>
                            </x-input.file-upload>
                        </div>
                        @error('upload')
                            <div class="mt-3 text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                @else
                    <div>
                        <x-input.group for="name" lael="Name" :error="$errors->first('fieldColumnMap.name')">
                            <x-input.select wire:model="fieldColumnMap.name" id="name">
                                <option value="" disabled>Select Column...</option>
                                @foreach ($columns as $column)
                                    <option>{{ $column }}</option>
                                @endforeach
                            </x-input.select>
                        </x-input.group>
                    </div>
                @endif
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
