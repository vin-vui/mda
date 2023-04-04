<section id="qui-sommes-nous" class='px-4 pt-4 sm:pt-32 sm:px-6 lg:px-8 bg-purple-50'>
    <div class='max-w-screen-xl mx-auto'>
        <div class="grid max-w-xl mx-auto lg:max-w-none lg:grid-cols-12 gap-14 sm:gap-16 lg:gap-8">
            <div class="relative z-10 flex flex-col justify-center order-2 lg:order-1 lg:col-span-6 lg:text-left">
                <div>
                    <h2 class='max-w-3xl mx-auto text-purple-900 h2'>
                        <span class="relative block">
                            Qui
                            <span class='relative'>
                                <img class='absolute inset-0 transform translate-y-8 sm:translate-y-11 xl:translate-y-11' src='images/underline-simple-light-purple.svg'>
                                <span class='relative'>Sommes-Nous</span>
                            </span>
                            ?
                        </span>
                    </h2>
                    <div class='mx-auto prose prose-lg mt-6 sm:mt-8 lg:mt-12 sm:prose-xl'>
                        <p class='whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'US')->first()->description }}</p>
                    </div>
                </div>
            </div>
            <div class="relative w-full max-w-xl mx-auto order-2 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                <div class="hidden lg:block">
                    <img src='images/blob-light-rose.svg' class='absolute inset-0 w-full h-full transform lg:scale-135' alt=''>
                </div>
                <img src='images/dots-large-strip.svg' class='absolute top-0 origin-top transform -translate-x-1/2 -translate-y-8 left-1/2 lg:hidden sm:scale-100 scale-80' alt=''>
                <div class="relative w-full mx-auto lg:max-w-lg lg:mr-0 lg:ml-auto">
                    <div class="relative block w-full">
                        <img class='absolute  hidden w-40 transform lg:block -top-20 -left-20 xl:w-48 xl:-top-20 xl:-left-20' src='images/dots.svg' alt=''>
                        <figure class='aspect-w-12 aspect-h-10 md:order-1'>
                            {{-- <div class='grid grid-flow-row-dense grid-cols-2 gap-2 sm:grid-cols-3 sm:gap-3 md:gap-4 lg:gap-6'>
                                <img class='object-cover h-full col-span-3 rounded-2xl' src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'US')->first()->image_1) }}" alt="Qui sommes-nous ? Image 1" />
                                <img class='object-cover w-full rounded-2xl md:h-56 h-30vw' src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'US')->first()->image_2) }}" alt="Qui sommes-nous ? Image 2" />
                                <img class='object-cover w-full col-span-2 rounded-2xl md:h-56 h-30vw' src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'US')->first()->image_3) }}" alt="Qui sommes-nous ? Image 3" />
                            </div> --}}
                            <img src='{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'US')->first()->image_1) }}' class='object-contains max-w-full h-auto rounded-3xl' alt='About 03'>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
