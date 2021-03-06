<div class="relative lg:inline-flex bg-gray-100 rounded-xl">
    <x-posts-dropdown>
        <x-slot name="trigger">
            <button class="py-4 pl-6 pr-12 text-sm text-left font-semibold w-full lg:w-48  flex lg:inline-flex">
                {{ isset($selectedCategory) ? $selectedCategory->name : "Category" }}
                <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 16px;"/>
            </button>
        </x-slot>
        <x-slot name="links">
            <x-dropdown-item
                href="/posts?{{ http_build_query(request()->except('category', 'page', 'author')) }}"
                :active="!isset($selectedCategory)">
                All
            </x-dropdown-item>
            @foreach ( $categories as $category )
                <x-dropdown-item
                    href="?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
                    :active="$category->is($selectedCategory)">
                    {{ $category->name }}
                </x-dropdown-item>
            @endforeach
        </x-slot>
    </x-posts-dropdown>
</div>

<script>
    const categories_list = {{ Js::from($categories->map(fn($category) => $category->name)) }};
</script>
