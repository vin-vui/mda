<div class='basis-2/3 px-4 py-4 sm:px-6 lg:px-8 rounded-3xl'>
    <div class='mx-auto'>
        <div class='flex flex-col justify-center'>
            <h3 class='-rotate-1 max-w-xl  text-purple-50 justify-center md:text-2xl text-xl -mt-8 bg-purple-600 rounded-2xl py-3 shadow-md flex items-center'>
                <svg class="mr-2 w-5 md:w-8 h-5 md:h-8" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 15 15"><path fill="currentColor" d="M5.5 7A2.5 2.5 0 0 1 3 4.5v-2a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v2a3.49 3.49 0 0 0 1.51 2.87A4.41 4.41 0 0 1 5 10.5a3.5 3.5 0 1 0 7 0v-.57a2 2 0 1 0-1 0v.57a2.5 2.5 0 0 1-5 0a4.41 4.41 0 0 1 1.5-3.13A3.49 3.49 0 0 0 9 4.5v-2A1.5 1.5 0 0 0 7.5 1H7a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v2A2.5 2.5 0 0 1 5.5 7m6 2a1 1 0 1 1 0-2a1 1 0 0 1 0 2z"/></svg>
                Consultations spécialisées
            </h3>
            <p class="whitespace-pre-wrap py-6 text-lg leading-loose">{{ App\Models\Section::where('title', 'VALUES')->first()->description }}</p>
        </div>
    </div>
</div>
<div class="basis-1/3 lg:m-10 m-6 pb-6 lg:pb-0">
    <img class='object-cover h-full rounded-3xl' src='{{ Storage::disk('uploads')->url(App\Models\Section::where('title', 'VALUES')->first()->image_1) }}' alt='About team 1'>
</div>
