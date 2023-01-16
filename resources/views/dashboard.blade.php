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
                    <iframe plausible-embed src="https://plausible.io/share/project-mda.vinvui.com?auth=D8yBBYgfg4ImLT6F1Vfrv&embed=true&theme=light" scrolling="no" frameborder="0" loading="lazy" style="width: 1px; min-width: 100%; height: 1600px;"></iframe>
                    <div style="font-size: 14px; padding-bottom: 14px;">Stats powered by <a target="_blank" style="color: #4F46E5; text-decoration: underline;" href="https://plausible.io">Plausible Analytics</a></div>
                    <script async src="https://plausible.io/js/embed.host.js"></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
