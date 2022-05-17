<?php
    $overrides = override_values($override ?? [], [
        'fontSize' => 'text-xl sm:text-2xl',
    ])->implode(' ');
?>

<{{$tag}} class="{{$overrides}} {{$classString ?? ''}}">{{$slot}}</{{$tag}}>