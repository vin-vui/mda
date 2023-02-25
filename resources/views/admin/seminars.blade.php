<div class="pb-24">
    <header class="bg-white shadow sticky top-16 -mt-1">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-6">
                <h2 class="font-semibold text-xl text-purple-800 leading-tight">
                    Ateliers
                </h2>
                <div class="">
                    <button wire:click="create" tag="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Ajouter un Atelier
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl flex flex-col sm:flex-row flex-wrap items-center sm:my-12 my-6 py-8 px-6 gap-4">
            <table class="w-full divide-y divide-gray-300">
                <thead>
                    <tr>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm font-semibold text-gray-900">Image</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm font-semibold text-gray-900">Date</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm font-semibold text-gray-900">Tag</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Titre</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
                        <th scope="col" class="px-4 py-3.5 whitespace-nowrap text-center text-sm font-semibold text-gray-900">Publié ?</th>
                    </tr>
                </thead>
                <tbody class=" bg-white">
                    @foreach ($seminars as $seminar)
                    <tr wire:click="edit({{ $seminar->id }})" class="cursor-pointer hover:bg-yellow-100 transition-all">
                        <td class="px-4 whitespace-nowrap py-4 text-sm font-medium text-gray-900">
                            <img class="h-10 w-10 object-cover mx-auto rounded-full" src="{{ Storage::disk('uploads')->url($seminar->image) }}" alt="">
                        </td>
                        <td class="px-4 whitespace-nowrap text-center py-4 text-sm font-medium text-gray-900">{{ $seminar->date }}</td>
                        <td class="px-4 whitespace-nowrap text-center py-4 text-sm font-medium text-gray-900">
                            @switch($seminar->tag)
                            @case('atelier ados')
                            <span class="bg-yellow-400 text-purple-900 py-1 px-2 rounded-xl">{{ $seminar->tag }}</span>
                            @break
                            @case('atelier parents')
                            <span class="bg-blue-200 text-purple-900 py-1 px-2 rounded-xl">{{ $seminar->tag }}</span>
                            @break
                            @case('atelier ados/parents')
                            <span class="bg-teal-200 text-purple-900 py-1 px-2 rounded-xl">{{ $seminar->tag }}</span>
                            @break
                            @endswitch
                        </td>
                        <td class="px-4 py-4 text-sm font-medium text-gray-900">{{ $seminar->title }}</td>
                        <td class="px-4 py-4 text-sm font-medium text-gray-900">{{ $seminar->description }}</td>
                        <td class="px-4 whitespace-nowrap text-center py-4 text-sm font-medium text-gray-900">
                            @if($seminar->display)
                            <span class="bg-green-600 text-white py-1 px-2 rounded-xl">oui</span>
                            @else
                            <span class="bg-red-600 text-white py-1 px-2 rounded-xl">non</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- MODALE --}}
    @if($isOpen)
    <div class="fixed inset-0 z-50 overflow-y-auto transition ease-out duration-400">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block w-full overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-2xl" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

                <div class="px-4 py-5 bg-yellow-100 sm:px-6">
                    <h3 class="text-xl font-semibold text-purple-900">
                        @if ($this->seminar_id == '')
                        Ajouter une Actu/Atelier
                        @else
                        Modifier une Actu/Atelier
                        @endif
                    </h3>
                </div>

                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="">
                        <x-jet-label value="Image" />
                        @if (!is_string($this->image) && $this->image != null)
                        <img src="{{ $this->image->temporaryUrl() }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                        @else
                        <img src="{{ Storage::disk('uploads')->url($this->image) }}" alt="" class="mt-2 h-72 w-full object-cover rounded-3xl border-2 border-purple-50">
                        @endif
                    </div>
                    <div x-data="{photoName: null, photoPreview: null}">
                        <input type="file" class="hidden" wire:model="image" x-ref="photo" />
                        <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                            <span class="py-1">sélectionner une nouvelle image</span>
                            <div wire:loading wire:target="image" wire:key="image">
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
                        @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="my-4">
                        <x-jet-label for="date" value="Date" />
                        <x-jet-input id="date" class="block mt-1 w-full" tag="text" name="date" wire:model="date" />
                        @error('date') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <x-jet-label for="title" value="Titre" />
                        <x-jet-input id="title" class="block mt-1 w-full" tag="text" name="title" wire:model="title" />
                        @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <x-jet-label for="tag" value="Tag" />
                        <select name="tag" wire:ignore wire:model.lazy="tag" class="w-full p-4 mt-2 text-sm font-medium text-purple-700 placeholder-purple-700 duration-300 ease-in-out border-2 outline-none h-14 placeholder-opacity-70 rounded-2xl border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none">
                            <option @if (!$this->tag) selected="selected" @endif> - </option>
                            <option @if ($this->tag === 'atelier ados') selected="selected" @endif>atelier ados</option>
                            <option @if ($this->tag === 'atelier parents') selected="selected" @endif>atelier parents</option>
                            <option @if ($this->tag === 'atelier ados/parents') selected="selected" @endif>atelier ados/parents</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <x-jet-label for="description" value="Description" />
                        <textarea rows="5" class="resize-y w-full h-full mt-2 p-4 text-sm font-medium text-purple-700 placeholder-purple-700 duration-300 ease-in-out border-2 outline-none placeholder-opacity-70 rounded-2xl border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none" type="text" name="description" wire:model="description"></textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="space-x-2 flex items-center">
                        <x-jet-label for="display" value="Publier ?" />
                        <button id="display" tag="button" wire:click="changeDisplay" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 bg-gray-200" x-data="{ on: {{ $display ? 'true' : 'false' }} }" role="switch" aria-checked="{{ $display ? 'true' : 'false' }}" :aria-checked="on.toString()" @click="on = !on" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'bg-green-600': on, 'bg-gray-200': !(on) }">
                            <span class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-0" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }">
                                <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-100 ease-in duration-200" aria-hidden="true" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !(on) }">
                                    <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                        <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                                <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity opacity-0 ease-out duration-100" aria-hidden="true" x-state:on="Enabled" x-state:off="Not Enabled" :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !(on) }">
                                    <svg class="h-3 w-3 text-green-600" fill="currentColor" viewBox="0 0 12 12">
                                        <path d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z"></path>
                                    </svg>
                                </span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between px-4 py-4 sm:py-4 sm:px-6 bg-purple-50">
                    <div class="">
                        @if($this->seminar_id != '')
                        @if($confirming === $this->seminar_id)
                        <button wire:click="delete({{ $this->seminar_id }})" class="text-red-600">
                            Etes-vous sûr·e ?
                        </button>
                        @else
                        <button wire:click="confirmDelete({{ $this->seminar_id }})" class="text-red-600">
                            Supprimer
                        </button>
                        @endif
                        @endif
                    </div>
                    <div class="flex gap-2">
                        <button wire:click="closeModal" tag="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-full hover:bg-gray-50 focus:outline-none focus:ring-1 transition-all">
                            Annuler
                        </button>
                        <button wire:click.prevent="store" tag="button" class="inline-flex justify-center px-8 py-2 font-medium text-white bg-green-600 border border-transparent rounded-full shadow-sm transition-all hover:bg-green-700 focus:outline-none focus:ring-1">
                            Valider
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
</div>
