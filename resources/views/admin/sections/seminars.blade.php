<x-app-layout>
    <div class="pb-24">
        <header class="bg-white shadow sticky top-16 -mt-1">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-6">
                    <h2 class="font-semibold text-xl text-purple-800 leading-tight">
                        Ateliers Collectifs
                    </h2>
                </div>
            </div>
        </header>
        @livewire('sections', ['section_name' => 'SEMINARS'])
    </div>
</x-app-layout>
