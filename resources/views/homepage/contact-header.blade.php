<div class='hidden px-4 lg:block sm:px-6'>

    <div class='relative max-w-screen-xl py-4 mx-auto border-b border-purple-200/30'>
        <div class='flex items-center justify-between'>

            <div class="flex-grow-0 flex-shrink-0 w-60">
                <a href="{{ route('homepage') }}">
                    <img src="images/logo-mda.png" alt="Bright" class="h-auto" />
                </a>
            </div>

            <ul class='flex ml-8 lg:space-x-6 xl:space-x-16'>
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
</div>
