@props(['tag','size'=>'base'])
@php
    $classes = "bg-white/10 rounded-xl  hover:bg-white/25 transition-colors  hover:border border-blue-800 duration-1000 font-bold ";
    if ($size=== 'base') {
        $classes .= 'px-5 py-1 text-sm';
    }
    if ($size==='small') {
        $classes .= 'px-2 py-1 text-2xs';
    }
@endphp
<a href="/tags/{{strtolower($tag->name)}}" class="{{$classes}}" href="">{{$tag->name}}</a>
