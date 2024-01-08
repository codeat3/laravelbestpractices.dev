<x-layout>

    <h3
        class="mt-1 text-2xl font-bold text-left text-gray-800 sm:mx-6 sm:text-3xl md:text-4xl lg:text-5xl sm:text-center sm:mx-0">
        Best Laravel Practices Resources</h3>

    @foreach ($resources as $resource)
        <div class="w-full px-6 py-6 mx-auto mt-10 bg-white border border-gray-200 rounded-lg sm:px-8 md:px-12 sm:py-8 sm:shadow lg:w-5/6 xl:w-2/3"
            data-rounded="rounded-lg" data-rounded-max="rounded-full">
            <h3 class="text-lg font-bold text-purple-500 sm:text-xl md:text-2xl" data-primary="purple-500">
                <div class="flex">
                    <a class="hover:underline" href="{{ $resource->link }}">
                        {{ $resource->title }}
                    </a>
                    <div class="bg-purple-500 flex items-center mx-3 px-3 py-0 leading-none rounded-lg font-medium text-xs uppercase text-white inline-block tails-selected-element"
                        contenteditable="true">
                        <span class="">{{ $resource->type }}</span>
                    </div>
                </div>


            </h3>
            <div class="text-gray-600">
                by <a class="underline italic font-bold text-gray-400 hover:text-gray-800"
                    href="{{ $resource->author_url }}">{{ $resource->author }}</a>
            </div>

        </div>
    @endforeach



</x-layout>
