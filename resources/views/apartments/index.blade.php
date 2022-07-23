<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('apartments') }}">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Apartments') }}
            </h2>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <ul>
                        @foreach ($apartments as $apartment)
                            <li class="p-4 bg-white border-b border-gray-200 grid grid-cols-10">
                                <div class="col-span-4 pr-4">
                                    <a href="{{ route('apartment', $apartment->id) }}">
                                        {{ $apartment->title }}
                                    </a>
                                </div>
                                <div class="col-span-1">
                                    {{ $apartment->floor }}/{{ $apartment->floors }} floor
                                </div>
                                <div class="col-span-1">
                                    {{ $apartment->area }} m2
                                </div>
                                <div class="col-span-1">
                                    {{ $apartment->rooms }} rooms
                                </div>
                                <div class="col-span-1">
                                    {{ $apartment->price }}
                                </div>
                                <div class="col-span-1">
                                    {{ $apartment->price }} €/Month
                                </div>
                                <div class="col-span-1">
                                    <a href="#">
                                        On Map
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div style="width: 100%; height: 500px;">
                        {!! Mapper::render() !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div>
</x-app-layout>
