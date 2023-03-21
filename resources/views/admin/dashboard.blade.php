<div class="pb-24">
    <header class="bg-white shadow sticky top-16 -mt-1 z-20">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-6">
                <h2 class="font-semibold text-xl text-purple-800 leading-tight ">
                    Dashboard
                </h2>
            </div>
        </div>
    </header>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto flex items-center">
                <div class="flex flex-col justify-between w-full sm:rounded-3xl bg-white pt-5 shadow-md sm:pt-10">
                    <div class="sm:flex justify-between items-center gap-8 px-4 sm:px-6">
                        <div class="relative z-10">
                            <dt>
                                <div class="z-10 bg-purple-200 capitalize items-center justify-center px-3 py-2 text-xl -rotate-2 text-purple-700 font-semibold leading-6 align-top rounded-full">Publiés</div>
                            </dt>
                            <dd class="flex justify-center items-baseline pb-6 sm:pb-7 mt-4">
                                <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Seminar::where('display', true)->count() }}</p>
                            </dd>
                        </div>
                        <div class="relative z-10">
                            <dt>
                                <div class="z-10 bg-yellow-400 capitalize items-center justify-center px-3 py-2 text-xl -rotate-2 text-purple-700 font-semibold leading-6 align-top rounded-full">Atelier Ados</div>
                            </dt>
                            <dd class="flex justify-center items-baseline pb-6 sm:pb-7 mt-4">
                                <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Seminar::where('tag', 'atelier ados')->where('display', true)->count() }}</p>
                            </dd>
                        </div>
                        <div class="relative z-10">
                            <dt>
                                <div class="z-10 bg-blue-200 capitalize items-center justify-center px-3 py-2 text-xl -rotate-2 text-purple-700 font-semibold leading-6 align-top rounded-full">Atelier Parents</div>
                            </dt>
                            <dd class="flex justify-center items-baseline pb-6 sm:pb-7 mt-4">
                                <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Seminar::where('tag', 'atelier parents')->where('display', true)->count() }}</p>
                            </dd>
                        </div>
                        <div class="relative z-10">
                            <dt>
                                <div class="bg-teal-200 capitalize items-center justify-center px-3 py-2 text-xl -rotate-2 text-purple-700 font-semibold leading-6 align-top rounded-full">Atelier Ados/Parents</div>
                            </dt>
                            <dd class="flex justify-center items-baseline pb-6 sm:pb-7 mt-4">
                                <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Seminar::where('tag', 'atelier ados/parents')->where('display', true)->count() }}</p>
                            </dd>
                        </div>
                    </div>
                    <div class="rounded-b-3xl">
                        <div class="bottom-0 rounded-b-3xl bg-yellow-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="{{ route('seminars') }}" class="font-medium text-purple-600 hover:text-purple-500 flex items-center group">
                                    Voir tous les ateliers
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-3 group-hover:animate-horizontal-bounce" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                        <line x1="15" y1="16" x2="19" y2="12" />
                                        <line x1="15" y1="8" x2="19" y2="12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-12">
            <div class="bg-white shadow-md sm:rounded-3xl">
                <div class="px-4 py-5 bg-yellow-50 sm:px-6 lg:px-8 sm:rounded-t-3xl mb-4">
                    <h3 class="text-xl font-semibold text-purple-900">Informations</h3>
                </div>
                <div class="grid sm:grid-cols-2 px-2 sm:px-0">
                    @foreach ($informations as $index => $information)
                    <div class="w-full sm:px-6 lg:px-8" wire:key="information-field-{{ $information->id }}">
                        <div class="flex flex-col">
                            <div class="mb-4 ">
                                <x-jet-label for="{{ $information->title }}" value="{{ $information->title }}" />
                                <x-jet-input id="{{ $information->title }}" class="block mt-1 w-full" type="text" name="label" wire:model="informations.{{ $index }}.label" required />
                                @error('label') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-green-500 self-start flex items-center sm:px-6 lg:px-8 mb-4 mt-2">
                        <svg class="h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28">
                            <path fill="currentColor" d="M8 3H6.25A3.25 3.25 0 0 0 3 6.25v15.5a3.25 3.25 0 0 0 3 3.24v-8.74A2.25 2.25 0 0 1 8.25 14h11.5A2.25 2.25 0 0 1 22 16.25v8.74a3.25 3.25 0 0 0 3-3.24V8.786a3.25 3.25 0 0 0-.952-2.299l-2.535-2.535A3.25 3.25 0 0 0 19.214 3H19v5.75A2.25 2.25 0 0 1 16.75 11h-6.5A2.25 2.25 0 0 1 8 8.75V3Zm9.5 0h-8v5.75c0 .414.336.75.75.75h6.5a.75.75 0 0 0 .75-.75V3Zm3 22v-8.75a.75.75 0 0 0-.75-.75H8.25a.75.75 0 0 0-.75.75V25h13Z" />
                        </svg>
                        Dernière sauvegarde le {{ Carbon\Carbon::parse($this->update_time)->format('d/m à H:i:s') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
