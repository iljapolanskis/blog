@props(['active' => false])

@php
    $classes = "block text-sm leading-6 text-left px-3 font-semibold w-full hover:text-white focus:text-white hover:bg-blue-400 focus:bg-blue-400";
    if ($active) $classes .= " text-white bg-blue-400";
@endphp

<a {{ $attributes->merge([ "class" => $classes ]) }} >
    {{ $slot }}
</a>
