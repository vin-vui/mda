{{--
    Notifications de l'admin, déclenchées depuis un composant Livewire par
    $this->dispatch('toast', message: '...').
    Remplace usernotnull/tall-toasts (plus maintenu, incompatible avec Laravel 13)
    en reprenant son rendu.
--}}
<div
    x-data="{
        toasts: [],
        add(message) {
            const id = Date.now() + Math.random();
            this.toasts.push({ id, message, show: false });
            this.$nextTick(() => { const t = this.toasts.find((x) => x.id === id); if (t) t.show = true; });
            setTimeout(() => this.remove(id), 5000);
        },
        remove(id) {
            const t = this.toasts.find((x) => x.id === id);
            if (!t) return;
            t.show = false;
            setTimeout(() => { this.toasts = this.toasts.filter((x) => x.id !== id); }, 500);
        },
    }"
    x-on:toast.window="add($event.detail.message)"
    class="fixed bottom-0 right-0 z-50 p-4 space-y-3 w-full max-w-sm pointer-events-none sm:p-6"
    style="z-index:999;"
>
    <template x-for="toast in toasts" :key="toast.id">
        <div
            x-show="toast.show"
            x-on:click="remove(toast.id)"
            x-transition:enter="ease-out duration-500 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-10"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-500"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        >
            <div class="overflow-hidden z-50 p-5 bg-white rounded-3xl shadow-md cursor-pointer pointer-events-auto select-none border-l-8 border-green-700 hover:bg-gray-50">
                <div class="flex justify-between items-center space-x-5">
                    <div class="flex-1 mr-2 text-gray-900" x-text="toast.message"></div>
                    <svg class="w-8 h-8 text-green-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </template>
</div>
