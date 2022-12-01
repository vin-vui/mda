<x-guest-layout>

    <!-- Site header and hero section-->
    <div class='bg-purple-50'>
        <!-- Hero section -->
        @include('components.hero-home')
    </div>

    <!-- Gradient transition -->
    <div class='w-full h-40 sm:h-48 xl:h-52 bg-gradient-to-b from-purple-50 to-yellow-100'></div>

    <!-- School events section -->
    @include('components.home-features-blocks')

    <!-- Gradient transition -->
    <div class='w-full h-40 sm:h-48 xl:h-52 bg-gradient-to-b from-yellow-100 to-white'></div>

    <!-- Newsletter section -->
    @include('components.events')

    <!-- Programs section -->
    @include('components.programs')

    <!-- Footer -->
    @include('components.footer')

</x-guest-layout>
