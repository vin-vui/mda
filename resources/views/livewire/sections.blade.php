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
                    <x-jet-label value="Visuel" />
                    <img id="{{ $this->target[0] }}" src="{{ ${$target[2]} ? ${$target[2]}->temporaryUrl() : Storage::disk('uploads')->url(${$target[0]}) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                </div>
                <div x-data="{photoName: null, photoPreview: null, sending: false}">
                    <input accept=".jpg, .jpeg, .png" size="1000000" id="{{ $this->target[1] }}" type="file" class="hidden" wire:model="{{ $target[2] }}" x-ref="photo" accept="image/png, image/jpeg" />
                    <div class="flex items-center justify-between mt-2">
                        <div class="">
                            <x-jet-secondary-button type="button" x-on:click.prevent="$refs.photo.click()">
                                <span class="py-1">sélectionner une nouvelle image</span>
                                <div wire:loading wire:target="{{ $target[2] }}" wire:key="photo">
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
                        </div>
                        <div class="">
                            <x-jet-secondary-button id="{{ $this->target[3] }}" x-show="!sending" @click="sending = !sending">
                                <span class="py-1">Envoyer l'image recadrée</span>
                            </x-jet-secondary-button>
                            <x-jet-secondary-button x-show="sending" disabled>
                                <span class="py-1">Envoyer l'image recadrée</span>
                                <div>
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
                        </div>
                    </div>
                    @error('{{ $target[2] }}') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
            @endif
        </div>
    </div>

    @if ($this->section_name == 'MISSIONS')
    <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl sm:my-12 my-6 pb-8">
        <div class="bg-yellow-50 px-6 py-6 text-xl font-semibold text-purple-900">Visuels</div>
        <div class="flex px-6 mt-4 gap-4">
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 1" />
                    <img id="image_1" src="{{ $photo_1 ? $photo_1->temporaryUrl() : Storage::disk('uploads')->url($image_1) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                </div>
                <div x-data="{photoName: null, photoPreview: null, sending: false}">
                    <input accept=".jpg, .jpeg, .png" size="1000000" id="input_1" type="file" class="hidden" wire:model="photo_1" x-ref="photo" accept="image/png, image/jpeg" />
                    <div class="flex items-center justify-between mt-2">
                        <div class="">
                            <x-jet-secondary-button class="2" type="button" x-on:click.prevent="$refs.photo.click()">
                                <span class="py-1">sélectionner une nouvelle image</span>
                                <div wire:loading wire:target="photo_1" wire:key="photo">
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
                        </div>
                        <div class="">
                            <x-jet-secondary-button id="sendCroppedImage1" x-show="!sending" @click="sending = !sending">
                                <span class="py-1">Envoyer l'image recadrée</span>
                            </x-jet-secondary-button>
                            <x-jet-secondary-button x-show="sending" disabled>
                                <span class="py-1">Envoyer l'image recadrée</span>
                                <div>
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
                        </div>
                    </div>
                    @error('photo_1') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 2" />
                    <img id="image_2" src="{{ $photo_2 ? $photo_2->temporaryUrl() : Storage::disk('uploads')->url($image_2) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                </div>
                <div x-data="{photoName: null, photoPreview: null, sending: false}">
                    <input accept=".jpg, .jpeg, .png" size="1000000" id="input_2" type="file" class="hidden" wire:model="photo_2" x-ref="photo" accept="image/png, image/jpeg" />
                    <div class="flex items-center justify-between mt-2">
                        <div class="">
                            <x-jet-secondary-button class="2" type="button" x-on:click.prevent="$refs.photo.click()">
                                <span class="py-1">sélectionner une nouvelle image</span>
                                <div wire:loading wire:target="photo_2" wire:key="photo">
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
                        </div>
                        <div class="">
                            <x-jet-secondary-button id="sendCroppedImage2" x-show="!sending" @click="sending = !sending">
                                <span class="py-1">Envoyer l'image recadrée</span>
                            </x-jet-secondary-button>
                            <x-jet-secondary-button x-show="sending" disabled>
                                <span class="py-1">Envoyer l'image recadrée</span>
                                <div>
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
                        </div>
                    </div>
                    @error('photo_2') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
        <div class="flex px-6 mt-4 gap-4">
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 3" />
                    <img id="image_3" src="{{ $photo_3 ? $photo_3->temporaryUrl() : Storage::disk('uploads')->url($image_3) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                </div>
                <div x-data="{photoName: null, photoPreview: null, sending: false}">
                    <input accept=".jpg, .jpeg, .png" size="1000000" id="input_3" type="file" class="hidden" wire:model="photo_3" x-ref="photo" accept="image/png, image/jpeg" />
                    <div class="flex items-center justify-between mt-2">
                        <div class="">
                            <x-jet-secondary-button class="2" type="button" x-on:click.prevent="$refs.photo.click()">
                                <span class="py-1">sélectionner une nouvelle image</span>
                                <div wire:loading wire:target="photo_3" wire:key="photo">
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
                        </div>
                        <div class="">
                            <x-jet-secondary-button id="sendCroppedImage3" x-show="!sending" @click="sending = !sending">
                                <span class="py-1">Envoyer l'image recadrée</span>
                            </x-jet-secondary-button>
                            <x-jet-secondary-button x-show="sending" disabled>
                                <span class="py-1">Envoyer l'image recadrée</span>
                                <div>
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
                        </div>
                    </div>
                    @error('photo_3') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="basis-1/2">
                <div class="">
                    <x-jet-label value="Image 4" />
                    <img id="image_4" src="{{ $photo_4 ? $photo_4->temporaryUrl() : Storage::disk('uploads')->url($image_4) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                </div>
                <div x-data="{photoName: null, photoPreview: null, sending: false}">
                    <input accept=".jpg, .jpeg, .png" size="1000000" id="input_4" type="file" class="hidden" wire:model="photo_4" x-ref="photo" accept="image/png, image/jpeg" />
                    <div class="flex items-center justify-between mt-2">
                        <div class="">
                            <x-jet-secondary-button class="2" type="button" x-on:click.prevent="$refs.photo.click()">
                                <span class="py-1">sélectionner une nouvelle image</span>
                                <div wire:loading wire:target="photo_4" wire:key="photo">
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
                        </div>
                        <div class="">
                            <x-jet-secondary-button id="sendCroppedImage4" x-show="!sending" @click="sending = !sending">
                                <span class="py-1">Envoyer l'image recadrée</span>
                            </x-jet-secondary-button>
                            <x-jet-secondary-button x-show="sending" disabled>
                                <span class="py-1">Envoyer l'image recadrée</span>
                                <div>
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
                        </div>
                    </div>
                    @error('photo_4') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
    </div>
    @endif

    @if ($this->section_name == 'US')
    <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl sm:my-12 my-6 pb-8">
        <div class="bg-yellow-50 px-6 py-6 text-xl font-semibold text-purple-900"">Visuels</div>
        <div class=" flex px-6 mt-4 gap-4">
            <div class="w-full">
                <div class="">
                    <x-jet-label value="Image 1" />
                    <img id="image_1" src="{{ $photo_1 ? $photo_1->temporaryUrl() : Storage::disk('uploads')->url($image_1) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                </div>
                <div x-data="{photoName: null, photoPreview: null, sending: false}">
                    <input accept=".jpg, .jpeg, .png" size="1000000" id="input_1" type="file" class="hidden" wire:model="photo_1" x-ref="photo" accept="image/png, image/jpeg" />
                    <div class="flex items-center justify-between mt-2">
                        <div class="">
                            <x-jet-secondary-button class="2" type="button" x-on:click.prevent="$refs.photo.click()">
                                <span class="py-1">sélectionner une nouvelle image</span>
                                <div wire:loading wire:target="photo_1" wire:key="photo">
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
                        </div>
                        <div class="">
                            <x-jet-secondary-button id="sendCroppedImage1" x-show="!sending" @click="sending = !sending">
                                <span class="py-1">Envoyer l'image recadrée</span>
                            </x-jet-secondary-button>
                            <x-jet-secondary-button x-show="sending" disabled>
                                <span class="py-1">Envoyer l'image recadrée</span>
                                <div>
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
                        </div>
                    </div>
                    @error('photo_1') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
        <div class="flex px-6 mt-4 gap-4">
            <div class="basis-1/3">
                <div class="">
                    <x-jet-label value="Image 2" />
                    <img id="image_2" src="{{ $photo_2 ? $photo_2->temporaryUrl() : Storage::disk('uploads')->url($image_2) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                </div>
                <div x-data="{photoName: null, photoPreview: null, sending: false}">
                    <input accept=".jpg, .jpeg, .png" size="1000000" id="input_2" type="file" class="hidden" wire:model="photo_2" x-ref="photo" accept="image/png, image/jpeg" />
                    <div class="flex items-center justify-between mt-2">
                        <div class="">
                            <x-jet-secondary-button class="2" type="button" x-on:click.prevent="$refs.photo.click()">
                                <span class="py-1">sélectionner une nouvelle image</span>
                                <div wire:loading wire:target="photo_2" wire:key="photo">
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
                        </div>
                        <div class="">
                            <x-jet-secondary-button id="sendCroppedImage2" x-show="!sending" @click="sending = !sending">
                                <span class="py-1">Envoyer l'image recadrée</span>
                            </x-jet-secondary-button>
                            <x-jet-secondary-button x-show="sending" disabled>
                                <span class="py-1">Envoyer l'image recadrée</span>
                                <div>
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
                        </div>
                    </div>
                    @error('photo_2') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="basis-2/3">
                <div class="">
                    <x-jet-label value="Image 3" />
                    <img id="image_3" src="{{ $photo_3 ? $photo_3->temporaryUrl() : Storage::disk('uploads')->url($image_3) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                </div>
                <div x-data="{photoName: null, photoPreview: null, sending: false}">
                    <input accept=".jpg, .jpeg, .png" size="1000000" id="input_3" type="file" class="hidden" wire:model="photo_3" x-ref="photo" accept="image/png, image/jpeg" />
                    <div class="flex items-center justify-between mt-2">
                        <div class="">
                            <x-jet-secondary-button class="2" type="button" x-on:click.prevent="$refs.photo.click()">
                                <span class="py-1">sélectionner une nouvelle image</span>
                                <div wire:loading wire:target="photo_3" wire:key="photo">
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
                        </div>
                        <div class="">
                            <x-jet-secondary-button id="sendCroppedImage3" x-show="!sending" @click="sending = !sending">
                                <span class="py-1">Envoyer l'image recadrée</span>
                            </x-jet-secondary-button>
                            <x-jet-secondary-button x-show="sending" disabled>
                                <span class="py-1">Envoyer l'image recadrée</span>
                                <div>
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
                        </div>
                    </div>
                    @error('photo_3') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
