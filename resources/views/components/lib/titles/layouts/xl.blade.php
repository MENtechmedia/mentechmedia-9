<?php
    $overrides = override_values($override ?? [], [
        'fontSize' => 'text-4xl sm:text-5xl lg:text-4xl xl:text-6xl'
    ])->implode(' ');
?>

<{{$tag}} class=" {{ $overrides }} leading-tight font-black {{$classString ?? ''}}">
    {{$slot}}
</{{$tag}}>