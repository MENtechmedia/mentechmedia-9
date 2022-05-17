<?php
    $overrides = override_values($override ?? [], [
        'fontSize' => 'text-3xl lg:text-4xl xl:text-5xl',
        'fontWeight' => 'font-bold',
        'fontStyle' => 'uppercase',
        'letterSpacing' => 'tracking-wide',
    ])->implode(' ');
?>

<{{$tag}} class=" {{ $overrides }} leading-tight {{$classString ?? ''}}">
    {{$slot}}
</{{$tag}}>