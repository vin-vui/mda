<section id="actualites" class='relative w-full sm:pb-64 sm:py-16 pt-8 pb-16 px-4 sm:px-6 lg:px-8 bg-purple-50'>

    <div class='max-w-2xl mx-auto lg:max-w-screen-2xl'>
        <div>
            <h2 class='lg:text-center max-w-3xl mx-auto mt-6 text-purple-900 h2'>
                <span class="relative block">
                    Actualités et
                    <span class='relative'>
                        <img class='absolute inset-0 transform translate-y-8 sm:translate-y-11 xl:translate-y-12' src='images/underline-simple-light-purple.svg'>
                        <span class='relative'>Ateliers</span>
                    </span>
                </span>
            </h2>
            <p class='max-w-2xl mx-auto mt-3 text-xl leading-relaxed text-purple-800 lg:mt-4 lg:text-center whitespace-pre-wrap'>{{ App\Models\Section::where('title', 'SEMINARS')->first()->description }}</p>
        </div>
        <div class='mt-12 lg:grid lg:grid-cols-2 lg:gap-6 xl:gap-8 sm:mt-16'>
            @foreach (App\Models\Seminar::where('display', true)->latest()->get() as $seminar)
            <div class='grid w-full @if($seminar->type === 'atelier') bg-yellow-200 @else bg-teal-50 @endif rounded-2xl sm:grid-cols-12 sm:mb-0 mb-8'>
                <div class='@if($loop->even) order-1 sm:order-2 sm:rounded-r-2xl sm:rounded-tl-none @else sm:rounded-l-2xl sm:rounded-tr-none @endif rounded-t-2xl h-48 bg-cover bg-center bg-no-repeat sm:h-full sm:col-span-4' style="background-image: url('{{ Storage::disk('uploads')->url($seminar->image) }}');">
                </div>
                <div class='@if($loop->even) order-2 sm:order-1 @endif flex flex-col justify-start h-full px-6 py-8 sm:col-span-8 sm:py-10 sm:px-8 lg:px-6 xl:px-8'>
                    <div class="flex flex-col justify-start items-start">
                        <div class="inline-flex capitalize items-center justify-center px-3.5 py-0.5 text-xl -rotate-2 {{ $seminar->type === 'atelier' ? 'bg-yellow-400' : 'bg-teal-200' }} text-purple-700 font-semibold leading-6 align-top rounded-xl">
                            {{ $seminar->type }}
                        </div>
                        <div class="flex items-center justify-center px-3.5 py-0.5 text-sm -rotate-1  align-top rounded-xl">
                            <span class="inline-block px-2 py-1 relative bg-purple-100 text-purple-700 font-medium leading-6" style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">{{ Carbon\Carbon::create($seminar->date)->locale('fr')->isoFormat('d MMMM Y') }}</span>
                        </div>
                    </div>
                    <h4 class='mt-4 text-2xl font-bold text-purple-900 xl:text-3xl lg:text-2xl sm:text-3xl lg:leading-tight xl:leading-tight'>
                        {{ $seminar->title }}
                    </h4>
                    <p class='mt-1 text-purple-800 lg:mt-2'>
                        {{ $seminar->description }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
