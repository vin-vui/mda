<section class='px-4 lg:-mt-8 bg-white sm:py-4 sm:mt-0 sm:px-6 lg:px-8 lg:rounded-3xl'>

    <div class='max-w-3xl mx-auto lg:max-w-screen-xl'>
        <div class='lg:grid lg:grid-cols-2 lg:gap-10 xl:gap-16 mt-8'>

            <div class='flex flex-col justify-center'>
                <h3 class='text-purple-900 sm:text-center lg:text-left sm:h3 h4'>
                    Consultations spécialisées
                </h3>

                <div class='grid max-w-4xl gap-6 mt-10 sm:grid-cols-2 lg:grid-cols-1 sm:mx-auto lg:mx-0 lg:max-w-md'>
                    <div class="flex">
                        <div class="w-14">
                            <img src='images/checkmark.svg' class='w-7 h-7' alt=''>
                        </div>
                        <div class="w-full">
                            <h5 class="flex items-center text-xl font-semibold text-purple-900">
                                Médecins
                            </h5>
                            <p class="mt-1 text-base text-purple-800">
                                Pédopsychiatre/psychiatre, pour avis ou suivis de consultations sur rendez-vous.
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-14">
                            <img src='images/checkmark.svg' class='w-7 h-7' alt=''>
                        </div>
                        <div class="w-full">
                            <h5 class="flex items-center text-xl font-semibold text-purple-900">
                                Pédiatre
                            </h5>
                            <p class="mt-1 text-base text-purple-800">
                                Pour toutes questions relatives à la santé générale de l'adolescent : vacations tous les vendredis après-midi sur rendez-vous.
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-14">
                            <img src='images/checkmark.svg' class='w-7 h-7' alt=''>
                        </div>
                        <div class="w-full">
                            <h5 class="flex items-center text-xl font-semibold text-purple-900">
                                Psychologue de l'Education Nationale
                            </h5>
                            <p class="mt-1 text-base text-purple-800">
                                Pour toutes informations, aides et accompagnement du jeune dans ses orientations scolaires et d'avenir. Il conseille et informe les parents et fait le lien avec l'école : permanence les mercredis après-midi tous les 15 jours sur rendez-vous, détachement de l'Inspection Académique.
                            </p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-14">
                            <img src='images/checkmark.svg' class='w-7 h-7' alt=''>
                        </div>
                        <div class="w-full">
                            <h5 class="flex items-center text-xl font-semibold text-purple-900">
                                Avocats du barreau des avocats
                            </h5>
                            <p class="mt-1 text-base text-purple-800">
                                Pour toutes questions, informations juridiques ou éventuelle orientation vers une institution juridique ou chez un avocat spécialisé. Ces consultations s'adressent uniquement aux mineurs et fonctionnent avec la participation à tour de rôle des avocats de l'antenne des mineurs du barreau de Besançon. Elles ont lieu deux lundis par mois de 16h à 18h sur rendez-vous.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <button @click="modalOpen = false" class="flex justify-center w-full px-4 border rounded-3xl mt-4 py-2">
                fermer
            </button>

        </div>
    </div>

</section>
