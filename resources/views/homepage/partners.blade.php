<section id="partenaires" class="sm:mt-52 mt-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto sm:max-w-none lg:max-w-screen-2xl ">

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
            <img src="{{ Storage::disk('uploads')->url($partner->url) }}" class="h-24" alt="{{ $partner->label }}">
            @endforeach
        </div>
    </div>
</section>
