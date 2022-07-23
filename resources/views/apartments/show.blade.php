<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('apartments') }}">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $apartment->title }}
            </h2>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                {!! $apartment->description !!}
                {{ $apartment->images }}
            </div>
            <div class="p-6 bg-white border-b border-gray-200 grid grid-cols-9">
                @foreach($apartment->listOfImages() as $image)
                    <img class="col-span-3" src="{{ $image }}" alt="">
                @endforeach
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div style="width: 100%; height: 500px;">
                        {!! Mapper::render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
