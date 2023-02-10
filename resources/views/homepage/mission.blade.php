<section class='relative w-full px-4 py-16 sm:py-24 sm:px-6 xl:px-8 sm:mt-12 mt-24'>
    <div class='max-w-xl mx-auto lg:max-w-screen-xl'>
        <div class='grid gap-16 lg:grid-cols-2 xl:grid-cols-11 lg:gap-12 xl:gap-24'>
            <div class='flex flex-col justify-center lg:col-span-1 xl:col-span-6 lg:order-2'>
                <h2 class='max-w-3xl text-purple-900 h2'>
                    <span class="relative block">
                        Nos
                        <span class='relative'>
                            <img class='absolute inset-0 transform translate-y-8 sm:translate-y-11 xl:translate-y-12' src='images/underline-simple-light-purple.svg'>
                            <span class='relative'> Missions</span>
                        </span>
                    </span>
                </h2>
                <div class='relative max-w-4xl mt-16 bg-yellow-100 rounded-3xl sm:mt-14'>
                    <span class="absolute flex items-center justify-center shadow-md left-6 sm:left-10 -top-7 rounded-2xl w-14 h-14 bg-gradient-to-br from-purple-600 to-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-purple-50" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="15" cy="15" r="3" />
                            <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                            <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" />
                            <line x1="6" y1="9" x2="18" y2="9" />
                            <line x1="6" y1="12" x2="9" y2="12" />
                            <line x1="6" y1="15" x2="8" y2="15" />
                        </svg>
                    </span>
                    <div class='px-4 py-10 mt-2 sm:px-10 sm:py-12'>
                        <p class='text-lg text-purple-800 whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'MISSION')->first()->description }}</p>
                    </div>
                </div>
            </div>
            <div class='grid w-full mx-auto gap-4 lg:col-span-1 xl:col-span-5 lg:mt-20 grid-cols-2 lg:order-1 sm:max-w-none sm:mx-0'>
                <div class='lg:-translate-y-20'>
                    <div class='aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-3'>
                        <img class='object-cover shadow-md rounded-3xl' src='{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'MISSION')->first()->image_1) }}' alt='About team 1'>
                    </div>
                </div>
                <div>
                    <div class='aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-3'>
                        <img class='object-cover shadow-md rounded-3xl' src='{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'MISSION')->first()->image_2) }}' alt='About team 2'>
                    </div>
                </div>
                <div class='lg:-translate-y-20'>
                    <div class='aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-3'>
                        <img class='object-cover shadow-md rounded-3xl' src='{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'MISSION')->first()->image_3) }}' alt='About team 3'>
                    </div>
                </div>
                <div>
                    <div class='aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-3'>
                        <img class='object-cover shadow-md rounded-3xl' src='{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'MISSION')->first()->image_4) }}' alt='About team 4'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
