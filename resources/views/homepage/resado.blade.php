<section id="resado" class='relative overflow-hidden bg-purple-50'>
    <div class='absolute inset-y-0 right-0 w-full max-w-screen-xl ml-auto bg-yellow-100 rounded-l-5xl'></div>
    <div class='relative w-full px-4 py-16 bg-yellow-100 2xl:max-w-screen-xl 2xl:mx-auto 2xl:rounded-l-5xl sm:px-6 lg:pr-0 sm:py-24 lg:py-0'>
        <div class='relative grid gap-12 lg:grid-cols-2 2xl:gap-4 lg:pr-10 2xl:pr-0'>
            <div class='relative grid order-2 w-full max-w-2xl grid-cols-2 gap-3 mx-auto lg:order-1 sm:gap-6 lg:py-32 lg:max-w-none'>
                <div class='col-span-2 transform aspect-w-3 aspect-h-2 2xl:-translate-x-16'>
                    <img src='{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'RESADO')->first()->image_1) }}' class='object-cover w-full h-full rounded-3xl 2xl:rounded-4xl' alt='résado 1'>
                </div>
            </div>
            <div class='flex flex-col justify-center order-1 lg:order-2 lg:py-36'>
                <div class='relative z-20 mx-auto prose prose-lg prose-light sm:prose-xl'>
                    <h2 class="text-5xl text-yellow-700">
                        Rés'Ado
                    </h2>
                    <p class='whitespace-pre-wrap text-purple-900'>{{ App\Models\Section::where('title', 'RESADO')->first()->description }}</p>
                    <div class="mt-12">
                        <span class='inline-block sm:px-4 sm:py-2 px-2 py-1 bg-purple-200 text-purple-700 font-semibold sm:text-lg text-sm rounded-full shadow-md -rotate-2'>
                            Numéro de téléphone pour les professionnels
                        </span>
                    </div>
                    <div class="flex items-center mt-4 h2 text-purple-700">
                        <svg class="w-12 h-12 mr-2" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M16 1H8C6.34 1 5 2.34 5 4v16c0 1.66 1.34 3 3 3h8c1.66 0 3-1.34 3-3V4c0-1.66-1.34-3-3-3zm-2.5 20h-3c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h3c.28 0 .5.22.5.5s-.22.5-.5.5zm3.5-3H7V4h10v14z" />
                        </svg>
                        03 81 53 97 66
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
