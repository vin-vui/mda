<footer class='px-4 py-16 space-y-8 divide-y sm:py-20 sm:px-6 lg:px-8 divide-purple-400/20'>
    <div class='grid max-w-md mx-auto gap-y-8 sm:gapy-12 sm:gap-x-8 md:gap-x-12 sm:max-w-none lg:max-w-screen-2xl sm:grid-cols-2 lg:grid-cols-11 lg:gap-8 xl:gap-12'>

        <div class='flex flex-col lg:mx-auto lg:col-span-4'>

            <div class='flex items-center'>
                <div class="flex-grow-0 flex-shrink-0 w-60">
                    <a href="index.html">
                        <img src="images/logo-mda.png" alt="Bright" class="h-auto" />
                    </a>
                </div>
            </div>

            <p class='mt-6 text-lg text-purple-800 whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'FOOTER')->first()->description }}</p>

            <div class='w-full mt-5 lg:mt-6'>
                <div class='flex justify-start space-x-4'>
                    <a class="flex items-center justify-center w-10 h-10 text-white duration-300 ease-in-out bg-purple-500 rounded-full hover:bg-purple-600" href="{{ App\Models\Information::where('title', 'instagram')->first()->label }}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <rect x="4" y="4" width="16" height="16" rx="4" />
                            <circle cx="12" cy="12" r="3" />
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                        </svg>
                    </a>
                    <a class="flex items-center justify-center w-10 h-10 text-white duration-300 ease-in-out bg-purple-500 rounded-full hover:bg-purple-600" href="{{ App\Models\Information::where('title', 'facebook')->first()->label }}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class='flex-shrink sm:order-3 lg:order-none lg:col-span-2'>
            <h6 class='relative text-xl font-bold tracking-wide text-purple-900'>
                <span class='relative z-20'>Liens utiles</span>
                <span class='absolute left-0 z-10 w-12 h-1 rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 -bottom-1'></span>
            </h6>
            <ul class='mt-4 text-lg divide-y divide-purple-400/20'>
                @foreach (App\Models\Link::all() as $link)
                <li class='py-2 font-medium text-purple-700 duration-300 ease-in-out hover:text-purple-600'>
                    <a target="_blank" href='{{ $link->url }}'>
                        {{ $link->label }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class='flex-shrink sm:order-4 lg:order-none lg:col-span-2'>
            <h6 class='relative text-xl font-bold tracking-wide text-purple-900'>
                <span class='relative z-20'>Pages du site</span>
                <span class='absolute left-0 z-10 w-12 h-1 rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 -bottom-1'></span>
            </h6>
            <ul class='mt-6 text-lg divide-y divide-purple-400/20'>
                <li class='pb-2 font-medium text-purple-700 duration-300 ease-in-out hover:text-purple-600'>
                    <a href="{{ route('homepage') }}">
                        Accueil
                    </a>
                </li>
                <li class='py-2 font-medium text-purple-700 duration-300 ease-in-out hover:text-purple-600'>
                    <a href='about-us.html'>
                        Mentions légales
                    </a>
                </li>
                <li class='py-2 font-medium text-purple-700 duration-300 ease-in-out hover:text-purple-600'>
                    <a href='gallery.html'>
                        Protection des données
                    </a>
                </li>
            </ul>
        </div>

        <div class='sm:order-2 lg:order-none lg:col-span-3 lg:mx-auto '>
            <h6 class='relative text-xl font-bold tracking-wide text-purple-900'>
                <span class='relative z-20'>Nous contacter</span>
                <span class='absolute left-0 z-10 w-12 h-1 rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 -bottom-1'></span>
            </h6>
            <ul class='flex flex-col mt-6 space-y-5'>
                <li class="flex flex-shrink max-w-xs">
                    <div>
                        <span class="flex items-center justify-center bg-yellow-400 rounded-2xl w-11 h-11">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-700" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="11" r="3" />
                                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 mt-0 ml-3 xl:ml-4">
                        <h5 class="flex items-center text-base font-semibold text-purple-900">
                            Adresse
                        </h5>
                        <p class="mt-0.5 text-sm text-purple-800 leading-relaxed text-opacity-90">
                            {{ App\Models\Information::where('title', 'adresse')->first()->label }}
                        </p>
                    </div>
                </li>
                <li class="flex flex-shrink-0">
                    <div>
                        <span class="flex items-center justify-center bg-purple-200 rounded-2xl w-11 h-11">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-700" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <polyline points="3 7 12 13 21 7" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 ml-3 xl:ml-4">
                        <h5 class="flex items-center text-base font-semibold text-purple-900">
                            Email
                        </h5>
                        <p class="mt-0.5 text-sm text-purple-800 leading-relaxed text-opacity-90">
                            {{ App\Models\Information::where('title', 'email')->first()->label }}
                        </p>
                    </div>
                </li>
                <li class="flex flex-shrink-0">
                    <div>
                        <span class="flex items-center justify-center rounded-2xl w-11 h-11 bg-rose-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-700" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 ml-3 xl:ml-4">
                        <h5 class="flex items-center text-base font-semibold text-purple-900">
                            Téléphone
                        </h5>
                        <p class="mt-0.5 text-sm text-purple-800 leading-relaxed text-opacity-90">
                            {{ App\Models\Information::where('title', 'téléphone')->first()->label }}
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class='flex flex-col justify-between max-w-md py-8 mx-auto sm:flex-row sm:max-w-none lg:max-w-screen-2xl'>
        <span class='text-base text-purple-800/90'>
            © 2023 Maison de l'adolescent de Besançon. Tous droits réservés.
        </span>
        <p class='mt-0.5 flex items-center text-purple-800/90'>
            Développé avec ❤️ par <a class='text-purple-700 hover:text-purple-900 hover:underline pl-1' href='https://www.vinvui.com/' target='_blank'>Vinvui</a>
        </p>
    </div>

</footer>
