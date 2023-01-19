<x-guest-layout>

    <!-- Site header and hero section-->
    <div class='bg-purple-50'>
        <!-- Hero section -->
        @include('homepage.home')
    </div>

    <!-- Gradient transition -->
    <div class='w-full h-40 sm:h-48 xl:h-52 bg-gradient-to-b from-purple-50 to-transparent'></div>

    <!-- Programs section -->
    @include('homepage.publics')

    <!-- Gradient transition -->
    <div class='w-full h-40 sm:h-48 xl:h-52 bg-gradient-to-b from-transparent to-purple-50'></div>

    @include('homepage.news')

    @include('homepage.resado')

    @include('homepage.us')

    <!-- Gradient transition -->
    <div class='w-full h-40 sm:h-48 xl:h-52 bg-gradient-to-b from-purple-50 to-transparent'></div>

    @include('homepage.contact-information')

    @include('homepage.partners')

    <!-- Footer -->
    @include('homepage.footer')

</x-guest-layout>
