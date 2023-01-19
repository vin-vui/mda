<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl flex flex-col sm:flex-row  items-start sm:my-12 my-6 py-8 px-6 gap-4">
        <div class="@if($this->has_image) basis-1/2 @else w-full @endif flex flex-col">
            <div class="">
                <x-jet-label for="description" value="{{ $this->label }}" />
                <textarea rows="{{ $this->rows }}" id="description" class="resize-y w-full h-full mt-2 p-4 text-sm font-medium text-purple-700 placeholder-purple-700 duration-300 ease-in-out border-2 outline-none placeholder-opacity-70 rounded-2xl border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none" type="text" name="description" wire:model="description"></textarea>
                @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="text-green-500 self-start flex items-center">
                <svg class="h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
                    <path fill="currentColor" d="M8 3H6.25A3.25 3.25 0 0 0 3 6.25v15.5a3.25 3.25 0 0 0 3 3.24v-8.74A2.25 2.25 0 0 1 8.25 14h11.5A2.25 2.25 0 0 1 22 16.25v8.74a3.25 3.25 0 0 0 3-3.24V8.786a3.25 3.25 0 0 0-.952-2.299l-2.535-2.535A3.25 3.25 0 0 0 19.214 3H19v5.75A2.25 2.25 0 0 1 16.75 11h-6.5A2.25 2.25 0 0 1 8 8.75V3Zm9.5 0h-8v5.75c0 .414.336.75.75.75h6.5a.75.75 0 0 0 .75-.75V3Zm3 22v-8.75a.75.75 0 0 0-.75-.75H8.25a.75.75 0 0 0-.75.75V25h13Z" />
                </svg>
                Dernière sauvegarde le {{ Carbon\Carbon::parse($this->update_time)->format('d/m à H:i:s') }}
            </div>
        </div>
        @if($this->has_image)
        <div class="basis-1/2">
            <div class="">
                <x-jet-label value="Image actuelle" />
                @if (!is_string($this->image_1) && $this->image_1 != null)
                <img src="{{ $this->image_1->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                @else
                <img src="{{ Storage::disk('uploads')->url($this->image_1) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                @endif
            </div>
            <div wire:loading wire:target="image_1" wire:key="image_1">Téléversement</div>
            <label class="block mt-4">
                <x-jet-label for="image_1" value="Changer l'image" />
                <input wire:model="image_1" type="file" class="block w-full cursor-pointer text-sm mt-2 rounded-full border-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </label>
            @error('image_1') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        @endif
    </div>

    @if ($this->section_name == 'RESADO')
    <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl flex flex-col sm:flex-row  items-start sm:my-12 my-6 py-8 px-6 gap-4">
        <div class="basis-1/3">
            <div class="">
                <x-jet-label value="Image 1" />
                @if (!is_string($this->image_1) && $this->image_1 != null)
                <img src="{{ $this->image_1->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                @else
                <img src="{{ Storage::disk('uploads')->url($this->image_1) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                @endif
            </div>
            <div wire:loading wire:target="image_1" wire:key="image_1">Téléversement</div>
            <label class="block mt-4">
                <x-jet-label for="image_1" value="Changer l'image" />
                <input wire:model="image_1" type="file" class="block w-full cursor-pointer text-sm mt-2 rounded-full border-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </label>
            @error('image_1') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="basis-1/3">
            <div class="">
                <x-jet-label value="Image 2" />
                @if (!is_string($this->image_2) && $this->image_2 != null)
                <img src="{{ $this->image_2->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                @else
                <img src="{{ Storage::disk('uploads')->url($this->image_2) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                @endif
            </div>
            <div wire:loading wire:target="image_2" wire:key="image_2">Téléversement</div>
            <label class="block mt-4">
                <x-jet-label for="image_2" value="Changer l'image" />
                <input wire:model="image_2" type="file" class="block w-full cursor-pointer text-sm mt-2 rounded-full border-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </label>
            @error('image_2') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="basis-1/3">
            <div class="">
                <x-jet-label value="Image 3" />
                @if (!is_string($this->image_3) && $this->image_3 != null)
                <img src="{{ $this->image_3->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                @else
                <img src="{{ Storage::disk('uploads')->url($this->image_3) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                @endif
            </div>
            <div wire:loading wire:target="image_3" wire:key="image_3">Téléversement</div>
            <label class="block mt-4">
                <x-jet-label for="image_3" value="Changer l'image" />
                <input wire:model="image_3" type="file" class="block w-full cursor-pointer text-sm mt-2 rounded-full border-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </label>
            @error('image_3') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
    </div>
    @endif

    @if ($this->section_name == 'US')
    <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl flex flex-col gap-4 sm:my-12 my-6 py-8 px-6 ">
        <div class="flex gap-4">
            <div class="basis-1/3">
                <div class="">
                    <x-jet-label value="Image 1" />
                    @if (!is_string($this->image_1) && $this->image_1 != null)
                    <img src="{{ $this->image_1->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_1) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @endif
                </div>
                <div wire:loading wire:target="image_1" wire:key="image_1">Téléversement</div>
                <label class="block mt-4">
                    <x-jet-label for="image_1" value="Changer l'image" />
                    <input wire:model="image_1" type="file" class="block w-full cursor-pointer text-sm mt-2 rounded-full border-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                </label>
                @error('image_1') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="basis-2/3">
                <div class="">
                    <x-jet-label value="Image 2" />
                    @if (!is_string($this->image_2) && $this->image_2 != null)
                    <img src="{{ $this->image_2->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_2) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @endif
                </div>
                <div wire:loading wire:target="image_2" wire:key="image_2">Téléversement</div>
                <label class="block mt-4">
                    <x-jet-label for="image_2" value="Changer l'image" />
                    <input wire:model="image_2" type="file" class="block w-full cursor-pointer text-sm mt-2 rounded-full border-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                </label>
                @error('image_2') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="flex gap-4">
            <div class="basis-1/3">
                <div class="">
                    <x-jet-label value="Image 3" />
                    @if (!is_string($this->image_3) && $this->image_3 != null)
                    <img src="{{ $this->image_3->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_3) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @endif
                </div>
                <div wire:loading wire:target="image_3" wire:key="image_3">Téléversement</div>
                <label class="block mt-4">
                    <x-jet-label for="image_3" value="Changer l'image" />
                    <input wire:model="image_3" type="file" class="block w-full cursor-pointer text-sm mt-2 rounded-full border-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                </label>
                @error('image_3') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="basis-1/3">
                <div class="">
                    <x-jet-label value="Image 4" />
                    @if (!is_string($this->image_4) && $this->image_4 != null)
                    <img src="{{ $this->image_4->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_4) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @endif
                </div>
                <div wire:loading wire:target="image_4" wire:key="image_4">Téléversement</div>
                <label class="block mt-4">
                    <x-jet-label for="image_4" value="Changer l'image" />
                    <input wire:model="image_4" type="file" class="block w-full cursor-pointer text-sm mt-2 rounded-full border-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                </label>
                @error('image_4') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
            <div class="basis-1/3">
                <div class="">
                    <x-jet-label value="Image 5" />
                    @if (!is_string($this->image_5) && $this->image_5 != null)
                    <img src="{{ $this->image_5->temporaryUrl() }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_5) }}" alt="" class="mt-2 h-64 rounded-2xl border-2 border-purple-50">
                    @endif
                </div>
                <div wire:loading wire:target="image_5" wire:key="image_5">Téléversement</div>
                <label class="block mt-4">
                    <x-jet-label for="image_5" value="Changer l'image" />
                    <input wire:model="image_5" type="file" class="block w-full cursor-pointer text-sm mt-2 rounded-full border-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                </label>
                @error('image_5') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    @endif

</div>
