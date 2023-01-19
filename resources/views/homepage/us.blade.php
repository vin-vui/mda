<section id="qui-sommes-nous" class='px-4 pt-16 sm:pt-56 sm:px-6 lg:px-8 bg-purple-50'>
    <div class='max-w-screen-xl mx-auto'>
        <h2 class='lg:text-center max-w-3xl mx-auto mt-6 text-purple-900 h2'>
            <span class="relative block">
                Qui
                <span class='relative'>
                    <img class='absolute inset-0 transform translate-y-8 sm:translate-y-11 xl:translate-y-11' src='images/underline-simple-light-purple.svg'>
                    <span class='relative'>Sommes-Nous</span>
                </span>
                ?
            </span>
        </h2>
        <div class='mx-auto prose prose-lg mt-14 sm:mt-16 lg:mt-24 sm:prose-xl'>
            <p class='whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'US')->first()->description }}</p>
        </div>
        <div class='grid grid-flow-row-dense grid-cols-2 gap-2 sm:grid-cols-3 mt-14 sm:mt-16 lg:mt-24 sm:gap-3 md:gap-4 lg:gap-6'>
            <img class='object-cover w-full rounded-2xl lg:h-80 h-30vw' src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'US')->first()->image_1) }}" alt="School grid 01" />
            <img class='object-cover w-full col-span-2 rounded-2xl lg:h-80 h-30vw' src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'US')->first()->image_2) }}" alt="School grid 02" />
            <img class='object-cover w-full rounded-2xl lg:h-80 h-30vw' src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'US')->first()->image_3) }}" alt="School grid 03" />
            <img class='object-cover w-full rounded-2xl lg:h-80 h-30vw' src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'US')->first()->image_4) }}" alt="School grid 04" />
            <img class='object-cover w-full rounded-2xl lg:h-80 h-30vw' src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'US')->first()->image_5) }}" alt="School grid 05" />
        </div>
    </div>
</section>
