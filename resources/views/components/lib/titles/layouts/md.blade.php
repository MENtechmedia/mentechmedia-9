<?php
    $overrides = override_values($override ?? [], [
        'fontSize' => 'text-xl sm:text-2xl lg:text-xl xl:text-3xl',
        'fontWeight' => 'font-bold',
        'fontStyle' => '',
    ])->implode(' ');
?>

<{{$tag}} class=" {{ $overrides }} leading-tight {{$classString ?? ''}}">
{{$slot}}
</{{$tag}}>

