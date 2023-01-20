<div class="pb-24">
    <header class="bg-white shadow sticky top-16 -mt-1">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-6">
                <h2 class="font-semibold text-xl text-purple-800 leading-tight">
                    Actualités et Ateliers
                </h2>
                <div class="">
                    <button wire:click="create" type="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Ajouter une Actu/Atelier
                    </button>
                </div>
            </div>
        </div>
    </header>

    @livewire('sections', ['section_name' => 'SEMINARS'])

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl flex flex-col sm:flex-row flex-wrap items-center sm:my-12 my-6 py-8 px-6 gap-4">
            <table class="w-full divide-y divide-gray-300">
                <thead>
                    <tr>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm font-semibold text-gray-900">Image</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm font-semibold text-gray-900">Date</th>
                        <th scope="col" class="px-4 py-3.5 text-center text-sm font-semibold text-gray-900">Type</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Titre</th>
                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
                        <th scope="col" class="px-4 py-3.5 whitespace-nowrap text-center text-sm font-semibold text-gray-900">Publié ?</th>
                    </tr>
                </thead>
                <tbody class=" bg-white">
                    @foreach ($seminars as $seminar)
                    <tr wire:click="edit({{ $seminar->id }})" class="cursor-pointer hover:bg-yellow-100 transition-all">
                        <td class="px-4 whitespace-nowrap py-4 text-sm font-medium text-gray-900">
                            <img class="h-10 w-10 object-cover rounded-full" src="{{ Storage::disk('uploads')->url($seminar->image) }}" alt="">
                        </td>
                        <td class="px-4 whitespace-nowrap text-center py-4 text-sm font-medium text-gray-900">{{ Carbon\Carbon::parse($seminar->date)->format('d/m/Y') }}</td>
                        <td class="px-4 whitespace-nowrap text-center py-4 text-sm font-medium text-gray-900">
                            @switch($seminar->type)
                            @case('atelier')
                            <span class="bg-yellow-200 text-purple-900 py-1 px-2 rounded-xl">atelier</span>
                            @break
                            @case('actualité')
                            <span class="bg-teal-100 text-purple-900 py-1 px-2 rounded-xl">actualité</span>
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
    <div class="fixed inset-0 z-10 overflow-y-auto transition ease-out duration-400">
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block w-full overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-2xl" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

                <div class="px-4 py-5 bg-yellow-100 sm:px-6">
                    <h3 class="text-lg font-medium leading-6 text-purple-900">
                        @if ($this->seminar_id == '')
                        Ajouter une Actu/Atelier
                        @else
                        Modifier une Actu/Atelier
                        @endif
                    </h3>
                </div>

                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label class="block">
                            <x-jet-label for="image" value="Image" />
                            <input wire:model="image" type="file" class="block w-full cursor-pointer text-sm mt-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                        </label>
                        @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div wire:loading wire:target="image" wire:key="image">Téléversement</div>
                    <div class="flex gap-4">
                        @if ($this->seminar_id != '')
                        <div class="">
                            <x-jet-label value="Image actuelle" />
                            <img wire:ignore src="{{ Storage::disk('uploads')->url($this->image) }}" alt="" class="mt-2 h-24">
                        </div>
                        @endif
                        @if (!is_string($this->image))
                        <div class="">
                            @if ($this->seminar_id != '')
                            <x-jet-label value="Remplacée par" />
                            @else
                            <x-jet-label value="Apreçu" />
                            @endif
                            <img src="{{ $this->image->temporaryUrl() }}" alt="" class="mt-2 h-24">
                        </div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <x-jet-label for="date" value="Date" />
                        <x-jet-input id="date" class="block mt-1 w-full" type="date" name="date" wire:model="date" />
                        @error('date') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <x-jet-label for="title" value="Titre" />
                        <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title" wire:model="title" />
                        @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <x-jet-label for="type" value="Type" />
                        <select name="type" wire:ignore wire:model.lazy="type" class="w-full p-4 mt-2 text-sm font-medium text-purple-700 placeholder-purple-700 duration-300 ease-in-out border-2 outline-none h-14 placeholder-opacity-70 rounded-2xl border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none">
                            <option @if (!$this->type) selected="selected" @endif> - </option>
                            <option @if ($this->type === 'atelier') selected="selected" @endif>atelier</option>
                            <option @if ($this->type === 'actualité') selected="selected" @endif>actualité</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <x-jet-label for="description" value="Description" />
                        <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" wire:model="description" />
                        @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="space-x-2 flex items-center">
                        <x-jet-label for="display" value="Publier ?" />
                        <div class="relative inline-block w-12 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input wire:model="display" type="checkbox" name="display" id="toggle" class="toggle-checkbox text-green-600 absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" />
                            <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-white cursor-pointer"></label>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between px-4 py-4 sm:py-4 sm:px-6 bg-purple-50">
                    <div class="">
                        @if($this->seminar_id != '')
                        @if($confirming === $this->seminar_id)
                        <button wire:click="delete({{ $this->seminar_id }})" class="text-red-600">
                            Etes-vous sûr ?
                        </button>
                        @else
                        <button wire:click="confirmDelete({{ $this->seminar_id }})" class="text-red-600">
                            Supprimer
                        </button>
                        @endif
                        @endif
                    </div>
                    <div class="flex gap-2">
                        <button wire:click="closeModal" type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-full hover:bg-gray-50 focus:outline-none focus:ring-1 transition-all">
                            Annuler
                        </button>
                        <button wire:click.prevent="store" type="button" class="inline-flex justify-center px-8 py-2 font-medium text-white bg-green-600 border border-transparent rounded-full shadow-sm transition-all hover:bg-green-700 focus:outline-none focus:ring-1">
                            Valider
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
</div>
