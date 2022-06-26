@props(['post'])

<article {{ $attributes->merge([
"class" => "transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl",
])}}>
    <div class="py-6 px-5 h-full flex flex-col">
        <div>
            <img src="{{ $post->image_url }}" alt="blog post illustration" class="rounded-xl">
        </div>

        <div class="mt-8 flex flex-col justify-between h-full">
            <header>
                <div class="space-x-2">
                    <x-category-label :category="$post->category"/>
                </div>

                <div class="mt-4">
                    <a href="{{ route("post", $post->slug) }}">
                        <h1 class="text-3xl">{{ $post->title }}</h1>
                    </a>

                    <span class="mt-2 block text-gray-400 text-xs">
                        published <time>{{$post->created_at->diffforHumans()}}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4">
                {!! $post->excerpt !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <x-author-label :author="$post->author"/>
                </div>

                <div class="hidden lg:block min-w-fit">
                    <a href="{{ route("post", $post->slug) }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full p-2"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
