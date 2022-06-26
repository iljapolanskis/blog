<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="px-6 py-12">
                        <main class="max-w-6xl mx-auto space-y-6">
                            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                                    <img src="{{ $post->image_url }}" alt="" class="rounded-xl">

                                    <p class="mt-4 block text-gray-400 text-xs">
                                        Published
                                        <time>{{$post->created_at->diffForHumans()}}</time>
                                    </p>

                                    <div class="flex items-center lg:justify-center text-sm mt-4 text-left">
                                        <x-author-label :author="$post->author"/>
                                    </div>
                                </div>

                                <div class="col-span-8">
                                    <div class="hidden lg:flex justify-between mb-6">
                                        <a href="{{ route('posts') }}"
                                           class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                                <g fill="none" fill-rule="evenodd">
                                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5"
                                                          d="M21 1v20.16H.84V1z">
                                                    </path>
                                                    <path class="fill-current"
                                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                                    </path>
                                                </g>
                                            </svg>
                                            Back to Posts
                                        </a>

                                        <div class="space-x-2">
                                            <x-category-label :category="$post->category"/>
                                        </div>
                                    </div>

                                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">{{ $post->title }}</h1>

                                    <div class="space-y-4 lg:text-lg leading-loose">{!! $post->content !!}</div>
                                </div>
                                <!-- Comments -->
                                <section class="col-span-8 col-start-5 mt-10 space-y-6">
                                    @foreach ($post->comments as $comment)
                                        <x-post-comment :comment="$comment"/>
                                    @endforeach
                                </section>
                            </article>
                        </main>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


