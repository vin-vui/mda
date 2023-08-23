<section id="ateliers" class='relative w-full sm:pb-64 sm:py-16 pt-8 pb-16 px-4 sm:px-6 lg:px-8 bg-purple-50'>

    <div class='max-w-2xl mx-auto lg:max-w-screen-2xl'>
        <div>
            <h2 class='lg:text-center max-w-3xl mx-auto mt-6 text-purple-900 h2'>
                <span class="relative block">
                    Ateliers
                    <span class='relative'>
                        <img class='absolute inset-0 transform translate-y-8 sm:translate-y-11 xl:translate-y-12' src='images/underline-simple-light-purple.svg'>
                        <span class='relative'>Collectifs</span>
                    </span>
                </span>
            </h2>
            <p class='max-w-2xl mx-auto mt-3 text-xl leading-relaxed text-purple-800 lg:mt-4 lg:text-center whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'SEMINARS')->first()->description }}</p>
        </div>
        <div class='mt-12 lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-12 sm:mt-16 pl-8'>
            @foreach (App\Models\Seminar::where('display', true)->latest()->take(4)->get() as $seminar)
            @include('partials.news-card')
            @endforeach
        </div>
    </div>

    <div class='flex justify-center mt-12 xl:mt-14 -rotate-2'>
        <a href='{{ route('seminars.list') }}' class="text-lg font-semibold text-purple-900 bg-yellow-500 btn hover:bg-yellow-600 group">
            Voir tous les ateliers
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-3 group-hover:animate-horizontal-bounce" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="5" y1="12" x2="19" y2="12" />
                <line x1="15" y1="16" x2="19" y2="12" />
                <line x1="15" y1="8" x2="19" y2="12" />
            </svg>
        </a>
    </div>

    </div>

</section>
