<section id="accueil" class='px-4 pt-16 sm:px-6 lg:px-8'>

    <div class='max-w-screen-xl mx-auto lg:grid lg:grid-cols-12 lg:gap-8' >
        <div class='flex flex-col items-center justify-center lg:items-start lg:col-span-6'>
            <div>
                <span class="inline-block px-2 py-1 relative bg-purple-200 text-purple-700 font-semibold -rotate-2 leading-6" style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">
                    Bienvenue à la
                </span>
            </div>

            <h1 class='max-w-xl mt-4 sm:mt-5 text-center text-purple-900 lg:text-left h1 lg:max-w-none'>
                <span class="block">Maison des Adolescents</span>
                <span class="relative block">
                  <span class='relative'>
                    <img class='absolute inset-0 transform translate-y-9 sm:translate-y-11 xl:translate-y-14' src='images/underline-simple-light-purple.svg'>
                    <span class='relative'>du Doubs</span>
                  </span>
                </span>
            </h1>

            <h2 class="max-w-xl mt-4 sm:mt-5 text-center text-purple-600 lg:text-left h1 lg:max-w-none -rotate-2">- Résado</h2>

            <p class='max-w-2xl mt-6 text-xl leading-loose text-center text-purple-800 lg:text-left whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'HOME')->first()->description }}</p>

            <div class='flex flex-col items-center mt-8 overflow-hidden sm:flex-row -rotate-2'>
                <a href='#ateliers' class="text-lg font-semibold text-purple-900 bg-yellow-500 btn hover:bg-yellow-600 group">
                    Voir les prochains ateliers
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-3 group-hover:animate-horizontal-bounce" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <line x1="15" y1="16" x2="19" y2="12" />
                        <line x1="15" y1="8" x2="19" y2="12" />
                    </svg>
                </a>
            </div>
        </div>

        <div class='flex flex-col justify-center max-w-3xl mx-auto mt-16 lg:mt-0 lg:max-w-none lg:col-span-6'>
            <div class='relative'>
                <img class="w-full h-auto rounded-3xl" src="{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'HOME')->first()->image_1) }}" alt="">
            </div>
        </div>
    </div>

</section>
