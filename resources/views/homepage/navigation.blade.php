<div class='px-4 sm:px-6'>
    <nav class='flex items-center max-w-screen-xl pt-0 sm:pt-5 mx-auto'>
        <div class='flex items-center sm:justify-start justify-between w-full'>

            <div class='items-center justify-between hidden lg:flex md:space-x-6 lg:space-x-10'>
                <a href="#accueil">
                    <div class="relative p-0.5 group">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Accueil</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#nos-publics">
                    <div class="relative p-0.5 group">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Nos publics</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#actualites">
                    <div class="relative p-0.5 group">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Actualités et Ateliers</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#resado">
                    <div class="relative p-0.5 group">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Rés'Ado</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#qui-sommes-nous">
                    <div class="relative p-0.5 group">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Qui Sommes-Nous ?</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#informations">
                    <div class="relative p-0.5 group">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Informations Pratiques</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
                <a href="#partenaires">
                    <div class="relative p-0.5 group">
                        <span class="relative z-10 text-lg font-medium text-purple-700 duration-300 ease-in-out group-hover:text-purple-600">Nos Partenaires</span>
                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                    </div>
                </a>
            </div>

            <div class="flex-grow-0 flex-shrink-0 block w-48 lg:hidden sm:w-52">
                <a href="index.html">
                    <img src="images/logo-mda.png" alt="Bright" class="h-auto" />
                </a>
            </div>

            <div class='block lg:hidden' x-data="{ open: false }">

                <div class="fixed top-4 right-4 z-50 pt-0.5 pb-2 px-2 bg-yellow-500 rounded-xl">

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
                            <a href="#bienvenue" @click="open = !open">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Accueil</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            <a href="#nos-publics" @click="open = !open">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Nos Publics</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>
                            <a href='#actualites' class="text-lg font-semibold text-purple-900 bg-yellow-500 btn hover:bg-yellow-600 group" @click="open = !open">
                                Actualités et Ateliers
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
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </nav>
</div>
