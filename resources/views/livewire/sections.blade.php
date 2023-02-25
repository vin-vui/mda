<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl sm:my-12 my-6 pb-8">
        <div class="bg-yellow-50 px-6 py-6 text-xl font-semibold text-purple-900">{{ $this->label }}</div>
        <div class="flex flex-col sm:flex-row gap-4 items-start px-6 mt-4">
            <div class="@if($this->has_image) basis-1/2 @endif w-full flex flex-col">
                <div class="">
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
            <div class="basis-1/2 w-full">
                <div class="">
                    @if (!is_string($this->image_1) && $this->image_1 != null)
                    <img src="{{ $this->image_1->temporaryUrl() }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_1) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @endif
                </div>
                <div x-data="{photoName: null, photoPreview: null}">
                    <input type="file" class="hidden" wire:model="image_1" x-ref="photo" />
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        <span class="py-1">sélectionner une nouvelle image</span>
                        <div wire:loading wire:target="image_1" wire:key="image_1">
                            <svg class="ml-3 text-green-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                    <path stroke-dasharray="2 4" stroke-dashoffset="6" d="M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3">
                                        <animate attributeName="stroke-dashoffset" dur="0.6s" repeatCount="indefinite" values="6;0" />
                                    </path>
                                    <path stroke-dasharray="30" stroke-dashoffset="30" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.3s" values="30;0" />
                                    </path>
                                    <path stroke-dasharray="10" stroke-dashoffset="10" d="M12 16v-7.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="10;0" />
                                    </path>
                                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8.5l3.5 3.5M12 8.5l-3.5 3.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </x-jet-secondary-button>
                    @error('image_1') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
            @endif
        </div>
    </div>

    @if ($this->section_name == 'MISSIONS')
    <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl sm:my-12 my-6 pb-8">
        <div class="bg-yellow-50 px-6 py-6 text-xl font-semibold text-purple-900"">Visuels</div>
        <div class="flex px-6 mt-4 gap-4">
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 1" />
                    @if (!is_string($this->image_1) && $this->image_1 != null)
                    <img src="{{ $this->image_1->temporaryUrl() }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_1) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @endif
                </div>
                <div x-data="{photoName: null, photoPreview: null}">
                    <input type="file" class="hidden" wire:model="image_1" x-ref="photo" />
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        <span class="py-1">sélectionner une nouvelle image</span>
                        <div wire:loading wire:target="image_1" wire:key="image_1">
                            <svg class="ml-3 text-green-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                    <path stroke-dasharray="2 4" stroke-dashoffset="6" d="M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3">
                                        <animate attributeName="stroke-dashoffset" dur="0.6s" repeatCount="indefinite" values="6;0" />
                                    </path>
                                    <path stroke-dasharray="30" stroke-dashoffset="30" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.3s" values="30;0" />
                                    </path>
                                    <path stroke-dasharray="10" stroke-dashoffset="10" d="M12 16v-7.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="10;0" />
                                    </path>
                                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8.5l3.5 3.5M12 8.5l-3.5 3.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </x-jet-secondary-button>
                    @error('image_1') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 2" />
                    @if (!is_string($this->image_2) && $this->image_2 != null)
                    <img src="{{ $this->image_2->temporaryUrl() }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_2) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @endif
                </div>
                <div x-data="{photoName: null, photoPreview: null}">
                    <input type="file" class="hidden" wire:model="image_2" x-ref="photo" />
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        <span class="py-1">sélectionner une nouvelle image</span>
                        <div wire:loading wire:target="image_2" wire:key="image_2">
                            <svg class="ml-3 text-green-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                    <path stroke-dasharray="2 4" stroke-dashoffset="6" d="M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3">
                                        <animate attributeName="stroke-dashoffset" dur="0.6s" repeatCount="indefinite" values="6;0" />
                                    </path>
                                    <path stroke-dasharray="30" stroke-dashoffset="30" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.3s" values="30;0" />
                                    </path>
                                    <path stroke-dasharray="10" stroke-dashoffset="10" d="M12 16v-7.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="10;0" />
                                    </path>
                                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8.5l3.5 3.5M12 8.5l-3.5 3.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </x-jet-secondary-button>
                    @error('image_2') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
        <div class="flex px-6 mt-4 gap-4">
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 3" />
                    @if (!is_string($this->image_3) && $this->image_3 != null)
                    <img src="{{ $this->image_3->temporaryUrl() }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_3) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @endif
                </div>
                <div x-data="{photoName: null, photoPreview: null}">
                    <input type="file" class="hidden" wire:model="image_3" x-ref="photo" />
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        <span class="py-1">sélectionner une nouvelle image</span>
                        <div wire:loading wire:target="image_3" wire:key="image_3">
                            <svg class="ml-3 text-green-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                    <path stroke-dasharray="2 4" stroke-dashoffset="6" d="M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3">
                                        <animate attributeName="stroke-dashoffset" dur="0.6s" repeatCount="indefinite" values="6;0" />
                                    </path>
                                    <path stroke-dasharray="30" stroke-dashoffset="30" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.3s" values="30;0" />
                                    </path>
                                    <path stroke-dasharray="10" stroke-dashoffset="10" d="M12 16v-7.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="10;0" />
                                    </path>
                                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8.5l3.5 3.5M12 8.5l-3.5 3.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </x-jet-secondary-button>
                    @error('image_3') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 4" />
                    @if (!is_string($this->image_4) && $this->image_4 != null)
                    <img src="{{ $this->image_4->temporaryUrl() }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_4) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @endif
                </div>
                <div x-data="{photoName: null, photoPreview: null}">
                    <input type="file" class="hidden" wire:model="image_4" x-ref="photo" />
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        <span class="py-1">sélectionner une nouvelle image</span>
                        <div wire:loading wire:target="image_4" wire:key="image_4">
                            <svg class="ml-3 text-green-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                    <path stroke-dasharray="2 4" stroke-dashoffset="6" d="M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3">
                                        <animate attributeName="stroke-dashoffset" dur="0.6s" repeatCount="indefinite" values="6;0" />
                                    </path>
                                    <path stroke-dasharray="30" stroke-dashoffset="30" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.3s" values="30;0" />
                                    </path>
                                    <path stroke-dasharray="10" stroke-dashoffset="10" d="M12 16v-7.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="10;0" />
                                    </path>
                                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8.5l3.5 3.5M12 8.5l-3.5 3.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </x-jet-secondary-button>
                    @error('image_4') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($this->section_name == 'US')
    <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl sm:my-12 my-6 pb-8">
        <div class="bg-yellow-50 px-6 py-6 text-xl font-semibold text-purple-900"">Visuels</div>
        <div class="flex px-6 mt-4 gap-4">
            <div class="w-full">
                <div class="">
                    <x-jet-label value="Image 1" />
                    @if (!is_string($this->image_1) && $this->image_1 != null)
                    <img src="{{ $this->image_1->temporaryUrl() }}" alt="" class="mt-2 h-96 object-cover w-full rounded-2xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_1) }}" alt="" class="mt-2 h-96 object-cover w-full rounded-2xl border-2 border-purple-50">
                    @endif
                </div>
                <div x-data="{photoName: null, photoPreview: null}">
                    <input type="file" class="hidden" wire:model="image_1" x-ref="photo" />
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        <span class="py-1">sélectionner une nouvelle image</span>
                        <div wire:loading wire:target="image_1" wire:key="image_1">
                            <svg class="ml-3 text-green-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                    <path stroke-dasharray="2 4" stroke-dashoffset="6" d="M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3">
                                        <animate attributeName="stroke-dashoffset" dur="0.6s" repeatCount="indefinite" values="6;0" />
                                    </path>
                                    <path stroke-dasharray="30" stroke-dashoffset="30" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.3s" values="30;0" />
                                    </path>
                                    <path stroke-dasharray="10" stroke-dashoffset="10" d="M12 16v-7.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="10;0" />
                                    </path>
                                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8.5l3.5 3.5M12 8.5l-3.5 3.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </x-jet-secondary-button>
                    @error('image_1') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
        <div class="flex px-6 mt-4 gap-4">
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 2" />
                    @if (!is_string($this->image_2) && $this->image_2 != null)
                    <img src="{{ $this->image_2->temporaryUrl() }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_2) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @endif
                </div>
                <div x-data="{photoName: null, photoPreview: null}">
                    <input type="file" class="hidden" wire:model="image_2" x-ref="photo" />
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        <span class="py-1">sélectionner une nouvelle image</span>
                        <div wire:loading wire:target="image_2" wire:key="image_2">
                            <svg class="ml-3 text-green-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                    <path stroke-dasharray="2 4" stroke-dashoffset="6" d="M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3">
                                        <animate attributeName="stroke-dashoffset" dur="0.6s" repeatCount="indefinite" values="6;0" />
                                    </path>
                                    <path stroke-dasharray="30" stroke-dashoffset="30" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.3s" values="30;0" />
                                    </path>
                                    <path stroke-dasharray="10" stroke-dashoffset="10" d="M12 16v-7.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="10;0" />
                                    </path>
                                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8.5l3.5 3.5M12 8.5l-3.5 3.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </x-jet-secondary-button>
                    @error('image_2') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 3" />
                    @if (!is_string($this->image_3) && $this->image_3 != null)
                    <img src="{{ $this->image_3->temporaryUrl() }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @else
                    <img src="{{ Storage::disk('uploads')->url($this->image_3) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                    @endif
                </div>
                <div x-data="{photoName: null, photoPreview: null}">
                    <input type="file" class="hidden" wire:model="image_3" x-ref="photo" />
                    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        <span class="py-1">sélectionner une nouvelle image</span>
                        <div wire:loading wire:target="image_3" wire:key="image_3">
                            <svg class="ml-3 text-green-600 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                    <path stroke-dasharray="2 4" stroke-dashoffset="6" d="M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3">
                                        <animate attributeName="stroke-dashoffset" dur="0.6s" repeatCount="indefinite" values="6;0" />
                                    </path>
                                    <path stroke-dasharray="30" stroke-dashoffset="30" d="M12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.1s" dur="0.3s" values="30;0" />
                                    </path>
                                    <path stroke-dasharray="10" stroke-dashoffset="10" d="M12 16v-7.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.2s" values="10;0" />
                                    </path>
                                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M12 8.5l3.5 3.5M12 8.5l-3.5 3.5">
                                        <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="6;0" />
                                    </path>
                                </g>
                            </svg>
                        </div>
                    </x-jet-secondary-button>
                    @error('image_3') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
