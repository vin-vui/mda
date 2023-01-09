<!--
  This component uses Alpine.js for both the programs dropdown and the mobile navigation menu. If you're
  not familiar with Alpine you can check out their documentation
  here: https://alpinejs.dev/start-here
-->
<div class='px-4 sm:px-6'>
    <nav class='flex items-center max-w-screen-xl pt-5 mx-auto'>
        <div class='flex items-center justify-start w-full'>

            <!-- Main navigation menu for large screens -->
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
            </div>

            <!-- Logo on smaller screens: < lg -->
            <div class="flex-grow-0 flex-shrink-0 block w-48 lg:hidden sm:w-52">
                <a href="index.html">
                    <img src="images/logo-mda.png" alt="Bright" class="h-auto" />
                </a>
            </div>

            <!-- Mobile menu container -->
            <div class='block lg:hidden' x-data="{ open: false }">

                <!-- Hamburger menu button -->
                <!--
          Toggle "js-hamburger-open" class based on menu state
        -->
                <button class='relative z-50 w-6 h-5 transition duration-500 ease-in-out transform rotate-0 cursor-pointer group focus:outline-none' :class="{ 'js-hamburger-open': open }" @click="open = !open">
                    <span class='absolute top-0 left-0 block w-full h-1 transition duration-200 ease-in-out transform rotate-0 bg-purple-900 rounded-full opacity-100 group-hover:bg-purple-600'></span>
                    <span class='absolute left-0 block w-full h-1 transition duration-200 ease-in-out transform rotate-0 bg-purple-900 rounded-full opacity-100 top-2 group-hover:bg-purple-600'></span>
                    <span class='absolute left-0 block w-full h-1 transition duration-200 ease-in-out transform rotate-0 bg-purple-900 rounded-full opacity-100 top-2 group-hover:bg-purple-600'></span>
                    <span class='absolute left-0 block w-full h-1 transition duration-200 ease-in-out transform rotate-0 bg-purple-900 rounded-full opacity-100 top-4 group-hover:bg-purple-600'></span>
                </button>

                <!-- Mobile menu -->
                <!--
          Toggle "js-mobileNav-open" class based on menu state
        -->
                <div class='absolute top-0 left-0 z-40 w-screen px-4 py-16 overflow-y-scroll bg-gradient-to-tr from-purple-600 to-purple-600 sm:px-8' @keydown.escape.window="open = false" x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-full" style="display: none;">
                    <div class='flex flex-col items-center justify-center w-full h-full'>

                        <!-- Site links -->
                        <div class='flex flex-col items-center w-full mx-auto space-y-6 justify-evenly'>
                            <a href="/">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Home</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>

                            <a href="/about-us.html">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">About</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>

                            <a href="/gallery.html">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Gallery</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>

                            <a href="/parents.html">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Parents</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>

                            <a href="/contact.html">
                                <div class="relative p-0.5 group">
                                    <span class="relative z-10 text-2xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Contact</span>
                                    <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                </div>
                            </a>

                            <!-- CTA button -->
                            <a class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-semibold leading-normal text-center text-purple-900 duration-300 ease-in-out bg-yellow-400 rounded-full" href="#">
                                Enroll today
                            </a>

                        </div>

                        <hr class='w-full my-8 border-purple-200 sm:my-10 border-opacity-30'>

                        <!-- Programs links -->
                        <div class='w-full max-w-md mx-auto'>
                            <p class='text-lg font-semibold tracking-wider text-center text-purple-200 uppercase sm:text-left'>
                                Programs
                            </p>
                            <div class='grid gap-4 mt-4 justify-items-center sm:justify-items-start sm:grid-cols-2 sm:gap-x-8'>
                                <a href="/program.html">
                                    <div class="relative p-0.5 group">
                                        <span class="relative z-10 text-xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Toddler Program</span>
                                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                    </div>
                                </a>

                                <a class='sm:justify-self-end' href="/program.html">
                                    <div class="relative p-0.5 group">
                                        <span class="relative z-10 text-xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Preschool</span>
                                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                    </div>
                                </a>

                                <a href="/program.html">
                                    <div class="relative p-0.5 group">
                                        <span class="relative z-10 text-xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Kindergarten</span>
                                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                    </div>
                                </a>

                                <a class='sm:justify-self-end' href="/program.html">
                                    <div class="relative p-0.5 group">
                                        <span class="relative z-10 text-xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Elementary School</span>
                                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                    </div>
                                </a>

                                <a href="/program.html">
                                    <div class="relative p-0.5 group">
                                        <span class="relative z-10 text-xl font-medium duration-300 ease-in-out text-purple-50 group-hover:text-white">Summer Camp</span>
                                        <span class="absolute bottom-0 h-1.5 duration-300 ease-in-out origin-bottom transform scale-x-0 bg-yellow-400 rounded-lg -left-1 -right-1 group-hover:scale-x-100"></span>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>
