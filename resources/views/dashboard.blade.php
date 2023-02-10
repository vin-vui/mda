<x-app-layout>
    <header class="bg-white shadow sticky top-16 -mt-1">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-6">
                <h2 class="font-semibold text-xl text-purple-800 leading-tight">
                    Dashboard
                </h2>
            </div>
        </div>
    </header>
    {{-- 'atelier ados', 'atelier parents', 'atelier ados/parents' --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto flex items-center">
                <div class="flex flex-col justify-between w-full rounded-3xl bg-white pt-5 shadow-md sm:pt-6">
                    <div class="flex items-center gap-8 px-4 sm:px-6">
                        <div class="basis-1/3">
                            <dt>
                                <div class="absolute rounded-md bg-teal-400 p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-width="2" d="M19 7s-5 7-12.5 7c-2 0-5.5 1-5.5 5v4h11v-4c0-2.5 3-1 7-8l-1.5-1.5M3 5V2h20v14h-3M11 1h4v2h-4V1ZM6.5 14a3.5 3.5 0 1 0 0-7a3.5 3.5 0 0 0 0 7Z" />
                                    </svg>
                                </div>
                                <p class="ml-16 truncate text-sm font-medium text-gray-500">Atelier ados</p>
                            </dt>
                            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Seminar::where('tag', 'atelier ados')->where('display', true)->count() }}</p>
                            </dd>
                        </div>
                        <div class="basis-1/3">
                            <dt>
                                <div class="absolute rounded-md bg-blue-400 p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-width="2" d="M19 7s-5 7-12.5 7c-2 0-5.5 1-5.5 5v4h11v-4c0-2.5 3-1 7-8l-1.5-1.5M3 5V2h20v14h-3M11 1h4v2h-4V1ZM6.5 14a3.5 3.5 0 1 0 0-7a3.5 3.5 0 0 0 0 7Z" />
                                    </svg>
                                </div>
                                <p class="ml-16 truncate text-sm font-medium text-gray-500">Atelier parents</p>
                            </dt>
                            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Seminar::where('tag', 'atelier parents')->where('display', true)->count() }}</p>
                            </dd>
                        </div>
                        <div class="basis-1/3">
                            <dt>
                                <div class="absolute rounded-md bg-yellow-300 p-3">
                                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-width="2" d="M19 7s-5 7-12.5 7c-2 0-5.5 1-5.5 5v4h11v-4c0-2.5 3-1 7-8l-1.5-1.5M3 5V2h20v14h-3M11 1h4v2h-4V1ZM6.5 14a3.5 3.5 0 1 0 0-7a3.5 3.5 0 0 0 0 7Z" />
                                    </svg>
                                </div>
                                <p class="ml-16 truncate text-sm font-medium text-gray-500">Ateliers ados/parents</p>
                            </dt>
                            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Seminar::where('tag', 'atelier ados/parents')->where('display', true)->count() }}</p>
                            </dd>
                        </div>
                    </div>
                    <div class="rounded-b-3xl">
                        <div class="bottom-0 rounded-b-3xl bg-yellow-50 px-4 py-4 sm:px-6">
                            <div class="text-sm">
                                <a href="{{ route('seminars') }}" class="font-medium text-purple-600 hover:text-purple-500"> Voir tous les ateliers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
