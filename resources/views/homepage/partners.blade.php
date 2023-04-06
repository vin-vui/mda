<section id="partenaires" class="sm:pt-52 pt-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto sm:max-w-none lg:max-w-screen-2xl "></div>
        <h2 class='text-center max-w-3xl mx-auto mt-6 text-purple-900 h2'>
            <span class="relative block">
                Nos
                <span class='relative'>
                    <img class='absolute inset-0 transform translate-y-9 sm:translate-y-11 xl:translate-y-12' src='images/underline-simple-light-purple.svg'>
                    <span class='relative'>Partenaires</span>
                </span>
            </span>
        </h2>
        <div class="flex flex-col sm:flex-row flex-wrap justify-between items-center gap-4 sm:my-24 my-12 px-0">
            @foreach (App\Models\Partner::all() as $partner)
            <div class="group flex relative">
                <img src="{{ Storage::disk('uploads')->url($partner->url) }}" class="h-24" alt="{{ $partner->label }}">
                <span class="group-hover:opacity-100 transition-opacity bg-gray-800 px-1 text-sm text-gray-100 rounded-md absolute left-1/2 -translate-x-1/2 translate-y-24 opacity-0 w-full m-4 mx-auto">{{ $partner->label }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
