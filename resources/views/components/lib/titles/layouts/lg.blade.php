<?php
$overrides = override_values($override ?? [], [
    'fontSize' => 'text-2xl sm:text-3xl lg:text-2xl xl:text-4xl'
])->implode(' ');
?>

<{{$tag}} class=" {{ $overrides }} leading-tight font-black {{$classString ?? ''}}">
    {{$slot}}
</{{$tag}}>