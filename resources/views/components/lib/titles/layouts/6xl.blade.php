<?php
$overrides = override_values($override ?? [], [
    'fontSize' => 'text-3xl sm:text-5xl md:text-6xl',
    'fontWeight' => 'font-bold',
    'fontStyle' => 'uppercase',
    'letterSpacing' => 'tracking-wide',
])->implode(' ');
?>

<{{$tag}} class=" {{ $overrides }} leading-tight {{$classString ?? ''}}">
{{$slot}}
</{{$tag}}>