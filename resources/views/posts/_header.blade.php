<header class="max-w-xxl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span id="categories-swap" class="text-blue-500">Magento 2</span> Related Posts
    </h1>


    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-6">
        <!--  Category -->
        <x-category-dropdown/>
        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                @if ( request('category') )
                    <input type="hidden" name="category" value="{{ request('category') }}"/>
                @endif
                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm border-none focus:outline-none active:outline-none focus:border-none"
                       value="{{ request('search') }}">
            </form>
        </div>
    </div>
</header>
