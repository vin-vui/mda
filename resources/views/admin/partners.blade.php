<div class="">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-purple-800 leading-tight">
                    Nos Partenaires
                </h2>
                <div class="">
                    <button wire:click="create" type="button" class="inline-flex items-center px-3.5 py-2 border border-transparent text-sm leading-4 font-medium rounded-full shadow-sm text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                        Ajouter un partenaire
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-md sm:rounded-3xl flex flex-col sm:flex-row flex-wrap items-center sm:my-12 my-6 py-8 px-6 gap-4">
            @foreach ($partners as $partner)
            <div wire:click="edit({{ $partner->id }})" class="w-64 rounded-3xl mx-auto hover:bg-yellow-100 cursor-pointer transition-all p-8">
                <img src="{{ Storage::disk('uploads')->url($partner->url) }}" class="mx-auto" alt="">
                {{ $partner->label }}
            </div>
            @endforeach
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
                        @if ($this->partner_id == '')
                        Ajouter un partenaire
                        @else
                        Modifier un partenaire
                        @endif
                    </h3>
                </div>

                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="">
                        <div class="mb-4">
                            <label class="block">
                                <x-jet-label for="url" value="Image" />
                                <input wire:model="url" type="file" class="block w-full cursor-pointer text-sm mt-2 border-purple-50 focus:border-purple-200 focus:ring-purple-200 focus:outline-none text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                            </label>
                            @error('url') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        <div wire:loading wire:target="url" wire:key="url"><i class="fa fa-spinner fa-spin mt-2 ml-2"></i> Uploading</div>
                        <div class="flex gap-4">
                            @if ($this->partner_id != '')
                            <div class="">
                                <x-jet-label value="Image actuelle" />
                                <img wire:ignore src="{{ Storage::disk('uploads')->url($this->url) }}" alt="" class="mt-2 h-24">
                            </div>
                            @endif
                            @if (!is_string($this->url))
                            <div class="">
                                @if ($this->partner_id != '')
                                <x-jet-label value="Remplacée par" />
                                @else
                                <x-jet-label value="Apreçu" />
                                @endif
                                <img src="{{ $this->url->temporaryUrl() }}" alt="" class="mt-2 h-24">
                            </div>
                            @endif
                        </div>
                        <div class="my-4">
                            <x-jet-label for="label" value="Label" />
                            <x-jet-input id="label" class="block mt-1 w-full" type="text" name="label" placeholder="" wire:model="label" />
                            @error('label') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between px-4 py-4 sm:py-4 sm:px-6 bg-purple-50">
                    <div class="">
                        @if($this->partner_id != '')
                        @if($confirming === $this->partner_id)
                        <button wire:click="delete({{ $this->partner_id }})" class="text-red-600">
                            Etes-vous sûr ?
                        </button>
                        @else
                        <button wire:click="confirmDelete({{ $this->partner_id }})" class="text-red-600">
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
