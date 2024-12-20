<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 sticky top-0 z-40">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('seminars') }}" :active="request()->routeIs('seminars')">
                        Ateliers
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('announcements') }}" :active="request()->routeIs('announcements')">
                        Annonces
                    </x-jet-nav-link>

                    <div class="sm:flex sm:items-center">
                        <x-jet-dropdown align="right" >
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        Administration des sections
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>
                            <x-slot name="content">
                                <x-jet-dropdown-link href="{{ route('section.home') }}">
                                    Accueil
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('section.missions') }}">
                                    Nos Missions
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('section.values') }}">
                                    Consultations spécialisées
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('section.publics') }}">
                                    Pour Qui ?
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('section.seminars') }}">
                                    Ateliers Collectifs
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('section.resado') }}">
                                    Rés'Ado
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('section.us') }}">
                                    Qui Sommes-Nous ?
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('section.informations') }}">
                                    Informations Pratiques
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('partners') }}">
                                    Nos Partenaires
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('links') }}">
                                    Liens Utiltes
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('section.footer') }}">
                                    Pied de Page
                                </x-jet-dropdown-link>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>

            </div>

            <div class="hidden sm:flex sm:ml-6 sm:gap-8">
                <x-jet-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-nav-link>
                <div class="sm:flex sm:items-center">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="border py-2 px-3 rounded-3xl text-sm leading-5 text-gray-700 hover:bg-yellow-400 hover:border-yellow-400 focus:outline-none focus:bg-gray-100 transition">
                            Se déconnecter
                        </a>
                    </form>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

            </div>
        </div>
    </div>
</nav>
