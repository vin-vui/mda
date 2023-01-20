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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto flex items-center">
                <dl class="relative overflow-hidden flex items-center gap-8 rounded-3xl bg-white px-4 pt-5 pb-12 shadow-md sm:px-6 sm:pt-6">
                    <div>
                        <dt>
                            <div class="absolute rounded-md bg-teal-400 p-3">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4 21q-.825 0-1.412-.587Q2 19.825 2 19V4q0-.425.2-.513q.2-.087.5.213l.975.975l.95-.95q.15-.15.325-.225q.175-.075.375-.075t.375.062q.175.063.325.213L7 4.675l.975-.975q.15-.15.325-.213q.175-.062.375-.062t.375.075q.175.075.325.225l.95.95l.975-.975q.15-.15.325-.213q.175-.062.375-.062t.375.062q.175.063.325.213l.975.975l.95-.95q.15-.15.325-.225q.175-.075.375-.075t.375.062q.175.063.325.213l.975.975l.975-.975q.15-.15.325-.213q.175-.062.375-.062t.375.075q.175.075.325.225l.95.95l.975-.975q.3-.3.5-.213q.2.088.2.513v15q0 .825-.587 1.413Q20.825 21 20 21Zm0-2h7v-6H4v6Zm9 0h7v-2h-7Zm0-4h7v-2h-7Zm-9-4h16V8H4Z" />
                                </svg>
                            </div>
                            <p class="ml-16 truncate text-sm font-medium text-gray-500">Actualités publiées</p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Seminar::where('type', 'actualité')->where('display', true)->count() }}</p>
                        </dd>
                    </div>
                    <div>
                        <dt>
                            <div class="absolute rounded-md bg-yellow-300 p-3">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-width="2" d="M19 7s-5 7-12.5 7c-2 0-5.5 1-5.5 5v4h11v-4c0-2.5 3-1 7-8l-1.5-1.5M3 5V2h20v14h-3M11 1h4v2h-4V1ZM6.5 14a3.5 3.5 0 1 0 0-7a3.5 3.5 0 0 0 0 7Z" />
                                </svg>
                            </div>
                            <p class="ml-16 truncate text-sm font-medium text-gray-500">Ateliers publiées</p>
                        </dt>
                        <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                            <p class="text-2xl font-semibold text-gray-900">{{ App\Models\Seminar::where('type', 'atelier')->where('display', true)->count() }}</p>
                            <div class="absolute inset-x-0 bottom-0 bg-yellow-50 px-4 py-4 sm:px-6">
                                <div class="text-sm">
                                    <a href="{{ route('seminars') }}" class="font-medium text-purple-600 hover:text-purple-500"> Voir toutes les actus/ateliers</a>
                                </div>
                            </div>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-app-layout>
