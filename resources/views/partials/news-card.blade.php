@php
switch ($seminar->tag) {
case 'atelier ados':
$tag_color = 'bg-yellow-400';
$bg_color = 'bg-yellow-50';
break;
case 'atelier parents':
$tag_color = 'bg-blue-200';
$bg_color = 'bg-blue-50';
break;
case 'atelier ados/parents':
$tag_color = 'bg-teal-200';
$bg_color = 'bg-teal-50';
break;
}
@endphp
<div class='w-full {{ $bg_color }} rounded-2xl xl:mb-0 mb-8'>
    <div class="">
        <div class="flex">
            <div class="mb-2 flex-shrink-0 sm:mb-0 -translate-x-6 -translate-y-6">
                <div class='h-48 w-48 bg-cover bg-center bg-no-repeat sm:col-span-4 rounded-2xl' style="background-image: url('{{ Storage::disk('uploads')->url($seminar->image) }}');">
                </div>
            </div>
            <div class='flex flex-col justify-start h-full -translate-x-4 md:-translate-x-0 py-8 sm:col-span-8 sm:py-10 sm:px-3 lg:px-2 xl:px-3'>
                <div class="flex flex-col justify-start items-start">
                    <div class="inline-flex capitalize items-center justify-center px-3.5 py-0.5 text-md -rotate-2 {{ $tag_color }} text-purple-700 font-semibold leading-6 align-top rounded-xl">
                        {{ $seminar->tag }}
                    </div>
                    <div class="flex items-center justify-center px-3.5 py-0.5 text-sm -rotate-1  align-top rounded-xl mt-2">
                        <span class="inline-block px-2 py-1 relative bg-rose-100 text-purple-700 font-medium leading-6" style="border-radius: 91% 9% 90% 10% / 29% 82% 18% 71%">{{ $seminar->date }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-6 pb-6">
            <h4 class='text-2xl font-bold text-purple-900 xl:text-3xl lg:text-2xl sm:text-3xl lg:leading-tight xl:leading-tight'>
                {{ $seminar->title }}
            </h4>
            <p class='mt-1 text-purple-800 lg:mt-2 whitespace-pre-wrap'>{{ $seminar->description }}</p>
        </div>
    </div>
</div>
