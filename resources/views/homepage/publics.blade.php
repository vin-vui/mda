<section id="nos-publics" class='px-4 pt-12 pb-12 overflow-hidden sm:pb-28 md:pb-0 sm:pt-24 sm:px-6 lg:px-8' x-data="{ modalOpen: false }">

    <div class='max-w-xl mx-auto md:max-w-screen-xl'>
        <div class='md:grid md:grid-cols-2 md:gap-12 lg:gap-16'>
            <div>
                <h2 class='max-w-3xl mx-auto mt-6 text-purple-900 h2'>
                    <span class="relative block">
                        Nos
                        <span class='relative'>
                            <img class='absolute inset-0 transform translate-y-8 sm:translate-y-11 xl:translate-y-12' src='images/underline-simple-light-purple.svg'>
                            <span class='relative'> Publics</span>
                        </span>
                    </span>
                </h2>
                <p class='max-w-2xl mx-auto mt-4 text-xl leading-relaxed text-purple-800 sm:mt-5 lg:text-left'>
                    La Maison de l'Adolescent apporte des réponses de santé globale et plus largement prend soin de l'adolescent dans ses dimensions psychiques, sociales, éducatives, scolaires, juridiques, somatiques. Elle assure un soutien à leurs parents et propose un appui aux professionnels (enseignants, éducateurs, travailleurs sociaux, médecins généralistes, institutions…) pour des conseils et avis ou orientation.
                </p>
            </div>
        </div>

        <div class='mt-16 md:mt-72 md:-mb-72 md:grid md:grid-cols-2 md:gap-8 lg:gap-16'>
            <div class='relative'>
                <img src='images/curved-dotted-line.svg' class='absolute top-0 hidden -translate-y-1/2 md:block left-1/2' style="width: calc(50% + 4rem);">

                <!-- Program 1 -->
                <div class='relative z-10 w-full px-8 py-10 sm:p-12 md:px-8 md:py-10 lg:p-12 bg-purple-25 rounded-3xl'>
                    <div class='flex flex-col justify-between'>
                        <div class='flex-1'>
                            <h3 class='text-purple-900 h3'>
                                Familles / Parents
                            </h3>
                            <p class='max-w-2xl mt-3 text-lg leading-loose text-purple-800'>
                                Parce que vous êtes inquiets et parfois démunis devant l'apparition de changements ou de difficultés particulières chez votre adolescent, la Maison de l'Adolescent de Besançon (MDA) vous propose un espace de parole pour vous écouter, vous soutenir et vous accompagner dans vos questionnements de parents.
                            </p>
                            <div class='relative mt-8 aspect-w-3 aspect-h-2'>
                                <img class="object-cover rounded-2xl" src="https://images.unsplash.com/photo-1559734840-f9509ee5677f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="Program 01" />
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
                        <p class='max-w-2xl mt-3 text-lg leading-loose text-purple-800'>
                            Lorsque les difficultés sont plus importantes, l'équipe de la MDA oriente le jeune vers des soins les plus adaptés, médicaux ou psychologiques en dehors de la MDA. D'autres orientations sont possibles en fonction des besoins du jeune : centre d'animation, service de planification familiale, activité sportive, droits sociaux ou juridiques, etc.
                        </p>
                        <div class='relative mt-8 aspect-w-3 aspect-h-2'>
                            <img class="object-cover rounded-2xl" src="https://images.unsplash.com/photo-1550617749-4ec0d574c429?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Program 02" />
                        </div>
                    </div>
                    <div class='mt-8'>
                        <button @click="modalOpen = true" class="font-medium text-white bg-purple-600 btn-sm hover:bg-purple-500 group">
                            Consultations spécialisées
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-3 group-hover:animate-horizontal-bounce" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg>

                        </button>
                    </div>
                </div>
            </div>
            <div class='relative w-full px-8 py-10 mt-12 sm:p-12 md:mt-0 md:col-start-2 md:px-8 md:py-10 lg:p-12 md:-translate-y-80 bg-blue-50 rounded-3xl'>
                <div class='flex flex-col justify-between'>
                    <div class='flex-1'>
                        <h3 class='text-purple-900 h3'>
                            Professionnels
                        </h3>
                        <p class='max-w-2xl mt-3 text-lg leading-loose text-purple-800'>
                            La Maison de l'adolescent n'est pas un service d'urgence et n'a pas vocation à assurer des suivis au long cours. Elle a pour mission d'apporter des réponses de santé globale : somatiques, psychiques, sociales, scolaires, éducatives, juridiques…
                        </p>
                        <p class='max-w-2xl mt-3 text-lg leading-loose text-purple-800'>
                            La Maison de l'Adolescent ne se surajoute pas aux dispositifs existants. Elle intervient en complémentarité, en partenariat et en collaboration avec les professionnels en demande de soutien ou d'avis pour des adolescents qu'ils accompagnent.
                        </p>
                        <div class='relative mt-8 aspect-w-3 aspect-h-2'>
                            <img class="object-cover rounded-2xl" src="https://images.unsplash.com/photo-1643877325472-7dff84b21c54?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Program 03" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div @keydown.window.escape="modalOpen = false" x-show="modalOpen" class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true" x-cloak>
            <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" x-cloak></div>
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="relative transform overflow-hidden rounded-3xl bg-white pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-7xl sm:p-6" @click.away="modalOpen = false" x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state.">
                        @include('homepage.values')
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
