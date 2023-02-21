<div class='px-4 sm:px-6'>

    <nav class='flex items-center max-w-screen-xl pt-0 sm:pt-5 mx-auto'>
        <div class='flex items-center justify-between w-full'>

            <div class='items-center justify-between lg:flex-wrap w-full hidden lg:flex gap-2'>

                @if(request()->routeIs('homepage'))
                <a href="#accueil">
                    <div class="relative p-0.5 group whitespace-nowrap">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Accueil</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#nos-missions">
                    <div class="relative p-0.5 group whitespace-nowrap">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Nos Missions</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#pour-qui">
                    <div class="relative p-0.5 group whitespace-nowrap">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Pour Qui ?</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#ateliers">
                    <div class="relative p-0.5 group whitespace-nowrap">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Ateliers</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#resado">
                    <div class="relative p-0.5 group whitespace-nowrap">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Rés'Ado</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#qui-sommes-nous">
                    <div class="relative p-0.5 group whitespace-nowrap">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Qui Sommes-Nous ?</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#informations">
                    <div class="relative p-0.5 group whitespace-nowrap">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Informations Pratiques</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#partenaires">
                    <div class="relative p-0.5 group whitespace-nowrap">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Nos Partenaires</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                @else
                <a href="{{ route('homepage') }}">
                    <div class="relative p-0.5 group whitespace-nowrap">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 rotate-180" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                                <line x1="15" y1="16" x2="19" y2="12" />
                                <line x1="15" y1="8" x2="19" y2="12" />
                            </svg>
                            Retour à l'accueil
                        </span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                @endif

                <div class='flex space-x-4'>
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

            <div class="flex-grow-0 flex-shrink-0 block w-48 lg:hidden sm:w-52">
                <a href="index.html">
                    <img src="images/logo-mda.png" alt="Bright" class="h-auto" />
                </a>
            </div>

            <div class='block lg:hidden' x-data="{ open: false }">
                <div class="fixed top-4 right-4 z-50 p-2 pt-0.5 bg-yellow-500 rounded-xl">
                    <button class='text-purple-900 -mt-1 w-6 h-5 transition duration-500 ease-in-out transform rotate-0 cursor-pointer group focus:outline-none' :class="{ 'js-hamburger-open': open }" @click="open = !open">
                        <span class='absolute top-0 left-0 block w-full h-1 transition duration-200 ease-in-out transform rotate-0 bg-white rounded-full opacity-100'></span>
                        <span class='absolute left-0 block w-full h-1 transition duration-200 ease-in-out transform rotate-0 bg-white rounded-full opacity-100 top-2'></span>
                        <span class='absolute left-0 block w-full h-1 transition duration-200 ease-in-out transform rotate-0 bg-white rounded-full opacity-100 top-2'></span>
                        <span class='absolute left-0 block w-full h-1 transition duration-200 ease-in-out transform rotate-0 bg-white rounded-full opacity-100 top-4'></span>
                    </button>
                </div>
                <div class='fixed top-0 left-0 z-40 w-screen px-4 py-16 overflow-y-scroll bg-gradient-to-tr from-purple-600 to-purple-600 sm:px-8' @keydown.escape.window="open = false" x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-full" style="display: none;">
                    <div class='flex flex-col items-center justify-center w-full h-full'>
                        <div class='flex flex-col items-center w-full mx-auto space-y-6 justify-evenly'>

                            @if(request()->routeIs('homepage'))
                            <a href="#bienvenue" @click="open = !open">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Accueil</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            <a href="#nos-missions" @click="open = !open">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Nos Missions</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            <a href="#pour-qui" @click="open = !open">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Pour Qui ?</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            <a href='#ateliers' class="text-lg font-semibold text-purple-900 bg-yellow-500 btn hover:bg-yellow-600 group" @click="open = !open">
                                Ateliers
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-3 group-hover:animate-horizontal-bounce" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="5" y1="12" x2="19" y2="12" />
                                    <line x1="15" y1="16" x2="19" y2="12" />
                                    <line x1="15" y1="8" x2="19" y2="12" />
                                </svg>
                            </a>
                            <a href="#resado" @click="open = !open">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Rés'Ado</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            <a href="#qui-sommes-nous" @click="open = !open">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Qui Sommes-Nous ?</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            <a href="#informations" @click="open = !open">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Informations Pratiques</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            <a href="#partenaires" @click="open = !open">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Nos Partenaires</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            @else
                            <a href="{{ route('homepage') }}">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3 rotate-180" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                            <line x1="15" y1="16" x2="19" y2="12" />
                                            <line x1="15" y1="8" x2="19" y2="12" />
                                        </svg>
                                        Retour à l'accueil
                                    </span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            @endif

                            <div class='flex space-x-4'>
                                <a class="flex items-center justify-center w-16 h-16 text-white duration-300 ease-in-out bg-purple-500 rounded-full hover:bg-purple-600" href="{{ App\Models\Information::where('title', 'instagram')->first()->label }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <rect x="4" y="4" width="16" height="16" rx="4" />
                                        <circle cx="12" cy="12" r="3" />
                                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                                    </svg>
                                </a>
                                <a class="flex items-center justify-center w-16 h-16 text-white duration-300 ease-in-out bg-purple-500 rounded-full hover:bg-purple-600" href="{{ App\Models\Information::where('title', 'facebook')->first()->label }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="" x-data="{scrollBackTop: false}" x-cloak>
        <button class="fixed bottom-4 right-4 shadow-md bg-purple-600 px-2 py-1.5 sm:px-4 sm:py-4 rounded-xl text-white z-50 transition-all" x-transition x-show="scrollBackTop" x-on:scroll.window="scrollBackTop = (window.pageYOffset > window.outerHeight * 0.5) ? true : false" @click="window.scrollTo({top: 0, behavior: 'smooth'})" x-transition.scale.origin.bottom aria-label="Back to top">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 sm:w-8 sm:h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
        </button>
    </div>

</div>
