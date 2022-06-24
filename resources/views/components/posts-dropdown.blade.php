@props(['trigger', 'links'])

<div x-data="{ isOpen: false }" x-on:click.away="isOpen = false">
    {{-- Trigger --}}
    <div x-on:click="isOpen = !isOpen">    
        {{ $trigger }}
    </div>


    {{-- Links --}}
    <div x-show="isOpen"
        class="py-2 absolute w-full bg-gray-100 mt-2 rounded-xl z-50 overflow-auto max-h-52" 
        style="display: none">
        {{ $links }}
    </div>                        
</div>
