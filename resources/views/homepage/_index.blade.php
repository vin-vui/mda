<x-guest-layout>

    <div class='bg-purple-50'>
        @include('homepage.home')
    </div>

    <div class='w-full h-40 sm:h-48 xl:h-52 bg-gradient-to-b from-purple-50 to-transparent'></div>

    @include('homepage.publics')

    <div class='w-full h-40 sm:h-48 xl:h-52 bg-gradient-to-b from-transparent to-purple-50'></div>

    @include('homepage.news')

    @include('homepage.resado')

    @include('homepage.us')

    <div class='w-full h-40 sm:h-48 xl:h-52 bg-gradient-to-b from-purple-50 to-transparent'></div>

    @include('homepage.contact-information')

    @include('homepage.partners')

    @include('homepage.footer')

</x-guest-layout>
