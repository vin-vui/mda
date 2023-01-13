<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-purple-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 mx-auto sm:px-0">
                    <iframe plausible-embed src="https://plausible.io/share/parcaventure-malbuisson.fr?auth=eHB-pzNDnym1DQ3XtIJSU&embed=true&theme=light" scrolling="no" frameborder="0" loading="lazy" style="width: 1px; min-width: 100%; height: 1600px;"></iframe>
                    <script async src="https://plausible.io/js/embed.host.js"></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
