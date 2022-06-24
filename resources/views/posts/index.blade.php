<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('posts._header')

                    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
                        @if ($posts->isNotEmpty())
                            <x-posts-grid :posts="$posts"/>
                            {{ $posts->links() }}
                            <x-pagination />
                        @else
                            <p class="text-center">No posts yet. Please check back later.</p>
                        @endif
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
