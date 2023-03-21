<section id="pour-qui" class='px-4 pt-12 pb-12 overflow-hidden sm:pb-28 md:pb-0 sm:pt-24 sm:px-6 lg:px-8' x-data="{ modalOpen: false }">

    <div class='max-w-xl mx-auto md:max-w-screen-xl'>
        <div class='md:grid md:grid-cols-2 md:gap-12 lg:gap-16'>
            <div>
                <h2 class='max-w-3xl mx-auto mt-6 text-purple-900 h2'>
                    <span class="relative block">
                        Pour
                        <span class='relative'>
                            <img class='absolute inset-0 transform translate-y-8 sm:translate-y-11 xl:translate-y-12' src='images/underline-simple-light-purple.svg'>
                            <span class='relative'> Qui ?</span>
                        </span>
                    </span>
                </h2>
                <p class='max-w-2xl mx-auto mt-4 text-xl leading-relaxed text-purple-800 sm:mt-5 lg:text-left whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'PUBLICS')->first()->description }}</p>
            </div>
        </div>

        <div class='mt-16 md:mt-72 md:-mb-72 md:grid md:grid-cols-2 md:gap-8 lg:gap-16'>
            <div class='relative'>
                <img src='images/curved-dotted-line.svg' class='absolute top-0 hidden -translate-y-1/2 md:block left-1/2' style="width: calc(50% + 4rem);">
                <div class='relative z-10 w-full px-8 py-10 sm:p-12 md:px-8 md:py-10 lg:p-12 bg-purple-25 rounded-3xl'>
                    <div class='flex flex-col justify-between'>
                        <div class='flex-1'>
                            <h3 class='text-purple-900 h3'>
                                Familles / Parents
                            </h3>
                            <p class='max-w-2xl mt-3 text-lg leading-loose text-purple-800 whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'PUBLICS_FAMILY')->first()->description }}</p>
                            <div class='relative mt-8 aspect-w-3 aspect-h-2'>
                                <img class="object-cover rounded-2xl" src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'PUBLICS_FAMILY')->first()->image_1) }}" alt="Program 01" />
                            </div>
                        </div>
                    </div>
                </div>
                <img src='images/looped-dotted-line.svg' class='hidden md:block absolute bottom-0 left-1/2 translate-y-[60%]' style="width: calc(50% + 4rem);">
            </div>
            <div class='relative w-full px-8 py-10 mt-12 bg-yellow-200 sm:p-12 md:mt-0 md:px-8 md:py-10 lg:p-12 md:-translate-y-80 rounded-3xl'>
                <div class='flex flex-col justify-between'>
                    <div class='flex-1'>

                        <h3 class='text-purple-900 h3 mb-2 sm:mb-3'>
                            Adolescents
                        </h3>
                        <span class="inline-block px-2 py-1 relative bg-purple-200 text-purple-700 font-semibold -rotate-2 leading-6" style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">
                            de 12 à 20 ans
                        </span>
                        <p class='max-w-2xl mt-3 text-lg leading-loose text-purple-800 whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'PUBLICS_TEEN')->first()->description }}</p>
                        <div class='relative mt-8 aspect-w-3 aspect-h-2'>
                            <img class="object-cover rounded-2xl" src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'PUBLICS_TEEN')->first()->image_1) }}" alt="Public adolescent image" />
                        </div>
                    </div>
                </div>
            </div>
            <div class='relative w-full px-8 py-10 mt-12 sm:p-12 md:mt-0 md:col-start-2 md:px-8 md:py-10 lg:p-12 md:-translate-y-80 bg-blue-50 rounded-3xl'>
                <div class='flex flex-col justify-between'>
                    <div class='flex-1'>
                        <h3 class='text-purple-900 h3'>
                            Professionnels
                        </h3>
                        <p class='max-w-2xl mt-3 text-lg leading-loose text-purple-800 whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'PUBLICS_PRO')->first()->description }}</p>
                        <div class='relative mt-8 aspect-w-3 aspect-h-2'>
                            <img class="object-cover rounded-2xl" src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'PUBLICS_PRO')->first()->image_1) }}" alt="Public pro image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
