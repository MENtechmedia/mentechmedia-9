
<?php
    $overrides = override_values($override ?? [], [
        'fontSize' => 'text-2xl sm:text-4xl',
        'fontWeight' => 'font-bold',
        'fontStyle' => '',
    ])->implode(' ');
?>

<{{$tag}} class=" {{ $overrides }} leading-tight {{$classString ?? ''}}">
{{$slot}}
</{{$tag}}>

